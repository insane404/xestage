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
    /*case '4':
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
        break;*/
}
?>
<ul>
    <li><a href="php.php" <?php echo $select1; ?>>PHP</a></li>
    <li><a href="cakephp.php" <?php echo $select2; ?>>CakePHP</a></li>
    <li><a href="wordpress.php" <?php echo $select3; ?>>WordPress</a></li>
</ul>