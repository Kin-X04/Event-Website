<?php
header('Content-Type: application/json');

// Read raw POST data (for debugging)
$postData = json_encode($_POST, JSON_PRETTY_PRINT);
error_log("Received Data: " . $postData); // Log to server for debugging

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $phone = isset($_POST["phone"]) ? trim($_POST["phone"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $subject = isset($_POST["subject"]) ? trim($_POST["subject"]) : "No Subject";
    $message = isset($_POST["message"]) ? trim($_POST["message"]) : "";

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "Please fill in all required fields."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    echo json_encode(["status" => "success", "message" => "Message received successfully!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
