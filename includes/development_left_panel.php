<?php
switch($page){
    case '1':
        $select1 = 'class="current"';
        break;
    case '2':
        $select2 = 'class="current"';
        break;
    case '3':
        $select3 = 'class="current"';
        break;
    case '4':
        $select4 = 'class="current"';
        break;
    case '5':
        $select5 = 'class="current"';
        break;
    case '6':
        $select6 = 'class="current"';
        break;
    case '7':
        $select7 = 'class="current"';
        break;
    case '8':
        $select8 = 'class="current"';
        break;
    case '9':
        $select9 = 'class="current"';
        break;
    case '10':
        $select10 = 'class="current"';
        break;
}
?>
<ul>
    <li><a href="website_design.php" <?php echo $select1; ?>>Website Design</a></li>
    <li><a href="web_application_development.php" <?php echo $select2; ?>>Web Application Development</a></li>
    <li><a href="e-commerce.php" <?php echo $select3; ?>>E-Commerce</a></li>
    <li><a href="content_management_system.php" <?php echo $select4; ?>>Content Management System</a></li>
    <li><a href="testing_&_qa.php" <?php echo $select5; ?>>Testing & QA</a></li>
    <li><a href="#" <?php echo $select6; ?>>3D & Animation</a></li>
    <li><a href="internet_marketing.php" <?php echo $select7; ?>>Internet Marketing</a></li>
    <li><a href="iphone-application-development.php" <?php echo $select8 ?>>iPhone App Development</a></li>
    <li><a href="android-application-development-services.php" <?php echo $select9; ?>>Android App Development</a></li>
    <li><a href="software-development.php" <?php echo $select10; ?>>Software Development</a></li>
</ul>