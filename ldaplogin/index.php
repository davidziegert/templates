<?php

function ldap_connection()
{
    $ldap_username = "username";
    $ldap_password = "password";

    $ldap_address = "ldap://xxx.xxx.xxx.xxx";
    $ldap_port = 389;
    $ldap_dn = "uid=" . $ldap_username . ",ou=users,dc=department,dc=example,dc=com";


    if ($ldap_con = ldap_connect($ldap_address, $ldap_port)) {
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);

        try {
            $bind = ldap_bind($ldap_con, $ldap_dn, $ldap_password);

            if ($bind) {
                ldap_close($ldap_con);
                print "Login successful!";
            } else {
                print "LDAP error: " . ldap_error($ldap_con);
            }
        } catch (Exception $e) {
            print "LDAP error: " . ldap_error($ldap_con) . "/" . $e->getMessage();
        }
    } else {
        print "Something went completely wrong!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LDAP Connection</title>

    <meta name="author" content="AUTHOR">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORD, KEYWORD">
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>
    <header>
        <h1>LDAP Connection</h1>
    </header>

    <main>
        <?php ldap_connection(); ?>
    </main>
</body>

</html>