<?php
$host = "192.168.16.1";
$port = "5432";
$dbname = "tyb5";
$user = "tyb5";
$password = "025465";

try {
    // Establish a database connection
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and retrieve form data
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Prepare the SQL query
        $sql = "INSERT INTO consultations (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
        $stmt = $conn->prepare($sql);

        // Execute the query with the form data
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':message' => $message
        ]);

        // Return "success" if the insertion is successful
        echo "success";
    } else {
        // Handle non-POST requests
        echo "Invalid request method.";
    }
} catch (PDOException $e) {
    // Log the error and return a generic error message
    error_log("Database error: " . $e->getMessage());
    echo "error";
}
?>
