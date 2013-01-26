<?php
include('core.php');
require_once($ABSOLUTE_URL.'/includes/recaptchalib.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>

<title>Xenial Technologies</title>

<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<?php include($ABSOLUTE_URL.'/includes/analyticstracking.php'); ?>
<script type="text/javascript">
    var RecaptchaOptions = {
    theme : 'custom',
    custom_theme_widget: 'recaptcha_widget'
};
</script>
</head>
<body>
<div id="header-inner">
    <?php include($ABSOLUTE_URL.'/includes/header_innerpages.php'); ?>
</div>

<div id="content">
  <div class="inner_content margin-t-min-35" style=" border-top-left-radius:5px; border-top-right-radius:5px;">
   <div class="flt wid675">
    <p>&nbsp;</p>
    <span class="headings">Contact Us</span>
    <div class="contactform">
        <form id="Form" action="process/process.php" method="post">
            <input type="hidden" name="action" value="full_form" />
            <div class="form-contact">
                <div class="formdiv-contact">
                    <div class="field1">&nbsp;Select Inquiry Type</div>
                    <div class="field4">
                        <select name="inquiry_type" class="select">
                            <option value="" selected="selected">Select Inquiry Type</option>
                            <option value="Alliances">Alliances</option>
                            <option value="Alumni">Alumni</option>
                            <option value="Career Seekers">Career Seekers</option>
                            <option value="Investor Relations">Investor Relations</option>
                            <option value="Media">Media</option>
                            <option value="Request for Services">Request for Services</option>
                        </select>
                    </div>
                    <div class="field1">&nbsp;Name</div>
                    <div class="field2">
                        <input type="text" name="name">
                    </div>
                    <div class="field1">&nbsp;Company</div>
                    <div class="field2">
                        <input type="text" name="company">
                    </div>
                    <div class="field1">&nbsp;Industry</div>
                    <div class="field4">
                        <select name="industry_type" class="select">
                                <option value="">Select your industry</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation">Aviation</option>
                                <option value="Banking">Banking</option>
                                <option value="Capital Markets">Capital Markets</option>
                                <option value="Cards &amp; Payments">Cards &amp; Payments</option>
                                <option value="Chemicals">Chemicals</option>
                                <option value="Compliance &amp; Risk Management">Compliance &amp; Risk Management</option>
                                <option value="Consulting">Consulting</option>
                                <option value="Consumer Products">Consumer Products</option>
                                <option value="Distribution">Distribution</option>
                                <option value="Energy">Energy</option>
                                <option value="Federal Government">Federal Government</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Health - Managed Care">Health - Managed Care</option>
                                <option value="Health - Providers">Health - Providers</option>
                                <option value="High-Tech">High-Tech</option>
                                <option value="Higher Education">Higher Education</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Life Sciences">Life Sciences</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Media">Media</option>
                                <option value="None">None</option>
                                <option value="Other">Other</option>
                                <option value="Public Sector">Public Sector</option>
                                <option value="Retail">Retail</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Wealth Management">Wealth Management</option>
                        </select>
                    </div>
                    <div class="field1">&nbsp;You are </div>
                    <div class="field4">
                        <select name="you_are" class="select">
                            <option selected="selected" value="null">Select</option>
                            <option value="Potential client">Potential client </option>
                            <option value="Customer">Customer</option>
                            <option value="Stock holders">Stock holder</option>
                            <option value="Analyst">Analyst</option>
                            <option value="Alliance partner / seeker">Alliance partner/seeker</option>
                            <option value="Former employee">Former employee</option>
                            <option value="Academician/ Researcher">Academician/Researcher</option>
                            <option value="Employee">Employee</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="field1">&nbsp;Website</div>
                    <div class="field2">
                        <input type="text" name="website">
                    </div>
                    <div class="field1">&nbsp;Telephone</div>
                    <div class="field2">
                        <input type="text" name="tel">
                    </div>
                    <div class="field1">&nbsp;Email</div>
                    <div class="field2">
                        <input type="text"name="email">
                    </div>
                    <div class="field1">&nbsp;Country</div>
                    <div class="field4">
                        <select name="country" class="select">
                            <option selected="selected" value="null"> Select </option>
                            <option value="Afghanistan"> Afghanistan </option>
                            <option value="Albania"> Albania </option>
                            <option value="Algeria"> Algeria </option>
                            <option value="American Samoa"> American Samoa </option>
                            <option value="Andorra"> Andorra </option>
                            <option value="Angola"> Angola </option>
                            <option value="Anguilla"> Anguilla </option>
                            <option value="Antarctica"> Antarctica </option>
                            <option value="Argentina"> Argentina </option>
                            <option value="Armenia"> Armenia </option>
                            <option value="Aruba"> Aruba </option>
                            <option value="Austria"> Austria </option>
                            <option value="Australia"> Australia </option>
                            <option value="Azerbaijan"> Azerbaijan </option>
                            <option value="Bahamas"> Bahamas </option>
                            <option value="Bahrain"> Bahrain </option>
                            <option value="Bangladesh"> Bangladesh </option>
                            <option value="Barbados"> Barbados </option>
                            <option value="Belarus"> Belarus </option>
                            <option value="Belgium"> Belgium </option>
                            <option value="Belize"> Belize </option>
                            <option value="Benin"> Benin </option>
                            <option value="Bermuda"> Bermuda </option>
                            <option value="Bhutan"> Bhutan </option>
                            <option value="Bolivia"> Bolivia </option>
                            <option value="Botswana"> Botswana </option>
                            <option value="Bouvet Island"> Bouvet Island </option>
                            <option value="Brazil"> Brazil </option>
                            <option value="Brunei"> Brunei </option>
                            <option value="Bulgaria"> Bulgaria </option>
                            <option value="Burkina Faso"> Burkina Faso </option>
                            <option value="Burundi"> Burundi </option>
                            <option value="Cambodia"> Cambodia </option>
                            <option value="Cameroon"> Cameroon </option>
                            <option value="Canada"> Canada </option>
                            <option value="Cape Verde"> Cape Verde </option>
                            <option value="Cayman Islands"> Cayman Islands </option>
                            <option value="Chad"> Chad </option>
                            <option value="Chile"> Chile </option>
                            <option value="China"> China </option>
                            <option value="Colombia"> Colombia </option>
                            <option value="Comoros"> Comoros </option>
                            <option value="Congo"> Congo </option>
                            <option value="Cook Islands"> Cook Islands </option>
                            <option value="Costa Rica"> Costa Rica </option>
                            <option value="Croatia">Croatia </option>
                            <option value="Cuba"> Cuba </option>
                            <option value="Cyprus"> Cyprus </option>
                            <option value="Czech Republic"> Czech Republic </option>
                            <option value="Denmark"> Denmark </option>
                            <option value="Djibouti"> Djibouti </option>
                            <option value="Dominica"> Dominica </option>
                            <option value="East Timor"> East Timor </option>
                            <option value="Ecuador"> Ecuador </option>
                            <option value="Egypt"> Egypt </option>
                            <option value="El Salvador"> El Salvador </option>
                            <option value="Eritrea"> Eritrea </option>
                            <option value="Estonia"> Estonia </option>
                            <option value="Ethiopia"> Ethiopia </option>
                            <option value="Faroe Islands"> Faroe Islands </option>
                            <option value="Fiji"> Fiji </option>
                            <option value="Finland"> Finland </option>
                            <option value="France"> France </option>
                            <option value="French Guiana"> French Guiana </option>
                            <option value="Gabon"> Gabon </option>
                            <option value="Gambia"> Gambia </option>
                            <option value="Georgia"> Georgia </option>
                            <option value="Germany"> Germany </option>
                            <option value="Ghana"> Ghana </option>
                            <option value="Gibraltar"> Gibraltar </option>
                            <option value="Greece"> Greece </option>
                            <option value="Greenland"> Greenland </option>
                            <option value="Grenada"> Grenada </option>
                            <option value="Guadeloupe"> Guadeloupe </option>
                            <option value="Guam"> Guam </option>
                            <option value="Guatemala"> Guatemala </option>
                            <option value="Guinea"> Guinea </option>
                            <option value="Guinea-Bissau"> Guinea-Bissau </option>
                            <option value="Guyana"> Guyana </option>
                            <option value="Haiti"> Haiti </option>
                            <option value="Honduras"> Honduras </option>
                            <option value="Hong Kong"> Hong Kong </option>
                            <option value="Hungary"> Hungary </option>
                            <option value="Iceland"> Iceland </option>
                            <option value="India"> India </option>
                            <option value="Indonesia"> Indonesia </option>
                            <option value="Iran"> Iran </option>
                            <option value="Iraq"> Iraq </option>
                            <option value="Ireland"> Ireland </option>
                            <option value="Israel"> Israel </option>
                            <option value="Italy"> Italy </option>
                            <option value="Jamaica"> Jamaica </option>
                            <option value="Japan"> Japan </option>
                            <option value="Jordan"> Jordan </option>
                            <option value="Kazakhstan"> Kazakhstan </option>
                            <option value="Kenya"> Kenya </option>
                            <option value="Kiribati"> Kiribati </option>
                            <option value="Korea"> Korea </option>
                            <option value="Kuwait"> Kuwait </option>
                            <option value="Kyrgyzstan"> Kyrgyzstan </option>
                            <option value="Laos"> Laos </option>
                            <option value="Latvia"> Latvia </option>
                            <option value="Lebanon"> Lebanon </option>
                            <option value="Lesotho"> Lesotho </option>
                            <option value="Liberia"> Liberia </option>
                            <option value="Libya"> Libya </option>
                            <option value="Lithuania"> Lithuania </option>
                            <option value="Luxembourg"> Luxembourg </option>
                            <option value="Macau"> Macau </option>
                            <option value="Macedonia"> Macedonia </option>
                            <option value="Madagascar"> Madagascar </option>
                            <option value="Malawi"> Malawi </option>
                            <option value="Malaysia"> Malaysia </option>
                            <option value="Maldives"> Maldives </option>
                            <option value="Mali"> Mali </option>
                            <option value="Malta"> Malta </option>
                            <option value="Martinique"> Martinique </option>
                            <option value="Mauritania"> Mauritania </option>
                            <option value="Mauritius"> Mauritius </option>
                            <option value="Mayotte"> Mayotte </option>
                            <option value="Mexico"> Mexico </option>
                            <option value="Micronesia"> Micronesia </option>
                            <option value="Moldova"> Moldova </option>
                            <option value="Monaco"> Monaco </option>
                            <option value="Mongolia"> Mongolia </option>
                            <option value="Montserrat"> Montserrat </option>
                            <option value="Morocco"> Morocco </option>
                            <option value="Mozambique"> Mozambique </option>
                            <option value="Myanmar"> Myanmar </option>
                            <option value="Namibia"> Namibia </option>
                            <option value="Nauru"> Nauru </option>
                            <option value="Nepal"> Nepal </option>
                            <option value="Netherlands"> Netherlands </option>
                            <option value="Neutral Zone"> Neutral Zone </option>
                            <option value="New Caledonia"> New Caledonia </option>
                            <option value="New Zealand"> New Zealand </option>
                            <option value="Nicaragua"> Nicaragua </option>
                            <option value="Niger"> Niger </option>
                            <option value="Nigeria"> Nigeria </option>
                            <option value="Niue"> Niue </option>
                            <option value="Norfolk Island"> Norfolk Island </option>
                            <option value="Norway"> Norway </option>
                            <option value="Oman"> Oman </option>
                            <option value="Pakistan"> Pakistan </option>
                            <option value="Palau"> Palau </option>
                            <option value="Panama"> Panama </option>
                            <option value="Papua New Guinea"> Papua New Guinea </option>
                            <option value="Paraguay"> Paraguay </option>
                            <option value="Peru"> Peru </option>
                            <option value="Philippines"> Philippines </option>
                            <option value="Pitcairn"> Pitcairn </option>
                            <option value="Poland"> Poland </option>
                            <option value="Portugal"> Portugal </option>
                            <option value="Puerto Rico"> Puerto Rico </option>
                            <option value="Qatar"> Qatar </option>
                            <option value="Reunion"> Reunion </option>
                            <option value="Romania"> Romania </option>
                            <option value="Rwanda"> Rwanda </option>
                            <option value="Saint Lucia"> Saint Lucia </option>
                            <option value="Samoa"> Samoa </option>
                            <option value="San Marino"> San  Marino </option>
                            <option value="Saudi Arabia"> Saudi Arabia </option>
                            <option value="Senegal"> Senegal </option>
                            <option value="Seychelles"> Seychelles </option>
                            <option value="Sierra Leone"> Sierra Leone </option>
                            <option value="Singapore"> Singapore </option>
                            <option value="Solomon Islands"> Solomon Islands </option>
                            <option value="Somalia"> Somalia </option>
                            <option value="South Africa"> South Africa </option>
                            <option value="Slovak Republic"> Slovak Republic </option>
                            <option value="Slovenia"> Slovenia </option>
                            <option value="Spain"> Spain </option>
                            <option value="Sri Lanka"> Sri Lanka </option>
                            <option value="St. Helena"> St. Helena </option>
                            <option value="Sudan"> Sudan </option>
                            <option value="Suriname"> Suriname </option>
                            <option value="Swaziland"> Swaziland </option>
                            <option value="Sweden"> Sweden </option>
                            <option value="Switzerland"> Switzerland </option>
                            <option value="Syria"> Syria </option>
                            <option value="Taiwan"> Taiwan </option>
                            <option value="Tajikistan"> Tajikistan </option>
                            <option value="Tanzania"> Tanzania </option>
                            <option value="Thailand"> Thailand </option>
                            <option value="Togo"> Togo </option>
                            <option value="Tokelau"> Tokelau </option>
                            <option value="Tonga"> Tonga </option>
                            <option value="Tunisia"> Tunisia </option>
                            <option value="Turkey"> Turkey </option>
                            <option value="Turkmenistan"> Turkmenistan </option>
                            <option value="Tuvalu"> Tuvalu </option>
                            <option value="Uganda"> Uganda </option>
                            <option value="Ukraine"> Ukraine </option>
                            <option value="United Arab Emirate"> United Arab Emirate </option>
                            <option value="United Kingdom"> United Kingdom </option>
                            <option value="United States"> United States </option>
                            <option value="Uruguay"> Uruguay </option>
                            <option value="USSR (former)"> USSR (former) </option>
                            <option value="Uzbekistan"> Uzbekistan </option>
                            <option value="Vanuatu"> Vanuatu </option>
                            <option value="Venezuela"> Venezuela </option>
                            <option value="Viet Nam"> Viet Nam </option>
                            <option value="Western Sahara"> Western Sahara </option>
                            <option value="Yemen"> Yemen </option>
                            <option value="Yugoslavia"> Yugoslavia </option>
                            <option value="Zaire"> Zaire </option>
                            <option value="Zambia"> Zambia </option>
                            <option value="Zimbabwe"> Zimbabwe </option>
                        </select>
                    </div>
                    <div class="field1">&nbsp;Requirement</div>
                    <div class="field3">
                        <textarea style="resize: none;" class="textarea" rows="4" name="req"></textarea>
                    </div>
                    <div class="field1">&nbsp;How did you hear about us?</div>
                    <div class="field4">
                        <select name="hearing_location" class="select">
                            <option selected="selected" value="null">Select</option>
                            <option value="Print Advertisement">Print Advertisement</option>
                            <option value="Articles and Reviews">Articles and Reviews</option>
                            <option value="Events">Events</option>
                            <option value="Search Engine">Search Engines</option>
                            <option value="Web Directories">Web Directories</option>
                            <option value="Weblinks">Web Links</option>
                            <option value="Recommendations">Recommendations</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="field1">&nbsp;reCAPTCHA</div>
                    <div class="field2" style="font-family: OpenSansLight,sarif;">
                        <?php
                        //echo recaptcha_get_html($publickey, $error);
                        ?>
                        <div id="recaptcha_widget" style="display:none">
                        <div id="recaptcha_image" style="border: 1px #000000 solid;"></div>
                        <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>

                        <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" style="float: left; width: 290px;" />
                        
                        <div style="float: left; margin-top: 4px;">
                            <a href="javascript:Recaptcha.reload()" style="color: #9DABB1;">
                                <img src="images/reload.png" title="Get another CAPTCHA" alt="Get another CAPTCHA" width="20" height="20" />
                            </a>
                        </div>
                        <div class="recaptcha_only_if_image" style="float: left; margin-top: 4px;">
                            <a href="javascript:Recaptcha.switch_type('audio')" style="color: #9DABB1">
                                <img src="images/audio.png" title="Get an audio CAPTCHA" alt="Get an audio CAPTCHA" width="20" height="20" />
                            </a>
                        </div>
                        <div class="recaptcha_only_if_audio" style="float: left; margin-top: 4px;">
                            <a href="javascript:Recaptcha.switch_type('image')" style="color: #9DABB1">
                                <img src="images/image.png" title="Get an image CAPTCHA" alt="Get an image CAPTCHA" width="20" height="20" />
                            </a>
                        </div>
                        
                        <div style="clear: both;"></div>
                        <span class="recaptcha_only_if_image" style="color: #9DABB1">Enter the words above:</span>
                        <span class="recaptcha_only_if_audio" style="color: #9DABB1">Enter the numbers you hear:</span>

                        <!--<div><a href="javascript:Recaptcha.showhelp()" style="color: #9DABB1">Help</a></div>-->

                        </div>

                        <script type="text/javascript"
                            src="http://www.google.com/recaptcha/api/challenge?k=<?php echo $publickey ?>">
                        </script>
                        <noscript>
                        <iframe src="http://www.google.com/recaptcha/api/noscript?k=<?php echo $publickey ?>"
                                height="300" width="500" frameborder="0"></iframe><br>
                        <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                        </textarea>
                        <input type="hidden" name="recaptcha_response_field"
                                value="manual_challenge">
                        </noscript>
                    </div>
                    <div class="field1" style="background-color: #FFFFFF;"></div>
                    <div class="field2">
                        <input type="submit" class="button" value="Submit" style="width: 100px;">
                    </div>
                </div>
            </div>
        </form>
    </div>
   </div>
    <div class="flt middle margin-t-80">
        <div href="#" id="social-large" class="module dark" style="margin-top: 1px; height: 288px;">
            <h3 class="header-white" style="margin: 10px 0px 10px 0px;">CONNECT WITH US</h3>
            <div style="margin: 8px;">
                <a target="_blank" href="http://www.facebook.com/xenialtechnologies" id="social-fb" style="float: left;"></a>
                <a target="_blank" href="http://www.facebook.com/xenialtechnologies" class="social-text">Like us on Facebook</a>
            </div>
            <div class="clear"></div>
            <div style="margin: 8px;">
                <a target="_blank" href="www.twitter.com/XenialServices" id="social-twit" style="float: left;"></a>
                <a target="_blank" href="www.twitter.com/XenialServices" class="social-text">Follow us on Twitter</a>
            </div>
            <div class="clear"></div>
            <div style="margin: 8px;">
                <a target="_blank" href="http://www.linkedin.com/xenialtechnologies" id="social-linked" style="float: left;"></a>
                <a target="_blank" href="http://www.linkedin.com/xenialtechnologies" class="social-text">Join us on LinkedIn</a>
            </div>
            <!--<a target="_blank" href="http://www.linkedin.com/xenialtechnologies" id="social-google-plus"></a>-->
        </div>
    </div>
    
    <div class="clear"></div>
    <div class="spacer20"></div>
    <div class="clear"></div>

  </div>
</div>
<div class="clear"></div>
<div class="footer-upper">
    <?php 
    $contact_page = 1;
    include($ABSOLUTE_URL.'/includes/upper_footer.php'); 
    ?>
</div>
<div class="clear"></div>
<div class="footer">
    <?php include($ABSOLUTE_URL.'/includes/lower_footer.php'); ?>
</div>
<div class="clear"></div>

</body>
</html>