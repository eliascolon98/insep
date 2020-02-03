<?php

require('fpdf/fpdf.php');
require('conexion.php');
$con = conectar();
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];  
$producto1 = $_POST["producto1"];
$producto2 = $_POST["producto2"];
$producto3 = $_POST["producto3"];
$cantidad1 = $_POST["cantidad1"];
$cantidad2 = $_POST["cantidad2"];
$cantidad3 = $_POST["cantidad3"];
$total = $_POST["total"];

if($producto1 == ""){
    $producto1 = "";
}else if($producto1 == 100){
    $producto1 = "Vigilancia fiija";
}else if($producto1 == 200){
    $producto1 = "Vigilancia Movil";
}else if($producto1 == 300){
    $producto1 = "Escolta de personas";
}else if($producto1 == 400){
    $producto1 = "Seguridad en exportaciones";
}else if($producto1 == 500){
    $producto1 = "Estudio de seguridad a instalaciones";
}else{
    $producto1 = "Estudio de seguridad a personas";
}
if($producto2 == ""){
    $producto2 = "";
}else if($producto2 == 100){
    $producto2 = "Vigilancia fiija";
}else if($producto2 == 200){
    $producto2 = "Vigilancia Movil";
}else if($producto2 == 300){
    $producto2 = "Escolta de personas";
}else if($producto2 == 400){
    $producto2 = "Seguridad en exportaciones";
}else if($producto2 == 500){
    $producto2 = "Estudio de seguridad a instalaciones";
}else{
    $producto2 = "Estudio de seguridad a personas";
}
if($producto3 == ""){
    $producto3 = "";
}elseif($producto3 == 100){
    $producto3 = "Vigilancia fiija";
}else if($producto3 == 200){
    $producto3 = "Vigilancia Movil";
}else if($producto3 == 300){
    $producto3 = "Escolta de personas";
}else if($producto3 == 400){
    $producto3 = "Seguridad en exportaciones";
}else if($producto3 == 500){
    $producto3 = "Estudio de seguridad a instalaciones";
}else{
    $producto3 = "Estudio de seguridad a personas";
}
$ruta = '../archivos/'.$nombre.'.pdf';
$ruta_bd = 'archivos/'.$nombre.'.pdf';
$guardar = "INSERT into investigaciones (
    nombre,
    telefono, 
    email,
    producto1,
    cantidad1,
    producto2,
    cantidad2,
    producto3,
    cantidad3,
    total,
    ruta) values (
    '$nombre', 
    '$telefono',
    '$email',
    '$producto1',
    '$cantidad1',
    '$producto2',
    '$cantidad2',
    '$producto3',
    '$cantidad3',
    '$total',
    '$ruta_bd'
)";
$res = mysqli_query($con, $guardar) or die(mysqli_error($con));
// if(!$res){
//     echo 2;
// }else{
//     echo 1;
// }
// header("Location: ../index.php");
// ----------------------- guardar PDF -------------------------------------

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //Logo
    $this->Image('../images/insep_investigaciones.jpg',20,18,160);
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

$consulta = "SELECT * FROM investigaciones order by id desc";
$res = mysqli_query($con, $consulta);
$datos = mysqli_fetch_array($res);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

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

$archivo = $pdf->Output('F', $ruta);

if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $nombre = $_POST['nombre'];


    require_once('conexion.php');
    $con = conectar();
    $listar = "SELECT * FROM investigaciones order by id DESC";
    $sql = mysqli_query($con, $listar) or die (mysqli_error($con));
    $data = mysqli_fetch_array($sql);


$ruta = $data["ruta"];

$email_from = $email;
$email_to = "cartera@insep.com.co, cartera@insep.com.co, $email";


$message = '<html>'.
    '<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">'.
    '<title>INSEP CONTÁCTO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">'.
    '</head>'.
    '<body>'.
    '<div style="
    width: 70%;
    height: 580px;">'.
    '<div style="width: 75%;border: 1px dashed;height: 550px;padding: 20px;">'.
    '<img src="http://insep.com.co/images/insep_investigaciones.jpg" style="width:100%;">
    <div style="display:flex;background: #f7f7f7; padding: 10px 30px;">
    <div style="width:50%">
    <h2 style="text-align: center;
    width: 80%;">Cotización</h2>
    <a download href="http://insep.com.co/'.$ruta.'" target="h_blank"><img src="http://insep.com.co/images/pdf.png" style="width: 41%;
    padding-top: 20px;padding-left: 50px;"></a>
    </div>
    <div style="width:50%">
    <p style="border: 1px solid; padding: 5px; background: #d72e340d;">'.
    '<b>'.'Nombre del cliente: '.'</b>' . $nombre . '<br></p>
    </div>

    </div>'.
    '</div>'.
    '</div>'.
    '</body>'.
    '</html>';
	
	// create email headers
$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n".
                'Reply-To:'. $email_from . "\r\n" .
                'From:' . $email_from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $email = @mail($email_to, "INSEP", wordwrap($message), $headers);
    if ($email) {
        echo 1;
    
    } else {
        echo 2;
    }
}else {
	echo 2;
}
