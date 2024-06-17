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

$sql = "SELECT id, username, password, role, email, image FROM interviewee_table";
$result = $conn->query($sql);

echo "
    <style>
        table {
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }
        .thumbnail {
            width: 60px; /* Adjust size of image thumbnail */
            height: 60px;
            cursor: pointer; /* Pointer to indicate clickable image */
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
        }
        .modal-content img {
            max-width: 90%;
            max-height: 90vh;
        }
    </style>
    <table border='1' align='center' bgcolor='yellow'>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Image</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
            <th>Update</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['password']}</td>
                <td>{$row['email']}</td>
                <td><img src='uploaded_img/{$row['image']}' alt='Image' class='thumbnail' onclick='showModal(\"uploaded_img/{$row['image']}\")'></td>
                <td>{$row['role']}</td>
                <td><a href='deletee1.php?namba={$row['id']}'>Delete</a></td>
                <td><a href='edit.php?namba={$row['id']}'>Update</a></td>
              </tr>";
    }
} else {
    echo "<tr>
            <td colspan='9'>No results found</td>
          </tr>";
}

echo "</table>";

echo "
    <div class='modal' id='modal'>
        <div class='modal-content'>
            <span class='close' onclick='closeModal()'>&times;</span>
            <img id='modal-image' src='' alt='Image'>
        </div>
    </div>";

$conn->close();
?>
<script>
    function showModal(imagePath) {
        var modal = document.getElementById('modal');
        var modalImage = document.getElementById('modal-image');
        modalImage.src = imagePath;
        modal.style.display = 'flex';
    }

    function closeModal() {
        var modal = document.getElementById('modal');
        modal.style.display = 'none';
    }
</script>
