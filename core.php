<?php
ini_set('display_errors', 0);
//echo $_SERVER['HTTP_HOST'];
if($_SERVER['HTTP_HOST']=='localhost')
{
    $ABSOLUTE_URL = $_SERVER['DOCUMENT_ROOT'].'/xestage';
    $publickey = "6LdDHdoSAAAAALgL7vGZl-ccxehWjX3HO5EHQN1y";
    $privatekey = "6LdDHdoSAAAAAHPnOqu4dRHLG98oSoBBvrkpVCgS";
}
else// if($_SERVER['HTTP_HOST']=='www.xenialservices.com')
{
    $ABSOLUTE_URL = $_SERVER['DOCUMENT_ROOT'];
    $publickey = "6Lc_VNISAAAAAB1L2PazGH-NewqoBdV2D1rLwCs4";
    $privatekey = "6Lc_VNISAAAAACBlHMK6W4G5gG4dzDTTAns44Ddz";
}
?>