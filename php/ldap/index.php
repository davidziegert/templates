<?php
function ldap_Connection()
{
  $ldap_username = "username";
  $ldap_password = "password";
  $ldap_address = "ldap://localhost";
  $ldap_port = 389;
  $ldap_dn = "uid=" . $ldap_username . ",ou=users,dc=department,dc=example,dc=com";

  try {
    $ldap_con = ldap_connect($ldap_address, $ldap_port);
    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
    $bind = ldap_bind($ldap_con, $ldap_dn, $ldap_password);
    try {
      if ($bind) {
        ldap_close($ldap_con);
        print '<code class="success">Login successful!</code>';
      } else {
        print '<code class="warning">LDAP Error: ' . ldap_error($ldap_con) . '</code>';
      }
    } catch (Exception $e) {
      print '<code class="warning">LDAP Error: ' . ldap_error($ldap_con) . "/" . $e->getMessage() . '</code>';
    }
  } catch (Error $e) {
    print '<code class="warning">Error: Something went completely wrong! - ' . $e->getMessage() . '</code>';
  }
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

  <title>ldap.tmp</title>

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="TITLE" />
  <meta property="og:description" content="DESCRIPTION" />
  <meta property="og:image" content="1.200 x 630 pixels" />
  <meta property="og:site_name" content="SITENAME" />
  <meta property="og:url" content="URL" />

  <!-- Icons -->
  <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" />
  <link rel="apple-touch-icon" href="./img/touch.png" />

  <!-- Styles -->
  <link rel="stylesheet" href="./css/print.css" media="print" />
  <link rel="stylesheet" href="./css/reset.css" media="screen" />
  <link rel="stylesheet" href="./css/skeleton.css" media="screen" />
  <link rel="stylesheet" href="./css/style.css" media="screen" />
</head>

<body>
  <div class="wrapper">
    <main>
      <h1>LDAP-Connection</h1>
      <?php ldap_Connection(); ?>
    </main>
  </div>
</body>

</html>