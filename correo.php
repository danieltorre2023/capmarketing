<? php 
if (isset($_POST['enviar'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])){
		$name = $_POST['name'];
		$correo = $_POST['email'];
		$telefono = $_POST['telefono'];
		$mensaje = $_POST['mensaje'];
		$header = "from: daniel.t@amznstock.net" . "\r\n";
		$header = "Reply-to: daniel.t@amznstock.net" . "\r\n";
		$header = "X-Mailer: PHP/". phpversion();
		$mail = @mail($correo,$name,$telefono,$mensaje,$header);
		if ($mail) {
			echo "<h4> !Mail enviado exitosamente! </h4>";
		}
			
	}
}

