<!DOCTYPE html>
<html lang="en">

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
        /* لون الخلفية البيج */
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
        /* ثبات الهيدر في أعلى الصفحة */
    }

    header img {
        width: 90px;
        height: auto;
        transform: translateX(50px);
        /* تحريك اللوغو */
    }

    header .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #8b4513;
        /* لون النص البني */
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
        /* لون الأزرق عند التمرير */
    }

    .search-box {
        border: 1px solid #ccc;
        border-radius: 20px;
        padding: 5px 15px;
        width: 150px;
        outline: none;
        transform: translateX(-35px);
        /* تعديل موضع الصندوق */
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
        /* قائمة جانبية ثابتة */
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

    .camera-logo {
        width: 70px;
        height: auto;
        text-align: center;
        cursor: pointer;
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

    .settings-section {
        margin-bottom: 30px;
    }

    .settings-section label {
        font-size: 1rem;
        color: #333;
        display: block;
        margin-bottom: 10px;
    }

    .settings-section select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .save-button {
        background-color: #008b8b;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1rem;
        cursor: pointer;
        display: block;
        margin-top: 20px;
    }

    .save-button:hover {
        background-color: #006f6f;
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
            <!-- المحتوى الأساسي -->
            <div class="logo">
                <img src="photo-camera.png" alt="Camera Logo" class="camera-logo">
                <h2>Camera</h2>
            </div>
            <!-- عنوان القسم -->
            <div class="settings-section">
                <label for="access-section">Select access:</label>
                <!-- تحديد اللغة -->
                <select id="access-section" name="access-section">
                    <option value="en">Access</option>
                    <option value="ar">None</option>
                    <option value="fr">Limited Access</option>
                    <option value="es">Full Access</option>
                </select>
            </div>
            <button class="save-button">Save Changes</button>
            <p class="info-text">Photo may contain data associated with location, depth information, caption, and audio.
            </p>
        </main>
</body>

</html>