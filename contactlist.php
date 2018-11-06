<?php
include 'nav.php';
require("classes\blc.php");


echo '<div class="row">';

$blc_Contact = new blc_sop();
$result = $blc_Contact->LoadDataContact();

echo '<div class="container">';
echo "<div style='padding-top:3%;'>";
echo "<table class=\"table\" >";
echo "<thead class=\"thead-light\">";

echo "<tr>";

echo "<th>id</th>";

echo "<th>Name</th>";

echo"<th>Email</th>";

echo "<th>Phone</th>";

echo"<th>Gender</th>";

echo "<th>Country</th>";

echo "<th>Reason</th>";


echo "</tr>";
echo "</thead>";

while ($row = mysqli_fetch_assoc($result)) {

    $id = $row["Id"];
    $name = $row["name"];
    $mail = $row["mail"];
    $phone = $row["ph"];

    echo "<tr>";

    echo "<td>" . $row["Id"] . "</td>";

    echo "<td>" . $row["name"] . "</td>";

    echo "<td>" . $row["mail"] . "</td>";

    echo "<td>" . $row["ph"] . "</td>";

    $gender = $row["gender"];
    if ($gender == 1) {
        echo "<td>Male</td>";
    } else if ($gender == 2) {
        echo "<td>Female</td>";
    }

    $country = $row["country"];
    if ($country == 1) {
        echo "<td>Myanmar</td>";
    } else if ($country == 2) {
        echo "<td>Japan</td>";
    } else if ($country == 3) {
        echo "<td>Thailand</td>";
    } else if ($country == 4) {
        echo "<td>China</td>";
    } else if ($country == 5) {
        echo "<td>USA</td>";
    } else if ($country == 6) {
        echo "<td>UK</td>";
    }

    $reason=$row["reason"];

    if (strstr($reason, "1")) {
        $service= "service, ";
    }else {
        $service=NULL;
    }

    if (strstr($reason, "2")) {
        $product= "product, ";
    }else {
        $product= NUll;
    }

    if (strstr($reason, "3")) {
        $payment = "payment, ";
    }else{
        $payment = NULL;
    }
   
    if (strstr($reason, "4")) {
        $other = "other ";
    }else{
        $other = NULL;
    }

    echo "<td>" . $service . $product . $payment . $other . "</td>";


   
    echo "<td><input type=button name=\"edit\" value=\"Edit\" class=\"btn btn-secondary\" onclick=\"self.location='contactedit.php?id=$id&name=$name&mail=$mail&phone=$phone&gender=$gender&country=$country&reason=$reason'\">&nbsp;";
    echo "<input type=button name=\"delete\" value=\"Delete\" class=\"btn btn-danger\" onclick=\"self.location='contactdel.php?id=$id'\">";
    echo "</td>";
    echo "</tr>";

    
}
?>
