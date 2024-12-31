<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حكينا</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #ffebcd;
        color: #333;
    }

    header {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20.5px;
        background-color: #fff8dc;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    header nav {
        display: flex;
        justify-content: center;
        gap: 30px;
        /* إضافة المسافة بين العناصر */
        font-family: 'Poppins', sans-serif;
        /* تغيير الخط للقوائم */
        font-weight: 1000;
    }

    header nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    header nav a:hover {
        color: #007BFF;
    }

    header .signup {
        position: absolute;
        right: 20px;
        padding: 10px 20px;
        background-color: #008b8b;
        color: #faebd7;
        border: none;
        border-radius: 20px;
        text-decoration: none;
        font-weight: bold;
    }

    header .signup:hover {
        background-color: #006f6f;
    }

    main {
        text-align: center;
        padding: 50px 10%;
    }

    /* Applying a light gray shadow to the image without any borders or box */
    .image-container {
        position: relative;
        display: inline-block;
        width: 100%;
        max-width: 600px;
    }

    .image-container img {
        width: 110%;
        display: block;
        border-radius: 10px;
        box-shadow: 0px 4px 15px rgba(169, 169, 169, 0.3);
        /* Light gray shadow effect */
    }

    /* Stats Section */
    .stats {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 30px;
    }

    .stats div {
        background-color: #fff8dc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .stats div p {
        margin: 0;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .stats div small {
        display: block;
        margin-top: 5px;
        color: #777;
    }

    .search-box {
        margin-top: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-box input {
        padding: 10px;
        border: 1px solid #fff5ee;
        border-radius: 20px 0 0 20px;
        outline: none;
        width: 300px;
    }

    .search-box button {
        padding: 10px 20px;
        border: none;
        background-color: #008b8b;
        color: #fff8dc;
        border-radius: 0 20px 20px 0;
        cursor: pointer;
    }

    .search-box button:hover {
        background-color: #006f6f;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">Explorer</a>
            <a href="#">Trending</a>
            <a href="page2.php">About</a>

        </nav>
        <a href="#" class="signup">Sign Up</a>
    </header>
    <main>
        <div class="image-container">
            <img src="phto1.jpg" alt="Hakeena Image">
        </div>
        <div class="stats">
            <div>
                <p>10,000</p>
                <small>Users</small>
            </div>
            <div>
                <p>Dec 28, 2024</p>
                <small>Last Visit</small>
            </div>
            <div>
                <p>5.1M</p>
                <small>Likes</small>
            </div>
            <div>
                <p>18M</p>
                <small>Views</small>
            </div>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>
    </main>
</body>

</html>