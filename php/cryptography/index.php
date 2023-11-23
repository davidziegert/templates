<?php
function cryptography_OpenSSL()
{
    $clearTXT = "Hallo Welt";

    $password = "Password123";
    $vector = "my_Vector_123";

    $hashKEY = hash("sha256", $password);
    $initializationVECTOR = substr(hash("sha256", $vector), 0, 16);

    $encryptTXT = openssl_encrypt($clearTXT, "AES-256-CBC", $hashKEY, 0, $initializationVECTOR);
    $decryptTXT = openssl_decrypt($encryptTXT, "AES-256-CBC", $hashKEY, 0, $initializationVECTOR);

    print "Input: " .$clearTXT;
    print "<br>";
    print "Method: OpenSSL(AES-256-CBC)";
    print "<br><br>";
    print "Encrypted: " .$encryptTXT;
    print "<br>";
    print "Decrypted: " .$decryptTXT;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equinitializationVECTOR="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>cryptography.tmp</title>

    <meta name="author" content="AUTHOR">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORD, KEYWORD">
    <meta name="robots" content="noindex, nofollow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="apple-touch-icon" href="./img/touch.png" />
</head>

<body>
    <div class="wrapper">
        <code>
            <?php cryptography_OpenSSL(); ?>
        </code>
    </div>
</body>

</html>