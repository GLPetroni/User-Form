<?php session_start(); //Required by securimage CA{TCHA?>
<?php
session_start();
if($_POST) {
    function died($error) {
        
        echo '<script type="text/javascript">';
        echo 'alert("We are very sorry, but there were error(s) found with the form you submitted.  Please go back to the previus page (by pressing the back button in your browser) and fix these errors.  Please also check that the CAPTCHA is correct as well.")';
        echo '</script>';
    die();
    }

    $email_title = "OSU ACTF Class Resource Request";
    $email_body = "<div>";
    
    if(isset($_POST['first-name'])) {
        $first_name = $_POST['first-name'];
        $email_body .= "<div>
            <label><b>First Name:</b></label>&nbsp;<span>".$first_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>First Name:</b></label>&nbsp;<span>".$first_name."</span>
            </div>";
    }

    if(isset($_POST['last-name'])) {
        $last_name = filter_var($_POST['last-name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>Last Name:</b></label>&nbsp;<span>".$last_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Last Name:</b></label>&nbsp;<span>".$last_name."</span>
            </div>";
    }

    if(isset($_POST['email'])) {
        $_email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
            <label><b>Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
    }

    if(isset($_POST['other'])) {
        $class_name = filter_var($_POST['other'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>Other department:</b></label>&nbsp;<span>".$class_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Other department:</b></label>&nbsp;<span>".$class_name."</span>
            </div>";
    }

    if(isset($_POST['class_name'])) {
        $class_name = filter_var($_POST['class_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>Class Name:</b></label>&nbsp;<span>".$class_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Class Name:</b></label>&nbsp;<span>".$class_name."</span>
            </div>";
    }

    if(isset($_POST['college_name'])) {
        $college_name = filter_var($_POST['college_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>College Name:</b></label>&nbsp;<span>".$college_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>College Name:</b></label>&nbsp;<span>".$college_name."</span>
            </div>";
    }

    if(isset($_POST['ta_name1'])) {
        $ta_name = filter_var($_POST['ta_name1'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>TA Name:</b></label>&nbsp;<span>".$ta_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>TA Name:</b></label>&nbsp;<span>".$ta_name."</span>
            </div>";
    }

    if(isset($_POST['ta_email_1'])) {
        $_email = filter_var($_POST['ta_email_1'], FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
            <label><b>TA Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
    }

    if(isset($_POST['ta_name2'])) {
        $ta_name = filter_var($_POST['ta_name2'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>TA Name:</b></label>&nbsp;<span>".$ta_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>TA Name:</b></label>&nbsp;<span>".$ta_name."</span>
            </div>";
    }

    if(isset($_POST['ta_email_2'])) {
        $_email = filter_var($_POST['ta_email_2'], FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
            <label><b>TA Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
    }

    if(isset($_POST['ta_name3'])) {
        $ta_name = filter_var($_POST['ta_name3'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>TA Name:</b></label>&nbsp;<span>".$ta_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>TA Name:</b></label>&nbsp;<span>".$ta_name."</span>
            </div>";
    }

    if(isset($_POST['ta_email_3'])) {
        $_email = filter_var($_POST['ta_email_3'], FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
            <label><b>TA Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Email:</b></label>&nbsp;<span>".$_email."</span>
            </div>";
    }

    if(isset($_POST['End_date'])) {
        $date= filter_var($_POST['End_date'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>Expected end date:</b></label>&nbsp;<span>".$date."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Expected end date:</b></label>&nbsp;<span>".$date."</span>
            </div>";
    }

    if(isset($_POST['software_need'])) {
        $software_need= filter_var($_POST['software_need'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>Software Needed:</b></label>&nbsp;<span>".$software_need."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Software Needed:</b></label>&nbsp;<span>".$software_need."</span>
            </div>";
    }

    if(isset($_POST['memory-cap'])) {
        $pay = filter_var($_POST['memory-cap'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>Payment Method:</b></label>&nbsp;<span>".$pay."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Payment Method:</b></label>&nbsp;<span>".$pay."</span>
            </div>";
    }

    if(isset($_POST['storage-cap'])) {
        $storage = filter_var($_POST['storage-cap'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>Storage Needed:</b></label>&nbsp;<span>".$storage."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Storage Needed:</b></label>&nbsp;<span>".$storage."</span>
            </div>";
    }

    if(isset($_POST['college_name'])) {
        $college_name = filter_var($_POST['college_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
            <label><b>College Name:</b></label>&nbsp;<span>".$college_name."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>College Name:</b></label>&nbsp;<span>".$college_name."</span>
            </div>";
    }

    if(isset($_POST['gpu'])) {
        $gpu = 'yes';
        $email_body .= "<div>
            <label><b>GPU Resorces Needed:</b></label>&nbsp;<span>".$gpu."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>GPU Resorces Needed:</b></label>&nbsp;<span>".$gpu."</span>
            </div>";
    }

    if(isset($_POST['soft'])) { 
        $soft = 'yes';
        $email_body .= "<div>
            <label><b>Software Management Needed:</b></label>&nbsp;<span>".$soft."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Software Management Needed:</b></label>&nbsp;<span>".$soft."</span>
            </div>";
    }

    if(isset($_POST['onesup'])) { 
        $one = 'yes';
        $email_body .= "<div>
            <label><b>One on One Support Needed:</b></label>&nbsp;<span>".$one."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>One on One Support Needed:</b></label>&nbsp;<span>".$one."</span>
            </div>";
    }

    if(isset($_POST['webhost'])) { 
        $web = 'yes';
        $email_body .= "<div>
            <label><b>Web Hosting Needed:</b></label>&nbsp;<span>".$web."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Web Hosting Needed:</b></label>&nbsp;<span>".$web."</span>
            </div>";
    }
    if(isset($_POST['total_cost'])) {
        $cost = filter_var($_POST['total_cost'], FILTER_SANITIZE_NUMBER_INT);
        $email_body .= "<div>
            <label><b>Total Cost:</b></label>&nbsp;<span>".$cost."</span>
            </div>";
        $user_email_body .= "<div>
            <label><b>Total Cost:</b></label>&nbsp;<span>".$cost."</span>
            </div>";
    }     
    //captcha validation
    include '../securimage/securimage.php';
    $securimage = new Securimage();
    if ($securimage->check($_POST['captcha_code']) == false){
        $error_message .= 'The security code entered was incorrect.<br />';
    }
    if(strlen($error_message) > 0) {
        died($error_message);
    }


    $recipient = "petronig@oregonstate.edu";
    $recipient2 = $_POST['email'];
    /*$recipient = "Chris.Sullivan@oregonstate.edu";*/

    $email_body .= "</div>";
    $user_email_body .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: Support  <support@cqls.oregonstate.edu>' . "\r\n";

    @mail($recipient, $email_title, $email_body, $headers); 
    @mail($recipient2, $email_title, $user_email_body, $headers); 
    

}
header("Location: ./index.php");
?>
