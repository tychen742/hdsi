<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//include_once('headers.php');
// include_once('db_conn.php');
//include_once('login_loader.php');
$server_name = $_SERVER['SERVER_NAME'];
if ($server_name == 'hdsinet.us') {
    $path = '/var/www/hdsi';
    $p = 'https://hdsinet.us/';

} else {
    $path = 'localhost';
    //    $p = 'http://192.168.60.107';
    $p = 'https://hdsinet.us';
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes, user-scalable=no">

    <title>
        HDSI@FSU
    </title>


    <!--     ##### site CSS ##### -->
    <link rel="stylesheet" type="text/css" href="<?php echo $p; ?>/styles/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $p; ?>/styles/landing_page.css">
    <!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

    <!--    ##### site JS ##### -->
    <script src="<?php echo $p; ?>../scripts/javascripts.js"></script>
    <script src="<?php echo $p; ?>../scripts/tweetjs.js"></script>


    <!--    ##### Google Fonts ##### -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">



    <!--    ##### BootstrapCDN: CSS (JS bundle in topnav ##### -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <!-- ##### kEEp JQuery after Bootstrap ===> modals won't run ##### -->
    <!--     ##### JQuery ##### Bootstrap will load the slim version of jquery, which will screw AJAX ######-->


    <!-- DateTime picker -->
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">


    <!-- ##### fontawesome ##### v -->
    <script src="https://kit.fontawesome.com/58914d790c.js"></script>


    <link rel="icon" href="https://hdsinet.us/favicon.ico">

</head>

<dody>

<?php include('topnav.php'); ?>