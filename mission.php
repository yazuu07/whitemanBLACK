<?php
session_start();

// Restrict access to only admins
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

require 'db.php';

// Fetch users from the database
try {
    $stmt = $pdo->query("SELECT id, user, email, role, contact_number FROM admin1");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// Handle user deletion
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_user_id'])) {
    $deleteUserId = $_POST['delete_user_id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM admin1 WHERE id = ?");
        $stmt->execute([$deleteUserId]);
        header("Location: dashboard.php");
        exit();
    } catch (PDOException $e) {
        die("Error deleting user: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="fonts.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
    background: linear-gradient(to right,rgb(144, 105, 6),rgb(0, 0, 0)); /* Gradient background */
    padding: 1.5rem;
    height: 100vh;
        }
        aside li a:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-stone-900 h-screen p-6 text-white fixed left-0 top-0">
            <h2 class="text-2xl font-bold mb-6">Admin Dashboard</h2>
            <nav>
                <ul>
                    <li class="py-3"><a href="dashboard.php"class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Home</a></li>
                    <li class="py-3"><a href="mission.php"class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Our Mission</a></li>
                    <li class="py-3"><a href="vision.php"class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Our Vision</a></li>
                    <li class="py-3"><a href="goal.php"class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Our Goal</a></li>
                    <li class="py-3"><a href="logout.php" class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Logout</a></li>
                </ul>
            </nav>
        </aside>

      
        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="max-w-4xl mx-auto text-center bg-white text-gray-900 p-10 rounded-lg shadow-lg">
                <h1 class="text-4xl font-bold text-stone-900 mb-6">Our Mission</h1>
                <p class="text-lg leading-relaxed">
                    "Our mission at <span class="font-semibold"><a class="transition duration-300 ease-in-out hover:bg-yellow-800 text-xl rounded" href="https://www.facebook.com/systechintegration">Systech Integration & Security Solutions, Inc.</a></span> is to inspire and empower individuals and businesses by 
                    delivering <span class="text-yellow-600 font-semibold">exceptional solutions</span> that drive innovation, efficiency, and sustainability. 
                    We are committed to <span class="text-yellow-600 font-semibold">excellence</span>, fostering a culture of creativity, and maintaining the 
                    highest standards of <span class="text-yellow-600 font-semibold">integrity</span>. Through collaboration and 
                    <span class="text-yellow-600 font-semibold">cutting-edge technology</span>, we aim to make a lasting impact, ensuring a brighter future for generations to come."
                </p>
            </div>
        </main>
    </div>
</body>
</html>
