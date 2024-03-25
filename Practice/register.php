<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>

    <form action="includes/register.inc.php" method="post">
        <input type="text" name="username" placeholder="Username..."/>
        <input type="text" name="pwd" placeholder="Password..."/>
        <input type="text" name="email" placeholder="E-mail..."/>
        <button>Signup</button>
    </form>
</body>
</html>