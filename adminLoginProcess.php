<?php include_once 'databaseConnection.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
       if(isset($_POST['sign_in'])){
          if(!empty($_POST['username']) && !empty($_POST['password'])){
               // echo ' Ume OR Password';
                $loginQuery = mysql_query("SELECT * FROM adminLogin WHERE userName = '".$_POST['username']."' and password ='".$_POST['password']."'") or die(mysql_error()); 
                 $loginRow=mysql_fetch_array($loginQuery);
                 if($loginRow){
                     session_start();
                     $_SESSION['login']="1";
                     $_SESSION['usrName']=$_POST['username'];
                     //echo ' UmR Password';
                     header("Location: mainPage.php");
                 }
             else {
                     header("Location: login.php");
                     echo 'WRONG Username OR Password';
 }
            }
        }
    }
?>

