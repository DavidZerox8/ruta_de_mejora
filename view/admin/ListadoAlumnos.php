<?php

    session_start();

    if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1)
    {
        header('location: ../../index.html');
    }

    header("Content-Type: text/html;charset=utf-8");
	//Se Mandan llamar los archivos de conexion y la libreria FPDF  
	require('../../fpdf/fpdf.php');
	require('conexion.php');
    $pdf = new FPDF('L','mm','A4');
	//Se genera y se le da formato a la tabla del reporte
	$pdf->AddPage();
    $name = 'hola';
	$pdf->SetFont('Arial','','10');
	$pdf->Cell(18,10,'',0);
	//$pdf->Cell(0,50,utf8_decode('Reporte de campañas'),0);
	$pdf->SetFont('Arial','','9');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B','11');
	$pdf->Cell(90,8,'',0);
	$pdf->Cell(100,8,utf8_decode('Listado de Alumnos del grupo '.strtoupper($_SESSION['grupo'])),0,0,'C');
	$pdf->Ln(23);
    $pdf->SetFillColor(97,148,225);
	$pdf->SetFont('Arial','B','8');
    $pdf->Cell(10,8,'',0,0,'C');
	$pdf->Cell(5,8,utf8_decode('ID'),1,0,'C',True);
	$pdf->Cell(50,8,'Nombre',1,0,'C',True);
	$pdf->Cell(20,8,'Asistencia',1,0,'C',True);
	$pdf->Cell(20,8,utf8_decode('Participación'),1,0,'C',True);
	$pdf->Cell(20,8,utf8_decode('Desempeño'),1,0,'C',True);
    $pdf->Cell(20,8,utf8_decode('Lectura'),1,0,'C',True);
    $pdf->Cell(40,8,utf8_decode('Competencia Matematica'),1,0,'C',True);
    $pdf->Cell(35,8,utf8_decode('Concivencia Escolar'),1,0,'C',True);
    $pdf->Cell(20,8,utf8_decode('Escritura'),1,0,'C',True);
    $pdf->Cell(20,8,utf8_decode('¿En riesgo?'),1,0,'C',True);
	$pdf->Ln(8);
	$pdf->SetFont('Arial','','8');

	//Se genera la consulta
	$sql = mysqli_query($conexion,'SELECT * FROM '.$_SESSION['grupo'].' order by id ASC');

	while($row = mysqli_fetch_array($sql))
    {
        $uno = $row['id']; 
        $dos = $row['nombre'];
        $tres = $row['asistencia'];
        $cuatro = $row['participacion'];
        $cinco = $row['desempeno'];
        $seis = $row['lectura'];
        $siete = $row['c_matematica'];
        $ocho = $row['convivencia'];
        $nueve = $row['escritura'];
        $diez = $row['riesgo'];
        
        $pdf->Cell(10,8,utf8_decode(''),0,0,'C');
    	$pdf->Cell(5,8,utf8_decode($uno),1,0,'C');
        $pdf->Cell(50,8,utf8_decode($dos),1,0,'C');
        $pdf->Cell(20,8,utf8_decode($tres),1,0,'C');
        $pdf->Cell(20,8,utf8_decode($cuatro),1,0,'C');
        $pdf->Cell(20,8,utf8_decode($cinco),1,0,'C');
        $pdf->Cell(20,8,utf8_decode($seis),1,0,'C');
        $pdf->Cell(40,8,utf8_decode($siete),1,0,'C');
        $pdf->Cell(35,8,utf8_decode($ocho),1,0,'C');
        $pdf->Cell(20,8,utf8_decode($nueve),1,0,'C');
        $pdf->Cell(20,8,utf8_decode($diez),1,0,'C');
        

    	$pdf->Ln(8);
    }         
    $pdf->Ln(10);
	$pdf->Cell(0,10,'Fecha '.date('d-m-y').'',0);
    $pdf->Ln(125);
    $pdf->Output('','Lista de alumnos '.strtoupper($_SESSION['grupo']).'.pdf','false');
?>