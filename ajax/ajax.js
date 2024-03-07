//################################################################################################################################
// ajax.js
// coded by Armando T. Saguin
// email saguin.armando.@gmail.com
//################################################################################################################################

        var xmlHttp;
               function getXMLHttpRequest()
					{ var xmlHttp=null;
						try{  xmlHttp = new XMLHttpRequest();                        // Firefox, Opera 8.0+, Safari 
						   }catch(e){
							try{ xmlHttp=new ActiveXObject('Msxml2.XMLHTTP');          // Internet Explorer
							}catch(e){ xmlHttp=new ActiveXObject('Microsoft.XMLHTTP');}
							}
					return xmlHttp;
					
					}
   

//Save--------------------------------------------------------------------------------------------
  	    function Add_Record(mobileNo,Owner)
               {     
			       xmlHttp=getXMLHttpRequest();
			        if(xmlHttp==null){alert('Ajax not supported by your browser!!!'); return;}
				    var url='SaveRecord.php?Owner='+ Owner + '&MobileNo=' + MobileNo;
					xmlHttp.onreadystatechange=function()
							{ if (xmlHttp.readyState==4)
							   {Display_Directory();
							    alert('Record Updates!!!');}
							    //document.getElementById('Userlist').innerHTML=xmlHttp.responseText;}
						    }
	                xmlHttp.open('GET',url,true);	
	                xmlHttp.send(null);
			     }	  		   
       
	   
//Search--------------------------------------------------------------------------------------------
  	    function Search_MobileNo(Owner)
               {    xmlHttp=getXMLHttpRequest();
			        if(xmlHttp==null){alert('Ajax not supported by your browser!!!'); return;}
				    var url='SearchRecord.php?Owner='+ Owner;
					 xmlHttp.onreadystatechange=function()
				 			{ if (xmlHttp.readyState==4)
				 			   { MobileNum=xmlHttp.responseText;
				 			     if (MobileNum!=':-)')
				 				    {document.getElementById('mobileNo').value=MobileNum;}
				 				 else{alert('Mobile Owner not Found!!!');} 
				 			 }
				 			}
	                 xmlHttp.open('GET',url,true);	
	                 xmlHttp.send(null);
			     }	  		   
	   
	 
//-------------------------------------------------------------------------------------------
  	    function Delete_MobileOwner(Owner)
               {    xmlHttp=getXMLHttpRequest();
			        if(xmlHttp==null){alert('Ajax not supported by your browser!!!'); return;}
				    var url='DeleteRecord.php?Owner='+ Owner;
					 xmlHttp.onreadystatechange=function()
				 			{ if (xmlHttp.readyState==4)
				 			   { MobileNum=xmlHttp.responseText;
				 			     if (MobileNum!=':-)')
				 				    {alert('Mobile Owner is Already Removed!!!'); 
									 Display_Directory();}
				 				 else{alert('Mobile Owner not Found!!!');} 
				 			 }
				 			}
	                 xmlHttp.open('GET',url,true);	
	                 xmlHttp.send(null);
			     }	  		   
	   	 
	//Display User List--------------------------------------------------------------------------------------------
  	    function Display_Directory()
               {    xmlHttp=getXMLHttpRequest();
				   	if(xmlHttp==null){alert('Ajax not supported by your browser!!!'); return;}
				    var url='loadphonebook.php';
					xmlHttp.onreadystatechange=function()
							{ if (xmlHttp.readyState==4)
							   {document.getElementById('Directory').innerHTML=xmlHttp.responseText;}
						    }
	                xmlHttp.open('GET',url,true);	
	                xmlHttp.send(null);
			     }	  		   
    

 