<?php
include (dirname(__FILE__).'/add-pdf.php');
$pdf = filter_input( INPUT_POST, 'pdf' );
$company = filter_input( INPUT_POST, 'company' );
if(empty($company)){
  $company = 'サンプル会社';
}
$traking = filter_input( INPUT_POST, 'traking' );
$traking2 = sprintf('%04d', $traking );
if(empty($traking2)){
  $traking2 = 0;
}
$num1 = filter_input( INPUT_POST, 'num1' );
if(empty($num1)){
  $num1 = 0;
}
$num2 = filter_input( INPUT_POST, 'num2' );
if(empty($num2)){
  $num2 = 0;
}
$num3 = filter_input( INPUT_POST, 'num3' );
if(empty($num3)){
  $num3 = 0;
}
$num4 = filter_input( INPUT_POST, 'num4' );
if(empty($num4)){
  $num4 = 0;
}
$num5 = filter_input( INPUT_POST, 'num5' );
if(empty($num5)){
  $num5 = 0;
}
$num6 = filter_input( INPUT_POST, 'num6' );
if(empty($num6)){
  $num6 = 0;
}
$num7 = filter_input( INPUT_POST, 'num7' );
if(empty($num7)){
  $num7 = 0;
}
if($pdf == 'show'){
  add_pfd($company,$traking,$num1,$num2,$num3,$num4,$num5,$num6,$num7);
}else{
  echo '実行しない';
}
