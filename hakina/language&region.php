<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- هذي بداية الصفحة وتحديد نوع المستند واللغة والاتجاه -->

<head>
    <!-- بداية الراس الخاص بالصفحة -->
    <meta charset="UTF-8">
    <!-- تحديد نوع الترميز للصفحة UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ضبط العرض حسب حجم الجهاز -->
    <title>حكينا</title>
    <!-- عنوان الصفحة -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- رابط لاستيراد خط Poppins -->
    <style>
    /* هذا قسم التنسيقات */

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

    /* المحتوى الأساسي */
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
<!-- نهاية الراس -->

<body>
    <header>
        <!-- بداية الهيدر -->
        <img src="logo.png" alt="Hakeena Image">
        <!-- صورة شعار -->
        <nav>
            <a href="index.php">Home</a>
            <a href="explore.php">Explorer</a>
            <a href="page2.php">About</a>
            <a href="#">Bookmarks</a>
            <a href="#">Your story</a>
            <a href="rely.php">Reply & Likes</a>
        </nav>
        <input class="search-box" type="text" placeholder="Search...">
        <!-- صندوق البحث -->
    </header>
    <div class="container">
        <!-- حاوية المحتوى -->
        <aside class="sidebar">
            <!-- القائمة الجانبية -->
            <div class="top-menu">
                <ul>
                    <li><a href="#">📱 Device</a></li>
                    <!-- رابط للأجهزة -->
                    <li><a href="camera.php">📷 Camera</a></li>
                    <!-- رابط للكاميرا -->
                    <li><a href="#">🔖 Saved</a></li>
                    <!-- رابط للعناصر المحفوظة -->
                </ul>
            </div>
            <div class="center-menu">
                <ul>
                    <li><a href="#">👤 My Profile</a></li>
                    <!-- رابط للملف الشخصي -->
                    <li><a href="sattings.php">⚙️ Settings</a></li>
                    <!-- رابط الإعدادات -->
                    <li><a href="Signout.php">🚪 Sign Out</a></li>
                    <!-- رابط تسجيل الخروج -->
                </ul>
            </div>
            <div class="bottom-menu">
                <ul>
                    <li><a href="#">❓ Help</a></li>
                    <!-- رابط المساعدة -->
                </ul>
            </div>
        </aside>
        <main class="main-content">
            <!-- المحتوى الأساسي -->
            <h2>Language & Region</h2>
            <!-- عنوان القسم -->
            <div class="settings-section">
                <label for="language">Select Language:</label>
                <!-- تحديد اللغة -->
                <select id="language" name="language">
                    <option value="en">English</option>
                    <option value="ar">Arabic</option>
                    <option value="fr">French</option>
                    <option value="es">Spanish</option>
                </select>
            </div>
            <div class="settings-section">
                <label for="region">Select Region:</label>
                <!-- تحديد المنطقة -->
                <select id="region" name="region">
                    <option value="us">United States</option>
                    <option value="sa">Saudi Arabia</option>
                    <option value="fr">France</option>
                    <option value="es">Spain</option>
                </select>
            </div>
            <button class="save-button">Save Changes</button>
            <!-- زر الحفظ -->
        </main>
    </div>
</body>
<!-- نهاية الصفحة -->

</html>