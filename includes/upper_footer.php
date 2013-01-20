<?php 
require_once($ABSOLUTE_URL.'/includes/recaptchalib.php');
?>
<script type="text/javascript">
    var RecaptchaOptions = {
    theme : 'custom',
    custom_theme_widget: 'recaptcha_widget'
};
</script>
<div class="footer_inner">
    <?php
    if($contact_page!='1')
    {
    ?>
    <div class="contactform">
        <form id="Form" action="process/process.php" method="post">
            <input type="hidden" name="action" value="short_form" />
            <div class="form-h">&nbsp;Contact us now! (We'll call you straight back)</div>
            <div class="form">
                <div class="formdiv">
                    <div class="field1">&nbsp;Name</div>
                    <div class="field2">
                        <input type="text" name="name">
                    </div>
                    <div class="field1">&nbsp;Company</div>
                    <div class="field2">
                        <input type="text" name="company">
                    </div>
                    <div class="field1">&nbsp;Website</div>
                    <div class="field2">
                        <input type="text" name="website">
                    </div>
                    <div class="field1">&nbsp;Requirement</div>
                    <div class="field3">
                        <textarea style="width:290px; resize: none;" class="textarea" rows="4" name="req"></textarea>
                    </div>
                </div>
                <div class="formdiv">
                    <div class="field1">&nbsp;Telephone</div>
                    <div class="field2">
                        <input type="text" name="tel">
                    </div>
                    <div class="field1">&nbsp;Email</div>
                    <div class="field2">
                        <input type="text" onkeypress="javascript:et();" name="email">
                    </div>
                    <div class="field1">&nbsp;reCAPTCHA</div>
                    <div class="field2" style="clear: both;">
                        <div id="recaptcha_widget" style="display:none">
                        <div id="recaptcha_image" style="border: 1px #000000 solid;"></div>
                        <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>

                        <span class="recaptcha_only_if_image" style="color: #0093DA">Enter the words above:</span>
                        <span class="recaptcha_only_if_audio" style="color: #0093DA">Enter the numbers you hear:</span>

                        <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

                        <div><a href="javascript:Recaptcha.reload()" style="color: #0093DA">Get another CAPTCHA</a></div>
                        <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')" style="color: #0093DA">Get an audio CAPTCHA</a></div>
                        <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')" style="color: #0093DA">Get an image CAPTCHA</a></div>

                        <!--<div><a href="javascript:Recaptcha.showhelp()" style="color: #0093DA">Help</a></div>-->

                        </div>

                        <script type="text/javascript"
                            src="http://www.google.com/recaptcha/api/challenge?k=<?php echo $publickey ?>">
                        </script>
                        <noscript>
                        <iframe src="http://www.google.com/recaptcha/api/noscript?k=<?php echo $publickey ?>"
                                height="200" width="350" frameborder="0"></iframe><br>
                        <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                        </textarea>
                        <input type="hidden" name="recaptcha_response_field"
                                value="manual_challenge">
                        </noscript>
                    </div>
                    <div class="field3"><input type="submit" class="button" value="Send"></div>
                </div>
            </div>
        </form>
    </div>
    <div href="#" id="social-large" class="module dark">
        <h3 class="header-white">CONNECT WITH US</h3>
        <a target="_blank" href="http://www.facebook.com/xenialtechnologies" id="social-fb"></a>
        <a target="_blank" href="http://www.twitter.com/XenialServices" id="social-twit"></a>
        <a target="_blank" href="http://www.linkedin.com/xenialtechnologies" id="social-linked"></a>
        <a target="_blank" href="http://plus.google.com/112096400134772836764" id="social-google-plus"></a>
    </div>
    <?php
    }
    ?>
</div>
<div class="clear"></div>