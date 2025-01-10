<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiding Words</title>
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
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 20;
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
            position: fixed;
            top: 60px;
            left: 0;
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

        .hiding-words {
            font-size: 24px;
            color: #6A4F3D;
            text-align: center;
            margin-top: 40px;
        }

        .input-container {
            text-align: center;
            margin-top: 50px;
        }

        .input-container input {
            padding: 10px;
            width: 250px;
            margin-bottom: 10px;
            font-size: 16px;
            border-radius: 10px;
            border: 1px solid #D9CBB8;
        }

        .input-container button {
            padding: 10px 20px;
            background-color: #6A4F3D;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .input-container button:hover {
            background-color: #8B5A2A;
        }

        .page-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .page-title h1 {
            font-size: 30px;
            color: #8b4513;
            margin-left: -700px; /* تحريك لليسار */
            margin-top: -20px;  /* رفع العنوان للأعلى */


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
        <div class="page-title">
            <h1>Hiding Words</h1>
        </div>

        <div class="hiding-words">
            <p>Content that involves hiding certain words or information will go here. Enter words you want to hide below:</p>
        </div>

        <div class="input-container">
            <input type="text" id="word1" placeholder="Enter word 1">
            <br>
            <input type="text" id="word2" placeholder="Enter word 2">
            <br>
            <input type="text" id="word3" placeholder="Enter word 3">
            <br><br>
            <button onclick="submitWords()">Submit</button>
        </div>
    </div>

    <script>
        function submitWords() {
            const word1 = document.getElementById('word1').value;
            const word2 = document.getElementById('word2').value;
            const word3 = document.getElementById('word3').value;

            alert('Words hidden: ' + word1 + ', ' + word2 + ', ' + word3);
        }
    </script>
</body>

</html>


