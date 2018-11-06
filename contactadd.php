<?php

include 'classes/blc.php';
include 'nav.php';
if (isset($_POST["submit"])) {  

$Sname = new blc_sop();

    if (isset($_POST['service']) && $_POST["service"] == "1") {
        $reason = "1";
    } else {
        $reason = '';
    }
    if (isset($_POST['product']) && $_POST["product"] == "2") {
        $reason.= "2";
    } else {
        $reason.= '';
    }
    if (isset($_POST['payment']) && $_POST["payment"] == "3") {
        $reason.= "3";
    } else {
        $reason.= '';
    }
    if (isset($_POST['other']) && $_POST["other"] == "4") {
        $reason.= "4";
    } else {
        $reason.= '';
    }

    
 $message='';
if ($Sname->contactSave($_POST["name"],$_POST["email"],$_POST["ph"], $_POST['gender'], $_POST["cont"],$reason)) {
               
            echo "<div class=\"row\">";
            echo     "<div class=\"col-sm-4 col-xs-4 col-md-4 col-lg-4\"></div>";
            echo     "<div class=\"col-sm-4 col-xs-4 col-md-4 col-lg-4\"><h3 align=\"center\">Saving Successful !</h3></div>";
            echo     "<div class=\"col-sm-4 col-xs-4 col-md-4 col-lg-4\"></div>";
            echo "</div>";
} else {
    echo $message = "Saving is not Successful!";
}

}
?>
<form class="form-horizontal" action="contactlist.php" method="post">
  <input type="submit" name="submit" value="checklist" align="center" class="btn btn-primary" 
  style="margin-left: 45%">
</form>
