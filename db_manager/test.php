<?php
include_once("Dbconnector.php");
           
           $db_manager=db_connector::getInstance('travel_love');
           $sql="update message set state=2 where start_time-curdate()<0;";
           $res=$db_manager->db_query->query($sql);
           if($res)
           {
           	   echo  $db_manager->db_query->affected_rows;
           }
            
           
        
?>