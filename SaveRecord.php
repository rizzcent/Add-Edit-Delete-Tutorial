<?php
  include "connect_db.php";
   
 $Owner=isset($_REQUEST['Owner'])?$_REQUEST['Owner']:'';
 $MobileNo=isset($_REQUEST['MobileNo'])?$_REQUEST['MobileNo']:'';
  
 Open_Mysql();
 $Found=0;
 $query = "Select * from Phonebook where MobileNo like '".$MobileNo ."'";
 $result = mysql_query($query);
 
 
  while($row=mysql_fetch_array($result))
	        { $Found=1;}
			
if ($Found==1) {$query = "Update Phonebook set MobileOwner='$Owner' where MobileNo like '$MobileNo'";}
else {$query = "Insert into Phonebook values('$MobileNo','$Owner')";}  
 
 $result = mysql_query($query);
?>