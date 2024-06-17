const localVideo = document.getElementById('localVideo');
const remoteVideo = document.getElementById('remoteVideo');

// Function to start local video
function startLocalVideo() {
    navigator.mediaDevices.getUserMedia({ video: true, audio: true })
        .then(stream => {
            localVideo.srcObject = stream;
        })
        .catch(error => {
            console.error('Error accessing media devices:', error);
        });
}

// Function to start remote video
function startRemoteVideo() {
    // In a real scenario, you would have a signaling server to exchange
    // SDP (Session Description Protocol) between peers.
    // For simplicity, we'll use a demo signaling server provided by Google.
    const configuration = { iceServers: [{ urls: 'stun:stun.l.google.com:19302' }] };
    const peerConnection = new RTCPeerConnection(configuration);

    // Add local stream to peer connection
    localVideo.srcObject.getTracks().forEach(track => {
        peerConnection.addTrack(track, localVideo.srcObject);
    });

    // Event handler to receive remote stream
    peerConnection.ontrack = event => {
        remoteVideo.srcObject = event.streams[0];
    };

    // Create an offer to start the peer connection
    peerConnection.createOffer()
        .then(offer => peerConnection.setLocalDescription(offer))
        .then(() => {
            // In a real scenario, you would send the offer to the remote peer
            // through the signaling server. For simplicity, we'll log it here.
            console.log('Offer created:', peerConnection.localDescription);
        })
        .catch(error => {
            console.error('Error creating offer:', error);
        });
}

// Call functions to start local and remote video
startLocalVideo();
startRemoteVideo();
