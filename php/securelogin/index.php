<?php

session_start();

require_once("./config/connection.php");

check_have_session();

function print_session()
{
    echo "<table>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>ID</td>";
    echo "<td>" . $_SESSION['ID'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>STATUS</td>";
    echo "<td>" . $_SESSION['STATUS'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>TIMESTAMP</td>";
    echo "<td>" . $_SESSION['TIMESTAMP'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>AGENT</td>";
    echo "<td>" . $_SESSION['AGENT'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>IP</td>";
    echo "<td>" . $_SESSION['IP'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

?>

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
        <nav>
            <section>
                <span><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo htmlspecialchars($_SESSION["USER"]); ?></span>
                <a href="./config/logout.php" rel="noopener noreferrer"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></a>
            </section>
        </nav>
        <main>
            <section>
                <h1>Dashboard</h1>
                <p><?php print_session(); ?></p>
            </section>
        </main>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1d2d50" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,122.7C384,107,480,85,576,96C672,107,768,149,864,181.3C960,213,1056,235,1152,229.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</body>

</html>