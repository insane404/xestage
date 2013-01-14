<?php
ini_set('display_errors', 0);
//echo $_SERVER['HTTP_HOST'];
if($_SERVER['HTTP_HOST']=='localhost')
{
    $ABSOLUTE_URL = $_SERVER['DOCUMENT_ROOT'].'/xestage';
}
else// if($_SERVER['HTTP_HOST']=='www.xenialservices.com')
{
    $ABSOLUTE_URL = $_SERVER['DOCUMENT_ROOT'];
}
?>