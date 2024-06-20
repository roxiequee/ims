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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form label {
            color: #1a1aff;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        form input[type="text"],
        form input[type="number"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form input[type="submit"] {
            background-color: #1a1aff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        form input[type="submit"]:hover {
            background-color: #0000e6;
        }
    </style>
    <title>Edit Record</title>
</head>
<body>
    <form method="POST" action="edit1.php?namba=<?php echo htmlspecialchars($id); ?>" autocomplete="off">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" value="<?php echo htmlspecialchars($row['id']); ?>" readonly><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>"><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>"><br>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" value="<?php echo htmlspecialchars($row['role']); ?>"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
$conn->close();
?>