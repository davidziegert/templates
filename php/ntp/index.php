<?php
function getTimeFromNTP()
{
    $ntp = "de.pool.ntp.org";
    $timeout = 10;

    function searchforUTC_Change($zone, $timezones)
    {
        foreach ($timezones as $item => $value) {
            if ($value["zone"] === $zone) {
                return $value["utc_change"];
            }
        }
        return null;
    }

    try {
        $socket = stream_socket_client('udp://' . $ntp . ':123', $errno, $errstr, (int) $timeout);
        $msg = "\010" . str_repeat("\0", 47);
        fwrite($socket, $msg);
        $response = fread($socket, 48);
        fclose($socket);
        $data = unpack('N12', $response);
        $timestamp = sprintf('%u', $data[9]);
        $timestamp -= 2208988800;

        $my_time = date("H:i:s", $timestamp);
        $my_timezone = date_default_timezone_get();
        $timezonelondon = new DateTimeZone("Europe/London");
        $timezonehere = new DateTimeZone($my_timezone);
        $timelondon = new DateTime("now", $timezonelondon);
        $timeOffset = $timezonehere->getOffset($timelondon);
        $my_UTC_Change = $timeOffset / 3600;
        $my_UTC = date("H:i:s", strtotime($my_time) - $timeOffset);

        print "<div class='container'>
            <div class='time-zone'>Actual time in zone: <strong>" . $my_timezone . "</strong></div>
            <div class='time'>" . $my_time . "</div>
            <div class='utc'>
                <div class='difference-utc'>Difference to Europe/London: " . $my_UTC_Change . " hour(s).</div>
                <div class='time-utc'>Current UTC-0 time: " . $my_UTC . ".</div>
            </div>
        </div>";

    } catch (Exception $e) {
        print "<p>Error: " . $e->getMessage() . " !</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ntp.tmp</title>

    <meta name="author" content="AUTHOR">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORD, KEYWORD">
    <meta name="robots" content="noindex, nofollow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css" media="screen">

    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="apple-touch-icon" href="./img/touch.png" />
</head>

<body>
    <div class="wrapper">
        <?php getTimeFromNTP(); ?>
    </div>
</body>

</html>