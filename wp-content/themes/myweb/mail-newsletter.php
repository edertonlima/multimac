<?php

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$empresa = $_GET['empresa'];
	$email = $_GET['email'];
	$mensagem = $_GET['mensagem'];

	$nome_site = $_GET['nome_site'];
	$para = $_GET['para'];

	$email_remetente = 'site@itismyweb.co';


	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: $nome_site <$email_remetente>\n";
	$headers .= "Return-Path: $nome_site <$email_remetente>\n";
	$headers .= "Reply-To: $nome <$email>\n";

	$conteudo = '
	<h2>Olá, um novo cadastro para newsletter foi enviado através do site.</h2>';

	$conteudo .= '<p>';
	$conteudo .= '<strong>Nome:</strong> '.$nome;
	$conteudo .= '<br><strong>E-mail:</strong> '.$email;
	$conteudo .= '</p>';
	if(mail($para, "Newsletter, Site Multimac", $conteudo, $headers, "-f$email_remetente")){
		mail('edertton@gmail.com', "Newsletter, Site Multimac", $conteudo, $headers, "-f$email_remetente");
		//mail('pablo@di20.com.br', "Contato, Fale Conosco", $conteudo, $headers, "-f$email_remetente");
		echo(json_encode('ok'));
	}else{
		echo(json_encode("Desculpe, não foi possível enviar seu formulário. <br>Por favor, tente novamente mais tarde."));
	}
?>