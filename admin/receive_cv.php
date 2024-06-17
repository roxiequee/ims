<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_database";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, filename, type FROM uploads"; // Correct table name
$result = $conn->query($sql);

echo "
    <style>
        table {
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            max-width: 80%;
            max-height: 80%;
            overflow: auto;
        }
        .modal-content img {
            max-width: 90%;
            max-height: 90vh;
        }
    </style>
    <table border='1' align='center' bgcolor='yellow'>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Filename</th>
            <th>Action</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['type']}</td>
                <td><a href='#' class='file-link' data-filename='{$row['filename']}'>".$row['filename']."</a></td>
                <td><a href='deletee1.php?namba={$row['id']}'>Delete</a></td>
              </tr>";
    }
} else {
    echo "<tr>
            <td colspan='4'>No results found</td>
          </tr>";
}

echo "</table>";

$conn->close();
?>

<div id='modal' class='modal'>
    <div class='modal-content'>
        <span id='close-modal'>&times;</span>
        <img id='modal-image' src='' alt='Image' />
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('modal');
        var modalImage = document.getElementById('modal-image');
        var closeModal = document.getElementById('close-modal');
        var fileLinks = document.querySelectorAll('.file-link');

        fileLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var filename = link.getAttribute('data-filename');
                modalImage.src = 'uploaded_pdfs/' + filename;
                modal.style.display = 'flex';
            });
        });

        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });
</script>
