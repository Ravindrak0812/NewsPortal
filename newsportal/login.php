<?php
// Database configuration
$servername = "localhost:3308";
$username = "root"; 
$password = ""; 
$dbname = "testdb"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); 

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

     
        if (password_verify($password, $row['password'])) {
          
            $_SESSION['user'] = $row['name']; 
            header("Location: index.php");
            exit();
        } else {
        
            $message = "Invalid email or password!";
        }
    } else {
     
        $message = "No user found with this email!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
           
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-custom {
            background: linear-gradient(90deg, #4CAF50, #81C784);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            transition: background 0.3s, transform 0.3s;
        }
        .btn-custom:hover {
            background: linear-gradient(90deg, #45a049, #66BB6A);
            transform: translateY(-2px);
        }
        .btn-link {
            background-color: pink;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
            display: block;
            margin-top: 10px;
        }
        .btn-link:hover {
            background-color: #ff69b4; 
            color: white;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: none;
        }
        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }
        .message {
            text-align: center;
            color: red;
            margin-bottom: 15px;
        }
        label {
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

     
        <div class="message">
            <?php if (!empty($message)) echo $message; ?>
        </div>

        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-custom btn-block">Login</button>
            <a href="/newsportal/newsportal/signup.php" class="btn btn-link btn-block">Don't have an account? Signup</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
