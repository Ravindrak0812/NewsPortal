<?php
$servername = "localhost:3308";
$username = "root"; 
$password = ""; 
$dbname = "testdb"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

   
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
      
        header("Location: login.php"); 
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
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
        label {
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-custom btn-block">Signup</button>
            <a href="/newsportal/newsportal/login.php" class="btn btn-link btn-block">Already have an account? Login</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
