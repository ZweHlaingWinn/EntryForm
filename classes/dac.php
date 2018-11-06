<?php

require_once("utils.php");

Class dac_sop {

    function get_process_code_box_name($id) {
        $utils = new utils;
        $utils->Connect();
        $sql = "SELECT * from process_tbl WHERE PROCESS_CODE not like '%WWHSUV%' AND PROCESS_CODE not like '%WWHMGT%' AND COMPANY='MDC' order by PROCESS_CODE";
        //echo $sql;
        $result = $utils->execute($sql) or die("Error person_box" . $sql);
        $row = $utils->num_rows($result);
        if ($row > 0) {
            echo "<select name=\"process\" style=\"width:540px\" class=\"supplier form-control\">";
            echo "<option value=0>ALL</option>";
            for ($i = 0; $i < $row; $i++) {
                $rw[$i] = mysqli_fetch_assoc($result);
                if ($id == $rw[$i]['PROCESS_CODE'])
                    echo "<option value='" . $rw[$i]['PROCESS_CODE'] . "' selected>" . $rw[$i]['PROCESS_NAME'] . "</option>";
                else
                    echo "<option value='" . $rw[$i]['PROCESS_CODE'] . "'>" . $rw[$i]['PROCESS_NAME'] . "</option>";
            }
            echo "</select>";
        }
    }

    
    function CompanySave($Name) {
        $utils = new utils;
        $utils->Connect();
        $sql = "INSERT INTO company(CompanyID,CompanyName) VALUES ('$Name','$Name')";
        $result = $utils->execute($sql);

        if ($result > 0)
            return true;
        else
            return false;
    }


    function contactSave($Name,$Mail,$Phone,$Gender,$Country,$Reason) {
        $utils = new utils;
        $utils->Connect();
        $sql = "INSERT INTO contact(name,mail,ph,gender,country,reason) VALUES ('$Name','$Mail','$Phone','$Gender','$Country','$Reason')";
        $result = $utils->execute($sql);
        if ($result > 0)
            return true;
        else
            return false;
    }

      function ContactEdit($Name,$Mail,  $Phone, $Gender , $Country, $Reason ) {
        $utils = new utils;
        $utils->Connect();
        $sql = "UPDATE contact SET name='$Name',gender='$Gender',ph='$Phone',country='$Country',reason='$Reason'  where mail='$Mail'";
        //echo $sql;
        $result = $utils->execute($sql);
        return $result;
    }

   

  function LoadDataContact() {
        $utils = new utils;
        $utils->Connect();
        $sql = "SELECT * FROM contact";
        $result = $utils->execute($sql);

        return $result;
    }



      function ContactDelete($CID) {
        $utils = new utils;
        $utils->Connect();
        $sql = "DELETE FROM contact where ID='" . $CID . "'";
        $result = $utils->execute($sql);

        if ($result > 0)
            return true;
        else
            return false;
    }

  


    function LoadData() {
        $utils = new utils;
        $utils->Connect();
        $sql = "SELECT * FROM company";
        $result = $utils->execute($sql);

        return $result;
    }

    function CompanyEdit($CID, $CName) {
        $utils = new utils;
        $utils->Connect();
        $sql = "UPDATE company SET CompanyName='" . $CName . "' where CompanyID='" . $CID . "'";
        $result = $utils->execute($sql);

        if ($result > 0)
            return true;
        else
            return false;
    }

    function CompanyDelete($CID) {
        $utils = new utils;
        $utils->Connect();
        $sql = "DELETE FROM company where CompanyID='" . $CID . "'";
        $result = $utils->execute($sql);

        if ($result > 0)
            return true;
        else
            return false;
    }

  






    function CompanyName($CID) {
        $utils = new utils;
        $utils->Connect();
        $sql = "select CompanyName from company where CompanyID='" . $CID . "'";
        //echo  $sql;                                         
        $result = $utils->execute($sql);
        $row = $utils->num_rows($result);
        if ($row > 0) {
            return $utils->get_data1(0, 'CompanyName', $result);
        }
    }

}

    



?>