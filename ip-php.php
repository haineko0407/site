<?php
$IP = $_SERVER['REMOTE_ADDR'];
//スクリプトの出力
echo "document.write('PHPでのIP表示:" . $IP . "');";
echo "var IP = '" . $IP . "';";
?>
