<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Page</title>
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

    /* Sidebar */
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

    /* Heading style for saved items */
    .saved-items-title {
        color: #8b4513;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .saved-items {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        justify-items: center;
        align-items: center;
        margin-top: 100px;
    }

    .saved-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #FDF6EB;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #D9CBB8;
        color: #6A4F3D;
        font-size: 16px;
        width: 150px;
        height: 150px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .saved-item img {
        width: 150px;
        height: 100px;
        margin-bottom: 10px;
        border-radius: 10px
    }

    .saved-item span {
        font-weight: bold;
        text-align: center;
    }

    .saved-item p {
        font-size: 14px;
        /* حجم النص */
        color: #6A4F3D;
        /* لون النص */
        text-align: center;
        /* محاذاة النص إلى المنتصف */
        margin: 10px 0 0;
        /* التحكم في المسافة العلوية والسفلية */
        font-weight: bold;
        /* جعل النص عريضًا */
    }
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
            <div class="content">
                <div class="saved-items-title">
                    Saved Items
                </div>
                <div class="saved-items">
                    <!-- المستطيل الأول -->
                    <div class="saved-item">
                        <img src="ork.jpg" alt="Image Icon">
                        <p>يونيو 2025</p>
                    </div>
                    <!-- المستطيل الثاني -->
                    <div class="saved-item">
                        <img src="see.jpg" alt="Image Icon">
                        <p> يناير 2025</p>
                    </div>
                    <!-- المستطيل الثالث: إضافة الفيديو -->
                    <div class="saved-item">
                        <video width="140" height="100" controls>
                            <source src="mos.MP4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p> يناير 2025</p>
                    </div>
        </main>
    </div>
    </div>