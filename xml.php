<!DOCTYPE html>
<html>
<head>
<title>XML Data Exchange</title>
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
    width: 90%;
    margin: 30px auto;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.xml-box {
    background-color: #1a1a2e;
    color: #00ff00;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-family: monospace;
    font-size: 14px;
    white-space: pre;
}

.card-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.card {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.card h3 {
    margin-bottom: 8px;
    color: #333;
}

.card p {
    color: #777;
    font-size: 14px;
    margin-bottom: 5px;
}

.badge {
    display: inline-block;
    background-color: #333;
    color: white;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    margin-top: 8px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
}

@media (max-width: 768px) {
    .card-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .card-grid {
        grid-template-columns: 1fr;
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
    <h2>XML Based Data Exchange</h2>

<?php

// Step 1 - Create XML data
$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<books>
    <book>
        <title>PHP Programming</title>
        <author>John Smith</author>
        <price>350</price>
        <category>Programming</category>
    </book>
    <book>
        <title>Web Development</title>
        <author>Sarah Jones</author>
        <price>450</price>
        <category>Web</category>
    </book>
    <book>
        <title>Python Basics</title>
        <author>Lisa Ray</author>
        <price>300</price>
        <category>Programming</category>
    </book>
    <book>
        <title>Machine Learning</title>
        <author>David Lee</author>
        <price>500</price>
        <category>AI/ML</category>
    </book>
    <book>
        <title>Database Management</title>
        <author>Mike Brown</author>
        <price>400</price>
        <category>Database</category>
    </book>
    <book>
        <title>Java Programming</title>
        <author>Anna White</author>
        <price>380</price>
        <category>Programming</category>
    </book>
</books>';

// Step 2 - Show raw XML
echo "<h3 style='margin-bottom:10px;color:#333;'>Raw XML Data:</h3>";
echo "<div class='xml-box'>" . htmlspecialchars($xmldata) . "</div>";

// Step 3 - Parse XML
$xml = simplexml_load_string($xmldata);

// Step 4 - Display as cards
echo "<h3 style='margin-bottom:15px;color:#333;'>Parsed Data:</h3>";
echo "<div class='card-grid'>";

foreach($xml->book as $book){
    echo "<div class='card'>
            <h3>" . $book->title . "</h3>
            <p>Author: " . $book->author . "</p>
            <p>Price: Rs. " . $book->price . "</p>
            <span class='badge'>" . $book->category . "</span>
          </div>";
}

echo "</div>";
?>

</div>

<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>