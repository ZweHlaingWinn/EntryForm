<?php

require_once("dac.php");

Class blc_sop {

    function get_process_code_box_name($id) {
        $dac_code = new dac_sop();
        return $dac_code->get_process_code_box_name($id);
    }    
    
    
    function CompanySave($Name) {
        $dac_company = new dac_sop();
        
        return $dac_company->CompanySave($Name);
    }

    function LoadData() {
        $dac_company = new dac_sop();
        return $dac_company->LoadData();
    }

   
    function LoadDataRow($Id) {
        $dac_company = new dac_sop();
        return $dac_company->LoadDataRow($Id);
    }


    function CompanyEdit($CID, $CName) {
        $dac_company = new dac_sop();
        return $dac_company->CompanyEdit($CID, $CName);
    }

    function ContactEdit($Name, $Gender, $Mail, $Phone, $Country, $Reason) {
        $dac_contact = new dac_sop();
        return $dac_contact->ContactEdit($Name, $Gender, $Mail, $Phone, $Country, $Reason);
    }

    function CompanyDelete($CID) {
        $dac_company = new dac_sop();
        return $dac_company->CompanyDelete($CID);
    }

    function CompanyName($CID) {
        $dac_company = new dac_sop();
        return $dac_company->CompanyName($CID);
    }

   function contactSave($Name,$Mail,$Phone,$Gender,$Country,$Reason) {
        $dac_contact = new dac_sop();
        return $dac_contact->contactSave($Name,$Mail,$Phone,$Gender,$Country,$Reason);
    }
    
    function LoadDataContact() {
        $dac_contact = new dac_sop();
        return $dac_contact->LoadDataContact();
    }

     function ContactDelete($CID) {
        $dac_company = new dac_sop();
        return $dac_company->ContactDelete($CID);
    }





    
}

?>
