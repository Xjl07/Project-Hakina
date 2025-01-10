<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffebcd;
        }
        .container {
            display: flex;
            width: 800px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
        }
        .left {
            flex: 1;
            background-color: #fff8dc;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .left img {
            width: 100%;
            height: auto;
            object-fit: contain;
            max-width: 600px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .right {
            flex: 1;
            padding: 40px;
            background-color: #fff8dc;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 20px;
            background-color: #f9f9f9;
            font-size: 16px;
        }
        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }
        .title {
            background-color: #fff;
            border-radius: 20px;
            padding: 10px 20px;
            text-align: center;
            font-size: 22px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            width: 100%;
            cursor: pointer;
            margin-top: 20px;
        }
        .or-sign-in {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
        .icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .icons a img {
            width: 30px;
            height: 30px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .icons a img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left">
            <img src="sign.jpg" alt="Group Image">
        </div>
        <!-- Right Section -->
        <div class="right">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <!-- زر تسجيل الدخول -->
                <button type="submit" class="title">Sign in</button>
            </form>

            <div class="or-sign-in">Or sign in</div>
            <div class="icons">
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <img src="ins.jpg" alt="Instagram">
                </a>
                <a href="https://twitter.com" target="_blank" title="X">
                    <img src="x.jpg" alt="X">
                </a>
            </div>
        </div>
    </div>
</body>
</html>