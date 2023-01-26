<?php

function ldap_connection()
{
    $ldap_username = "username";
    $ldap_password = "password";

    $ldap_address = "ldap://localhost";
    $ldap_port = 389;
    $ldap_dn = "uid=" . $ldap_username . ",ou=users,dc=department,dc=example,dc=com";

    try 
    {
        $ldap_con = ldap_connect($ldap_address, $ldap_port);
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
        $bind = ldap_bind($ldap_con, $ldap_dn, $ldap_password);

        try 
        {        
            if ($bind) 
            {
                ldap_close($ldap_con);
                print '<div class="alert success">Login successful!</div>';
            } 
            else 
            {
                print '<div class="alert failed">LDAP Error: ' . ldap_error($ldap_con) . '</div>';
            }
        }
        
        catch (Exception $e) 
        {
            print '<div class="alert failed">LDAP Error: ' . ldap_error($ldap_con) . "/" . $e->getMessage() . '</div>';
        }
    } 
    catch (Error $e) 
    {
        print '<div class="alert failed">Something went completely wrong! - ' . $e->getMessage() . '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ldaplogin.tmp</title>

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
    <link rel="apple-touch-icon" href="./img/touch.png" />
</head>

<body>
    <div class="row">
        <?php ldap_connection(); ?>
    </div>
</body>

</html>