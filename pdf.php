<?php
require('Pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(15);
    // Título
    $this->Cell(0,20,'Mensajes',0,0,'C');
    // Salto de línea
    $this->Ln(40);
    //celdas de titutlos
    $this->Cell(30,10, 'ID Usuario',1,0,'C',0);
    $this->Cell(60,10, utf8_decode('Nombre'),1,0,'C',0);
    $this->Cell(25,10, utf8_decode('Teléfono'),1,0,'C',0);
    $this->Cell(50,10, utf8_decode('Correo'),1,0,'C',0);
    $this->Cell(120,10, utf8_decode('Mensaje'),1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pág. ').$this->PageNo().'...',0,0,'C');
}
}
require 'bd.php';
$consulta="SELECT * FROM mensaje";
$resultados=$conn->query($consulta);
// Creación del objeto de la clase heredada
$pdf = new PDF();  
$pdf->AddPage('landscape');
$pdf->SetFont('Times','',12);
while ($row=$resultados->fetch_assoc()){
    $pdf->Cell(30,10,$row['id_usuario'],1,0,'C',0);
    $pdf->Cell(60,10,utf8_decode($row['nombre']),1,0,'C',0);
    $pdf->Cell(25,10,$row['telefono'],1,0,'C',0);
    $pdf->Cell(50,10,utf8_decode($row['correo']),1,0,'C',0);
    $pdf->Cell(120,10,utf8_decode($row['mensaje']),1,1,'C',0);
}
$pdf->Output();
?>