<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

nav {
    background-color: #333;
    padding: 15px;
    text-align: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-size: 16px;
}

nav a:hover {
    color: #ffcc00;
}

.container {
    width: 35%;
    margin: 50px auto;
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #555;
}

.success {
    background-color: #eaf4ea;
    border-left: 4px solid green;
    padding: 10px;
    margin-bottom: 15px;
    color: green;
}

.error {
    background-color: #fdecea;
    border-left: 4px solid red;
    padding: 10px;
    margin-bottom: 15px;
    color: red;
}

.remember {
    margin-bottom: 15px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
}

@media (max-width: 768px) {
    .container {
        width: 90%;
    }
}
</style>
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="books.php">Books</a>
    <a href="internship.php">Internship</a>
    <a href="contact.php">Contact</a>
    <a href="faculty.php">Faculty</a>
    <a href="login.php">Login</a>
</nav>

<div class="container">
    <h2>Login</h2>

<?php
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234"){
        $_SESSION['user'] = $username;
        $_SESSION['loggedin'] = true;

        if(isset($_POST['remember'])){
            setcookie("remembered_user", $username, time() + (7 * 24 * 60 * 60));
        } else {
            setcookie("remembered_user", "", time() - 3600);
        }

        echo "<div class='success'>
                <p>Welcome " . $_SESSION['user'] . "!</p>
                <p>You are now logged in.</p>
                <a href='?logout=true'>Logout</a>
              </div>";

    } else {
        echo "<div class='error'>
                <p>Invalid Username or Password!</p>
              </div>";
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    setcookie("remembered_user", "", time() - 3600);
    echo "<div class='success'><p>Logged Out Successfully!</p></div>";
}
?>

<?php if(!isset($_SESSION['loggedin']) && !isset($_GET['logout'])){ ?>

    <form method="post">

        <label>Username:</label>
        <input type="text" name="username" 
        value="<?php echo isset($_COOKIE['remembered_user']) ? $_COOKIE['remembered_user'] : ''; ?>">

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter password">

        <div class="remember">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <input type="submit" name="submit" value="Login">

    </form>

<?php } ?>

</div>

<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>