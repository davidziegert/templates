<?php

function Cryptography()
{
  $formInput = $_POST["input"];

  $secretKey = "my_secret_key_123";
  $secretVector = "my_secret_vector_123";
  $encryptMethod = "AES-256-CBC";

  function encrypt($input, $secretKey, $secretVector, $encryptMethod)
  {
    $key = hash("sha256", $secretKey);
    $vector = substr(hash("sha256", $secretVector), 0, 16);
    $result = openssl_encrypt($input, $encryptMethod, $key, 0, $vector);
    return $result = base64_encode($result);
  }

  function decrypt($input, $secretKey, $secretVector, $encryptMethod)
  {
    $key = hash("sha256", $secretKey);
    $vector = substr(hash("sha256", $secretVector), 0, 16);
    $result = openssl_decrypt(base64_decode($input), $encryptMethod, $key, 0, $vector);
    return $result;
  }

  echo "<code>";
  echo "<p>Input: " . $formInput . "</p>";
  echo "<p>Encrypted: " . encrypt($formInput, $secretKey, $secretVector, $encryptMethod) . "</p>";
  echo "<p>Decrypted: " . decrypt(encrypt($formInput, $secretKey, $secretVector, $encryptMethod), $secretKey, $secretVector, $encryptMethod) . "</p>";
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

      <?php if (isset($_POST["button"])) {
        Cryptography();
      } ?>
    </main>
  </div>
</body>

</html>