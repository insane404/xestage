<?php
include('../core.php');
require_once($ABSOLUTE_URL.'/includes/recaptchalib.php');
$action = $_POST['action'];
switch ($action){
    case 'short_form':
        if ($_POST["recaptcha_response_field"]) {
            $resp = recaptcha_check_answer($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);

            if ($resp->is_valid) {
                $name = $_POST['name'];
                $company = $_POST['company'];
                $website = $_POST['website'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $req = $_POST['req'];
                // multiple recipients
                $to  = 'jestingthomas@gmail.com' . ', '; // note the comma
                $to .= 'jestinthomas85@gmail.com';
                // subject
                $subject = 'URGENT Short Contact Form Email';
                // message
                $message = '
                <html>
                <head>
                    <title>Mail from Short Contact Form @xenialservices.com</title>
                </head>
                <body>
                    <p>Messsage Below</p>
                    <table width="60%" border="1">
                        <tr>
                            <td width="40%">Name</td><td width="60%">'.$name.'</td>
                        </tr>
                        <tr>
                            <td>Company</td><td>'.$company.'</td>
                        </tr>
                        <tr>
                            <td>Website</td><td>'.$website.'</td>
                        </tr>
                        <tr>
                            <td>Telephone</td><td>'.$tel.'</td>
                        </tr>
                        <tr>
                            <td>Email</td><td>'.$email.'</td>
                        </tr>
                        <tr>
                            <td>Requirement</td><td>'.$req.'</td>
                        </tr>
                    </table>
                </body>
                </html>
                ';
                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // Additional headers
                $headers .= 'To: Jestin <jestingthomas@gmail.com>, Jestin <jestinthomas85@gmail.com>' . "\r\n";
                $headers .= 'From: xenialservices.com <contact@xenialservices.com>' . "\r\n";
                /*$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
                $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/
                // Mail it
                mail($to, $subject, $message, $headers);
            } else {
                # set the error code so that we can display it
                $error = $resp->error;
                #incorrect-captcha-sol
            }
        }
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
        break;
    
    case 'full_form':
        if ($_POST["recaptcha_response_field"]) {
            $resp = recaptcha_check_answer($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);

            if ($resp->is_valid) {
                $inquiry_type = $_POST['inquiry_type'];
                $name = $_POST['name'];
                $company = $_POST['company'];
                $industry_type = $_POST['industry_type'];
                $you_are = $_POST['you_are'];
                $website = $_POST['website'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $country = $_POST['country'];
                $req = $_POST['req'];
                $hearing_location = $_POST['hearing_location'];
                // multiple recipients
                $to  = 'jestingthomas@gmail.com' . ', '; // note the comma
                $to .= 'jestinthomas85@gmail.com';
                // subject
                $subject = 'URGENT Full Contact Form Email';
                // message
                $message = '
                <html>
                <head>
                    <title>Mail from Full Contact Form @xenialservices.com</title>
                </head>
                <body>
                    <p>Messsage Below</p>
                    <table width="60%" border="1">
                        <tr>
                            <td width="40%">Inquiry Type</td><td width="60%">'.$inquiry_type.'</td>
                        </tr>
                        <tr>
                            <td width="40%">Name</td><td width="60%">'.$name.'</td>
                        </tr>
                        <tr>
                            <td>Company</td><td>'.$company.'</td>
                        </tr>
                        <tr>
                            <td>Industry</td><td>'.$industry_type.'</td>
                        </tr>
                        <tr>
                            <td> You are </td><td>'.$you_are.'</td>
                        </tr>
                        <tr>
                            <td>Website</td><td>'.$website.'</td>
                        </tr>
                        <tr>
                            <td>Telephone</td><td>'.$tel.'</td>
                        </tr>
                        <tr>
                            <td>Email</td><td>'.$email.'</td>
                        </tr>
                        <tr>
                            <td>Country</td><td>'.$country.'</td>
                        </tr>
                        <tr>
                            <td>Requirement</td><td>'.$req.'</td>
                        </tr>
                        <tr>
                            <td> How did you hear about us?</td><td>'.$hearing_location.'</td>
                        </tr>
                    </table>
                </body>
                </html>
                ';
                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // Additional headers
                $headers .= 'To: Jestin <jestingthomas@gmail.com>, Jestin <jestinthomas85@gmail.com>' . "\r\n";
                $headers .= 'From: xenialservices.com <contact@xenialservices.com>' . "\r\n";
                /*$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
                $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/
                // Mail it
                mail($to, $subject, $message, $headers);
            } else {
                # set the error code so that we can display it
                $error = $resp->error;
                #incorrect-captcha-sol
            }
        }
        
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
        break;
}
?>
