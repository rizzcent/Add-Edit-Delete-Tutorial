<?php
 function Open_Mysql()
 { $host="localhost";
   $user="root";
   $pass="";
   $database="Phonebook";

   mysql_connect($host,$user,$pass) or die (mysql_error());
   mysql_select_db($database) or die (mysql_error());}
?>