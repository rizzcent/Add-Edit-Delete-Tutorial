<?php
 include "connect_db.php";
 $Response=':-)';
 Open_Mysql();
 $Owner=isset($_REQUEST['Owner'])?$_REQUEST['Owner']:'';
 
 $Found=0;
 $query = "Select * from Phonebook where MobileOwner like '".$Owner ."'";
 $result = mysql_query($query);
 
 	      while($row=mysql_fetch_array($result))
	        { $Response=$row['MobileNo'];
			   
			}
	echo $Response;		
?>