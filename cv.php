<?php
	if(
		isset($_POST['name'])&&
		isset($_POST['address'])&&
		isset($_POST['mob'])&&
		isset($_POST['objective'])&&
		isset($_POST['experience'])&&
		isset($_POST['hs_school'])&&
		isset($_POST['hss_school'])&&
		isset($_POST['hs_marks'])&&
		isset($_POST['hss_marks'])&&
		isset($_POST['pg_college'])&&
		isset($_POST['ug_college'])&&
		isset($_POST['pg_cource'])&&
		isset($_POST['email'])&&
		isset($_POST['strength'])&&
		isset($_POST['computer'])&&
		isset($_POST['ug_cource'])
	)
	{
		if(
		!empty($_POST['name'])&&!empty($_POST['hss_school'])&&
		!empty($_POST['address'])&&!empty($_POST['hss_marks'])&&
		!empty($_POST['mob'])&&!empty($_POST['hs_marks'])&&
		!empty($_POST['hs_school'])&&!empty($_POST['email'])&&
		!empty($_POST['objective']))
		{
			require('fpdf.php');
			$name=$_POST['name'];
			$add = $_POST['address'];
			$mob = $_POST['mob'];
			$email = $_POST['email'];
			$strength = $_POST['strength']; 
			$hs_school =$_POST['hs_school'];
			$hss_school =$_POST['hss_school'];
			$hs_marks =$_POST['hs_marks'];
			$hss_marks =$_POST['hss_marks'];
			$ug_college = $_POST['ug_college'];
			$pg_college = $_POST['pg_college'];
			$ug_cource = $_POST['ug_cource'];
			$pg_cource = $_POST['pg_cource'];
			$objective = $_POST['objective'];
			$computer = $_POST['computer'];
			$experience = $_POST['experience'];
			$language = $_POST['language'];
			$fathername = $_POST['fathername'];
			$hobbies = $_POST['hobbies'];
			$dob = $_POST['dob'];
			$pdf = new FPDF('P','mm','A4');
			$pdf -> AddPage('P','A4',0);
			//$pdf->Image('logo.png',150,10,35,45);
			// name start
			$pdf->Ln(10);
			$pdf -> SetFont('Times','B',16);
			$pdf->Cell(190 ,10,''.$name.'',0,1,'L'); 
			// Feilds before Resume 
			$pdf->SetFont('Times','',12); // this will set font again until another setFont function is called
			$pdf->Cell(190 ,6,'Address : '.$add.' ',0,1,'L');   
			$pdf->Cell(190 ,6,'Contact No. : '.$mob.'',0,1,'L'); 
			$pdf->Cell(190 ,6,'Email  : '.$email.'',0,1,'L');    
			//$pdf->Cell( 0,0,'',1,1,'L');// this creates a bottom  border
			$pdf->Ln(5); // used to put a line break at 20 mm
			// Background color
			 $pdf->SetFillColor(200,200,200);
			 // Title
			 $pdf->Cell(0,1,"",1,1,'L',true);
			 // Line break
			 $pdf->Ln(10);
			 // Main body start
			 //Objective start
			 $pdf->SetFont('Times','B',14);
			 $pdf->Cell(190 ,6,'Objective: ',0,1,'L',true);   
			 $pdf->Ln(4);
			 $pdf->SetFont('Times','',12);
			$pdf->SetFillColor(255,255,255);
			$pdf->MultiCell(190 ,6,''.$objective.'',0,1,'J'); 
			// objective finished
			//Academics details
			$pdf->Ln(4);
			 $pdf->SetFont('Times','B',14);
			 $pdf->SetFillColor(200,200,200);
			 $pdf->Cell(190 ,6,'Academic Details:',0,1,'L',true);   
			 $pdf->Ln(4);
			 if(!empty($pg_college)&&!empty($pg_cource))
			 {
				 $pdf->SetFont('Times','BU',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(10);
				$pdf->MultiCell(190 ,6,'Post Graduation',0,1,'J');
				$pdf->Ln(2);
				 $pdf->SetFont('Times','',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(15);
				$pdf->MultiCell(190 ,6,''.$pg_cource.'',0,1,'J');  
				 $pdf->SetFont('Times','',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(15);
				$pdf->MultiCell(190 ,6,''.$pg_college.'',0,1,'J'); 
				$pdf->Ln(2);
			} 
			 if(!empty($ug_college)&&!empty($ug_cource))
			 {
				 $pdf->SetFont('Times','BU',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(10);
				$pdf->MultiCell(190 ,6,'Graduation',0,1,'J');
				$pdf->Ln(2);
				 $pdf->SetFont('Times','',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(15);
				$pdf->MultiCell(190 ,6,''.$ug_cource.'',0,1,'J');  
				 $pdf->SetFont('Times','',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(15);
				$pdf->MultiCell(190 ,6,''.$ug_college.'',0,1,'J'); 
				$pdf->Ln(2);
			} 
				$pdf->SetFont('Times','BU',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(10);
				$pdf->MultiCell(190 ,6,'School',0,1,'J');
				$pdf->Ln(2);
				 $pdf->SetFont('Times','',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(15);
				$pdf->MultiCell(190 ,6,''.$hss_school.'      '.$hss_marks.'',0,1,'J');  
				 $pdf->SetFont('Times','',12);
				 $pdf->SetFillColor(255,255,255);
				 $pdf->Cell(15);
				$pdf->MultiCell(190 ,6,''.$hs_school.'      '.$hs_marks.'',0,1,'J');
			 $pdf->Ln(6); 
			 /*// dynamic width taking
			 $txt = "Rajiv Gandi WishwaWidhyalay Bhopal Indore";
			 $w = $pdf->GetStringWidth($txt)+6;
			 // below line will be used sooner
			 $pdf->Cell((190-$w)/4 ,20,'Percentage',1,0,'C',true); 
			 $pdf->Cell((190-$w)/4 ,20,'Cource',1,0,'C',true);
			 // dynamic width taking end
			 */
			 // Academics Details Finished
			 //Computer Knowledge
			 $pdf->SetFont('Times','B',14);
			 $pdf->SetFillColor(200,200,200);
			 $pdf->Cell(190 ,6,'Computer Literacy: ',0,1,'L',true);   
			 $pdf->Ln(4);
			 $pdf->SetFont('Times','',12);
			$pdf->SetFillColor(255,255,255);
			$pdf->MultiCell(190 ,6,''.$computer.'',0,1,'J'); 
			$pdf->Ln(6); 
			 // Computer Knowledge End
			 // Area of Skills
			 $pdf->SetFont('Times','B',14);
			 $pdf->SetFillColor(200,200,200);
			 $pdf->Cell(190 ,6,'Area of Strengths: ',0,1,'L',true);   
			 $pdf->Ln(4);
			 $pdf->SetFont('Times','',12);
			$pdf->SetFillColor(255,255,255);
			$pdf->MultiCell(190 ,6,''.$strength.'',0,1,'J'); 
			$pdf->Ln(6);
			 // Area of skills End			
			 //Work start
			 if(!empty($_POST['experience']))
			 {
				 $pdf->SetFont('Times','B',14);
				 $pdf->SetFillColor(200,200,200);
				 $pdf->Cell(190 ,6,'Internship Details : ',0,1,'L',true);   
				 $pdf->Ln(4);
				 $pdf->SetFont('Times','',12);
				$pdf->SetFillColor(255,255,255);
				$pdf->MultiCell(190 ,6,''.$experience.'',0,1,'J'); 
			}
			// work experience end
			 //Personal Details start
			 	 $pdf->SetFont('Times','B',14);
				 $pdf->SetFillColor(200,200,200);
				 $pdf->Cell(190 ,6,'Personal Profile : ',0,1,'L',true);   
				 $pdf->Ln(4);
				 $pdf->SetFont('Times','',12);
				$pdf->SetFillColor(255,255,255);
				$pdf->Cell(40 ,6,'Father\'s Name',0,0,'J'); 
				$pdf->Cell(20 ,6,' : '.$fathername.'',0,0,'J');
				$pdf->Ln();
				$pdf->Cell(40 ,6,'Date of Birth',0,0,'J'); 
				$pdf->Cell(20 ,6,' : '.$dob.'',0,0,'J'); 
				$pdf->Ln();
				$pdf->Cell(40 ,6,'Hobbies',0,0,'J'); 
				$pdf->Cell(20 ,6,' : '.$hobbies.'',0,0,'J');
				$pdf->Ln();
				$pdf->Cell(40 ,6,'Language known',0,0,'J'); 
				$pdf->Cell(20 ,6,' : '.$language.'',0,0,'J');  
			//Personal Details end
			$pdf->Output();
	
		}	
		else
		{
			echo 'fill all the feilds';
		}
}	
?>
