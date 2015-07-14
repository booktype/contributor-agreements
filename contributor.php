<?php
include("../mpdf.php");

$individual = file_get_contents("individual-contributor-license-agreement.html");
$style_data = file_get_contents("contributor.css");
$entity = file_get_contents("entity-contributor-license-agreement.html");

// Create new PDF with font subsetting, 210mm wide, 297mm high
$mpdf = new mPDF('s', array(210,297));

// Make it DOUBLE SIDED document
$mpdf->mirrorMargins = 1;

$mpdf->WriteHTML($style_data, 1);

$mpdf->WriteHTML($individual, 2);

$mpdf->SetTitle("Booktype GmbH Individual Contributor License Agreement");
$mpdf->SetAuthor("Booktype GmbH");
$mpdf->SetCreator("mPDF 6.0");
$mpdf->SetSubject("Booktype Contributor Agreements");
$mpdf->SetKeywords("Booktype, AGPL, GitHub");

$mpdf->Output("individual-contributor-license-agreement.pdf",'F');

// Create new PDF with font subsetting, 210mm wide, 297mm high
$mpdf = new mPDF('s', array(210,297));

// Make it DOUBLE SIDED document
$mpdf->mirrorMargins = 1;

$mpdf->WriteHTML($style_data, 1);

$mpdf->WriteHTML($entity, 2);

$mpdf->SetTitle("Booktype GmbH Entity Contributor License Agreement");
$mpdf->SetAuthor("Booktype GmbH");
$mpdf->SetCreator("mPDF 6.0");
$mpdf->SetSubject("Booktype Contributor Agreements");
$mpdf->SetKeywords("Booktype, AGPL, GitHub");

$mpdf->Output("entity-contributor-license-agreement.pdf",'F');

?>


