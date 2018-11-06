<?php
require("config.php");
Class utils{
    var $conn_id;
    var $result_id;

    function Connect(){ 
     $config = new Config();
     $this->conn_id=mysqli_connect($config->server,$config->user,$config->password);        
     mysqli_select_db($this->conn_id,$config->database);
     
  return $this->conn_id;
    }
    
    function execute($query){
      
        $config = new Config();
        $this->result_id=mysqli_query($this->conn_id,$query);
        
  return $this->result_id;
    }
                                    
    function num_rows($result_id) {          
        //return mysqli_num_rows($this->result_id);  
        return mysqli_num_rows($result_id);
    } 
             
    function get_data1($dbm_row, $dbm_field,$result_id) {
       $dbm_row=mysqli_fetch_assoc($result_id);
          
               
        return $dbm_row[$dbm_field];
      }

    function get_data($dbm_row, $dbm_field) {
        
               
        return $dbm_row[$dbm_field];
      }
    
     
 }

?>