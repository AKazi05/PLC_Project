<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS stylesheet -->
</head>
<body>
    <div class="form-container">
        <div class="login">
            <h1>Login</h1>
            <form action="login.php" method="post">
                <div class="input-group">
                    <label for="username"><i class="fas fa-user"></i></label>
                    <input type="text" name="username" placeholder="Username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="password"><i class="fas fa-lock"></i></label>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </div>
                <input type="submit" value="Login" class="btn">
            </form>
            <?php
            if (isset($_GET['login_message'])) {
                $loginMessage = $_GET['login_message'];
                echo '<p class="error-message">' . $loginMessage . '</p>';
            }
            ?>
        </div>

        <div class="registration-form">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <div class="input-group">
                    <label for="username"><i class="fas fa-user"></i></label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <label for="password"><i class="fas fa-lock"></i></label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <label for="email"><i class="fas fa-envelope"></i></label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <input type="submit" value="Register" class="btn">
            </form>
            <?php
            if (isset($_GET['register_message'])) {
                $registerMessage = $_GET['register_message'];
                echo '<p class="error-message">' . $registerMessage . '</p>';
            }
        
            ?>
            
        </div>
    </div>
</body>
</html>
