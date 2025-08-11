<?php
	include 'plantilla.php';
	require 'include/config.php';
	
	$query = "select * from products where id='$pid'";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'ESTADO',1,0,'C',1);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(70,6,'MUNICIPIO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['productName']),1,0,'C');
		$pdf->Cell(20,6,$row['productCompany'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['productPrice']),1,1,'C');
	}
	$pdf->Output();
?>