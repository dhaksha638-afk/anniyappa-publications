<!DOCTYPE html>
<html>
<head>
<title>Database Connectivity</title>
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
    width: 60%;
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
input[type="number"] {
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

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th {
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: left;
}

table td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
    color: #333;
}

table tr:hover {
    background-color: #f0f0f0;
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
    <h2>Database Connectivity</h2>

<?php

// Step 1 - Connect to database
$conn = mysqli_connect("localhost", "root", "", "anniyappa_db");

// Step 2 - Check connection
if(!$conn){
    echo "<div class='error'>Connection Failed: " . mysqli_connect_error() . "</div>";
} else {
    echo "<div class='success'>Database Connected Successfully!</div>";
}

// Step 3 - Insert data from form
if(isset($_POST['submit'])){
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $course = $_POST['course'];

    $query = "INSERT INTO students (name, email, phone, course)
              VALUES ('$name', '$email', '$phone', '$course')";

    if(mysqli_query($conn, $query)){
        echo "<div class='success'>Student Added Successfully!</div>";
    } else {
        echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
    }
}

?>

    <form method="post">

        <label>Student Name:</label>
        <input type="text" name="name" placeholder="Enter name">

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter email">

        <label>Phone:</label>
        <input type="number" name="phone" placeholder="Enter phone">

        <label>Course:</label>
        <input type="text" name="course" placeholder="Enter course">

        <input type="submit" name="submit" value="Add Student">

    </form>

<?php

// Step 4 - Show all students from database
$result = mysqli_query($conn, "SELECT * FROM students");

if(mysqli_num_rows($result) > 0){
    echo "<h3 style='margin-top:20px;margin-bottom:10px;color:#333;'>All Students:</h3>";
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
            </tr>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['course'] . "</td>
              </tr>";
    }

    echo "</table>";
}

mysqli_close($conn);
?>

</div>

<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>