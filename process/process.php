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
                $ackSubject = 'Acknowledgment from Xenial Technologies';
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
                $ackMessage = '
                <html>
                <head>
                    <title>Acknowledgment from Xenial Technologies</title>
                </head>
                <body>
                    <table width="560" cellspacing="0" cellpadding="0" style="margin-top:55px;border:1px solid #1570A6">
                    <tbody>
                        <tr>
                            <td>
                            <table width="558px" cellspacing="0" cellpadding="0" border="0" style="font-family:Verdana,Geneva,sans-serif;font-weight:normal;font-size:12px;line-height:18px">
                            <tbody>
                                <tr>
                                    <td height="76" style="background-repeat:no-repeat;background-color:#FFFFFF;padding-left:5px;padding-top:12px">
                                        <img style="float:left;display:block;width:130px;height:55px;color:#ffffff;font-size:18px" alt="HeadHonchos" src="http://www.xenialservices.com/images/logo.png">
                                    </td>
                                </tr>
                                <tr>
                                    <td height="4" bgcolor="#37728F" style="background:#1570A6;min-height:4px"></td>
                                </tr>
                                <tr>
                                    <td height="24" style="min-height:24px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;font-weight:bold;color:#575757;padding-left:10px;padding-right:10px;padding-bottom:10px">
                                            Dear '.$name.', </td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px">
                                        Thanks for showing your interest in our services, our Presales Executive will be getting in touch with you as soon as possible.
                                    </td>   
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px;padding-top:20px;padding-bottom:10px">
                                    <strong>The Xenial Team</strong><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px"> To contact us with more details, <a target="_blank" style="color:#37728f;text-decoration:none" href="http://www.xenialservices.com/contact_us.php">click here</a></td>
                                </tr>
                                <tr>
                                    <td height="4" bgcolor="#37728F" style="background:#1570A6;min-height:4px"></td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;line-height:18px;font-size:11px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px"><a target="_blank" style="color:#37728f;text-decoration:none;font-weight:bold" href="http://www.xenialservices.com/">Home</a> | <a target="_blank" style="color:#37728f;text-decoration:none;font-weight:bold" href="http://www.facebook.com/xenialtechnologies">Xenial @Facebook</a> | <a target="_blank" style="color:#37728f;text-decoration:none;font-weight:bold" href="http://twitter.com/XenialServices">Xenial @Twitter</a><br>
                                    This e-mail was sent to <a target="_blank" style="color:#37728f;text-decoration:none" href="mailto:'.$email.'">'.$email.'</a> from <a target="_blank" style="color:#37728f;text-decoration:none" href="mailto:contact@xenialservices.com">contact@xenialservices.com</a></td>
                                </tr>
                            </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </body>
                </html>
                ';
                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // Additional headers
                $headers .= 'To: Jestin <jestingthomas@gmail.com>, Jestin <jestinthomas85@gmail.com>' . "\r\n";
                $headers .= 'From: contact@xenialservices.com <contact@xenialservices.com>' . "\r\n";
                // Mail it
                mail($to, $subject, $message, $headers);
                
                $ackheaders  = 'MIME-Version: 1.0' . "\r\n";
                $ackheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // Additional headers
                $ackheaders .= 'To: '.$name.' <'.$email.'>, Jestin <jestinthomas85@gmail.com>' . "\r\n";
                $ackheaders .= 'From: contact@xenialservices.com <contact@xenialservices.com>' . "\r\n";
                mail($email, $ackSubject, $ackMessage, $ackheaders);
                $url = $_SERVER['HTTP_REFERER'].'?s=1';
            } else {
                # set the error code so that we can display it
                $error = $resp->error;
                //echo '<pre>111'.$error; print_r($error); die();
                #incorrect-captcha-sol
                $url = $_SERVER['HTTP_REFERER'].'?e='.$error;
            }
        }
        else
        {
            $url = $_SERVER['HTTP_REFERER'].'?e=null';
        }
        header("Location: ".$url);
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
                $ackSubject = 'Acknowledgment from Xenial Technologies';
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
                $ackMessage = '
                <html>
                <head>
                    <title>Acknowledgment from Xenial Technologies</title>
                </head>
                <body>
                    <table width="560" cellspacing="0" cellpadding="0" style="margin-top:55px;border:1px solid #1570A6">
                    <tbody>
                        <tr>
                            <td>
                            <table width="558px" cellspacing="0" cellpadding="0" border="0" style="font-family:Verdana,Geneva,sans-serif;font-weight:normal;font-size:12px;line-height:18px">
                            <tbody>
                                <tr>
                                    <td height="76" style="background-repeat:no-repeat;background-color:#FFFFFF;padding-left:5px;padding-top:12px">
                                        <img style="float:left;display:block;width:130px;height:55px;color:#ffffff;font-size:18px" alt="HeadHonchos" src="http://www.xenialservices.com/images/logo.png">
                                    </td>
                                </tr>
                                <tr>
                                    <td height="4" bgcolor="#37728F" style="background:#1570A6;min-height:4px"></td>
                                </tr>
                                <tr>
                                    <td height="24" style="min-height:24px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;font-weight:bold;color:#575757;padding-left:10px;padding-right:10px;padding-bottom:10px">
                                            Dear '.$name.', </td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px">
                                        Thanks for showing your interest in our services, our Presales Executive will be getting in touch with you as soon as possible.
                                    </td>   
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px;padding-top:20px;padding-bottom:10px">
                                    <strong>The Xenial Team</strong><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;font-size:12px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px"> To contact us with more details, <a target="_blank" style="color:#37728f;text-decoration:none" href="http://www.xenialservices.com/contact_us.php">click here</a></td>
                                </tr>
                                <tr>
                                    <td height="4" bgcolor="#37728F" style="background:#1570A6;min-height:4px"></td>
                                </tr>
                                <tr>
                                    <td style="font-family:Verdana,Geneva,sans-serif;line-height:18px;font-size:11px;color:#575757;font-weight:normal;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px"><a target="_blank" style="color:#37728f;text-decoration:none;font-weight:bold" href="http://www.xenialservices.com/">Home</a> | <a target="_blank" style="color:#37728f;text-decoration:none;font-weight:bold" href="http://www.facebook.com/xenialtechnologies">Xenial @Facebook</a> | <a target="_blank" style="color:#37728f;text-decoration:none;font-weight:bold" href="http://twitter.com/XenialServices">Xenial @Twitter</a><br>
                                    This e-mail was sent to <a target="_blank" style="color:#37728f;text-decoration:none" href="mailto:'.$email.'">'.$email.'</a> from <a target="_blank" style="color:#37728f;text-decoration:none" href="mailto:contact@xenialservices.com">contact@xenialservices.com</a></td>
                                </tr>
                            </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
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
                // Mail it
                mail($to, $subject, $message, $headers);
                
                $ackheaders  = 'MIME-Version: 1.0' . "\r\n";
                $ackheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // Additional headers
                $ackheaders .= 'To: '.$name.' <'.$email.'>, Jestin <jestinthomas85@gmail.com>' . "\r\n";
                $ackheaders .= 'From: contact@xenialservices.com <contact@xenialservices.com>' . "\r\n";
                mail($email, $ackSubject, $ackMessage, $ackheaders);
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
