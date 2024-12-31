<!-- ##### Login Processing for Login Modal ##### -->
<?php
error_log("", 0);
error_log("Starting DB processing @db.php", 0);

if (isset($_POST['submitLogIn'])) {
    error_log("Login submitted @topnav.php... ", 0);

    // ##### save POSTed email and password to variables #####
    if (isset($_POST['email'])) {
        $email_posted = $_POST['email'];
        error_log('email posted to @topnav.php for login modal processing', 0);
    } else {
        error_log('email not posted to @topnav.php for login modal processing', 0);
    }
    if (isset($_POST['password'])) {
        $password_posted = $_POST['password'];
        //        error_log("password posted to @topnav.php for login modal processing: $password_posted", 0);
        error_log("password posted to @topnav.php for login modal processing", 0);
    } else {
        error_log("password not posted to @topnav.php for login modal processing", 0);
    }
    //        $password = password_hash($password, PASSWORD_DEFAULT);

    // ##### get User info and check account Activation from DB.user #####
    // $stmt = $pdo->prepare("SELECT password, email, username, id_user, time_verified FROM user WHERE email = '$email_posted' ");
    $stmt = $pdo->prepare("SELECT password, email, username, id_user, time_verified FROM user WHERE email = '$email_posted' ");
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result) {
        error_log('query ran successfully @topnav.php', 0);
        $password_from_db = $result['password'];
        $email_from_db = $result['email'];
        $user_time_verified = $result['time_verified'];
        // ##### check Account Activation #####
        if ($user_time_verified) {
            error_log("user_time_verified: $user_time_verified", 0);
            // ##### verify password #####
            $isValid = password_verify($password_posted, $password_from_db);
            if ($isValid) {
                // ##### Create SESSIONS ##### //{
                error_log("Password is a match", 0);
                $_SESSION['email_hbdi'] = $result['email'];
                $_SESSION['username_hbdi'] = $result['username'];
                $_SESSION['uid_hbdi'] = $result['id_user'];
                error_log("Sessions created @ topnav.php ");

                // TODO: what is this?
                $uid_hdsi = $_SESSION['uid_hbdi'] = $result['id_user'];
                //                $time_login = time();
                //                $datetime_login = date('Y-m-d H:i:s', $time_login);

                // ##### get and insert HTTP_USER_AGENT
                $http_user_agent = $_SERVER['HTTP_USER_AGENT'];
                $result = $pdo->query(" SELECT id_user, http_user_agent FROM location WHERE http_user_agent = '$http_user_agent'")->fetchAll();

                $location_exist = false;
                foreach ($result as $record) {
                    if (($record['id_user'] == $uid_hdsi) && ($record['http_user_agent'] == $http_user_agent)) {
                        $location_exist = true;
                    }
                }

                if (($location_exist != true)) {
                    $msg = " This a new device/browser for this account. Saving as new location...";
                    echo "<script> setTimeout(showMessage('$msg'), 5000); </script>";
                    error_log("echo \"<script> setTimeout(showMessage(' $msg '), 5000); </script>\"", 0);
                    // TODO: create a modal for user to agree to register this device.

                    $ip = new Get_IP_Address();
                    $ip_address = $ip->getRealIpAddr();

                    $stmt = $pdo->prepare(" INSERT INTO location (id_user, ip_address, http_user_agent) VALUES (?, ?, ?) ");
                    $stmt->execute([$uid_hdsi, $ip_address, $http_user_agent]);
                } else {
                    $msg = " This device/browser for this account has been verified. ";
                    echo "<script> setTimeout(showMessage('$msg'), 5000); </script>";
                }
                // ##### end of get and insert HTTP_USER_AGENT

                // ##### login record in transaction_store records #####
                //                $time_login = date('Y-m-d H:i:s', time());

                $ip = new Get_IP_Address();
                $ip_address = $ip->getRealIpAddr();

                $stmt = $pdo->prepare(" INSERT INTO transaction_store (id_user, ip_address, login) VALUES (?, ?, ?) ");
                $stmt->execute([$uid_hdsi, $ip_address, 1]);
                echo '<script> showMessage("Login successful. <br> Redirecting to your Dashboard..."); </script>';
                echo "<meta http-equiv=REFRESH CONTENT=2;url=$p/dashboard.php>";
                unset($_POST['submitLogIn']);
                exit;
            } else {
                echo '<script> showMessage("Password is incorrect. <br> Redirecting to HBDI Home..."); </script>';
                error_log('FAILED: password_verify($password_posted, $password_from_db) (modals.php)', 0);
                echo "<meta http-equiv=REFRESH CONTENT=3;url=$p>";
                exit;
            }
        } else {
            // ##### your account is not activated.
            echo '<script> showMessage("Your account is not activated. <br> Please check your account creation confirmation email to activate. <br> Redirecting to HBDI Home in 5 seconds..."); </script>';
            error_log('Account not activated @topnav.php', 0);
            echo "<meta http-equiv=REFRESH CONTENT=10;url=$p>";
            exit;
        }
    } else {
        // ##### problem with DB
        error_log('query NOT run successfully @topnav.php', 0);
        echo "<script> showMessage('Email or password information incorrect. Please try again.<br> Contact Support if problem persists. <br> Redirecting to HBDI Home in 5 seconds...'); </script>";
        exit;
    }
}
?>


