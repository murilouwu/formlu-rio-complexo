<?php
	if(isset($_POST['acao'])){
		//Personagem.
			//Informação base:
				$nome = $_POST['nome']; // nome
				$sobrenome = $_POST['sobrenome']; // sobrenome
				$nomefamilia = $_POST['familia']; // nome da familia
				$apellido = $_POST['apelido']; // apelido
				$historia = $_POST['historia']; // História

			//Medidas:
				$idade = $_POST['idade']; // idade
				$altura = $_POST['altura']; // altura
				$peso = $_POST['peso']; // peso
				$porcentagem = $_POST['porcentagem']; // porcentagem de gotdura
				$tipo = $_POST['tipo']; //tipo de corpo

			//Personalidade:
				$otimismo = $_POST['otm']; // Otimismo
				$raiva = $_POST['rav']; // Raiva
				$seriedade = $_POST['ser']; // Seriedade
				$felicidade = $_POST['fel']; // Felicidade
				$pervercao = $_POST['per']; // Perverção
				$bondade = $_POST['bom']; // Bondade

			//Atributos:
				$forca = $_POST['for']; // Força
				$velocidade = $_POST['vel']; // Velocidade
				$agilidade = $_POST['agl']; // Agilidade
				$inteligencia = $_POST['int']; // Inteligência
				$reflexo = $_POST['ref']; // Reflexo
				$controle = $_POST['con']; // Controle

			//Localização:
				$paiz = $_POST['paiz']; // Paiz
				$continente = $_POST['continente']; // Continente
				$estado = $_POST['estado']; // Estado
				$cidade = $_POST['cidade']; // Cidade
				$x = $_POST['x']; // Coordenada X
				$y = $_POST['y']; // Coordenada Y

			//Links imagems
				$rosto = $_POST['urlface'];// Rosto
				$corpo = $_POST['urlbody']; // Corpo 
				$bandeira = $_POST['urlnacao']; //bandeira
				$casa = $_POST['urlcasa']; //casa

		//Mestre.
			$nomemestre = $_POST['mnome']; // nome
			$lutamestre = $_POST['mluta']; // arte marcial
			$nvluta = $_POST['nvmestre']; // nivel de Luta
			$idademestre = $_POST['midade']; // idade
			$alturamestre = $_POST['maltura']; // altura
			$pesomestre = $_POST['mpeso']; // peso
			$rostomestre = $_POST['urlmestre']; //rosto img

		//investidor.
			$apnome = $_POST['apnome']; // nome
			$trabalho = $_POST['intrabalho']; // Trabalho
			$salario = $_POST['salario']; // salário de investimento
			$idadeinves = $_POST['apidade']; // idade
			$alturainves = $_POST['apaltura']; // altura
			$pesoinves = $_POST['appeso']; // peso
			$rostoinves = $_POST['urlinvest']; //rosto img

		$resume = '
		<!DOCTYPE html>
		<html lang="pt-BR">
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" type="text/css" href="style\estiloF.css">
				<title>'.$nome.' '.$sobrenome.'</title>
			</head>
			<body>
				<img src="imagens\mouse.png" class="mouse">
				<div class="all">
					<div class="topo">
						<button class="bt" id="b1"><img src="imagens\log.png" class="bti"></button>
						<button class="bt" id="b2"><img src="imagens\mapa.png" class="bti"></button>
						<button class="bt" id="b3"><img src="imagens\skils.png" class="bti"></button>
					</div>
					<div class="meio">
						<div class="atributo">
							<div class="informações">
								<div class="personagem">
									<img src="'.$rosto.'" class="imagem" id="face">
									<div class="nomes">
										<label class="lab"><strong>Nome: '.$nome.' '.$sobrenome.'</strong></label>
										<label class="lab"><strong>Familia: '.$nomefamilia.'</strong></label>
										<label class="lab"><strong>Apelido: '.$apellido.'</strong></label>
									</div>
									<div class="info">
										<label class="lab" ><strong>Idade: '.$idade.' anos</strong></label>
										<label class="lab" id="a1"><strong>Altura: '.$altura.'m</strong></label>
										<label class="lab" id="a2"><strong>Peso: '.$peso.' kg</strong></label>
									</div>
									<div class="subt" id="d1">
										<label class="lab"><strong>PERSONAGEM</strong></label>
									</div>
								</div>
								<div class="mestre">
									<img src="'.$rostomestre.'" class="mimagem">
									<div class="mnomes">
										<label class="lab"><strong>Nome: '.$nomemestre.'</strong></label>
										<label class="lab"><strong>Arte Marcial: '.$lutamestre.'</strong></label>
										<label class="lab"><strong>Nível: '.$nvluta.'</strong></label>
									</div>
									<div class="minfo">
										<label class="lab" ><strong>Idade: '.$idademestre.' anos</strong></label>
										<label class="lab" id="ma1"><strong>Altura: '.$alturamestre.'m</strong></label>
										<label class="lab" id="ma2"><strong>Peso: '.$pesomestre.' kg</strong></label>
									</div>
									<div class="subt">
										<label class="lab"><strong>MESTRE</strong></label>
									</div>
								</div>
								<div class="apoiador">
									<img src="'.$rostoinves.'" class="aimagem">
									<div class="anomes">
										<label class="lab"><strong>Nome: '.$apnome.'</strong></label>
										<label class="lab"><strong>Trabalho: '.$trabalho.'</strong></label>
										<label class="lab"><strong>Salario dado: $'.$salario'</strong></label>
									</div>
									<div class="ainfo">
										<label class="lab"><strong>Idade: '.$idadeinves.' anos</strong></label>
										<label class="lab" id="aa1"><strong>Altura: '.$alturainves.'m</strong></label>
										<label class="lab" id="aa2"><strong>Peso: '.$pesoinves.' kg</strong></label>
									</div>
									<div class="subt">
										<label class="lab"><strong>APOIADOR</strong></label>
									</div>
								</div>
							</div>
							<div class="atributos">
								<img src="'.$corpo.'" class="corpo" id="body">
								<div class="atr">
									<fieldset class="at1">
										<legend><strong>ATRIBUTOS:</strong></legend>
											<div class="space">
												<label class="lab"><strong>FORÇA: '.$forca.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>VELOCIDADE: '.$velocidade.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>AGILIDADE: '.$agilidade.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>INTELIGÊNCIA: '.$inteligencia.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>REFLEXO: '.$reflexo.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>CONTROLE: '.$controle.'</strong></label>
											</div>
									</fieldset>
									<fieldset class="at2">
										<legend><strong>Corpo:</strong></legend>
											<div class="space" id="tipo">
												<label class="lab"><strong>TIPO: '.$tipo.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>PORCENTAGEM DE GORDURA: '.$porcentagem.'</strong></label>
											</div>
									</fieldset>
									<fieldset class="at3">
										<legend><strong>Personalidade:</strong></legend>
											<div class="space">
												<label class="lab"><strong>Otimismo: '.$otimismo.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>Raiva: '.$raiva.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>seriedade: '.$seriedade.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>felicidade: '.$felicidade.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>perveção: '.$pervercao.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>bondade: '.$bondade.'%</strong></label>
											</div>
									</fieldset>
								</div>
							</div>
						</div>
						<div class="local">
							<div class="reg">
								<div class="pais">
									<img src="'.$bandeira.'" class="pimg">
									<div class="pinfo">
										<label class="lab" ><strong>Continente: '.$continente.'</strong></label>
										<label class="lab" ><strong>Pais: '.$paiz.'</strong></label>
										<label class="lab" ><strong>Estado: '.$estado.'</strong></label>
									</div>
								</div>
								<div class="cidade">
									<img src="'.$casa.'" class="himg">
									<div class="cinfo">
										<label class="lab" ><strong>Cidade: '.$cidade.'</strong></label>
										<label class="lab" ><strong>Cordenada X: '.$x.'</strong></label>
										<label class="lab" ><strong>Cordenada Y: '$y'</strong></label>
									</div>
								</div>
							</div>
							<div class="bibliografic">
								<fieldset class="his">
									<legend>História</legend>
									<label class="lab">
										'.$historia.'
									</label>
								</fieldset>
							</div>
						</div>
						<div class="skils">
							<div class="linha">
								<div class="col">
									<img src="imagens\ficha\artes\1.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Puro</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\2.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Cavalaria</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\3.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Ronin</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col">
									<img src="imagens\ficha\artes\4.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Capoeira</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\5.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Jiu Jitsu</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\6.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Shaorii</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col">
									<img src="imagens\ficha\artes\7.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Kung Fu</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\8.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Jiu Jitsu Brasileiro</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\9.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Muay Thai</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col">
									<img src="imagens\ficha\artes\10.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Krav Maga</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\11.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Godou</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\12.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Karate</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col">
									<img src="imagens\ficha\artes\13.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Kenpo</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\14.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Pro Wrestling</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\15.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Street Fighting</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col">
									<img src="imagens\ficha\artes\16.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Ninjutsu</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\17.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Estilo Selvagem</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
								<div class="col">
									<img src="imagens\ficha\artes\18.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Estilo animal</strong></label>
										<label class="lab" ><strong>Nível: 20</strong></label>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</body>
			<script src="script\mouse.js"></script>
			<script src="script\aba.js"></script>
		</html>
		';
		$file = fopen($nome.".html", 'a+');
        fwrite($file, $resume);
        fclose($file);
        $url = $nome.".html";
        header('Location: '.$url);
	}
	else{
		$url = "index.html";
		header('Location: '.$url);
	}
?>