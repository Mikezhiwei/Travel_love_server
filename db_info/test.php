<?php
include_once("User_Mapper.php");
include_once("UserInfo_Mapper.php");
include_once("../Domain_enetity/User_info.php");
include_once("../Domain_enetity/User.php");
include_once("../Domain_enetity/Commuication.php");
include_once("Tips_Mapper.php");               
include_once("../Domain_enetity/Tip.php");
include_once("Tips_Collection.php");
include_once("Strategy_Mapper.php");
include_once("Message_mapper.php");
include_once("Communication_Mapper.php");    
             /* $test=new Strategy_Mapper('travel_love');
             $raw=array('time'=>"��");
              $test->doGetCluster($raw);
             foreach($test->GetCollection() as $tempvalue)
              {
              	  echo  $tempvalue->GetArticle()."<br>";
              }*/
              
              //$test->test();
             /* $test=new  User_Mapper('travel_love');
              $user=$test->GetById('huawei@163.com');
              echo $user->GetId();*/
              /*$test=new  Message_Mapper('travel_love');
              $test->doGetCluster_serval(array('params'=>"���ɽ"),1);
              foreach ($test->GetCollection()->objects as  $value)
              {
              	    
              	    echo $value->GetId();
              	    echo $value->GetUser_id();
              	    echo $value->GetDesnetion();
              	    echo $value->GetStarting();
              	    echo $value->GetStart_time();
              	    echo $value->GetEnd_time();
              	    echo $value->Getrequestments();
              	    echo $value->GetLoaction();
              	    echo $value->GetState();
              	    echo $value->GetDuring_day()."   ";
              	    echo $value->GetStart_piont()."<br>";
              	         
              }*/
              
              $test=new Communication_Mapper('travel_love');
              $test->domessage_comments(7);
              foreach ($test->GetCollection() as $value)
              {
              	   echo $value->GetId();
              	   echo $value->GetDeatail_com();
              	   echo $value->GetCom_time();
              	   echo $value->GetRelyName();//���ظ��˵��ǳ�
              	   echo $value->GetCommentName();//�����˻ظ������س�
              }
              
              //echo $com->GetDeatail_com();
                 
               
?>