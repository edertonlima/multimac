<?php 
	session_start();

	session_cache_limiter('private');
	$cache_limiter = session_cache_limiter();
	session_cache_expire(10);
	$cache_expire = session_cache_expire();

	if((isset($_SESSION['favoritos'][$_GET['tipo']])) and (count($_SESSION['favoritos'][$_GET['tipo']]) > 0)){

		$adiciona = true;
		foreach ($_SESSION['favoritos'][$_GET['tipo']] as $key => $value) {
			if($value['id'] == $_GET['id']){
				$adiciona = false;
			}
		}

		if($adiciona){
			$_SESSION['favoritos'][$_GET['tipo']][] = array(
				'id'		=> $_GET['id'],
				'nome'		=> $_GET['nome'],
				'imagem'	=> $_GET['imagem']
			);
			if(end($_SESSION['favoritos'][$_GET['tipo']])['id'] == $_GET['id']){
				echo(json_encode('ok'));
			}else{
				echo(json_encode('erro'));
			}
		}else{
			echo(json_encode('jaexiste'));
		}

	}else{
		$_SESSION['favoritos'][$_GET['tipo']][] = array(
			'id'		=> $_GET['id'],
			'nome'		=> $_GET['nome'],
			'imagem'	=> $_GET['imagem']
		);
		if(end($_SESSION['favoritos'][$_GET['tipo']])['id'] == $_GET['id']){
			echo(json_encode('ok'));
		}else{
			echo(json_encode('erro'));
		}
	}
?>