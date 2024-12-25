<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('db_conn.php');

$server_name = $_SERVER['SERVER_NAME'];
if ($server_name == 'tychen.us') {
    $path = 'tychen.us/hbdi';
    $p = 'https://tychen.us/hbdi';
} else {
    $path = 'localhost';
    $p = 'http://192.168.60.107';
}
?>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <title>
        HBDI@FSU
    </title>


    <!--     ##### site CSS ##### -->
    <link rel="stylesheet" type="text/css" href="<?php echo $p; ?>/styles/main.css">
    <!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

    <!--    ##### site JS ##### -->
    <script src="<?php echo $p; ?>/scripts/javascripts.js"></script>
    <script src="<?php echo $p; ?>/scripts/tweetjs.js"></script>


    <!--    ##### Google Fonts ##### -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">



    <!--    ##### BootstrapCDN: CSS, JS, Popper.js, and jQuery ##### -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"-->
<!--            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"-->
<!--            crossorigin="anonymous"></script>-->



    <!-- ##### kEEp JQuery after Bootstrap ===> modals won't run ##### -->
    <!--     ##### JQuery ##### Bootstrap will load the slim version of jquery, which will screw AJAX ######-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!--    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->


    <!-- DateTime picker -->
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">


    <!-- ##### fontawesome ##### v -->
    <script src="https://kit.fontawesome.com/58914d790c.js"></script>

    <!---->
    <!--    <link rel="stylesheet"-->
    <!--          href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu:400,500">-->
    <!--    <link rel="stylesheet"-->
    <!--          href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display|Roboto|Ubuntu">-->
    <!---->
        <link rel="icon" href="https://tychen.us/hbdi/images/favicons/favicon-32x32.png" type="image/x-icon">
        <link rel="icon" href="https://tychen.us/hbdi/images/favicons/favicon-32x32.png">
    <!---->
    <!--    <link rel="stylesheet"-->
    <!--          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <!---->
    <!--    <link rel="stylesheet"-->
    <!--          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
    <!---->
    <!--        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">-->
    <!---->
    <!--    <link rel="stylesheet"-->
    <!--          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">-->
    <!---->
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.1/umd/popper.min.js"></script>-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>-->
    <!--    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <!---->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <!---->
    <!-- DateTime picker -->
    <!--        <script src="js/bootstrap-datetimepicker.min.js"></script>-->
    <!---->
    <!---->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <!--    testing datetime picker -->
    <!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!--        <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>-->
    <!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>-->

</head>


