<?php
require 'classes/blc.php';
require_once 'nav.php';
global $message,$id;

$id=$_GET["id"];



$blc_contact= new blc_sop();


if ($blc_contact->ContactDelete($id)) {
	echo $message="Delete is successful";
}else{
	echo $message="Delete is not successful!";
}

echo ("<script>location.href='contactlist.php';</script>");

?>