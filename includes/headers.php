<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    ini_set("error_log", "~/php_errors.log");
}

//include_once('headers.php');
include_once('db_conn.php');
ini_set("error_log", "~/php_errors.log");

//include_once('login_loader.php');
$server_name = $_SERVER['SERVER_NAME'];
echo nl2br("\n {$server_name}");
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
    <!-- <script src="https://kit.fontawesome.com/58914d790c.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="https://hdsinet.us/favicon.ico">

</head>

<dody>

<?php include_once 'topnav.php'; ?>

    <div class="container" style="width: 90%; max-width: 900px">

        <?php
        /// http://talkerscode.com/webtricks/password-reset-system-using-php.php
        $email_email = $_GET['key'];
        $token_email = $_GET['reset'];
        if (isset($email_email) && isset($token_email)) {
            try {
                $stmt = $pdo->prepare(" SELECT email, account_verify_token FROM user WHERE email = '$email_email' ");
                $stmt->execute();
                $result = $stmt->fetch();
                $email_db = $result['email'];
                $token_db = $result['account_verify_token'];

            } catch (Exception $exception) {
                echo $exception;
                echo $exception;
            }

            if (!isset($email_db)) {
                echo "<div id='php-message'> Having problem with this email address. <br>
 Redirecting... </div>";
                echo "<meta http-equiv=REFRESH CONTENT=3;url=$p/index.php>";
            } elseif ($token_email != $token_db) {
                echo "<div id='php-message'> Hmmm... the reset token is not valid. <br>
 Redirecting to HDSI home... </div>";
                echo "<meta http-equiv=REFRESH CONTENT=3;url=$p/index.php>";
            } else {

                ?>
                <form method="POST" id="php-message">
                    <input type="hidden" name="email_email"
                           value="<?php echo $email_email; ?>">
                    <div> Enter new password:</div>
                    <input type="password" name='password'>
                    <input type="submit" name="submit_password" value="Reset">
                </form>
                <?php
            }
        }
        ?>
    </div>