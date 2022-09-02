<?php
var_dump($_POST ["newitem"]);
$File = fopen('List.txt', 'w');
Fwrite($File, $_POST['newitem'] . "\n");
Fclose($File);
header('Location: /index.php');
die();