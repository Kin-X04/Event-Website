<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = pg_query($conn, $query);
    $user = pg_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name']; // Store name for display
        header("Location: modified home.php");
        exit; // Ensure redirect happens properly
    } else {
        echo "<script>alert('Invalid email or password!'); window.location.href='login.php';</script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | XYZ Garage</title>
    <style>
       /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;900&display=swap');*/

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f8f8;
            color: #f8f8f8;
            overflow: hidden;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.96);
            padding: 40px;
            width: 400px;
            box-shadow: 0px 0px 15px rgba(255, 94, 0, 0.6);
            border-radius: 12px;
            text-align: center;
            backdrop-filter: blur(10px);
            animation: fadeIn 1.2s ease-in-out;
            position: relative;
        }

        h1 {
            font-size: 36px;
            font-weight: 900;
            color:rgb(10, 10, 10);
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 14px;
            margin: 12px 0;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            background: #222;
            color: white;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            background: #333;
            border-left: 4px solid #ffb400;
        }

        button {
            width: 100%;
            padding: 14px;
            font-size: 18px;
            font-weight: 700;
            border-radius: 8px;
            background: linear-gradient(90deg,rgb(0, 106, 255),rgb(0, 166, 255));
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: linear-gradient(90deg, rgb(0, 106, 255), rgb(0, 166, 255));
        }

        .home-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            color: white;
            font-size: 18px;
            text-decoration: none;
            font-weight: 700;
            transition: 0.3s;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 12px;
            border-radius: 8px;
        }

        .home-btn:hover {
            color: #ffb400;
            background: rgba(255, 255, 255, 0.3);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <a href="index.php" class="home-btn">Home</a>

    <div class="login-container">
        <h1>Login</h1>
        <form method="POST">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
