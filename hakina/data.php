<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data & Time</title>
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
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
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
        .header h1 {
             color: #8b4513;
             font-size: 24px;
             margin-left: -700px;  /* لتحريك العنوان لليسار */
             margin-top: -10px;   /* لتحريك العنوان للأعلى */


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
    </style>
</head>
<body>
    <!-- الهيدر -->
    <header>
        <img src="log.jpg" alt="Hakeena Image">
        <nav>
            <a href="index.php">Home</a>
            <a href="Explorer.php">Explorer</a>
            <a href="page2.php">About</a>
            <a href="settings.php">settings</a>
        </nav>
        <input class="search-box" type="text" placeholder="Search...">
    </header>

    <!-- القائمة الجانبية -->
    <aside class="sidebar">
        <ul>
            <li><a href="#">📱 Device</a></li>
            <li><a href="#">📷 Camera</a></li>
            <li><a href="#">🔖 Saved</a></li>
        </ul>
        <ul>
            <li><a href="#">👤 My Profile</a></li>
            <li><a href="#">⚙️ Settings</a></li>
            <li><a href="#">🚪 Sign Out</a></li>
        </ul>
        <div class="bottom-menu">
            <ul>
                <li><a href="#">❓ Help</a></li>
            </ul>
        </div>
    </aside>

    <!-- محتوى الصفحة -->
    <div class="content">
        <div class="header">
            <h1>Data & Time</h1>
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
    </div>

    <script>
        let timeFormat = 24; // Default 24-hour format

        // Get the current date and time
        function updateDateTime() {
            const now = new Date();
            const date = now.toLocaleDateString('en-US', {
                weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
            });
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            let timeString = '';

            if (timeFormat === 12) {
                const period = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12 || 12; // Convert 24-hour time to 12-hour format
                timeString = `${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds} ${period}`;
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
