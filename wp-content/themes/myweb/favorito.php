<?php 
	session_start();

	session_cache_limiter('private');
	$cache_limiter = session_cache_limiter();
	session_cache_expire(10);
	$cache_expire = session_cache_expire();

	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['senha'] = $_POST['senha'];
	$_SESSION['id'] = $usuario[0]->ID;
	$url = get_post_permalink($_SESSION['id']).'#novo-pedido';
	header('Location: '.$url);

				 //echo '<br>logado';

			}else{ //echo '<br> não tem usuario';
				$msg = '<p><strong>Não foi possivel entrar em sua área.</strong><br>Por favor, verifique seu nome de usuário e sua senha ou se o seu cadastro ainda não foi verificado, você não conseguirá acessar a sua área.</p>';
			}
		}else{ //echo '<br>não tem POST';
			
		}

	}
?>