<?php

$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

switch ($method) 
{


  case 'POST'://cuando entra un jugador nuevo

		$v1 = $_GET['v1'];
		$v2 = $_GET['v2'];


		$myfile = file_put_contents($v1, $v2);	 
		chmod($myfile, 0777);	

    break;

}

?>
