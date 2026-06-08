<?php

require_once __DIR__ .
'/../vendor/autoload.php';

use App\Models\Cliente;

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont(
    'Arial',
    'B',
    16
);

$pdf->Cell(
    190,
    10,
    'REPORTE DE CLIENTES',
    1,
    1,
    'C'
);

$pdf->Ln(5);

$pdf->SetFont(
    'Arial',
    'B',
    10
);

$pdf->Cell(15,10,'ID',1);
$pdf->Cell(60,10,'Nombre',1);
$pdf->Cell(70,10,'Email',1);
$pdf->Cell(40,10,'Telefono',1);

$pdf->Ln();

$model =
new Cliente();

$clientes =
$model->all();

$pdf->SetFont(
    'Arial',
    '',
    10
);

foreach($clientes as $cliente){

    $pdf->Cell(
        15,
        10,
        $cliente['id'],
        1
    );

    $pdf->Cell(
        60,
        10,
        utf8_decode(
            $cliente['nombre']
        ),
        1
    );

    $pdf->Cell(
        70,
        10,
        $cliente['email'],
        1
    );

    $pdf->Cell(
        40,
        10,
        $cliente['telefono'],
        1
    );

    $pdf->Ln();
}

$pdf->Output();