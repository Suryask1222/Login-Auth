<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - My Authentication System</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>
        <div class="nav-container">
            <a href="dashboard.php" class="logo">My Authentication System</a>
            <a href="logout.php" class="logout-btn">Log Out</a>
        </div>
    </header>

    <main class="dashboard-container">
        
        <section class="welcome-card">
            <h1>Welcome Back, <?php echo htmlspecialchars($user_name); ?>!</h1>
            
            <div class="profile-grid">
                <div class="profile-card">
                    <span>Full Name</span>
                    <p><?php echo htmlspecialchars($user_name); ?></p>
                </div>
                
                <div class="profile-card">
                    <span>Email Address</span>
                    <p><?php echo htmlspecialchars($user_email); ?></p>
                </div>
                
                <div class="profile-card">
                    <span>Login Status</span>
                    <div>
                        <span class="status-badge">Active Session</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="table-section">
            <h2>User Administration (Practice Table)</h2>
            <p style="color: #64748B; font-size: 14px; margin-bottom: 15px;">
                This table shows static, hardcoded data for learning and styling purposes.
            </p>
            
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td><span class="role-badge role-admin">Admin</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td><span class="role-badge role-manager">Manager</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Alex Johnson</td>
                            <td><span class="role-badge">Employee</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Emma Wilson</td>
                            <td><span class="role-badge">Employee</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Michael Brown</td>
                            <td><span class="role-badge">User</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

</body>
</html>