<!-- ##### Sing Up SignUP Modal Processing ##### -->
<?php
if (isset($_POST['submitSignUp'])) {  //  working.

    echo "TTTTTTTTTTTTTTTT";

    error_log("signUp POSTed @topnav signUp modal", 0);
    $name_first = $name_last = $username = $email = $password1 = $password2 = $affiliation = "";

    //    function test_input($data) // needed before called
    //    {
    //        $data = trim($data);
    //        $data = stripslashes($data);
    //        $data = htmlspecialchars($data);
    //        return $data;
    //    }
    //    $name_first = test_input($_POST['name_first']);
    //    $name_last = test_input($_POST['name_last']);
    //    $username = test_input($_POST['username']);
    //    $email = test_input($_POST['email']);
    //    $pwd1 = $_POST['password1'];
    //    $pwd2 = $_POST["password2"];
    //    $affiliation = test_input($_POST['affiliation']);

    $name_first = $_POST['name_first'];
    $name_last = $_POST['name_last'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd1 = $_POST['password1'];
    $pwd2 = $_POST["password2"];
    $affiliation = $_POST['affiliation'];

    // https://www.w3schools.com/php/php_form_required.asp

    //    if (!preg_match("/^[\w-.]+$/", $name_first)) {
    //        echo "<div class='php-message'> Only letters are allowed in First Name. </div><br>";
    //    } elseif (!preg_match("/^[\w-.]+$/", $name_last)) {
    //        echo "<div class='php-message'> Only letters are allowed in Last Name. </div><br>";
    //    } elseif (!preg_match("/^[\w-.]+$/", $username)) {
    //        echo "<div class='php-message'> Only letters and numbers are allowed in User Name. </div><br>";
    //    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //        echo "<div class='php-message'> Email ($email) format incorrect. </div><br>";
    //    } elseif (!preg_match("/^[\w-.]+$/", $affiliation)) {
    //        echo "<div class='php-message'> Affiliation: Please use only alphanumerical characters ($affiliation). </div><br>";
    //        error_log("There's an error with your input. ", 0);
    //        exit();
    //    } else {

    // ### password hash
    $pass_hash = password_hash($pwd1, PASSWORD_DEFAULT);
    // ### generate verification token
    $account_verify_token = substr("abcdefghijklmnopqrstuvwxyz", mt_rand(0, 25), 1) . substr(md5(time()), 1);

    // ### check email availability
    //    TODO: move this to the signUp form in signUp modal using AJAX to check email availability
    // TODO: account needs to be confirmed within one hour of registration or the link will become invalid.
    $result = $pdo->query("SELECT email, username FROM user WHERE email = '$email' ")->fetch();
    $email_db = $result['email'];
    $username_db = $result['username'];
    if (!empty($email_db)) {
        error_log("Email address taken @topnav.php", 0);
        echo "<script> showMessage('This email address is associated with an existing account. <br> Reset the password if this is your email address or <br> sign up using a different email address. <br> Redirecting to HDSI Home in 10 seconds...'); </script>";
        echo "<meta http-equiv=REFRESH CONTENT=10;url=$p/index.php>";
        exit();
    } elseif (!empty($username_db)) {
        error_log("User name is taken @topnav.php", 0);
        echo "<script> showMessage('This username is associated with an existing account. <br> Please choose a different username. <br> Redirecting to HDBI Home in 10 seconds...'); </script>";
        echo "<meta http-equiv=REFRESH CONTENT=10;url=$p/index.php>";
        exit();
    } else {

        // ### insert user account information
        try {
            echo "<script> showMessage('Recording user data and generating verification email...'); </script>";

            $user_time_registered = date('Y-m-d H:i:s', time());
            //            keep registered instead of changing to signup because of the tense.

            $sql = "INSERT INTO user (email, password, username, name_first, name_last, affiliation, account_verify_token, time_registered ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$email, $pass_hash, $username, $name_first, $name_last, $affiliation, $account_verify_token, $user_time_registered]);

            // ##### send email with token link #####
            $link = "<a href='$p/user/account_verify.php?key=" . $email . "&verify=" . $account_verify_token . "'> Click HERE to confirm your HBDI account creation</a>";
            // ### http://talkerscode.com/webtricks/password-reset-system-using-php.php
            try {
                // ### the headers: https://stackoverflow.com/questions/28026932/php-warning-mail-sendmail-from-not-set-in-php-ini-or-custom-from-head
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'From: support@hbdi<support@hbdi.fsu.edu>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                // ### the message ###
                $msg = "
***** DO NOT reply to this email. ***** <br>
This is an automatically generated email. Contact the Support Team through the website for support. <br><br>
Please click on the link to verify your new HBDI account creation: $link. <br>

If the link is not working for you, please copy and paste the URL below
to the address bar of your browser and hit enter to process your HBDI sign-up:<br>
$p/user/account_verify.php?key=$email&verify=$account_verify_token
";

                // ### use wordwrap() if lines are longer than 70 characters
                $msg = wordwrap($msg, 70);
                // ### send email
                mail("$email", "HBDI: Account Creation Verification", "$msg", "$headers");
                // ### message user

                echo "<script> showMessage('A verification email from support@hbdi is sent to $email. <br> Use the email to verify your account creation. <br> Redirecting to HBDI Home in 5 seconds...'); </script>";
                echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
                exit();
                // ### send email exception
            } catch (Exception $emailException) {
                echo $emailException;
            }

            echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
            error_log("the web path here is: $p", 0);
            exit();
            // ### insert user account information exception
        } catch (PDOException $e) {
            echo "<script> 
showMessage('Something went wrong and your account was not created. Please try again. The error message is: <br> + $e->getMessage(). <br> Contact the support team if the issue persists. ');
                        </script>";
            echo "<meta http-equiv=REFRESH CONTENT=10;url=$p>";
            exit();
        }
        //    }
        //        }
        //    } catch (Exception $e) {
        //        echo "error!";
        //        echo $e->getMessage();
    }
    //    }
}
?>
<!-- ##### END of SIgn up SignUp Modal PHP Processing ##### -->


<!-- ##### Logout Processing ##### -->
<!-- TODO: add a cookie here and after 3 logins, get rid of the login message when the user is familiar with the flow ???  -->
<?php

if (isset($_POST['submitLogOut'])) {
    //    $time_logout = time();
    //    $time_logout = date('Y-m-d H:i:s', $time_logout);

    $ip = new Get_IP_Address();
    $ip_address = $ip->getRealIpAddr();
    $stmt = $pdo->prepare(" INSERT INTO transaction_store (id_user, ip_address, logout) VALUES (?, ?, ?) ");
    $stmt->execute([$uid_hbdi, $ip_address, 1]);
    // TODO: logout should not clear current content. Login does not. Why?

    // ### message ###
    $msg = "Logout successful. <br> Redirecting to HBDI Home...";
    echo "<script> showMessage('$msg'); </script>";

    // ### redirect & Exit ###
    //<!-- ########### clear sessions ############ -->
    session_destroy();
    echo "<meta http-equiv=REFRESH CONTENT=1;url=$p/index.php>";
    exit;
}
?>
<!-- ##### end of log out logout processing ##### -->

<!-- ##### process reset password reset process ##### -->
<?php
//$email = "";
if (isset($_POST['submitResetPw'])) {
    // verify email
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $email = $_POST['email'];
    if ((!isset($email)) or (empty($email))) {
        echo "<div class='php-message'> Please input your email address... </div>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=pw_reset.php>';
        exit();
    } else {
        $email = test_input($email);
    }

    //    check DB
    $stmt = $pdo->prepare("SELECT email, username FROM user WHERE email = '$email' ");
    $stmt->execute();
    $result = $stmt->fetch();
    $email_db = $result['email'];
    $username_db = $result['username'];
    if ($email == $email_db) {

        //        generate a token
        $token = substr("abcdefghijklmnopqrstuvwxyz", mt_rand(0, 25), 1) . substr(md5(time()), 1);
        $pass_hash = password_hash("$token", PASSWORD_DEFAULT);
        /// save token to mysql (UPDATE to replace passwd)
        $sql = " UPDATE user SET account_verify_token = '$pass_hash' WHERE email = '$email_db' ";
        $stmt = $pdo->prepare($sql);
        $true_false = $stmt->execute();
        if ($true_false == TRUE) {
            echo "<div id='php-message'> Password reset email sent... </div> ";
        }

        /// send email with token link
        /// http://talkerscode.com/webtricks/password-reset-system-using-php.php
        // the headers: https://stackoverflow.com/questions/28026932/php-warning-mail-sendmail-from-not-set-in-php-ini-or-custom-from-head
        $link = "<a href='$p/user/pw_reset_process.php?key=" . $email_db . "&reset=" . $pass_hash . "'> Click to reset password</a>";
        try {
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From: admin@hdsi<admin@hdsi>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // the message
            $msg = "
                DO NOT reply to this email. Contact the HDSI Office for technical support or questions. <br><br>
                Please click on the link to reset your password: $link. <br><br>
                
                If the link is not working for you, please copy and paste the URL below
                and paste to the address bar of your browser and hit enter to reset your password:<br>
                   $p/user/pw_reset_process.php?key=$email_db&reset=$pass_hash
                    ";

            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg, 70);
            // send email
            mail("$email_db", "HDSI: Reset Password", "$msg", "$headers");
            // message user
            $msg = "
            <div id='php-message'> Hi, $username_db, <br>
                Reset email sent by admin@hbdi (admin@hdsi) to $email_db. <br>
                Check your Spam folder if you don't see the email.</div> <br>";

            echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
        } catch (Exception $exception) {
            echo $exception;
        }
    } else {
        echo "<div id='php-message'> Email address is not found. <br> Redirecting you to homepage... </div>";
        echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
    }
}
?>
<!-- ##### end of password reset process ##### -->
