<!DOCTYPE html>
<html>
<head>
    <title>Sidebar</title>
    <style>
        /* Sidebar styles */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        /* Sidebar links */
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
        }

        /* Change link color on hover */
        .sidebar a:hover {
            background-color: #444;
        }

        /* Main content styles (to shift it away from the sidebar) */
        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to My Website</h1>
        <p>This is the main content area of the page.</p>
    </div>
</body>
</html>
