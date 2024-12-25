<?php
include('../includes/topnav.php');
?>

<script type="text/javascript">
    function showMessage() {
        document.getElementById("php-message").style.display="block";
        document.getElementById("php-message").innerHTML = " Successfully logged out. <br>" +
            "Redirecting to HDSI home... ";
    }
</script>

<?php

// ### message ###
echo ' <script> showMessage(); </script> ';


//<!-- ########### clear sessions ############ -->
session_destroy();


// ### redirect ###
echo "<meta http-equiv=REFRESH CONTENT=3;url=$p/index.php>";
exit;
?>


