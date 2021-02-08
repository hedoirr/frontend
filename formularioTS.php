<?php
	session_start();
	if(isset($_SESSION['etapa_formulario'])){
		$_SESSION['etapa_formulario'] = 0;
		}
?>
<!DOCTYPE htm>
<html>
<head>
	<title>TS CABELEIREIROS</title>
</head>
<body>
		<h1>SEJA BEM-VINDO</h1>
		<p>TS CABELEIREIROS</p>
		<br>
		<?php
			if(isset($POST['acao_form1'])){
				$_SESSION['etapa_formulario'] = $_SESSION['etapa_formulario']+1;
				$_SESSION['nome'] = $_POST['nome'];
				header('Location: index.php');
				die();
			}else if(isset($POST['acao_form2'])){
				$_SESSION['etapa_formulario'] = $_SESSION['etapa_formulario']+1;
				$_SESSION['email'] = $_POST['email'];
				header('Location: index.php');
				die();
			}
		?>
		
		<?php
			if(isset($_SESSION['etapa_formulario'] && $_SESSION['etapa_formulario'] == 0)){
		?>
			<form method= "post">
				<input type= "text" name= 'nome' placeholder='Digite o seu nome...'>
				<input type="hidden" name='acao_form1'>
				<input type="submit" value='Enviar!'>
			</form>
			
		<?php }else if(isset($_SESSION['etapa_formulario'] && $_SESSION['etapa_formulario'] == 1)){?>
			
			<form method= 'post'>
				<input type= 'text' name= 'email' placeholder="Digite o seu email...">
				<input type='hidden' name='acao_form2'>
				<input type='submit' value='Enviar!'>
			</form>
			
<?php }else{ ?>

		<h2> Segue suas informacoes para o formulario!</h2>
		<?php
			echo 'Nome- ' .$_SESSION['nome'];
			echo '<br/>';
			echo 'E-mail- ' .$_SESSION['email'];	
		?>
<?php} ?>
</body>
</html>