<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .container h1 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
            color: grey;
            margin-bottom: 20px;
        }
        
        .container input[type="text"],
        .container input[type="password"] {
            width: 93%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <form class="login" action="admin.php" method="post">
    <h1>LOGIN</h1>
    <input type="text" placeholder="Username" name="username" required>
    <input type="password" placeholder="Pasword" name="password" required>
    <input type="text" placeholder="Email" name="email" required>
    <input type="submit" value="Login" name="submit">
    </form>
</div>
</body>
</html>
