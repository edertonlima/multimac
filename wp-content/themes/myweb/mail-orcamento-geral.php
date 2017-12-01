<?php

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$empresa = $_GET['empresa'];
	$telefone = $_GET['telefone'];
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
	<h2>Olá, uma nova solicitação de orçamento foi feito através do site.</h2>
	<p>Confira abaixo, todos os dados preenchidos no formulário de solicitação:</p>';

	$conteudo .= '<p>';
	$conteudo .= '<strong>Nome:</strong> '.$nome;
	$conteudo .= '<br><strong>E-mail:</strong> '.$email;
	$conteudo .= '<br><strong>Telefone:</strong> '.$telefone;
	$conteudo .= '<br><strong>Empresa:</strong> '.$empresa;
	$conteudo .= '<br><br><strong>Orçamento:</strong><br>'.$mensagem;
	$conteudo .= '</p>';
	if(mail($para, "Orçamento, Site Multimac", $conteudo, $headers, "-f$email_remetente")){
		mail('edertton@gmail.com', "Orçamento, Site Multimac", $conteudo, $headers, "-f$email_remetente");
		echo(json_encode('ok'));
	}else{
		echo(json_encode("Desculpe, não foi possível enviar seu formulário. <br>Por favor, tente novamente mais tarde."));
	}
?>