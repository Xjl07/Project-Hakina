<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data & Time</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
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

    /* Main content */
    .content {
        margin-left: 220px;
        padding: 120px 40px 40px;
    }

    .header {
        text-align: center;
        margin-bottom: 40px;
    }

    .header h2 {
        font-size: 1.5rem;
        color: #8b4513;
        margin-bottom: 20px;
    }

    .date-time {
        font-size: 24px;
        color: #6A4F3D;
        text-align: center;
    }

    .time-format {
        text-align: center;
        margin-top: 20px;
    }

    .time-format label {
        margin-bottom: 30px;
    }

    .time-format select {
        font-size: 1rem;
        color: #333;
        display: block;
        margin-bottom: 10px;
    }

    .time-format select {
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
        <!-- محتوى الصفحة -->
        <div class="content">
            <div class="header">
                <h2>Data & Time</h2>
            </div>
            <div class="date-time">
                <p id="current-date-time"></p>
            </div>
            <div class="time-format">
                <label for="time-format-select">Select Time Format: </label>
                <select id="time-format-select">
                    <option value="12">12-hour</option>
                    <option value="24">24-hour</option>
                </select>
            </div>
            <button class="save-button">Save Changes</button>
        </div>
        <script>
        let timeFormat = 24;





        // Default 24-hour format
        // Get the current date and time
        function updateDateTime() {
            const now = new Date();
            const date = now.toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            let timeString = '';
            if (timeFormat === 12) {
                const period = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12 || 12; // Convert 24-hour time to 12-hour format
                timeString =
                    `${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds} ${period}`;
            } else {
                timeString = `${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            }
            document.getElementById("current-date-time").textContent = `${date} | ${timeString}`;
        }
        document.getElementById('time-format-select').addEventListener('change', function() {
            timeFormat = parseInt(this.value, 10);
        });
        setInterval(updateDateTime, 1000); // Update every second
        updateDateTime(); // Initial update
        </script>
</body>

</html>