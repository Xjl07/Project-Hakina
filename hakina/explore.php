<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حكينا</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
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
        transform: translateX(50px);
        /* دفع الصورة لليمين */
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

    .main-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-left: 220px;
        margin-top: 80px;
        padding: 20px;
    }

    .story-section {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 20px;
    }

    .story-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .story-card p {
        font-size: 1rem;
        margin-bottom: 15px;
        color: #333;
    }

    .story-actions {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .story-actions button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1.5rem;
        color: #8b4513;
    }

    .gallery-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 80%;
        text-align: center;
        margin-bottom: 20px;
    }

    .gallery-card h3 {
        margin-bottom: 15px;
        font-size: 1.2rem;
        color: #8b4513;
    }

    .gallery-grid {
        display: flex;
        gap: 10px;
        justify-content: center;
    }

    .gallery-grid img {
        width: 150px;
        height: 150px;
        border-radius: 10px;
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
            <section class="story-section">
                <div class="story-card">
                    <p>دائمًا كنت أخاف أتكلم قدام الناس، لكن لما طلبوا مني أقدم عرض في شغلي ما كان عندي خيار إلا
                        المواجهة.<br> بصراحة كنت مرعوبة. أصدقائي ساعدوني بالتدريب قدامهم. يوم العرض كنت متوترة جدًا، لكن
                        ردود الفعل كانت مقبولة وبعدها حسيت في دوامة تحسين مهارات التحدث. واليوم صرت أقدر أتكلم بثقة قدام
                        أي جمهور</p>
                    <div class="story-actions">
                        <button>❤️</button>
                        <button>🔁</button>
                        <button>🔖</button>
                    </div>
                </div>
                <div class="story-card">
                    <p>قبل سنة، قررت أتعلم اللغة الإسبانية كهدف شخصي. بدأت أشوف مسلسلات إسبانية وأستخدم تطبيقات<br>
                        تعليمية بسيطة لمدة ٥٠ دقيقة يوميًا. حسيت إن ما أتقدم، لكن لما قرأت عن مهارات جديدة زي البساطة عن
                        طريق الإنترنت، لاحظت توجهي بدأ يتغير. حصلت على وظيفة أفضل لاحقًا، وبعد ٦ شهور شعرت أن التعليم هو
                        المفتاح لأي نجاح.</p>
                    <div class="story-actions">
                        <button>❤️</button>
                        <button>🔁</button>
                        <button>🔖</button>
                    </div>
                </div>
                <div class="story-card">
                    <p>لما فقدت وظيفتي الأولى بعد ٦ شهور بسبب إغلاق الشركة، حسيت بالإحباط والخوف من المستقبل. لكن
                        قررت<br> أركز على تحسين نفسي بدل البقاء في حالة اكتئاب. بدأت أتعلم مهارات جديدة زي التصميم عن
                        طريق الإنترنت. وحاليًا عندي وظيفة ثابتة وأشعر أنني أفضل بكثير ومستعد للنهوض من أي سقوط.</p>
                    <div class="story-actions">
                        <button>❤️</button>
                        <button>🔁</button>
                        <button>🔖</button>
                    </div>
                </div>
            </section>
            <section class="gallery-card">
                <h3>كيف غيرت زاوية صغيرة من بيتي بالكامل</h3>
                <p>الخطوات المصورة:
                    <br> ١. قبل التغيير: صورة الزاوية فوضوية أو غير مستقلة<br>
                    ٢. أثناء التغيير: فكرت في التصميم المناسب وزرت أقرب متجر ( وأحيانًا أضفت أشياء يدوية مثل وسائد أو
                    رفوف)
                    <br>٣. بعد التغيير: صورة للزاوية بعد التعديل (مرتبة وواضحة)

                    <br>أهم النصائح:
                    <br>ابتعدت عن الألوان المملة وفضلت ألوان طبيعية.
                    <br>التناسق بين القطع المفضلة القراءة والاسترخاء.
                    <br> تعليق لوحات أو تغييرات بسيطة حتى يكون المكان أكثر دفئًا.
                </p>
                <div class="gallery-grid">
                    <img src="m1.jpg" alt="صورة 1">
                    <img src="m2.jpg" alt="صورة 2">
                    <img src="m3.jpg" alt="صورة 3">
                    <img src="m4.jpg" alt="صورة 4">
                </div>
            </section>
        </main>
</body>

</html>