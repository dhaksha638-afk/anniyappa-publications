<!DOCTYPE html>
<html>
<head>
<title>Book Catalog</title>
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

.card-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.card {
    background-color: white;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 4px;
    margin-bottom: 10px;
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
    <h2>Book Catalog</h2>

    <div class="card-grid">

        <!-- Book 1 -->
<div class="card">
    <img src="images/book1.jpg">
    <h3>PHP Programming</h3>
    <p>Author: John Smith</p>
    <p>Price: Rs. 350</p>
    <p>Category: Programming</p>
</div>

<!-- Book 2 -->
<div class="card">
    <img src="images/book2.jpg">
    <h3>Web Development</h3>
    <p>Author: Sarah Jones</p>
    <p>Price: Rs. 450</p>
    <p>Category: Web</p>
</div>

<!-- Book 3 -->
<div class="card">
    <img src="images/book3.jpg">
    <h3>Database Management</h3>
    <p>Author: Mike Brown</p>
    <p>Price: Rs. 400</p>
    <p>Category: Database</p>
</div>

<!-- Book 4 -->
<div class="card">
    <img src="images/book4.jpg">
    <h3>Python Basics</h3>
    <p>Author: Lisa Ray</p>
    <p>Price: Rs. 300</p>
    <p>Category: Programming</p>
</div>

<!-- Book 5 -->
<div class="card">
    <img src="images/book5.jpg">
    <h3>Machine Learning</h3>
    <p>Author: David Lee</p>
    <p>Price: Rs. 500</p>
    <p>Category: AI/ML</p>
</div>

<!-- Book 6 -->
<div class="card">
    <img src="images/book6.jpg">
    <h3>Java Programming</h3>
    <p>Author: Anna White</p>
    <p>Price: Rs. 380</p>
    <p>Category: Programming</p>
</div>

    </div>
</div>

<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>