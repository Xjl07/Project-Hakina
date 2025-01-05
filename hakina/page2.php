<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>

    <!-- إضافة خط Poppins من Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
    body {
        margin: 0;
        font-family: 'Times New Roman', serif;
        /* استخدام خط Poppins */
        background-color: #ffebcd;
        color: #333;
    }

    .container {
        display: flex;
        flex-direction: column;
        /* ترتيب العناصر بشكل عمودي */
        align-items: center;
        /* توسيط العناصر */
        justify-content: center;
        /* توسيط العناصر عموديًا */
        height: 100vh;
        /* ضمان أن الحاوية تشغل كامل ارتفاع الصفحة */
        padding: 20px;
    }

    .text-container {
        text-align: center;
        margin-bottom: 30px;
        /* إضافة مسافة تحت النص */
    }

    .heading {
        font-size: 2rem;
        font-weight: 600;
        color: #9d6b47;
        margin-bottom: 10px;
    }

    .subheading {
        font-size: 1.5rem;
        color: #9d6b47;
        margin-bottom: 30px;
        line-height: 1.5;
    }

    /* ترتيب الصورة وزر Get Started بجانب بعض */
    .image-and-button {
        display: flex;
        align-items: center;
        /* توسيط العناصر عموديًا */
        justify-content: center;
        /* توسيط العناصر أفقيًا */
        width: 100%;
    }

    .image-container img {
        width: 100%;
        /* تصغير حجم الصورة قليلاً */
        max-width: 400px;
        display: block;
        border-radius: 10px;
        box-shadow: 0px 4px 15px rgba(169, 169, 169, 0.3);
    }

    .button {
        margin-left: 40px;
        /* المسافة بين الزر والصورة */
        padding: 20px 40px;
        background-color: #008b8b;
        color: #fff8dc;
        font-weight: 600;
        font-size: 1.2rem;
        border-radius: 25px;
        text-decoration: none;
    }

    .button a {
        color: inherit;
        /* إزالة اللون الأزرق الافتراضي */
        text-decoration: none;
        /* إزالة التسطير */
    }

    .button:hover {
        background-color: #006f6f;
    }

    /* السهم في أعلى الصفحة على اليسار */
    .back-to-home {
        position: fixed;
        top: 10px;
        left: 40px;
        font-size: 3rem;
        /* زيادة حجم السهم */
        color: #4f4f4f;
        text-decoration: none;
    }

    .back-to-home:hover {
        color: #006f6f;
        /* تغيير اللون عند التمرير */
    }

    /* السهم المتجه لليسار */
    .back-to-home::before {
        content: "←";
        /* السهم المتجه لليسار */
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- النص -->
        <div class="text-container">
            <h6 class="heading">A platform for sharing stories, exchanging knowledge, and fostering a <br>
                supportive community for personal and professional growth.</h6>
            <h1 class="heading">Share Your Experience, Inspire Others!</h1>

        </div>

        <!-- الصورة وزر Get Started بجانب بعض -->
        <div class="image-and-button">
            <!-- الصورة -->
            <div class="image-container">
                <img src="photo2.jpg" alt="Page 2 Image">
            </div>
            <!-- زر Get Started -->
            <div class="button">
                <a href="signup.html">Get Started</a>
            </div>
        </div>
    </div>

    <!-- السهم الذي يعيد إلى الصفحة الرئيسية -->
    <a href="index.php" class="back-to-home"></a> <!-- السهم كـ رابط مخفي -->
</body>

</html>