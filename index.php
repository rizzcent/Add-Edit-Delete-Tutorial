<?php
  echo "<div style='border:1px solid #0000ff; position: relative; left:35%; width: 285px;'>
        <Table border='0' cellpadding='0' >
         <tr><td colspan='2' height='30px' bgcolor='aquamarine'> <b>&nbsp;&nbsp;Phone Book</b> <td></tr>
		   <tr> <td height='10px' colspan='2' align='center'></td></tr>
        <tr>
		   <td> Name: </td>  
		   <td> <input type='text' name='mobileowner' id='mobileowner' size='25'>
		   </tr>
		   <tr>
		   <td> Mobile No: </td>  
		   <td> <input type='text' name='mobileNo' id='mobileNo' size='25'>
		</tr>
		    <tr>
		   
	
		  <td colspan='2' align='center'>
             		  
		  <input type='button' value='New' Name='NewButton' id='NewButton' onclick='New_Record();'/>
		  <input type='button' value='Save' Name='SaveButton' id='SaveButton' onclick='Save_Record();'/>
		  <input type='button' value='Search' Name='SearchButton' id='SearchButton' onclick='Search_Record();'/>
		  <input type='button' value='Delete' Name='DeleteButton' id='DeleteButton' onclick='Delete_Record();'/>
		  </td>
		</tr>
		<tr> <td height='10px' colspan='2' align='center'></td></tr>
       </table>
	   </div><br/><br/>
	   <div id='Directory' style='position:relative; left:10%; border:1px ;'></div> ";
?>

 <script language='javascript' type='text/javascript' src='ajax/ajax.js'></script>	 
 <script language='javascript' type='text/javascript'>
  function Save_Record()
   {  MobileNo=document.getElementById('mobileNo').value;
	  Owner=document.getElementById('mobileowner').value;
	  Add_Record(mobileNo,Owner);
    }
	
  function Search_Record()
   {  Owner=document.getElementById('mobileowner').value;
      Search_MobileNo(Owner);
	   
    }
 function Delete_Record()
   {  Owner=document.getElementById('mobileowner').value;
      Delete_MobileOwner(Owner);
    }
 function New_Record()
    {window.open('index.php','_Self');
     window.focus();}
 
 function PdfView()
		  { window.open('preview.php','_Blank');
		    window.focus();
		    }  
	Display_Directory();
	document.getElementById('mobileowner').focus();
 </script>
 