<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
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

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f9f9f9;
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

.uploaded-img {
    width: 100%;
    margin-top: 15px;
    border-radius: 8px;
    border: 1px solid #ccc;
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
    <h2>File Upload</h2>

<?php
if(isset($_POST['submit'])){
    $uploader  = $_POST['uploader'];
    $file      = $_FILES['file'];
    $filename  = $file['name'];
    $filesize  = $file['size'];
    $filetype  = $file['type'];
    $filetmp   = $file['tmp_name'];
    $filepath  = "uploads/" . $filename;

    $allowed = array("jpg", "jpeg", "png", "pdf", "doc", "docx");
    $ext     = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $allowed)){
        echo "<div class='error'>
                <p>File type not allowed!</p>
                <p>Allowed: jpg, jpeg, png, pdf, doc, docx</p>
              </div>";

    } elseif($filesize > 2000000){
        echo "<div class='error'>
                <p>File too large! Max size is 2MB.</p>
              </div>";

    } else {
        if(!is_dir("uploads")){
            mkdir("uploads");
        }

        move_uploaded_file($filetmp, $filepath);

        echo "<div class='success'>
                <p>File Uploaded Successfully!</p>
                <p>Uploaded by: $uploader</p>
                <p>File Name: $filename</p>
                <p>File Size: " . round($filesize/1024) . " KB</p>
                <p>File Type: $filetype</p>
              </div>";

        if(in_array($ext, array("jpg", "jpeg", "png"))){
            echo "<img src='$filepath' class='uploaded-img'>";
        }
    }
}
?>

    <form method="post" enctype="multipart/form-data">

        <label>Your Name:</label>
        <input type="text" name="uploader" placeholder="Enter your name">

        <label>Choose File:</label>
        <input type="file" name="file">

        <input type="submit" name="submit" value="Upload File">

    </form>
</div>

<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>