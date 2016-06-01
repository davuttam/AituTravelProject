<?php  include_once 'databaseConnection.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
       if(isset($_POST['sign_in'])){
          if(!empty($_POST['username']) && !empty($_POST['password'])){
               // echo ' Ume OR Password';
               // $loginQuery = mysql_query("SELECT * FROM adminLogin WHERE userName = '".$_POST['username']."' and password ='".$_POST['password']."'") or die(mysql_error()); 
                
               $jsonAdmin=array();
              $loginQuery= mysql_query("SELECT * FROM adminLogin");
                  while($loginRow =mysql_fetch_assoc($loginQuery))
             {
                      $jsonAdmin[] = $loginRow;
              }
              //echo json_encode($jsonAdmin);
              $someArray = $jsonAdmin;
              $loginSuccess=0;
  
              foreach ($someArray as $key => $value) {
                if(($value['userName']==$_POST['username']) && ($value['password']==$_POST['password'])){
                    $loginSuccess=1;
                    break;
                }
              }
                if($loginSuccess){
                     session_start();
                     $_SESSION['login']="1";
                     $_SESSION['usrName']=$_POST['username'];
                     //echo ' UmR Password';
                     header("Location: sidebar.php");
                 }
             else {
                     header("Location: index.php");
                     echo 'WRONG Username OR Password';
 }
            }
        }
    }