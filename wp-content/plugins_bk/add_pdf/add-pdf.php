<?php
/*
  Plugin Name: AddPdf
  Plugin URI:
  Description: 自動PDF生成
  Version: 1.0.0
  Author: YuriTera
  Author URI:https://study-mate.co.jp
  License: GPLv2
 */

include (dirname(__FILE__).'/tcpdf/tcpdf.php');
include (dirname(__FILE__).'/tcpdf/fpdi/autoload.php');

function add_pfd($company,$traking,$num1,$num2,$num3,$num4,$num5,$num6,$num7){

  $pdf = new setasign\Fpdi\Tcpdf\Fpdi();
  $pdf->setPrintHeader( false );

  $pdf->setSourceFile("quotation.pdf");
  $pdf->AddPage();
  $tpl = $pdf->importPage(1);
  $pdf->useTemplate($tpl);

  //no
  $num = 'CAM'.date('Ymd').$traking;
  $pdf->SetFont('kozminproregular', '', 11);
  $pdf->Text(165, 13.5, htmlspecialchars( $num ) );

  //date
  $date = date('Y年m月d日');
  $pdf->SetFont('kozminproregular', '', 11);
  $pdf->Text(170, 37.5, htmlspecialchars( $date ) );

  //company
  $pdf->SetFont('kozminproregular', '', 20);
  $pdf->Text(14, 52, htmlspecialchars( $company ) );

  //full
  $pdf->SetFont('kozminproregular', '', 11);
  $price1 = $num1 * 20000;
  $pdf->SetXY(99, 119.5);
  $pdf->Cell(26, 5, $num1, 0, 0, 'C');
  $pdf->Cell(32, 5,number_format($price1), 0, 0, 'C');

  //full
  $pdf->SetFont('kozminproregular', '', 11);
  $price2 = $num2 * 3000;
  $pdf->SetXY(99, 134.5);
  $pdf->Cell(26, 5, $num2, 0, 0, 'C');
  $pdf->Cell(32, 5,number_format($price2), 0, 0, 'C');

  //full
  $pdf->SetFont('kozminproregular', '', 11);
  $price3 = $num3 * 4000;
  $pdf->SetXY(99, 154.5);
  $pdf->Cell(26, 5, $num3, 0, 0, 'C');
  $pdf->Cell(32, 5,number_format($price3), 0, 0, 'C');

  //full
  $pdf->SetFont('kozminproregular', '', 11);
  $price4 = $num4 * 5000;
  $pdf->SetXY(99, 164.5);
  $pdf->Cell(26, 5, $num4, 0, 0, 'C');
  $pdf->Cell(32, 5,number_format($price4), 0, 0, 'C');

  //full
  $pdf->SetFont('kozminproregular', '', 11);
  $price5 = $num5 * 8000;
  $pdf->SetXY(99, 174.5);
  $pdf->Cell(26, 5, $num5, 0, 0, 'C');
  $pdf->Cell(32, 5,number_format($price5), 0, 0, 'C');

  //full
  $pdf->SetFont('kozminproregular', '', 11);
  $price6 = $num6 * 5000;
  $pdf->SetXY(99, 189.5);
  $pdf->Cell(26, 5, $num6, 0, 0, 'C');
  $pdf->Cell(32, 5,number_format($price6), 0, 0, 'C');

  //full
  $pdf->SetFont('kozminproregular', '', 11);
  $price7 = $num7 * 10000;
  $pdf->SetXY(99, 204.5);
  $pdf->Cell(26, 5, $num7, 0, 0, 'C');
  $pdf->Cell(32, 5,number_format($price7), 0, 0, 'C');

  //小計
  $syokei = $price1 + $price2 + $price3 + $price4 + $price5 + $price6 + $price7;
  $pdf->SetFont('kozminproregular', '', 12);
  $pdf->SetXY(156, 221);
  $pdf->Cell(45, 5, number_format($syokei), 0, 0, 'R');

  //消費税
  $zei = $syokei * 0.1;
  $pdf->SetFont('kozminproregular', '', 12);
  $pdf->SetXY(156, 228.5);
  $pdf->Cell(45, 5, number_format($zei), 0, 0, 'R');

  //合計
  $gokei = $syokei + $zei;
  $pdf->SetFont('kozminproregular', '', 13);
  $pdf->SetXY(156, 237);
  $pdf->Cell(45, 5, number_format($gokei), 0, 0, 'R');




  $pdf->Output("output.pdf", "I");

}
