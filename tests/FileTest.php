<?php

use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public function testFileIsCreatedAndIdentical()
    {
        $pdf = new \Emscherland\Fpdf\Fpdf('P', 'mm', 'A4');
        $pdf->SetCreationDate('202010140000');    // else php unit test for reference file fails

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

        $this->assertStringEqualsFile(__DIR__ . '/testpdf1.pdf', $pdf->Output('example.pdf', 'S'));

    }
}
