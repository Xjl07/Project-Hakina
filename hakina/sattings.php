<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حكينا</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
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
        /* عدلي القيمة حسب الحاجة */
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

    /* Main content */
    .content {
        margin-left: 220px;
        padding: 120px 40px 40px;
    }

    .header {
        display: flex;
        align-items: center;
        background-color: #FDF6EB;
        padding: 5px 5px;
        border-radius: 20px;
        border: 1px solid #D9CBB8;
        margin-bottom: 40px;
        width: 230px;
        position: relative;
        left: 100px;
    }

    .header img {
        width: 70px;
        height: 70px;
        position: absolute;
        left: -80px;
        top: 50%;
        transform: translateY(-50%);
    }

    .header h1 {
        color: #6A4F3D;
        font-size: 20px;
        margin-left: 40px;
    }

    .settings-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 0xp;
        gap: 20px;
        /* المسافة بين المستطيلات */
        justify-items: center;
        /* محاذاة العناصر أفقياً في المنتصف */
        align-items: center;
        /* محاذاة العناصر رأسياً في المنتصف */
    }

    .settings-item {
        text-decoration: none;
        display: grid;
        align-items: center;
        justify-content: center;
        background-color: #FDF6EB;
        padding: 3px;
        border-radius: 20px;
        border: 1px solid #D9CBB8;
        color: #6A4F3D;
        font-size: 16px;
        cursor: pointer;
        position: relative;
        width: 150px;
        margin: 3px auto;
    }

    .settings-item img {
        width: 40px;
        /* تعديل العرض */
        height: 45px;
        /* تعديل الارتفاع */
        position: absolute;
        left: -50px;
        /* تحديد مكان الصورة بالنسبة للمستطيل */
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
                    <li><a href="saved.php">🔖 Saved</a></li>
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
            <!-- محتوى الصفحة -->
            <div class="content">
                <div class="header">
                    <img src="stt.jpg" alt="Settings Icon">
                    <h1>Settings & Activity</h1>
                </div>
                <div class="settings-grid">
                    <!-- Account & Privacy -->
                    <a href="language&amp;region.php" class="settings-item">
                        <img src="prv.png" alt="Account Icon">
                        <span>Account & Privacy</span>
                    </a>

                    <!-- Comment -->
                    <a href="rely.php" class="settings-item">
                        <img src="comment.png" alt="Comment Icon">
                        <span>Comment</span>
                    </a>

                    <!-- Language & Region -->
                    <a href="language&region.php" class="settings-item">
                        <img src="lang.png" alt="Language Icon">
                        <span>Language&Region</span>
                    </a>

                    <!-- Hiding Words -->
                    <a href="hiding.php" class="settings-item">
                        <img src="hiding.png" alt="Hiding Words Icon">
                        <span>Hiding Words</span>
                    </a>

                    <!-- Data & Time -->
                    <a href="data.php" class="settings-item">
                        <img src="time.png" alt="Time Icon">
                        <span>Data & Time</span>
                    </a>

                    <!-- Notifications -->
                    <a href="notifications.php" class="settings-item">
                        <img src="notifi.png" alt="Notification Icon">
                        <span>Notifications</span>
                    </a>
                </div>
            </div>

    </div>
    </div>
</body>

</html>
