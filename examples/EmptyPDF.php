<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

$pdf = new Fpdf('P', 'mm', 'A4');
$pdf->SetTitle('Sample PDF');
$pdf->SetAuthor('PHP-Package emscherland/fpdf');
$pdf->AddPage();
$pdf->SetLeftMargin(24);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY(24, 110);
$pdf->MultiCell(0, 6, 'Hello World');
$pdf->Ln(5);

echo $pdf->Output('example.pdf', 'S');
