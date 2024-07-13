<?php
if (isset($_POST['pdfContent'])) {
    // Generate PDF based on the received content
    $pdfContent = $_POST['pdfContent'];
    
    // Include TCPDF library
    require_once('TCPDF-main/tcpdf.php');
    
    // Extend TCPDF with custom functions
    class MYPDF extends TCPDF {
        // Page header
        public function Header() {
            // Set font
            $this->SetFont('helvetica', 'B', 12);
            // Title
            $this->Cell(0, 10, 'Booking Details', 0, false, 'C', 0, '', 0, false, 'M', 'M');
            $this->Ln(10);
        }
    }
    
    // Create new PDF instance
    $pdf = new MYPDF();
    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Booking Details');
    $pdf->SetSubject('Booking Details');
    // Add a page
    $pdf->AddPage();
    // Set some CSS
    $html = '<style>
                .border-box {
                    border: 1px solid #ddd;
                    border-collapse: collapse;
                }
                .border-box th,
                .border-box td {
                    border: 1px solid #ddd;
                    padding: 8px;
                }
                .border-box th {
                    background-color: #f2f2f2;
                }
                .border-box tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
            </style>';
    // Add content with HTML and CSS
    $html .= $pdfContent;
    // Write HTML content
    $pdf->writeHTML($html);
    
    // Close and output PDF
    $pdf->Output('booking_details.pdf', 'D');
} else {
    // Handle case when pdfContent is not provided
    echo 'Error: PDF content not provided';
}
?>

<form method="post" id="pdfForm" action="generate-pdf.php" target="_blank">
    <input type="hidden" name="pdfContent" id="pdfContent" value="">
    <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;" />
    <!-- Update button onclick event -->
    <button type="button" class="btn btn-primary" onclick="generatePDF()">View</button>
</form>