<?php
function cryptography_OpenSSL()
{
  $cleartxt = $_POST["input"];

  $password = "Password123";
  $vectorstring = "my_Vector_123";

  $hashkey = hash("sha256", $password);
  $initializationvector = substr(hash("sha256", $vectorstring), 0, 16);

  $encrypttxt = openssl_encrypt($cleartxt, "AES-256-CBC", $hashkey, 0, $initializationvector);
  $decrypttxt = openssl_decrypt($encrypttxt, "AES-256-CBC", $hashkey, 0, $initializationvector);

  echo "<code>";
  echo "<p>Input: " . $cleartxt . "</p>";
  echo "<p>Encrypted: " . $encrypttxt . "</p>";
  echo "<p>Decrypted: " . $decrypttxt . "</p>";
  echo "</code>";
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

  <title>cryptography.tmp</title>

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
      <h1>Cryptography</h1>
      <h2>Method: OpenSSL(AES-256-CBC)</h2>
      <form method="post">
        <fieldset>
          <label>Input:</label>
          <input type="text" id="input" name="input" />
          <input type="submit" name="button" value="Click" />
        </fieldset>
      </form>

      <?php if (isset($_POST['button'])) {
        cryptography_OpenSSL();
      } ?>
    </main>
  </div>
</body>

</html>