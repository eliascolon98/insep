<?php
require('js/fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //Logo
    $this->Image('images/insep_investigaciones.jpg',20,18,160);
    // Arial bold 15
    $this->SetFont('Arial','B',25);
    // Movernos a la derecha
    $this->Cell(50);
  
    $this->SetY(75);
    $this->SetX(60);
    $this->Cell(100,10,utf8_decode('Cotización'),0,0,'C');
    $this->Ln(20);
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require('js/conexion.php');
$con = conectar();

$consulta = "SELECT * FROM investigaciones order by id desc";
$res = mysqli_query($con, $consulta);
$datos = mysqli_fetch_array($res);


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$pdf -> Cell(60, 10, utf8_decode('Nombre: '), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode($datos['nombre']), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode(''), 1, 1, 'L', 0);

$pdf -> Cell(60, 10, utf8_decode('Télefono/Celular: '), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode($datos['telefono']), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode(''), 1, 1, 'L', 0);

$pdf -> Cell(60, 10, utf8_decode('Correo electrónico: '), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode($datos['email']), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode(''), 1, 1, 'L', 0);

$pdf -> Cell(60, 10, utf8_decode(''), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode('Producto'), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode('Cantidad'), 1, 1, 'C', 0);

$pdf -> Cell(60, 10, utf8_decode('Seguridad'), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode($datos['producto1']), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode($datos['cantidad1']), 1, 1, 'C', 0);

$pdf -> Cell(60, 10, utf8_decode('Servicios Generales'), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode($datos['producto2']), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode($datos['cantidad2']), 1, 1, 'C', 0);

$pdf -> Cell(60, 10, utf8_decode('Tecnología'), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode($datos['producto3']), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode($datos['cantidad3']), 1, 1, 'C', 0);

$pdf -> Cell(60, 10, utf8_decode(''), 1, 0, 'L', 0);
$pdf -> Cell(70, 10, utf8_decode('Total de cotización:'), 1, 0, 'C', 0);
$pdf -> Cell(60, 10, utf8_decode($datos['total']), 1, 1, 'C', 0);

//traer todos los registros
// while($datos = mysqli_fetch_array($res)){
//     $pdf -> Cell(50, 10, $datos['nombre'], 1, 0, 'L', 0);
//     $pdf -> Cell(40, 10, $datos['telefono'], 1, 0, 'L', 0);
//     $pdf -> Cell(50, 10, $datos['email'], 1, 0, 'L', 0);
//     $pdf -> Cell(50, 10, $datos['servicio'], 1, 1, 'L', 0);
// }

$pdf->Output();





?>