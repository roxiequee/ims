<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['namba'])) {
    $id = $_GET['namba'];

    echo $id;

    // Fetch current data
    $sql = "SELECT id, username, password, role, email FROM interviewer_table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
        die("No data found for ID " . htmlspecialchars($id));
    }

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $email = $_POST['email'];

        // Update data in the database
        $update_sql = "UPDATE interviewer_table SET username=?, password=?, role=?, email=? WHERE id=?";
        $update_stmt = $conn->prepare($update_sql);
        
        if ($update_stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        
        $update_stmt->bind_param("ssssi", $username, $password, $role, $email, $id);

        if ($update_stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $update_stmt->close();
    }

    $stmt->close();
} else {
    die("No ID specified");
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        form {
            background-color: grey;
            margin-left: 4%;
            padding: 20%;
        }
    </style>
    <title>Edit Record</title>
</head>
<body>
    <form method="POST" action="edit1.php?namba=<?php echo htmlspecialchars($id); ?>" autocomplete="off">
        <label for="id">ID:</label><br>
        <input type="number" id="id" name="id" value="<?php echo htmlspecialchars($row['id']); ?>" readonly><br><br>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>"><br><br>

        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>"><br><br>

        <label for="role">Role:</label><br>
        <input type="text" id="role" name="role" value="<?php echo htmlspecialchars($row['role']); ?>"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
$conn->close();
?>