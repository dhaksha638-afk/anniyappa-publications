<!DOCTYPE html>
<html>
<head>
<title>Internship Registration</title>
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
    width: 50%;
    margin: 30px auto;
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
input[type="email"],
input[type="number"],
select,
textarea {
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
    <h2>Internship Registration</h2>

    <?php
    if(isset($_POST['submit'])){
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $college  = $_POST['college'];
        $course   = $_POST['course'];
        $domain   = $_POST['domain'];
        $message  = $_POST['message'];

        echo "<div class='success'>
                <p>Registration Successful!</p>
                <p>Name: $name</p>
                <p>Email: $email</p>
                <p>Phone: $phone</p>
                <p>College: $college</p>
                <p>Course: $course</p>
                <p>Domain: $domain</p>
                <p>Message: $message</p>
              </div>";
    }
    ?>

    <form method="post">

        <label>Full Name:</label>
        <input type="text" name="name" placeholder="Enter your name">

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email">

        <label>Phone Number:</label>
        <input type="number" name="phone" placeholder="Enter your phone number">

        <label>College Name:</label>
        <input type="text" name="college" placeholder="Enter your college name">

        <label>Course:</label>
        <input type="text" name="course" placeholder="Enter your course">

        <label>Internship Domain:</label>
        <select name="domain">
            <option value="Web Development">Web Development</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Data Science">Data Science</option>
        </select>

        <label>Message:</label>
        <textarea name="message" rows="4" placeholder="Write something..."></textarea>

        <input type="submit" name="submit" value="Register">

    </form>
</div>

<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>