<?php
require("classes\blc.php");
require_once ("nav.php");
global $message, $name, $id, $gender, $mail, $phone, $country, $reason;
    
    $id = $_GET['id'];

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $phone = $_GET['phone'];

    if ($_GET['gender'] == 1)
        $male = 'checked';
    else
        $male = NULL;
    if ($_GET['gender'] == 2)
        $female = 'checked';
    else
        $female = NULL;

    if ($_GET['country'] == 1)
        $myn = 'selected';
    else
        $myn = NULL;

    if ($_GET['country'] == 2)
        $jp = 'selected';
    else
        $jp = NULL;

    if ($_GET['country'] == 3)
        $tl = 'selected';
    else
        $tl = NULL;

    if ($_GET['country'] == 4)
        $ch = 'selected';
    else
        $ch = NULL;

    if ($_GET['country'] == 5)
        $us = 'selected';
    else
        $us = NULL;

    if ($_GET['country'] == 6)
        $uk = 'selected';
    else
        $uk = NULL;

    

    if (strstr($_GET['reason'], "1")) {
        $service = 'checked';
    } else {
        $service = NULL;
    }

    if (strstr($_GET['reason'], "2")) {
        $product = 'checked';
    } else {
        $product = NULL;
    }

    if (strstr($_GET['reason'], "3")) {
        $payment = 'checked';
    } else {
        $payment = NULL;
    }

    if (strstr($_GET['reason'], "4")) {
        $other = 'checked';
    } else {
        $other = NULL;
    }
?>

<br><br>
<h3 style="padding-left: 10%">Contact Edit</h3><br>
<div class="container">
    <form class="form-horizontal" action="cupdate.php" method="post">
        
        <div class="form-group">
            <label class="control-label col-sm-3">Name:</label>
            <div class="col-sm-5">
               <?php echo "<input type=\"name\" class=\"form-control\" name=\"name\" value='".$name."'required>"; ?>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
           
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="1" <?=$male ?> >Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="2" <?=$female ?> >Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="email" >Email:</label>
            <div class="col-sm-5">
             
             <?php echo "<input type=\"email\" class=\"form-control\" name=\"email\" 
             value='".$mail."'readonly>";?>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" >PhoneNo:</label>
            <div class="col-sm-5">          
                
                <?php  echo "<input type=\"tel\" class=\"form-control\" name=\"phone\" value='".$_GET['phone'].
                "'required>"; ?>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Country:</label>
            <div class="col-sm-5 ">          
                <select name="cont">
                   <option value="1" <?= $myn ?>>Myanmar</option>
                    <option value="2" <?= $jp ?>>Japan</option>
                    <option value="3" <?= $tl ?> >Thailand</option>
                    <option value="4" <?= $ch ?>>China</option>
                    <option value="5" <?= $us ?>>USA</option>
                    <option value="6" <?= $uk ?>>UK</option>
                </select>
            </div><br>
            <div class="form-group">    
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox">
                        <label><input type="checkbox" name="service" value="1" <?= $service ?>> Service</label>
                        <label><input type="checkbox" name="product" value="2" <?= $product ?>> Product</label>
                        <label><input type="checkbox" name="payment" value="3" <?=$payment ?>> Payment term</label>
                        <label><input type="checkbox" name="other" value="4" <?= $other ?>> Other</label>
                    </div>
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-5 col-sm-7">
                    <button type="submit" class="btn btn-danger" name="submit" value="submit">Submit</button>
                </div>
            </div>
    </form>
</div>

