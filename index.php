<?php
// Start session
session_start();

// Check if user is logged in
if(isset($_SESSION['role'])) {
    $role = $_SESSION['role'];
} else {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartKids Hub</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="admin-styles.css"> <!-- Additional CSS for administrators -->
</head>
<body>
    <header>
        <!-- Header content -->
        <h1>SmartKids<span style="color: #6C63FF;">Hub</span></h1>
        <img src="logoimage.jpg" alt="Logo">
        <nav>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Main content -->
        <?php if(isset($_SESSION['role'])): ?>
            <?php $role = $_SESSION['role']; ?>
            <section class="features">
                <?php if($role == 'admin'): ?>
                    <!-- Admin content -->
                    <article id="admin" class="toggle-article" onclick="toggleVisibility('admin')">
                        <h4>For Administrators</h4>
                        <ul>
                            <li><a href="admin.html">Manage Courses</a></li>
                            <li><a href="admin.html">Create Quizzes</a></li>
                            <li><a href="admin.html">User Management</a></li>
                        </ul>
                    </article>
                <?php elseif($role == 'teacher'): ?>
                    <!-- Teacher content -->
                    <article id="teacher" class="toggle-article" onclick="toggleVisibility('teacher')">
                        <h4>For Teachers</h4>
                        <ul>
                            <li><a href="lessons.html">Engaging Lessons</a></li>
                            <li><a href="interactive-games.html">Interactive Games</a></li>
                            <li><a href="progress.html">Student Progress Tracking</a></li>
                        </ul>
                    </article>
                <?php elseif($role == 'parents'): ?>
                    <!-- Parents content -->
                    <article id="parents" class="toggle-article" onclick="toggleVisibility('parents')">
                        <h4>For Parents</h4>
                        <ul>
                            <li><a href="monitor-learning.html">Monitor Child's Learning</a></li>
                            <li><a href="engage-teachers.html">Engage with Teachers</a></li>
                            <li><a href="parent-collaboration.html">Parent-Teacher Collaboration</a></li>
                        </ul>
                    </article>
                <?php elseif($role == 'students'): ?>
                    <!-- Students content -->
                    <article id="students" class="toggle-article" onclick="toggleVisibility('students')">
                        <h4>For Students</h4>
                        <ul>
                            <li><a href="fun-learning-activities.html">Fun Learning Activities</a></li>
                            <li><a href="exciting-challenges.html">Exciting Challenges</a></li>
                            <li><a href="rewards-and-achievements.html">Rewards and Achievements</a></li>
                        </ul>
                    </article>
                <?php endif; ?>
            </section>
        <?php else: ?>
            <!-- Redirect user to login page if not logged in -->
            <?php header("Location: login.html"); ?>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 SparkleLearn. All rights reserved.</p>
        <nav>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>
    </footer>

    <script src="script.js"></script> <!-- Link to your JavaScript file -->
</body>
</html>
