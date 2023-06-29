<?php
session_start();
include_once("validar_cookie.php");
include_once("../dao/manipula_dados.php");
include_once("../fpdf/fpdf.php");

$busca = new manipula_dados();
$busca->set_table("log_bd");
$objetos = $busca->get_all_data_table();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(190, 10, utf8_decode('Relatório das operações do Banco de dados'), 0, 0, "C");
$pdf->Ln(20);

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(63, 8, utf8_decode('Operação'), 1, 0, "C");
$pdf->Cell(63, 8, utf8_decode('Tabela'), 1, 0, "C");
$pdf->Cell(63, 8, utf8_decode('Data'), 1, 0, "C");
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
foreach($objetos as $objeto){
    $pdf->Cell(63, 8, utf8_decode($objeto["operacao"]), 1, 0, "C");
    $pdf->Cell(63, 8, utf8_decode($objeto["tabela"]), 1, 0, "C");
    $pdf->Cell(63, 8, utf8_decode($objeto["data"]), 1, 0, "C");
    $pdf->Ln();
}


$pdf->Output("D", "relatorio_log.pdf");
?>