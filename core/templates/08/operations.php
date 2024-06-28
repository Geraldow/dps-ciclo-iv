<?php

require('fpdf/fpdf.php');
$client = $_POST ['cliente'];
list($product, $price) = explode('|', $_POST['producto']);

$quantity = $_POST ['cantidad'];
$mount = $quantity * $price;

if($mount < 400){
    $discount = 0.03;
} else if ($mount <= 700){
    $discount = 0.06;
} else if ($mount <= 1000){
    $discount = 0.09;
} else if ($mount <= 1400){
    $discount = 0.12;
} else {
    $discount = 0.15;
}

$mountDiscountInit = $mount * $discount;
$mountDiscountFinal = $mount - $mountDiscountInit;

$igv = 0.18;
$igvMountProduct = $mountDiscountFinal * $igv;
$finalValue = $mountDiscountFinal + $igvMountProduct;

# FIRST STEP: WE CREATE PDF
$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial', 'B', 15);

# SECOND STEP: WE DESIGN TITLE
$pdf -> Cell(0, 10, 'Boleta de Venta', 0, 1, 'C',);

# THIRD STEP: WE CAPTURE DATA ENTRIES
$pdf -> SetFont('Arial', 'I', 12);
$pdf -> Cell(0, 10, "Cliente: $client", 0, 1, 'L');
$pdf -> Cell(0, 10, "Producto: $product", 0, 1, 'L');
$pdf -> Cell(0, 10, "Cantidad: $quantity", 0, 1, 'L');

# FOURTH STEP: WE DESIGN HEADER
$pdf -> SetFont('Arial', 'I', 12);
$pdf -> SetTextColor(255, 0, 0);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(50, 10, 'Concepto', 1, 0, 'C', true);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(50, 10, 'Detalle', 1, 0, 'C', true);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(50, 10, 'Monto', 1, 1, 'C', true);

# c STEP: WE DESIGN BODY OF THE TABLE
$pdf -> Cell(50, 10, 'Precio unitario', 1, 0, 'C');
$pdf -> Cell(50, 10, "$quantity unidades", 1, 0, 'C');
$pdf -> Cell(50, 10, "$price soles", 1, 1, 'C');


$pdf -> Cell(50, 10, 'Subtotal', 1, 0, 'C');
$pdf -> Cell(50, 10, "", 1, 0, 'C');
$pdf -> Cell(50, 10, "$mount soles", 1, 1, 'C');

$pdf -> Cell(50, 10, 'Descuento', 1, 0, 'C');
$pdf -> Cell(50, 10, "$discount% descuento", 1, 0, 'C');
$pdf -> Cell(50, 10, '-'."$mountDiscountInit soles", 1, 1, 'C');

$pdf -> Cell(50, 10, 'Subtotal con descuento', 1, 0, 'C');
$pdf -> Cell(50, 10, "", 1, 0, 'C');
$pdf -> Cell(50, 10, "$mountDiscountFinal soles", 1, 1, 'C');

$pdf -> Cell(50, 10, 'IGV', 1, 0, 'C');
$pdf -> Cell(50, 10, "$igv%", 1, 0, 'C');
$pdf -> Cell(50, 10, "$igvMountProduct soles", 1, 1, 'C');

$pdf -> Cell(50, 10, 'Neto', 1, 0, 'C');
$pdf -> Cell(50, 10, "", 1, 0, 'C');    
$pdf -> Cell(50, 10, "$finalValue soles", 1, 1, 'C');

# FINAL STEP: WE GENERATE PDF
$pdf -> Output('D','boleta_de_venta.pdf');
?>