<?php
// Database connection
$host = "192.168.16.1";
$port = "5432";
$dbname = "tyb5"; // Ensure this matches your PostgreSQL database name
$user = "tyb5";  // Change to your PostgreSQL username
$password = "025465"; // Change to your PostgreSQL password

try {
    // Create a new PDO connection for PostgreSQL
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Validate if all fields are received
    if (isset($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message'])) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        // Validate phone number (must be exactly 10 digits)
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            echo "Invalid phone number!";
            exit;
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format!";
            exit;
        }

        // Prepare and execute the SQL query
        $stmt = $conn->prepare("INSERT INTO contact (name, phone, email, message) VALUES (:name, :phone, :email, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            echo "success"; // The frontend will handle this response
        } else {
            echo "Error in form submission.";
        }
    } else {
        echo "Missing fields!";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
