<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="AUTHOR" />
    <meta name="description" content="DESCRIPTION" />
    <meta name="keywords" content="KEYWORD, KEYWORD" />

    <title>securelogin.tmp</title>

    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" />
    <link rel="apple-touch-icon" href="./img/touch.png" />

    <!-- Styles -->
    <link rel="stylesheet" href="./css/print.css" media="print" />
    <link rel="stylesheet" href="./css/reset.css" media="screen" />
    <link rel="stylesheet" href="./css/skeleton.css" media="screen" />
    <link rel="stylesheet" href="./css/style.css" media="screen" />

    <!-- ForkAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" media="screen">
</head>

<body>
    <div class="wrapper">
        <main>
            <section>
                <form action="./config/authentication.php" method="post">
                    <h1>Login</h1>
                    <fieldset>
                        <label>Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required />
                        <label>Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required />
                        <input type="submit" id="submit" name="submit" value="Login" />
                        <a href="./register.php" rel="noopener noreferrer"><i class="fa fa-pencil" aria-hidden="true"></i> Don't have an account? Sign Up</a>
                    </fieldset>
                </form>
            </section>
        </main>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1d2d50" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,122.7C384,107,480,85,576,96C672,107,768,149,864,181.3C960,213,1056,235,1152,229.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</body>

</html>