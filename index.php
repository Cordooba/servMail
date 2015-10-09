<?php

	function verificarDatos ($name,$subname,$mail,$message) {

		$errores=array();
		
		if(empty($name) || empty($subname) || empty($mail) || empty($message)) {
			$errores['emp']=true;
		}
		if(!is_string($name) || !is_string($subname) || !is_string($mail) || !is_string($message)) {
			$errores['string']=true;
		}

		return $errores;

	}
	
	$name = $subname = $mail = $message = "";

	if ( $_POST ) {

		$name=htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
		$subname=htmlspecialchars($_POST['subname'], ENT_QUOTES, 'UTF-8');
		$mail=htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8');
		$message=htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

		if(!verificarDatos($name,$subname,$mail,$message)) {

			include 'error.html.php';

		}else{

			include 'succes.html.php';

		}

	}else{

		include 'main.html.php';

	}

?>