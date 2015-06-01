<?php
	if (isset($_GET['file'])) {
		require_once('pdf/fpdf.php');
		require_once('pdf/fpdi.php');

		$name=$_GET['file'];
		$pdf = new FPDI();
		$pdf->AddPage("Landscape",array(85.6,53.98));

		//Set the source PDF file
		if ($_GET['statut']=='junior') {
			$pagecount = $pdf->setSourceFile("YDCard/Junior.pdf");	
		}
		elseif ($_GET['statut']=='senior') {
			$pagecount = $pdf->setSourceFile("YDCard/Senior.pdf");
		}
		elseif ($_GET['statut']=='sponsor') {
			$pagecount = $pdf->setSourceFile("YDCard/Sponsor.pdf");
		}

		//Import the first page of the file
		$tppl = $pdf->importPage(1);

		$pdf->useTemplate($tppl);

		//Use this page as template
		// use the imported page and place it at point 20,30 with a width of 170 mm
		$pdf->Image($_GET['file_path'],5,40,10,10,'png');
		$pdf->Output('userCard/'.$name.'.pdf', "F");
		header('location:../view/form.php');
	} 
	else
	{
		header('location:../view/form.php');
	}
?>