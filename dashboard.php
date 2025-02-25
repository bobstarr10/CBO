<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <main>
        <div class="dashboard-container">
            <a href="events.php" class="dashboard-item">Manage Events</a>
            <a href="donate.php" class="dashboard-item">Manage Donations</a>
            <a href="contact.php" class="dashboard-item">View Messages</a>
            <a href="logout.php" class="dashboard-item logout">Logout</a>
        </div>
    </main>
</body>
</html>
