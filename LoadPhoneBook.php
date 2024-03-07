<?php
 include "connect_db.php";
 Open_Mysql();
 $query = "Select * from Phonebook order by MobileOwner ASC";
 $result = mysql_query($query);
 
   echo"<table border='1'>
        <tr bgcolor='#00ffaa'> <td width='30px'>No.</td> 
		                         <td width='260px'>Name</td>
 								 <td width='260px'>Mobile Number</td>
		</tr>";
       $Count=1;
 	      while($row=mysql_fetch_array($result))
	        {  echo"<tr><td>$Count</td>
			        <td>". $row['MobileOwner'] . "</td>
			        <td>". $row['MobileNo']. "</td></tr>";
			   $Count=$Count+1; 
			}

 	 
?>