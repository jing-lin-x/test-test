<?php

$Nme=$_POST['Nme'];
$Tel=$_POST['Tel'];
$Opinion=$_POST['Opinion'];

function Content($a,$b,$c){
  echo '姓名:' .$a.'<br>' .'電話:' .$b. '<br>'.$c;
}
Content($Nme,$Tel,$Opinion);
?>