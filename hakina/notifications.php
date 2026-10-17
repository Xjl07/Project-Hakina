<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/db.php';
$conn = hakina_db();

// استعلام لجلب الإشعارات
$sql = "SELECT * FROM notifications";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حكينا</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
    /* نسخ نفس التنسيقات الموجودة */
    /* General */
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #f3e4d1;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        background-color: #faf5ef;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 20;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
    }

    header img {
        width: 90px;
        height: auto;
        margin-right: 15px;
        transform: translateX(50px);
    }

    header .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #8b4513;
    }

    header nav {
        display: flex;
        gap: 60px;
    }


    header nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    header nav a:hover {
        color: #007BFF;
    }

    .search-box {
        border: 1px solid #ccc;
        border-radius: 20px;
        padding: 5px 15px;
        width: 150px;
        outline: none;
        transform: translateX(-35px);
    }

    .sidebar {
        width: 200px;
        background-color: #faf5ef;
        padding: 20px 10px;
        height: 100vh;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        position: fixed;
        left: 0;
        top: 60px;
        text-align: center;
    }

    .sidebar .top-menu {
        margin-top: 70px;
    }

    .sidebar .center-menu {
        margin-top: 90px;
    }

    .sidebar .bottom-menu {
        margin-top: 100px;
        margin-bottom: 20px;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar ul li {
        margin-bottom: 20px;
    }

    .sidebar ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .sidebar ul li a:hover {
        color: #007BFF;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        margin-left: 220px;
        margin-top: 70px;
    }

    .main-content h2 {
        font-size: 1.5rem;
        color: #8b4513;
        margin-bottom: 20px;
    }

    .notification {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 15px;
        padding: 15px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .notification img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
    }

    .notification-content {
        text-align: left;
    }

    .notification-content p {
        margin: 0;
        font-size: 0.9rem;
        color: #333;
    }

    .notification-content span {
        font-size: 0.8rem;
        color: #888;
    }
    </style>
</head>

<body>
    <header>
        <img src="logo.png" alt="Hakeena Image">
        <nav>
            <a href="index.php">Home</a>
            <a href="explore.php">Explorer</a>
            <a href="page2.php">About</a>
            <a href="#">Bookmarks</a>
            <a href="#">Your story</a>
            <a href="rely.php">Reply & Likes</a>
        </nav>
        <input class="search-box" type="text" placeholder="Search...">
    </header>

    <div class="container">
        <aside class="sidebar">
            <div class="top-menu">
                <ul>
                    <li><a href="#">📱 Device</a></li>
                    <li><a href="camera.php">📷 Camera</a></li>
                    <li><a href="#">🔖 Saved</a></li>
                </ul>
            </div>
            <div class="center-menu">
                <ul>
                    <li><a href="#">👤 My Profile</a></li>
                    <li><a href="sattings.php">⚙️ Settings</a></li>
                    <li><a href="Signout.php">🚪 Sign Out</a></li>
                </ul>
            </div>
            <div class="bottom-menu">
                <ul>
                    <li><a href="#">❓ Help</a></li>
                </ul>
            </div>
        </aside>

        <main class="main-content">
            <h2>Notifications</h2>
            <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
            <div class="notification">
                <?php
                // تحديد الصورة بناءً على userID
                $userID = $row['userID'];
                $avatarPath = '';

                // منطق لاختيار الصورة بناءً على userID
                if ($userID == 1) {
                    $avatarPath = 'avatar1.jpg';
                } elseif ($userID == 2) {
                    $avatarPath = 'avatar2.jpg';
                } elseif ($userID == 3) {
                    $avatarPath = 'avatar3.jpg';
                } elseif ($userID == 4) {
                    $avatarPath = 'avatar4.jpg';
                } else {
                    // إذا كان الـ userID غير معرف يمكن وضع صورة افتراضية
                    $avatarPath = 'hakina/avatar1.jpg';
                }
                ?>
                <img src="avatar3.jpg" alt="User Icon">
                <div class="notification-content">
                    <p><strong>User <?php echo (int) $row['userID']; ?></strong> <?php echo e($row['massage']); ?></p>
                    <span><?php echo ($row['isRead'] ? 'Read' : 'Unread'); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <p>No notifications available.</p>
            <?php endif; ?>
        </main>
    </div>

</body>

</html>
