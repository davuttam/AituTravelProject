<?php $connection=mysql_connect("localhost","root","") or die("database connection fail". mysql_error());
      $db=mysql_select_db('aitutravelproject',$connection) or die("Failed to connect to MySQL: " . mysql_error());
      //$adminResult=mysql_query("select *from AdminLogin");
?>