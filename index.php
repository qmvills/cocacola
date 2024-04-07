<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="./css/style.css">
</head>
<body>
    <div class = "background">
    <img src="images/background1.png" alt="Italian Trulli">
    </div>

    <div class = "container">
        <div class ="logo">
            <img src="images/white logo.png" alt="Italian Trulli">
        </div>
        <h1>Management System</h1>
            <form method = "POST">
                <label>Username</label>
                <input class= "login" type="text" name = "username" required></br>
                <label>Password</label>
                <input class= "login" type="password" name = "password" required></br>
                <div class="loginbtn">
                <a href="./cashier/cashier.php">Login</a>
                </div>
                <div class="adminbtn">
                <a href="./admin/admin.php">Login as Admin</a>
                </div>
            </form>
    </div>

    <script src="./js/app.js"></script>
    
</body>
</html>