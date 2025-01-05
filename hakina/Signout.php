<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakeena - Logout</title>
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
        padding: 15px 20px;
    }

    header img {
        width: 90px;
        height: auto;
        margin-right: 15px;
        /* دفع الصورة لليمين */
    }

    header .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #8b4513;
    }

    header nav {
        display: flex;
        gap: 15px;
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
        text-align: right;
        border: 1px solid #ccc;
        border-radius: 20px;
        padding: 5px 15px;
        width: 200px;
        outline: none;
        margin-left: 10px;
        /* دفع خانة البحث لليسار */
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
    .main-content {
        flex: 1;
        padding: 20px;
        margin-left: 220px;
        text-align: center;
        margin-top: 70px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: calc(100vh - 70px);
    }

    .main-content h2 {
        font-size: 1.5rem;
        color: #8b4513;
        margin-bottom: 20px;
        text-align: left;
    }

    .main-content .message-container {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 15px;
        margin-bottom: 30px;
    }

    .main-content .message-container img {
        width: 50px;
        height: 50px;
        object-fit: cover;
    }

    .main-content .action-buttons {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 30px;
    }

    .main-content .action-buttons button {
        background-color: #008b8b;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1rem;
        cursor: pointer;
        width: 120px;
    }

    .main-content .action-buttons button:hover {
        background-color: #006f6f;
    }

    .main-content .action-buttons .no-button {
        background-color: #008b8b;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1rem;
        cursor: pointer;
        width: 120px;
    }

    .main-content .action-buttons .no-button:hover {
        background-color: #006f6f;
    }
    </style>
</head>

<body>
    <header>
        <img src="logo.png" alt="Hakeena Image">
        <nav>
            <a href="index.php">Home</a>
            <a href="Explorer.php">Explorer</a>
            <a href="page2.php">About</a>
        </nav>
        <input class="search-box" type="text" placeholder="Search...">
    </header>
    <div class="container">
        <aside class="sidebar">
            <div class="top-menu">
                <ul>
                    <li><a href="#">📱 Device</a></li>
                    <li><a href="#">📷 Camera</a></li>
                    <li><a href="#">🔖 Saved</a></li>
                </ul>
            </div>
            <div class="center-menu">
                <ul>
                    <li><a href="#">👤 My Profile</a></li>
                    <li><a href="#">⚙️ Settings</a></li>
                    <li><a href="#">🚪 Sign Out</a></li>
                </ul>
            </div>
            <div class="bottom-menu">
                <ul>
                    <li><a href="#">❓ Help</a></li>
                </ul>
            </div>
        </aside>
        <main class="main-content">
            <div class="message-container">
                <img src="signout.png" alt="Logout Icon">
                <h2>Are you sure you want to sign out?</h2>
            </div>
            <div class="action-buttons">
                <form method="POST" action="logout_process.php">
                    <button type="submit" name="confirm" value="Yes">Yes</button>
                </form>
                <button class="no-button" onclick="window.history.back();">No</button>
            </div>
        </main>
    </div>
</body>

</html>