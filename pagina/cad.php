<?php
	if(isset($_POST['acao'])){
		//Personagem
			//Dados base:
				$nome = $_POST['nome']; //nome
				$sobrenome = $_POST['sobrenome']; //sobrenome
				$name = $nome.' '.$sobrenome; //nome completo
				$nomeF = $_POST['familia']; //nome da familia
				$apelido = $_POST['apelido']; //apelido
				$tipo = $_POST['tipo']; //tipo de corpo
				$pgordura = $_POST['porcentagem']; //porcentagem de gordura
				$historia = $_POST['historia'];//historia
			//Medidas:
				$idade = $_POST['idade'];//idade
				$altura = $_POST['altura'];//altura
				$peso = $_POST['peso'];//peso
			//Pesonalidade:
				$otm = $_POST['otm']; //Otimismo
				$rav = $_POST['rav']; //Raiva
				$ser = $_POST['ser']; //Seriedade
				$fel = $_POST['fel']; //Felicidade
				$mal = $_POST['mal']; //Malícia
				$bom = $_POST['bom']; //Bondade
			//Atributos:
				$for = $_POST['for']; //força
				$vel = $_POST['vel']; //velocidade
				$agl = $_POST['agl']; //agilidade
				$int = $_POST['int']; //inteligência
				$ref = $_POST['ref']; //reflexo
				$con = $_POST['con']; //controle
			//Imagens urls
				$urlcorpo = $_POST['urlbody'];//corpo
				$urlrosto = $_POST['urlface'];//rosto

		//Local:
			$continente = $_POST['continente'];//continente
			$paiz = $_POST['paiz']; //paiz
			$estado = $_POST['estado']; //estado
			$cidade = $_POST['cidade']; //cidade
			$x = $_POST['x']; //x
			$y = $_POST['y']; //y
			$urlCasa = $_POST['urlcasa'];//casa
			$urlBandeira = $_POST['urlnacao'];//bandeira
		
		//Mestre:
			//Dados base:
				$nmMestre = $_POST['mnome']; //nome
				$esMestre = $_POST['mluta']; //arte marcial
				$nvMestre = $_POST['nvmestre']; //nv na arte
				$urlMestre = $_POST['urlmestre']; //url img
			//Medidas:
				$idMestre = $_POST['midade']; //idade
				$atMestre = $_POST['maltura'];//altura
				$psMestre = $_POST['mpeso'];//peso

		//Investidor:
			//Dados base:
				$nmInves = $_POST['apnome']; //nome
				$tbInves = $_POST['intrabalho']; //trabalho
				$salario = $_POST['salario']; //salario
				$urlInves = $_POST['urlinvest']; //url img
			//Medidas:
				$idInves = $_POST['apidade']; //idade
				$atInves = $_POST['apaltura'];//altura
				$psInves = $_POST['appeso'];//peso

		//Artes Marciais:
			//estilo puro (1):
				$est1 = isset($_POST['es1']);
				$es1 = display($est1);
				$nves1 = $_POST['nves1'];
			//estilo cavalaria (2):
				$est2 = isset($_POST['es5']);
				$es2 = display($est2);
				$nves2 = $_POST['nves5'];
			//estilo Ronin (3):
				$est3 = isset($_POST['es4']);
				$es3 = display($est3);
				$nves3 = $_POST['nves4'];
			//estilo capoeira (4):
				$est4 = isset($_POST['es7']);
				$es4 = display($est4);
				$nves4 = $_POST['nves7'];
			//estilo Jiu Jitsu (5):
				$est5 = isset($_POST['es8']);
				$es5 = display($est5);
				$nves5 = $_POST['nves8'];
			//estilo Shaorii (6):
				$est6 = isset($_POST['es9']);
				$es6 = display($est6);
				$nves6 = $_POST['nves9'];
			//estilo Kung Fu (7):
				$est7 = isset($_POST['es10']);
				$es7 = display($est7);
				$nves7 = $_POST['nves10'];
			//estilo Jiu Jitsu Brasileiro (8):
				$est8 = isset($_POST['es11']);
				$es8 = display($est8);
				$nves8 = $_POST['nves11'];
			//estilo Muay Thai (9):
				$est9 = isset($_POST['es12']);
				$es9 = display($est9);
				$nves9 = $_POST['nves12'];
			//estilo Krav Maga (10):
				$est10 = isset($_POST['es13']);
				$es10 = display($est10);
				$nves10 = $_POST['nves13'];
			//estilo Godou (11):
				$est11 = isset($_POST['es2']);
				$es11 = display($est11);
				$nves11 = $_POST['nves2'];
			//estilo Karate (12):
				$est12 = isset($_POST['es14']);
				$es12 = display($est12);
				$nves12 = $_POST['nves14'];
			//estilo Kenpo (13):
				$est13 = isset($_POST['es15']);
				$es13 = display($est13);
				$nves13 = $_POST['nves15'];
			//estilo Pro Wrestling (14):
				$est14 = isset($_POST['es16']);
				$es14 = display($est14);
				$nves14 = $_POST['nves16'];
			//estilo Street Fighting (15):
				$est15 = isset($_POST['es17']);
				$es15 = display($est15);
				$nves15 = $_POST['nves17'];
			//estilo Ninjutsu (16):
				$est16 = isset($_POST['es6']);
				$es16 = display($est16);
				$nves16 = $_POST['nves6'];
			//estilo Estilo Selvagem (17):
				$est17 = isset($_POST['es3']);
				$es17 = display($est17);
				$nves17 = $_POST['nves3'];
			//estilo Estilo animal (18):
				$est18 = isset($_POST['es18']);
				$es18 = display($est18);
				$nves18 = $_POST['nves18'];		

		$resume = '
		<!DOCTYPE html>
		<html lang="pt-BR">
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" type="text/css" href="style\estiloF.css">
				<title>'.$name.'</title>
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
									<img src="'.$urlrosto.'" class="imagem" id="face">
									<div class="nomes">
										<label class="lab"><strong>Nome: '.$name.'</strong></label>
										<label class="lab"><strong>Familia: '.$nomeF.'</strong></label>
										<label class="lab"><strong>Apelido: '.$apelido.'</strong></label>
									</div>
									<div class="info">
										<label class="lab" ><strong>Idade: '.$idade.' anos</strong></label>
										<label class="lab" id="a1"><strong>Altura: '.$altura.'m</strong></label>
										<label class="lab" id="a2"><strong>Peso: '.$peso.'kg</strong></label>
									</div>
									<div class="subt" id="d1">

										<label class="lab"><strong>PERSONAGEM</strong></label>
									</div>
								</div>
								<div class="mestre">
									<img src="'.$urlMestre.'" class="mimagem">
									<div class="mnomes">
										<label class="lab"><strong>Nome: '.$nmMestre.'</strong></label>
										<label class="lab"><strong>Arte Marcial: '.$esMestre.'</strong></label>
										<label class="lab"><strong>Nível: '.$nvMestre.'</strong></label>
									</div>
									<div class="minfo">
										<label class="lab" ><strong>Idade: '.$idMestre.' anos</strong></label>
										<label class="lab" id="ma1"><strong>Altura: '.$atMestre.'m</strong></label>
										<label class="lab" id="ma2"><strong>Peso: '.$psMestre.' kg</strong></label>
									</div>
									<div class="subt">

										<label class="lab"><strong>MESTRE</strong></label>
									</div>
								</div>
								<div class="apoiador">
									<img src="'.$urlInves.'" class="aimagem">
									<div class="anomes">
										<label class="lab"><strong>Nome: '.$nmInves.'</strong></label>
										<label class="lab"><strong>Trabalho: '.$tbInves.'</strong></label>
										<label class="lab"><strong>Salario dado: $'.$salario.'</strong></label>
									</div>
									<div class="ainfo">
										<label class="lab" ><strong>Idade: '.$idInves.' anos</strong></label>
										<label class="lab" id="aa1"><strong>Altura: '.$atInves.' m</strong></label>
										<label class="lab" id="aa2"><strong>Peso: '.$psInves.' kg</strong></label>
									</div>
									<div class="subt">
										<label class="lab"><strong>APOIADOR</strong></label>
									</div>
								</div>
							</div>
							<div class="atributos">
								<img src="'.$urlcorpo.'" class="corpo" id="body">
								<div class="atr">
									<fieldset class="at1">
										<legend><strong>ATRIBUTOS:</strong></legend>
											<div class="space">
												<label class="lab"><strong>FORÇA: '.$for.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>VELOCIDADE: '.$vel.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>AGILIDADE: '.$agl.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>INTELIGÊNCIA: '.$int.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>REFLEXO: '.$ref.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>CONTROLE: '.$con.'</strong></label>
											</div>
									</fieldset>
									<fieldset class="at2">
										<legend><strong>Corpo:</strong></legend>
											<div class="space" id="tipo">
												<label class="lab"><strong>TIPO: '.$tipo.'</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>PORCENTAGEM DE GORDURA: '.$pgordura.'%</strong></label>
											</div>
									</fieldset>
									<fieldset class="at3">
										<legend><strong>Personalidade:</strong></legend>
											<div class="space">
												<label class="lab"><strong>Otimismo: '.$otm.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>Raiva: '.$rav.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>Seriedade: '.$ser.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>Felicidade: '.$fel.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>Malícia: '.$mal.'%</strong></label>
											</div>
											<div class="space">
												<label class="lab"><strong>Bondade: '.$bom.'%</strong></label>
											</div>
									</fieldset>
								</div>
							</div>
						</div>
						<div class="local">
							<div class="reg">
								<div class="pais">
									<img src="'.$urlBandeira.'" class="pimg">
									<div class="pinfo">
										<label class="lab" ><strong>Continente: '.$continente.'</strong></label>
										<label class="lab" ><strong>Pais: '.$paiz.'</strong></label>
										<label class="lab" ><strong>Estado: '.$estado.'</strong></label>
									</div>
								</div>
								<div class="cidade">
									<img src="'.$urlCasa.'" class="himg">
									<div class="cinfo">
										<label class="lab" ><strong>Cidade: '.$cidade.'</strong></label>
										<label class="lab" ><strong>Cordenada X: '.$x.'</strong></label>
										<label class="lab" ><strong>Cordenada Y: '.$y.'</strong></label>
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
								<div class="col" style="'.$es1.'">
									<img src="imagens\ficha\artes\1.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Puro</strong></label>
										<label class="lab" ><strong>Nível: '.$nves1.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es2.'">
									<img src="imagens\ficha\artes\2.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Cavalaria</strong></label>
										<label class="lab" ><strong>Nível: '.$nves2.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es3.'">
									<img src="imagens\ficha\artes\3.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Ronin</strong></label>
										<label class="lab" ><strong>Nível: '.$nves3.'</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col" style="'.$es4.'">
									<img src="imagens\ficha\artes\4.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Capoeira</strong></label>
										<label class="lab" ><strong>Nível: '.$nves4.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es5.'">
									<img src="imagens\ficha\artes\5.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Jiu Jitsu</strong></label>
										<label class="lab" ><strong>Nível: '.$nves5.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es6.'">
									<img src="imagens\ficha\artes\6.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Shaorii</strong></label>
										<label class="lab" ><strong>Nível: '.$nves6.'</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col" style="'.$es7.'">
									<img src="imagens\ficha\artes\7.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Kung Fu</strong></label>
										<label class="lab" ><strong>Nível: '.$nves7.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es8.'">
									<img src="imagens\ficha\artes\8.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Jiu Jitsu Brasileiro</strong></label>
										<label class="lab" ><strong>Nível: '.$nves8.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es9.'">
									<img src="imagens\ficha\artes\9.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Muay Thai</strong></label>
										<label class="lab" ><strong>Nível: '.$nves9.'</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col" style="'.$es10.'">
									<img src="imagens\ficha\artes\10.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Krav Maga</strong></label>
										<label class="lab" ><strong>Nível: '.$nves10.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es11.'">
									<img src="imagens\ficha\artes\11.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Godou</strong></label>
										<label class="lab" ><strong>Nível: '.$nves11.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es12.'">
									<img src="imagens\ficha\artes\12.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Karate</strong></label>
										<label class="lab" ><strong>Nível: '.$nves12.'</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha">
								<div class="col" style="'.$es13.'">
									<img src="imagens\ficha\artes\13.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Kenpo</strong></label>
										<label class="lab" ><strong>Nível: '.$nves13.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es14.'">
									<img src="imagens\ficha\artes\14.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Pro Wrestling</strong></label>
										<label class="lab" ><strong>Nível: '.$nves14.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es15.'">
									<img src="imagens\ficha\artes\15.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Street Fighting</strong></label>
										<label class="lab" ><strong>Nível: '.$nves15.'</strong></label>	
									</div>
								</div>
							</div>
							<div class="linha" style="'.$es16.'">
								<div class="col">
									<img src="imagens\ficha\artes\16.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Ninjutsu</strong></label>
										<label class="lab" ><strong>Nível: '.$nves16.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es17.'">
									<img src="imagens\ficha\artes\17.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Estilo Selvagem</strong></label>
										<label class="lab" ><strong>Nível: '.$nves17.'</strong></label>	
									</div>
								</div>
								<div class="col" style="'.$es18.'">
									<img src="imagens\ficha\artes\18.png" class="limg">
									<div class="linfo">
										<label class="lab" ><strong>Estilo animal</strong></label>
										<label class="lab" ><strong>Nível: '.$nves18.'</strong></label>	
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
		$file = fopen($name.".html", 'a+');
        fwrite($file, $resume);
        fclose($file);
        $url = $name.".html";
        header('Location: '.$url);
	}
	else{
		$url = "index.html";
		header('Location: '.$url);
	}
	function display($var){
		if($var != 1){
			$res = "display: none;";
		}else{
			$res = "display: flex;";
		};
		return $res;
	};
?>