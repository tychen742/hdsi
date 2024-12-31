<?php
include_once("/var/www/hdsi/includes/utilities.php");
//include_once("/var/www/hdsi/includes/login_loader.php"); // login_loader upsets modals
//include_once("/var/www/hdsi/includes/topnav.php");
// $root_path = '/var/www/hdsi';

?>
<!-- TODO: add a cookie here and after 3 logins, get rid of the login message when the user is familiar with the flow ???  -->


<!-- ##### The Add File / Upload Modal: file upload  ##### -->
<div class="modal fade" id="fileModalUpload">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formFileUpload" method="POST" action="https://hbdinet.org/scripts/file_menu.php"
                enctype="multipart/form-data">
                <div class="modal-header">
                    <!--                    <h4 class="modal-title">Add Files </h4>-->
                    <h4 class="modal-title"> Upload Files </h4>
                    <button type="button" class="close" data-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <input name="userfile" type="file" id="userfile" style="padding-left: 20px; margin-bottom: 10px">
                    <input type="text" id="id_project" name="id_project" value="" hidden>

                    <div>
                        <input type="checkbox" id="check_HIPAA" onclick="msgHIPAA();" name="compliance[]"
                            value="HIPAA" id="HIPAA"> File contains HIPAA data
                        <div style="display: none" class="msg_HIPAA">
                            <i class="fas fa-check"></i> &nbsp; User HIPAA clearance verified
                        </div>
                        <div style="display: none" class="msg_HIPAA">
                            <i class="fas fa-check"></i> &nbsp; Device HIPAA audit inventory verified
                        </div>
                    </div>

                    <div><input type="checkbox" name="compliance[]"
                            id="Human_Subject" value="Human_Subject"> File contains Human Subject data
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                            value="FDA-part11" FDA-part11"> File contains FDA - part 11 data
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                            value="compliance_other" style="color: grey"> Other
                    </div>

                    <hr data-content="AND" class="hr-text" style="position: relative; width: 250px">

                    <div>
                        <input type="checkbox" id="check_FSU_protected" onclick="msgFSUProtected()" name="compliance[]"
                            value="FSU_protected" id="FSU_protected"> File contains FSU protected data
                        <div style="display: none" class="msg_FSU_protected">
                            <i class="fas fa-check"></i> &nbsp; <a
                                href="https://its.fsu.edu/ispo/policy/information-privacy">FSU protected data</a>
                            will be accessed by authorized users only.
                        </div>
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                            value="FSU_private" id="FSU_private"> File contains FSU private data
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                            value="FSU_public" id="FSU_public"> File contains FSU public data
                    </div>

                    <hr data-content="AND" class="hr-text" style="position: relative; width: 250px">

                    <div><input type="checkbox" name="compliance[]"
                            value="dataset" id="dataset" style="color: grey"> Dataset (structured, semi-structured,
                        text...)
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                            value="document" id="document" style="color: grey"> Document (draft, manuscript,
                        preprint...)
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                            value="file_other" style="color: grey"> Other
                    </div>

                    <hr data-content="AND" class="hr-text" style="position: relative; width: 250px">


                    <?php
                    if (isset($id_project)) {
                    ?>
                        <div style="padding-left: 20px">
                            <select class="content-item" name="title_project_short" id='title_project_short'
                                style="width: 50%;" required="required">
                                <option selected="selected" disabled hidden> Project</option>
                                <?php
                                $projects = $pdo->query(" SELECT DISTINCT id_project FROM project_user WHERE id_user = '$uid_hdsi' ")->fetchAll();
                                foreach ($projects as $project) {
                                    $id_project = $project['id_project'];
                                    $pts = $pdo->query("SELECT title_project_short, id_creator FROM projects WHERE id_project = '$id_project' ")->fetch();
                                    $title_project_short = $pts['title_project_short'];
                                    echo "<option id='id_project' value='$id_project'> $title_project_short </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div><br></div>
                    <?php
                    }
                    /*unset($id_project);*/
                    ?>

                    <input type="hidden" name="username_hbdi" id="username_hbdi" value="<?php echo $username_hbdi; ?>">
                </div>
                <div class="modal-footer">
                    <input class="btn" name="submitFileUpload" id="submitFileUpload" value="SEND" data-dismiss="modal"
                        style="width: 95px; height: ; margin: 10px 20px; padding: 2px 5px" onclick="form_submit()">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function msgHIPAA() {
        var checkBox = document.getElementById("check_HIPAA");
        if (checkBox.checked == true) {
            document.getElementsByClassName("msg_HIPAA")[0].style.display = "block";
            document.getElementsByClassName("msg_HIPAA")[1].style.display = "block";
        } else {
            document.getElementsByClassName("msg_HIPAA")[0].style.display = "none";
            document.getElementsByClassName("msg_HIPAA")[1].style.display = "none";
        }
    }

    function msgFSUProtected() {
        let checkBox = document.getElementById("check_FSU_protected");
        if (checkBox.checked == true) {
            document.getElementsByClassName("msg_FSU_protected")[0].style.display = "inline-block";
        } else {
            document.getElementsByClassName("msg_FSU_protected")[0].style.display = "none";
        }
    }
</script>
<script type="text/javascript">
    function form_submit() {
        document.getElementById("formFileUpload").submit();
    }
</script>
<!-- ##### end of file modal upload file ##### -->


<!-- ##### Log In: Login Modal ##### -->
<!-- TODO: solved. it's requiring double log-in to log into the system. Why??? -->
<div class="modal fade" id="loginModal" role="dialog" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="<?php echo $p; ?>scripts/db.php">

                <div class="modal-header">
                    <div class="modal-title"> Log In</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-email" class="col-form-label"></label>
                        <input type="text"
                            class="form-control"
                            id="recipient-email"
                            placeholder="email"
                            name="email">
                        <small class="form-text text-muted"> We keep your information private. </small>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-password" class="col-form-label"></label>
                        <input type="text"
                            class="form-control"
                            id="recipient-password"
                            placeholder="password"
                            name="password">

                    </div>
                </div>

                <div class="modal-footer" style="display: block; text-align: right">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button
                        class="btn"
                        data-bs-toggle="modal"
                        type="submit"
                        data-dismiss="modal"
                        data-bs-target="#loginModal"
                        name="submitLogIn">
                        Log In
                    </button>

                    <br>

                    <button class="btn" data-bs-toggle="modal" type="button" data-dismiss="modal"
                        data-bs-target="#signupModal"
                        style="width: auto; background-color: #915664" value="">
                        Sign Up
                    </button>

                    <button class="btn" data-bs-toggle="modal" type="button" data-dismiss="modal"
                        data-bs-target="#resetPwModal"
                        style="width: auto; background-color: #915664" value="">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ##### End of Login Modal ##### -->



<!--  ##### beginning Sign Up SignUp Modal ##### -->
<!-- ##### validation script for signUp modal ##### -->
<script>
    function validate() {
        submit = true;
        var name_first_error = "";
        var name_last_error = "";
        var username_error = "";
        var email_error = "";
        var password1_error = "";
        var password2_error = "";
        var affiliation_error = "";

        var name_first = document.getElementById('name_first');
        var name_last = document.getElementById('name_last');
        var username = document.getElementById('username');
        var email = document.getElementById('email');
        var password1 = document.getElementById('password1');
        var password2 = document.getElementById('password2');
        var affiliation = document.getElementById('affiliation');

        //https://stackoverflow.com/questions/13283470/regex-for-allowing-alphanumeric-and-space
        var alphanumerics = /^[\w\-\s.'"()]+$/;
        if (name_first.value === "" || !(name_first.value.match(alphanumerics))) {
            name_first_error = "Please provide a valid first name.";
            document.getElementById('name_first_error').innerHTML = name_first_error;
            submit = false;
        } else if (name_last.value === "" || !(name_last.value.match(alphanumerics))) {
            name_last_error = "Please provide a valid last name.";
            document.getElementById('name_last_error').innerHTML = name_last_error;
            submit = false;
            return submit;
        } else if (username.value === "" || !(username.value.match(alphanumerics))) {
            username_error = "Please provide a valid username.";
            document.getElementById('username_error').innerHTML = username_error;
            submit = false;
            return submit;
            // } else if (email.value === "" || email.value.indexOf("@") === -1 || email.value.indexOf(".") === -1) {
        } else if (email.value === "" || !(validateEmail(email.value))) {
            email_error = "Please provide a valid email address.";
            document.getElementById("email_error").innerHTML = email_error;
            submit = false;
            return submit;
        } else if (password1.value === "") {
            password1_error = "Please provide a valid password.";
            document.getElementById("password1_error").innerHTML = password1_error;
            submit = false;
            return submit;
        } else if (password2.value === "") {
            password2_error = "Please provide a valid password.";
            document.getElementById("password2_error").innerHTML = password2_error;
            submit = false;
            return submit;
            //    TODO: password length/complexity requirement???
        } else if (password1.value !== password2.value) {
            password_match_error = "The two passwords do not match.";
            document.getElementById("password_match_error").innerHTML = password_match_error;
            submit = false;
            return submit;
        } else if (affiliation.value === "") {
            affiliation_error = "Please provide a valid affiliation title.";
            document.getElementById("affiliation_error").innerHTML = affiliation_error;
            submit = false;
            return submit;
        }
        return submit;
    }

    function removeWarning() {
        document.getElementById(this.id + "_error").innerHTML = '';
    }

    // onkeyup needs to be placed AFTER the form to work
    document.getElementById("name_first").onkeyup = removeWarning;
    document.getElementById("name_last").onkeyup = removeWarning;
    document.getElementById("username").onkeyup = removeWarning;
    document.getElementById("email").onkeyup = removeWarning;
    document.getElementById("password1").onkeyup = removeWarning;
    document.getElementById("password2").onkeyup = removeWarning;
    document.getElementById("password_match").onkeyup = removeWarning;
    document.getElementById("affiliation").onkeyup = removeWarning;

    function validateEmail(email) {
        // var reg = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        // Not good. didn't detect $$### only @@ https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
        var
            reg = /^[-!#$%&'*+/0-9=?A-Z^_a-z{|}~](\.?[-!#$%&'*+/0-9=?A-Z^_a-z{|}~])*@[a-zA-Z](-?[a-zA-Z0-9])*(\.[a-zA-Z](-?[a-zA-Z0-9])*)+$/;
        return reg.test(email);
    }
</script>
<!-- ##### end of validation script for SignUp Modal form checks ##### -->

<!-- ##### signUpModal -->
<div class="modal fade" id="signupModal" role="dialog" tabindex="-1" aria-labelledby="signupModal" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <div class="modal-title"> Sign Up </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>

            <div class="modal-body">

                <form enctype="multipart/form-data" method="POST" action="db.php" onsubmit="return validate();">

                    <div class="form-group">
                        <input type="text" name="name_first" id="name_first"
                            placeholder="first name"
                            class="form-control">
                        <div>
                            <div id="name_first_error" class="signUpError"></div>
                        </div>
                        <!-- </div> -->

                        <!-- <div class="form-group"> -->
                        <input type="text" name="name_last" id="name_last"
                            placeholder="last name"
                            class="form-control">
                        <div>
                            <div id="name_last_error" class="signUpError"></div>
                        </div>
                        <!-- </div> -->

                        <!-- <div class="form-group"> -->
                        <input type="text" name="username" id="username"
                            placeholder="username"
                            class="form-control">
                        <div><span id="username_error" class="signUpError"></span></div>
                        <!-- </div> -->

                        <!-- <div class="form-group"> -->
                        <input type="text" name="email" id="email"
                            placeholder="email address"
                            class="form-control">
                        <div><span id="email_error" class="signUpError"></span></div>
                        <!-- </div> -->

                        <!-- <div class="form-group"> -->
                        <input type="text" name="password1" id="password1"
                            placeholder="password"
                            class="form-control">
                        <div><span id="password1_error" class="signUpError"></span></div>
                        <!-- </div> -->

                        <!-- <div class="form-group"> -->
                        <input type="text" name="password2" id="password2"
                            placeholder="password again" class="form-control">
                        <div><span id="password2_error" class="signUpError"></span></div>
                        <div><span id="password_match_error" class="signUpError"></span></div>
                        <!-- </div> -->

                        <!-- <div class="form-group"> -->
                        <input class="form-control" type="text" name="affiliation" id="affiliation"
                            placeholder="affiliation">
                        <div>
                            <span id="affiliation_error" class="signUpError"> </span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer" style="display: block; text-align: right">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <button class="btn"
                    id="submitSingUp"
                    data-bs-toggle="modal"
                    type="submit"
                    data-dismiss="modal"
                    data-bs-target="#signupModal" name="submitSignUp">
                    Sign Up
                </button>

                <br>

                <button class="btn"
                    data-bs-toggle="modal"
                    type="button"
                    data-bs-dismiss="modal"
                    data-bs-target="#loginModal"
                    style="width: auto; background-color: #915664" value="">
                    Log In
                </button>

                <button class="btn"
                    data-bs-toggle="modal"
                    type="button"
                    data-bs-dismiss="modal"
                    data-bs-target="#resetPwModal"
                    style="width: auto; background-color: #915664" value="">
                    Reset Password
                </button>
            </div>

        </div>
        <!-- end of modal content       -->
    </div>
</div>
<!-- ##### End of Sign Up signUp Modal ##### -->



<!-- ##### Log OUT Logout Modal ##### -->
<div class="modal fade" id="logoutModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form name="form" method="post" action="db.php">
                <div class="modal-header">
                    <h4 class="modal-title"> Log Out </h4>
                    <span>
                        <button type="button" class="close" data-dismiss="modal">

                        </button>
                    </span>
                </div>

                <div class="modal-body">
                    <div style="margin: 0 auto; text-align: center; font-size: 1.25rem; color:
                    #782f40"> Thank you for using HDSI. See you soon!
                    </div>
                    <br> <br>

                </div>
                <div class="modal-footer">
                    <button class="btn" type="submit" name="submitLogOut"
                        value=""> Log Out
                    </button>
                    <button class="btn" data-dismiss="modal"
                        value="" style="background-color: #915664"> cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ##### End of Logout Modal ##### -->

<!--  ##### beginning Reset Password Modal ##### -->
<div class="modal fade" id="resetPwModal" role="dialog">
    <div class="modal-dialog" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <form enctype="multipart/form-data" method="POST" action="db.php" name="submitResetPw"
                onsubmit="return validate();">

                <div class="modal-header">
                    <h4 class="modal-title"> Reset Password </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <div>
                        <input type="text" name="username"
                            placeholder="username"
                            class="form-control">
                        <div><span id="username_error"></span></div>
                    </div>

                    <div style="height: 2rem; color: #818181; text-align: center; padding-top: 0.25rem">
                        OR
                    </div>

                    <input type="text" name="email" placeholder="email address" class="form-control"
                        style="margin-top: 0">
                    <div><span id="email_error"></span></div>

                    <br>

                </div>

                <div class="modal-footer" style="display: block; text-align: right">

                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <!-- data-bs-target="#resetPwModal" -->
                    <!-- data-bs-toggle="modal"  -->
                    <!-- data-bs-dismiss="modal -->
                    <!-- Reset Password -->
                    <input class="btn btn-success"
                        type="submit" id="submitResetPw">
                    </input>

                    <br>

                    <button class="btn"
                        data-bs-toggle="modal"
                        type="button"
                        data-bs-dismiss="modal"
                        data-bs-target="#loginModal"
                        style="width: auto; background-color: #915664" value="">
                        Log In
                    </button>

                    <button class="btn"
                        data-bs-toggle="modal"
                        type="button"
                        data-dismiss="modal"
                        data-bs-target="#signupModal"
                        style="width: auto; background-color: #915664" value="">
                        Sign Up
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- ##### End of Reset Password Reset Modal ##### -->


<!-- ##### beginning New Project Modal ##### -->
<div class="modal fade" id="newProjectModal" role="dialog">
    <div class="modal-dialog" role="document">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Create New Project </h4>
                <span>
                    <button type="button" class="close" data-dismiss="modal">

                    </button>
                </span>
            </div>
            <!-- create new project Modal Body -->
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="">

                    <div class="form-group">
                        <!--                        <div class="modal-header">-->

                        <input placeholder="Project title... (128 characters maximum)"
                            type="text" name="title_project"
                            class="form-control" required>
                        <!--                        </div>/**/-->
                    </div>

                    <div class="form-group">
                        <input placeholder="Short title... (10 characters maximum)"
                            type="text"
                            name="title_project_short"
                            class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label style="margin: 15px 0 0 0; color: dimgrey">Granted By:</label><br>
                        <div style="padding-left: 15px; color: dimgrey">
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input" id="nih"
                                    name="granted_by[]" value="NIH"> NIH
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                    name="granted_by[]" value="HHS"> HHS
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                    name="granted_by[]" value="NSF"> NSF
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                    name="granted_by[]" value="FDA"> FDA
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                    name="granted_by[]" value="FSU"> FSU
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                    name="granted_by[]" value=""> Other
                            </div>
                        </div>

                        <input placeholder="Grant number..." name="grant_number" class="input_field"
                            style="display: none; margin-top: 0">
                    </div>

                    <div class="form-group">
                        <label style="color: darkgrey; margin: 15px 0 0 0; width: 50%"> Project begins on date </label>
                        <input
                            type="date" name="date_begin" min="2015-01-01"
                            max="2050-12-31" class="input_field" style="margin: 0; color: dimgrey; ; width: 45%"
                            required>
                    </div>

                    <div class="form-group">
                        <label style="color: darkgrey; margin: 3px 0 0 0; width: 50% "> Project ends on date: </label>
                        <input
                            type="date" name="date_to_complete" min="2015-01-01"
                            max="2050-12-31" class="input_field"
                            style="margin: 0 0 15px; color: dimgrey; width: 45%"
                            required>
                    </div>

                    <input name="id_user" value="<?php echo $uid_hdsi; ?>" hidden>
                    <!--                    <input name="id_project" value="-->
                    <?php //echo $id_project; 
                    ?><!--" hidden>-->
                    <input name="token_id_project_creation" value="<?php echo $uid_hdsi . '_' . time(); ?>" hidden>
                    <input class="btn" type="submit" name="submitNewProject"
                        value="Create">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ##### end of create new project modal #####   -->