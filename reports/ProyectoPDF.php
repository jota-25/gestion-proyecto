<?php

require_once __DIR__ .
'/../vendor/autoload.php';

use App\Models\Proyecto;

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
    'REPORTE DE PROYECTOS',
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
$pdf->Cell(50,10,'Cliente',1);
$pdf->Cell(60,10,'Proyecto',1);
$pdf->Cell(35,10,'Estado',1);
$pdf->Cell(30,10,'Inicio',1);

$pdf->Ln();

$model =
new Proyecto();

$proyectos =
$model->all();

$pdf->SetFont(
    'Arial',
    '',
    9
);

foreach($proyectos as $proyecto){

    $pdf->Cell(
        15,
        10,
        $proyecto['id'],
        1
    );

    $pdf->Cell(
        50,
        10,
        utf8_decode(
            $proyecto['cliente_nombre']
        ),
        1
    );

    $pdf->Cell(
        60,
        10,
        utf8_decode(
            $proyecto['nombre']
        ),
        1
    );

    $pdf->Cell(
        35,
        10,
        $proyecto['estado'],
        1
    );

    $pdf->Cell(
        30,
        10,
        $proyecto['fecha_inicio'],
        1
    );

    $pdf->Ln();
}

$pdf->Output();