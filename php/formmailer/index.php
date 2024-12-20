<?php
if (isset($_POST["button"])) {
  $from_email = "from@me.de"; //from mail, sender email address
  $recipient_email = "to@me.de"; //recipient email address

  //Load POST data from HTML form
  $sender_name = $_POST["sender_name"]; //sender name
  $reply_to_email = $_POST["sender_email"]; //sender email, it will be used in "reply-to" header
  $subject = $_POST["subject"]; //subject for the email
  $message = $_POST["message"]; //body of the email

  // Email message
  $data =
    "
    Name: ' . $sender_name . '
    Email: ' . $reply_to_email . '
    Subject: ' . $subject . '
    Message: '' . $message . '
  ";

  //Get uploaded file data using $_FILES array
  $tmp_name = $_FILES["attachment"]["tmp_name"]; // get the temporary file name of the file on the server
  $name = $_FILES["attachment"]["name"]; // get the name of the file
  $size = $_FILES["attachment"]["size"]; // get size of the file for size validation
  $type = $_FILES["attachment"]["type"]; // get type of the file
  $error = $_FILES["attachment"]["error"]; // get the error (if any)

  //validate form field for attaching the file
  if ($error > 0) {
    die('<div class="alert danger" role="alert">Upload Error or No Files Uploaded</div>');
  }

  //read from the uploaded file & base64_encode content
  $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
  $content = fread($handle, $size); // reading the file
  fclose($handle); // close upon completion

  $encoded_content = chunk_split(base64_encode($content));
  $boundary = md5("random"); // define boundary with a md5 hashed value

  //header
  $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
  $headers .= "From:" . $from_email . "\r\n"; // Sender Email
  $headers .= "Reply-To: " . $reply_to_email . "\r\n"; // Email address to reach back
  $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
  $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

  //plain text
  $body = "--$boundary\r\n";
  $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
  $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
  $body .= chunk_split(base64_encode($data));

  //attachment
  $body .= "--$boundary\r\n";
  $body .= "Content-Type: $type; name=" . $name . "\r\n";
  $body .= "Content-Disposition: attachment; filename=" . $name . "\r\n";
  $body .= "Content-Transfer-Encoding: base64\r\n";
  $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
  $body .= $encoded_content; // Attaching the encoded file with email

  $sentMailResult = mail($recipient_email, $subject, $body, $headers);

  if ($sentMailResult) {
    print "Successful Mail Delivery";
  } else {
    die(print "Failed Mail Delivery");
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

  <title>formmailer.tmp</title>

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
      <h1>Form-Mailer</h1>
      <form enctype="multipart/form-data" method="POST" action="">
        <fieldset>
          <label>Name:</label>
          <input type="text" name="sender_name" placeholder="Your Name" required />
          <label>Email:</label>
          <input type="email" name="sender_email" placeholder="Your Email-Address" required />
          <label>Subject:</label>
          <input type="text" name="subject" placeholder="Your Subject" />
          <label>Message:</label>
          <textarea name="message" placeholder="Your Message"></textarea>
          <label>Attachment:</label>
          <input type="file" name="attachment" />
          <br>
          <input type="submit" name="button" value="Submit" />
        </fieldset>
      </form>
    </main>
  </div>
</body>

</html>