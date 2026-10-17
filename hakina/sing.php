<?php
declare(strict_types=1);

session_start();
require_once dirname(__DIR__) . '/includes/db.php';

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim((string) ($_POST['email'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');

    $statement = hakina_db()->prepare('SELECT id, name, email, password_hash FROM user WHERE email = ? LIMIT 1');
    $statement->bind_param('s', $email);
    $statement->execute();
    $user = $statement->get_result()->fetch_assoc();

    if ($user && password_verify($password, $user['password_hash'])) {
        session_regenerate_id(true);
        $_SESSION['hakina_user_id'] = (int) $user['id'];
        $_SESSION['hakina_user_name'] = $user['name'];
        header('Location: explore.php');
        exit;
    }

    $error_message = 'The email or password is incorrect.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حكينا</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #f3e4d1;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        flex-direction: column;
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
        background-color: #faf5ef;
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
        background-color: #faf5ef;
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

    .error-message,
    .success-message {
        text-align: center;
        font-weight: bold;
        margin-top: 15px;
        padding: 10px;
        border-radius: 10px;
    }

    .error-message {
        color: #721c24;
        background-color: #f8d7da;
    }

    .success-message {
        color: #155724;
        background-color: #d4edda;
    }

    .demo-access {
        margin: 0 0 18px;
        padding: 14px;
        border: 1px solid #008b8b55;
        border-radius: 16px;
        background: #e9f5f3;
        color: #234;
        font-size: 14px;
    }

    .demo-access strong { color: #006f6f; }

    .demo-access button {
        width: 100%;
        margin-top: 10px;
        padding: 9px 12px;
        border: 0;
        border-radius: 12px;
        background: #008b8b;
        color: #fff;
        font-weight: 600;
        cursor: pointer;
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
        <div class="left">
            <img src="photo2.jpg" alt="Group Image">
        </div>
        <div class="right">
            <div class="demo-access">
                <strong>Portfolio Demo Access</strong><br>
                Email: demo@hakina.app<br>
                Password: Demo@12345
                <button type="button" id="fill-demo">Use demo account</button>
            </div>
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="title">Sign in</button>
            </form>

            <?php if (!empty($error_message)) : ?>
            <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

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
    <script>
    document.getElementById('fill-demo').addEventListener('click', function () {
        document.getElementById('email').value = 'demo@hakina.app';
        document.getElementById('password').value = 'Demo@12345';
        document.getElementById('email').focus();
    });
    </script>
</body>

</html>
