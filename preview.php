<?{  
    include "connect_db.php";
	include('pdf/fpdf.php');
	 
   Open_Mysql();
   $query = "Select * from Phonebook order by MobileOwner ASC";
    $result = mysql_query($query);
 
    
      
//======================================================================================================================================
      
$pdf=new FPDF('P','mm','legal');
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0,0,200);
$pdf->Text(85,12,'Telephone Directory');
$pdf->SetFont('Arial','B',12);
  $pdf->Ln(4);
 $pdf->Cell(1,25,'----------------------------------------------------------------------------------------------------------------------------------');  
     $pdf->Ln(4);
     $pdf->SetFont('Arial','B',12); 
	 $pdf->Cell(35,25,"  No.");  
     $pdf->Cell(50,25,"Mobile Owner"); 
	 $pdf->Cell(50,25,"Number"); 
	 $pdf->Ln(4);
	 $pdf->Cell(1,25,'----------------------------------------------------------------------------------------------------------------------------------');  
     $pdf->Ln(4);
	 
	 $pdf->SetFont('Arial','',10);
     $pdf->SetTextColor(0,0,0);
    $Count=1;
 	      while($row=mysql_fetch_array($result))
	        {    $pdf->Cell(35,25, "  ". $Count);  
				 $pdf->Cell(50,25,$row['MobileOwner']); 
				 $pdf->Cell(50,25,$row['MobileNo']); 
				 $pdf->Ln(4);
			     $Count=$Count+1; 
			}
	 $pdf->SetTextColor(0,0,200);
     $pdf->SetFont('Arial','B',12);		
     $pdf->Cell(1,25,'----------------------------------------------------------------------------------------------------------------------------------');  
     $pdf->Ln(4);   
   
 $pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0,0,200);
$pdf->Text(85,12,'Telephone Directory');
$pdf->SetFont('Arial','B',12);
  $pdf->Ln(4);
 $pdf->Cell(1,25,'----------------------------------------------------------------------------------------------------------------------------------');  
     $pdf->Ln(4);
     $pdf->SetFont('Arial','B',12); 
	 $pdf->Cell(35,25,"  No.");  
     $pdf->Cell(50,25,"Mobile Owner"); 
	 $pdf->Cell(50,25,"Number"); 
	 $pdf->Ln(4);
	 $pdf->Cell(1,25,'----------------------------------------------------------------------------------------------------------------------------------');  
     $pdf->Ln(4);
	 
	 $pdf->SetFont('Arial','',10);
     $pdf->SetTextColor(0,0,0);
    $Count=1;
	$result = mysql_query($query);
 	      while($row=mysql_fetch_array($result))
	        {    $pdf->Cell(35,25, "  ". $Count);  
				 $pdf->Cell(50,25,$row['MobileOwner']); 
				 $pdf->Cell(50,25,$row['MobileNo']); 
				 $pdf->Ln(4);
			     $Count=$Count+1; 
			}
	 $pdf->SetTextColor(0,0,200);
     $pdf->SetFont('Arial','B',12);		
     $pdf->Cell(1,25,'----------------------------------------------------------------------------------------------------------------------------------');  
     $pdf->Ln(4);   
   
            
          
$pdf->Output();

} 
           
?>

