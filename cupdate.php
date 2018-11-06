<?php
require("classes\blc.php");
require_once 'nav.php';
    
  

    if (isset($_POST['service']) && $_POST["service"] == "1") {
        $Reason = "1";
    } else {
        $Reason = '';
    }
    if (isset($_POST['product']) && $_POST["product"] == "2") {
        $Reason .= "2";
    } else {
        $Reason .= '';
    }
    if (isset($_POST['payment']) && $_POST["payment"] == "3") {
        $Reason .= "3";
    } else {
        $Reason .= '';
    }
    if (isset($_POST['other']) && $_POST["other"] == "4") {
        $Reason .= "4";
    } else {
        $Reason .= '';
    }



    $blc_contact = new blc_sop();
if ($blc_contact->ContactEdit($_POST["name"],$_POST["email"],$_POST["phone"], $_POST['gender'], $_POST["cont"], $Reason)) {
         echo "<div class=\"row\">";
            echo     "<div class=\"col-sm-4 col-xs-4 col-md-4 col-lg-4\"></div>";
            echo     "<div class=\"col-sm-4 col-xs-4 col-md-4 col-lg-4\"><h3 align=\"center\">Update  Successful !</h3></div>";
            echo     "<div class=\"col-sm-4 col-xs-4 col-md-4 col-lg-4\"></div>";
            echo "</div>";
    } else {
        echo $message = "Update not Successful!";
    }
?>
<form class="form-horizontal" action="contactlist.php" method="post">
    <button type="submit" class="btn btn-info" name="submit" value="submit" style="margin-left: 48%">OK</button>
</form>
