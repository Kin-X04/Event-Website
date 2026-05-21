<?php
$host = "192.168.16.1";
$port = "5432";
$dbname = "tyb5";
$user = "tyb5";
$password = "025465";

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        $sql = "INSERT INTO consultations (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
        $stmt = $conn->prepare($sql);

        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':message' => $message
        ]);

        echo "Thank you! Your message has been received.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
