<!DOCTYPE html>
<html>
<head>
<title>Anniyappa Publications</title>
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

/* Navigation Bar */
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

/* Header / Banner */
.header {
    background-color: #1a1a2e;
    color: white;
    text-align: center;
    padding: 50px 20px;
}

.header h1 {
    font-size: 36px;
    margin-bottom: 10px;
}

.header p {
    font-size: 18px;
    color: #aaa;
}

/* Cards Section */
.container {
    width: 90%;
    margin: 30px auto;
}

.container h2 {
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

.card h3 {
    margin-bottom: 10px;
    color: #333;
}

.card p {
    color: #777;
    font-size: 14px;
    margin-bottom: 15px;
}

.card a {
    background-color: #333;
    color: white;
    padding: 8px 15px;
    text-decoration: none;
    border-radius: 4px;
    font-size: 14px;
}

.card a:hover {
    background-color: #555;
}

/* Footer */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
}

/* Responsive */
@media (max-width: 768px) {
    .card-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .card-grid {
        grid-template-columns: 1fr;
    }
    nav a {
        display: block;
        margin: 5px 0;
    }
}
</style>
</head>
<body>

<!-- Navigation -->
<nav>
    <a href="index.php">Home</a>
    <a href="books.php">Books</a>
    <a href="internship.php">Internship</a>
    <a href="contact.php">Contact</a>
    <a href="faculty.php">Faculty</a>
    <a href="login.php">Login</a>
</nav>

<!-- Header Banner -->
<div class="header">
    <h1>Anniyappa Publications</h1>
    <p>Your trusted source for books and internships</p>
</div>

<!-- Cards Section -->
<div class="container">
    <h2>Our Features</h2>
    <div class="card-grid">

        <div class="card">
            <h3>Book Catalog</h3>
            <p>Browse our collection of books</p>
            <a href="books.php">View Books</a>
        </div>

        <div class="card">
            <h3>Internship</h3>
            <p>Register for our internship programs</p>
            <a href="internship.php">Register</a>
        </div>

        <div class="card">
            <h3>Contact Us</h3>
            <p>Get in touch with us</p>
            <a href="contact.php">Contact</a>
        </div>

        <div class="card">
            <h3>Faculty Profile</h3>
            <p>Meet our trainers and faculty</p>
            <a href="faculty.php">View Faculty</a>
        </div>

        <div class="card">
            <h3>Login</h3>
            <p>Access your account</p>
            <a href="login.php">Login</a>
        </div>

        <div class="card">
            <h3>Upload</h3>
            <p>Upload your documents</p>
            <a href="upload.php">Upload</a>
        </div>

    </div>
</div>

<!-- Footer -->
<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>