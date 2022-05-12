<?php
require '../view/load.php';
require '../model/model.php';
require '../controller/controller.php';

$functionName = $_POST["func"]; // func parameter should be sent in AJAX, determines which function to run
//echo($functionName);
new Controller('../../.', $functionName);

?>