<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حكينا</title>
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

    .profile-btn {
        background-color: #2e8b57;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        border: none;
    }

    .main-content {
        display: flex;
        margin: 2rem;
        gap: 2rem;
        justify-content: center;
    }

    .link {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #ddd;
    }

    .link a {
        text-decoration: none;
        color: #333;
        font-weight: bold;

    }

    .link a:hover {
        color: #36333a;
        text-decoration: underline;
    }

    .stories {
        display: flex;
        gap: 4rem;
        max-width: 1200px;
        align-items: center;
    }

    .story-cards-container {
        position: relative;
        padding: 0 2rem;
    }

    .dashed-lines {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        pointer-events: none;
    }

    .dashed-line-left {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        border-left: 2px dashed #816d5d;
    }

    .dashed-line-right {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        border-right: 2px dashed #816d5d;
    }

    .story-cards {
        width: 300px;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        position: relative;
    }

    .p {
        background-color: #f9e6d3;
        padding: 1rem;
        border-radius: 8px;
        direction: rtl;
        line-height: 1.6;
    }

    .story-actions {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .story-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .story-actions button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1.5rem;
        color: #8b4513;
    }

    .scroll-arrows {
        position: absolute;
        left: -3rem;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 1rem;
        color: #816d5d;
        z-index: 1;
    }

    .image-section {
        width: 500px;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .circular-image {
        width: 100%;
        height: 100%;
        margin-bottom: 130px;

    }

    .story-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        background-repeat: no-repeat;
        background-position: center;
        /* border-radius: 50%; */
        background-size: cover;
    }

    .side-arrows {
        color: #ccc;
        font-size: 2rem;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .search-profile {
        margin-left: 20px;
    }

    .search-box {
        text-align: right;
        border: 1px solid #ccc;
        border-radius: 20px;
        padding: 5px 15px;
        width: 200px;
        outline: none;
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
            <div class="stories">
                <div class="side-arrows">
                    ◀
                </div>

                <div class="story-cards-container">
                    <div class="dashed-lines">
                        <div class="dashed-line-left"></div>
                        <div class="dashed-line-right"></div>
                    </div>

                    <div class="story-cards">
                        <nav class="link">
                            <a href="#">Bookmarks</a>
                            <a href="#">Ur story</a>
                            <a href="rely.html">Reply &likes</a>
                        </nav>
                        <div class="p">
                            <p>لما فتحت وظيفتي الأولى في مركز جديد، كنت متوتر جدا من المشتغلين. خصوصاً الأطباء والعاملين
                                من
                                المستشفى. لكن قررت المواجهة عندما شعرت بأنني لست لائقاً بالعمل. مهارات جديدة في البرمجة
                                عن
                                طريق الانترنت...</p>
                            <div class="story-actions">
                                <button>❤️</button>
                                <button>🔁</button>
                                <button>🔖</button>
                            </div>
                        </div>
                        <div class="p">
                            <p>بعد مضي خمس اعوام اللقاء الأسبوعية كانت تحدث، بدأت الوقت ممارسات إنسانية واستخدم تطبيقات
                                لمناسبة. يوماً بعد يوم إلى أن دقيقة. البداية كانت صعبة وحسيت إلى أن تقدمت. بعد مضي ٥
                                اشهر
                                قررت التعلم جعل مستقبلي وردي للمساعد وتواصلت مع الناس. هناك التجربة علمتي أن الاستمرارية
                                هي
                                المفتاح في نجاح.</p>
                            <div class="story-actions">
                                <button>❤️</button>
                                <button>🔁</button>
                                <button>🔖</button>
                            </div>
                        </div>
                        <div class="p">
                            <p>دائم كنت اكتب اللقاء قدام الناس، لكن هذا المرة في شعوري ما كان عندي خيار إلا المواجهة.
                                جهزت
                                نفسي وطلبت من اصدقائي يساعدوني بالتدريب قدامهم. في العرض كنت متوتر جداً لكن قدمت بشكل
                                مقبول.
                                بعدها تصلحت في قرارات لتحسين مهارات التحدث. واليوم اقدر اتكلم بثقة قدام أي جمهور.</p>
                            <div class="story-actions">
                                <button>❤️</button>
                                <button>🔁</button>
                                <button>🔖</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-section">
                    <div class="circular-image">
                        <img src="img.png" alt="Story illustration" class="story-image">
                    </div>
                </div>
                <div class="side-arrows">
                    ▶
                </div>
            </div>
        </main>
</body>

</html>