<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/images.jpg" type="image/x-icon">
    <link rel="stylesheet" href="fonts.css">
    <title>Contact List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, #B8860b, #000);
        }
        aside li a:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body class="text-white">

    <!-- Sidebar Navigation -->
    <div class="flex">
        <aside class="w-64 bg-blue-900 min-h-screen p-6">
            <h2 class="text-2xl font-bold mb-9">Dashboard</h2>
            <ul>
                <li class="mt-3"><a href="dashboard.php" class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Home</a></li>
                <li class="mt-6"><a href="mission.php" class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Mission</a></li>
                <li class="mt-6"><a href="vision.php" class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Vision</a></li>
                <li class="mt-6"><a href="contacts.php" class="transition duration-300 ease-in-out hover:bg-yellow-700 text-xl block rounded">Contact</a></li>
                <li class="mt-6"><a href="logout.php" class="transition duration-300 ease-in-out hover:bg-red-600 text-xl block rounded">Logout</a></li>
            </ul>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 p-8">
            <h2 class="text-2xl font-bold mb-6">Contact List</h2>
            
            <!-- Contact List Table -->
            <div class="overflow-x-auto">
                <table class="w-full bg-white text-gray-900 rounded-lg shadow-lg border border-gray-200">
                    <thead class="bg-gray-500 text-white">
                        <tr>
                            <th class="py-4 px-6 text-left">Name</th>
                            <th class="py-4 px-6 text-left">Phone Number</th>
                            <th class="py-4 px-6 text-left">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-4 px-6">John Doe</td>
                            <td class="py-4 px-6">+1 234 567 890</td>
                            <td class="py-4 px-6">johndoe@example.com</td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-4 px-6">Jane Smith</td>
                            <td class="py-4 px-6">+1 987 654 321</td>
                            <td class="py-4 px-6">janesmith@example.com</td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-4 px-6">Mark Wilson</td>
                            <td class="py-4 px-6">+1 555 123 456</td>
                            <td class="py-4 px-6">markwilson@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
