<?php
    $usuario="root";
	$senha="";
	$servidor="localhost";
	$banco="login_php";

	try{
		$db = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
		echo "Conexao OK" . "<br>";
	}
	catch(PDOException $e){
		echo $e->getMessage();	
	}