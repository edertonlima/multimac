<?php 
	session_start();

	foreach ($_SESSION['favoritos'][$_GET['tipo']] as $key => $value) {
		if($value['id'] == $_GET['id']){
			echo(json_encode('ok'));
			unset($_SESSION['favoritos'][$_GET['tipo']][$key]);
			break;
		}else{
			echo(json_encode('não'));
		}
	}


	/*

	if($_GET['tipo'] == 'equipamentos'){
		if((isset($_SESSION['favoritos']['equipamentos'])) and (count($_SESSION['favoritos']['equipamentos']) > 0)){

			$adiciona = true;
			foreach ($_SESSION['favoritos']['equipamentos'] as $key => $value) {
				if($value['id'] == $_GET['id']){
					$adiciona = false;
				}
			}

			if($adiciona){
				$_SESSION['favoritos']['equipamentos'][] = array(
					'id'		=> $_GET['id'],
					'nome'		=> $_GET['nome'],
					'imagem'	=> $_GET['imagem']
				);
				if(end($_SESSION['favoritos']['equipamentos'])['id'] == $_GET['id']){
					echo(json_encode('ok'));
				}else{
					echo(json_encode('erro'));
				}
			}else{
				echo(json_encode('jaexiste'));
			}

		}else{
			$_SESSION['favoritos']['equipamentos'][] = array(
				'id'		=> $_GET['id'],
				'nome'		=> $_GET['nome'],
				'imagem'	=> $_GET['imagem']
			);
			if(end($_SESSION['favoritos']['equipamentos'])['id'] == $_GET['id']){
				echo(json_encode('ok'));
			}else{
				echo(json_encode('erro'));
			}
		}
	}

	if($_GET['tipo'] == 'sistemas'){
		if((isset($_SESSION['favoritos']['sistemas'])) and (count($_SESSION['favoritos']['sistemas']))){

			$adiciona = true;
			foreach ($_SESSION['favoritos']['sistemas'] as $key => $value) {
				if($value['id'] == $_GET['id']){
					$adiciona = false;
				}
			}

			if($adiciona){
				$_SESSION['favoritos']['sistemas'][] = array(
					'id'		=> $_GET['id'],
					'nome'		=> $_GET['nome'],
					'imagem'	=> $_GET['imagem']
				);
				if(end($_SESSION['favoritos']['sistemas'])['id'] == $_GET['id']){
					echo(json_encode('ok'));
				}else{
					echo(json_encode('erro'));
				}
			}else{
				echo(json_encode('jaexiste'));
			}
		}else{
			$_SESSION['favoritos']['sistemas'][] = array(
				'id'		=> $_GET['id'],
				'nome'		=> $_GET['nome'],
				'imagem'	=> $_GET['imagem']
			);
			if(end($_SESSION['favoritos']['sistemas'])['id'] == $_GET['id']){
				echo(json_encode('ok'));
			}else{
				echo(json_encode('erro'));
			}
		}
	}*/
?>