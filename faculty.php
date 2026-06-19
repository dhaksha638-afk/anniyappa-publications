<!DOCTYPE html>
<html>
<head>
<title>Faculty Profile</title>
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
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
    border: 3px solid #333;
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
    <h2>Faculty / Trainer Profiles</h2>

    <div class="card-grid">

        <!-- Faculty 1 -->
<div class="card">
    <img src="images/faculty1.jpg">
    <h3>Mr. Rajesh Kumar</h3>
    <p>Experience: 10 Years</p>
    <p>Qualification: M.Tech</p>
    <p>Email: rajesh@anniyappa.com</p>
    <span class="badge">PHP & Web Dev</span>
</div>

<!-- Faculty 2 -->
<div class="card">
    <img src="images/faculty2.jpg">
    <h3>Mrs. Priya Sharma</h3>
    <p>Experience: 8 Years</p>
    <p>Qualification: MCA</p>
    <p>Email: priya@anniyappa.com</p>
    <span class="badge">Python & ML</span>
</div>

<!-- Faculty 3 -->
<div class="card">
    <img src="images/faculty3.jpg">
    <h3>Mr. Arun Prakash</h3>
    <p>Experience: 12 Years</p>
    <p>Qualification: M.Sc CS</p>
    <p>Email: arun@anniyappa.com</p>
    <span class="badge">Java & DSA</span>
</div>

<!-- Faculty 4 -->
<div class="card">
    <img src="images/faculty4.jpg">
    <h3>Mrs. Deepa Nair</h3>
    <p>Experience: 6 Years</p>
    <p>Qualification: MBA</p>
    <p>Email: deepa@anniyappa.com</p>
    <span class="badge">Data Science</span>
</div>

<!-- Faculty 5 -->
<div class="card">
    <img src="images/faculty5.jpg">
    <h3>Mr. Suresh Babu</h3>
    <p>Experience: 15 Years</p>
    <p>Qualification: Ph.D</p>
    <p>Email: suresh@anniyappa.com</p>
    <span class="badge">AI & Research</span>
</div>

<!-- Faculty 6 -->
<div class="card">
    <img src="images/faculty6.jpg">
    <h3>Mrs. Kavitha Rajan</h3>
    <p>Experience: 9 Years</p>
    <p>Qualification: M.Tech</p>
    <p>Email: kavitha@anniyappa.com</p>
    <span class="badge">Database & SQL</span>
</div>

    </div>
</div>

<footer>
    <p>Anniyappa Publications &copy; 2024. All rights reserved.</p>
</footer>

</body>
</html>