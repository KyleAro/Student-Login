<!doctype html>
<html lang="en">

<head>
    <title>Aro Web</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="sty_test.css">
</head>

<body>
    <div class="container" id="container">
        <div id="content">
            <?php
                session_start();

                // Error messages
                $errors = [];
                $login_user_emailError = $login_passwordError = '';
                $register_fnameError = $register_lnameError = '';
                $register_user_emailError = $register_passwordError = '';

                // Login logic
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    require('mysqli_connect.php');

    // Sanitize and validate email and password for login
    $login_user_email = !empty($_POST['login_user_email']) ? mysqli_real_escape_string($dbcon, trim($_POST['login_user_email'])) : null;
    $login_password = !empty($_POST['psword1']) ? mysqli_real_escape_string($dbcon, trim($_POST['psword1'])) : null;

    // Check for missing email
    if (!$login_user_email) {
        $login_user_emailError = 'Please input your Email Address';
        $errors[] = $login_user_emailError;
    }

    // If email exists, check for password
    if (empty($errors)) {
        $query = "SELECT user_id, fname, user_level, password FROM users WHERE email = ?";
        $stmt = $dbcon->prepare($query);
        $stmt->bind_param("s", $login_user_email);
        $stmt->execute();
        $result = $stmt->get_result();

        // If no user is found with the email, show the error
        if ($result->num_rows == 0) {
            $login_user_emailError = 'No user found with this email.';
            $errors[] = $login_user_emailError;
        } else {
            // If a user is found, check the password
            if (empty($login_password)) {
                $login_passwordError = 'Please input your Password';
                $errors[] = $login_passwordError;
            } else {
                // Verify password
                $user_data = $result->fetch_assoc();
                if (hash('sha256', $login_password) === $user_data['password']) { // SHA-256 verification
                    // Correct password, set session variables
                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['user_level'] = $user_data['user_level'];

                    // Redirect based on user level
                    $url = ($_SESSION['user_level'] === 1) ? 'index-admin.php' : 'memberpage.php';
                    header('Location: ' . $url);
                    exit();
                } else {
                    $login_passwordError = 'Password is incorrect, please try again.';
                    $errors[] = $login_passwordError;
                }
            }
        }
        $stmt->close();
        mysqli_close($dbcon);
    }
}

                // Registration logic
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    require('mysqli_connect.php');

    // Validate first name
    if (empty($_POST['fname'])) {
        $register_fnameError = 'Please input your First Name';
        $errors[] = $register_fnameError;
    } else {
        $fn = htmlspecialchars(trim($_POST['fname']));
    }

    // Validate last name
    if (empty($_POST['lname'])) {
        $register_lnameError = 'Please input your Last Name';
        $errors[] = $register_lnameError;
    } else {
        $ln = htmlspecialchars(trim($_POST['lname']));
    }

    // Validate email
    if (empty($_POST['register_user_email'])) {
        $register_user_emailError = 'Please input your Email Address';
        $errors[] = $register_user_emailError;
    } else {
        $e = htmlspecialchars(trim($_POST['register_user_email'])); 
        // Check if the email already exists
        $query = "SELECT user_id FROM users WHERE email = ?";
        $stmt = $dbcon->prepare($query);
        $stmt->bind_param("s", $e);
        $stmt->execute();
        $stmt->store_result();
        
        // If email already exists, show error
        if ($stmt->num_rows > 0) {
            $register_user_emailError = 'This email is already registered. Please use another email.';
            $errors[] = $register_user_emailError;
        }
        $stmt->close();
    }

    // Validate passwords
    if (empty($_POST['psword1'])) {
        $register_passwordError = 'Please input your Password';
        $errors[] = $register_passwordError;
    } elseif ($_POST['psword1'] !== $_POST['psword2']) {
        $register_passwordError = 'Your passwords do not match';
        $errors[] = $register_passwordError;
    } else {
        // Hash the password using SHA-256
        $password = $_POST['psword1'];
        $hashedPassword = hash('sha256', $password); // SHA-256 hashing
    }

    // If no errors, proceed to insert into the database
    if (empty($errors)) {
        $q = "INSERT INTO users (fname, lname, email, password, registration_date, user_level) 
              VALUES (?, ?, ?, ?, NOW(), 0)";
        $stmt = mysqli_prepare($dbcon, $q);
        mysqli_stmt_bind_param($stmt, 'ssss', $fn, $ln, $e, $hashedPassword);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: register-success.php");
            exit();
        } else {
            echo '<h2>System Error</h2>';
            echo '<p class="error">Your registration failed due to an unexpected error. Please try again.</p>';
        }
        mysqli_stmt_close($stmt);
        mysqli_close($dbcon);
    }
}

            ?>

            <!-- Login Form -->
            <div class="form-container sign-in">
                <form action="index.php" method="post">
                    <h1>Log In</h1>
                    <input type="text" placeholder="Email" id="login_user_email" name="login_user_email" size="50" maxlength="50" value="<?php echo htmlspecialchars($_POST['login_user_email'] ?? ''); ?>">
                    <span class="error"><?php echo $login_user_emailError ?? ''; ?></span>
                    <input type="password" placeholder="Password" id="psword1" name="psword1" size="50" maxlength="50">
                    <span class="error"><?php echo $login_passwordError ?? ''; ?></span>
                    <button type="submit" id="login" name="login" value="Login">Login</button>
					<form action="index.php" method="post" onsubmit="return false;">

				</form>
            </div>

            <!-- Sign Up Form -->
            <div class="form-container sign-up">
                <form action="index.php" method="post">
                    <h1>Create Account</h1>
                    <input type="text" placeholder="First Name" name="fname" size="30" maxlength="40" value="<?php echo htmlspecialchars($_POST['fname'] ?? ''); ?>">
                    <span class="error"><?php echo $register_fnameError ?? ''; ?></span>
                    <input type="text" placeholder="Last Name" name="lname" size="30" maxlength="40" value="<?php echo htmlspecialchars($_POST['lname'] ?? ''); ?>">
                    <span class="error"><?php echo $register_lnameError ?? ''; ?></span>
                    <input  placeholder="Email" name="register_user_email" size="50" maxlength="50" value="<?php echo htmlspecialchars($_POST['register_user_email'] ?? ''); ?>">
                    <span class="error"><?php echo $register_user_emailError ?? ''; ?></span>
                    <input type="password" placeholder="Password" name="psword1" size="20" maxlength="20">
                    <span class="error"><?php echo $register_passwordError ?? ''; ?></span>
                    <input type="password" placeholder="Repeat Password" name="psword2" size="20" maxlength="20">
                    <span class="error"><?php echo $register_passwordError ?? ''; ?></span>
                    <button type="submit" name="register">Sign Up</button>
					<form action="index.php" method="post" onsubmit="return false;">

                </form>
            </div>

            <!-- Toggle Buttons -->
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left" id="toggleLeft">
       
                        <h1>Welcome!</h1>
                        <p>Enter to The Gridiron Central!</p>
                        <button  id="loginBtn">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right" id="toggleRight">
                        <h1>Hello, Friend!</h1>
                        <p>Register to The Gridiron Central!</p>
                        <button  id="registerBtn">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="actions.js"></script>
    
</body>
</html>
