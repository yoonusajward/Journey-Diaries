<?php
require_once('../fpdf/fpdf.php');

$pid = $_GET['recID'];
$title = $_POST['title'];
$content = $_POST['content'];

// Create a new PDF instance
$pdf = new FPDF();

// Add a page to the PDF (you can specify page size and orientation)
$pdf->AddPage('P', 'A4'); // Use A4 size in portrait orientation

// Set font for the entire document
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(50, 60, 100);

// Display the title with a border around it
$pdf->Cell(0, 10, $title, 1, 1, 'C');

// Add some spacing
$pdf->Ln(10);

// Set font and text color for content
$pdf->SetFont('Arial', '', 11);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

// Center-align content with line breaks and add CSS-like styles
$pdf->MultiCell(0, 10, $content, 0, 'C');

// Output the PDF to view
$pdf->Output($title.'.pdf', 'I');
?>
