<?php
include('includes/headers.php');
include('includes/topnav.php');
include('includes/footer.php');
?>


<div class="container" style="max-width: 900px">

    <?php
    if (!isset($_SESSION['email_hdsi'])) {
        echo '<meta http-equiv=REFRESH CONTENT=0;url=./user/login.php>';
    } else {

        ?>


        //TD: teams;


        <?php
    } ?>

</div>
