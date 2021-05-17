<?php
    error_reporting(0);
	$nome = $_POST["nome"];
	$cnpj = $_POST["cnpj"];
	$telefone = $_POST["telefone"];
	$assunto = $_POST["assunto"];
	$conteudo = $_POST["conteudo"];

	mail("@gmail.com",
	"$assunto",
	"Dados da empresa:$nome, CNPJ: $cnpj, Telefone: $telefone"
	"Mensagem: $conteudo"
	);
	
	$de = "$email";
	$msg = "$nome, $cnpj, $telefone, $assunto, $conteudo";
	
	mail("$email",
	"$msg",
	"From:$email"
	);

	echo "<p align=center><h1>$nome, sua mensagem foi enviada com sucesso, entraremos em contato o quanto antes!</h1></p>";
	

?>