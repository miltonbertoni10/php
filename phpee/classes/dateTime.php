<?php
//funçoes date e time do php
//setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese");
//echo strftime("%A %B");
//echo date("d/m/Y H:i:s") . "<br>";

$date = new DateTime();

$perido = new DateInterval("P15D");

echo $date->format("d/m/Y H:i:s");
$date->add($perido);
echo "<br>";
echo $date->format("d/m/Y H:i:s");

//echo time();