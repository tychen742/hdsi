<?php
include('./includes/topnav.php');
?>

<div class="container-fluid" style="width: 75%; max-width: 900px">
    <div style="margin: 0 auto; text-align: center">
    <div style=" font-size: 2em; width: 100%; text-decoration: none; ">404! </div>
    </div>


    <!-- beginning of 404 box -->
    <div style="">

        <div style="width: 100%; margin: 0 auto; height: auto;">

            <!--    HDSI 404 Header -->
            <header style="position: relative;  margin: auto; height: auto; background-color: #dddddd; text-decoration: none">
                <div style="text-align: center; text-decoration: none">
                </div>
                    <strong> <br>The page you requested is not found. <br>
                             Redirecting you to HDSI Home... </strong>
                    <br>
                    <meta http-equiv="Refresh" content="3; url=<?php echo $p; ?>index.php">
                </div>
            </header>
        </div>
    </div>
</div>


