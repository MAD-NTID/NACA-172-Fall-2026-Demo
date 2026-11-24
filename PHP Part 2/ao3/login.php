<?php
    //we will only start the session if it has not been started
    // if(session_status() === PHP_SESSION_NONE ){
    //     session_start();
    // }

    include_once "authenticate.php";

    startSession();
    bypassLoginPageIfAlreadySignedIn();

    //check if we have POST from the user then we process it


    if(isset($_POST)===true && count($_POST) > 0){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //pass it to our login function for processing
        login($username, $password); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Archive of Our Own</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="header">
        <div class="header-content">
            <div class="logo">
                <h1>AO3</h1>
                <span>ARCHIVE OF OUR OWN</span>
            </div>

            <nav class="main-nav">
                <a href="#">About</a>
                <a href="#">Fandoms</a>
                <a href="#">Search</a>
                <a href="#">Browse</a>
                <a href="#">FAQ</a>
            </nav>
        </div>
    </header>

    <main class="container">

        <section class="login-section">

            <h2>Log In</h2>

            <p class="description">
                Welcome back! Log in to your Archive of Our Own account.
            </p>

            <form action="login.php" method="POST">

                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username or email"
                        autocomplete="username"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <div class="form-options">

                    <label class="remember-me">
                        <input
                            type="checkbox"
                            name="remember_me"
                        >
                        Remember me
                    </label>

                    <a href="/forgot-password">
                        Forgot password?
                    </a>

                </div>

                <button type="submit" class="login-button">
                    Log In
                </button>

            </form>

            <div class="signup-section">
                <p>
                    Don't have an account?
                    <a href="/signup">Create an account</a>
                </p>
            </div>

        </section>

    </main>

    <footer class="footer">
        <p>
            An Archive of Our Own, a project of the
            Organization for Transformative Works.
        </p>
    </footer>

</body>
</html>