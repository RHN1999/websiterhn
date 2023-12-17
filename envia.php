<?php
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$telefone = addslashes($_POST['telefone']);
	$mensagem = addslashes($_POST['mensagem']);

	$recebe = "rhendson1@gmail.com";
	$assunto = "Contato - RHN DESIGNER";
	
	$corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;
	
	$cabeca = "From: rhendson1@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

	if(mail($recebe,$assunto,$corpo,$cabeca)){
		echo("E-mail enviado com sucesso!");
	}else{
		echo("Houve um erro ao enviar o email!");
	}
	
?>