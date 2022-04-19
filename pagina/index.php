<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style\estiloM.css">
		<title>Rpg Baki</title>
	</head>
	<body>
		<img src="imagens\mouse.png" class="mouse">
		<header class="topo">

			<img src="imagens/baki.png" alt="logo" id="logo">
		</header>
		<main class="meio">
				<div class="barra">
					<strong>Informações base</strong>
					<button class="bt" id="b1"><strong>▲</strong></button>
				</div>
				<div class="dp">
					<div class="sus">
						<label>Nome:</label>
						<input type="text" name="nome" class="in" placeholder="ex: carlos">
						<label>Sobrenome:</label>
						<input type="text" name="nome2" class="in" placeholder="ex: Santos">
						<label>Apelido:</label>
						<input type="text" name="app" class="in" placeholder="ex: Tombador de guepardos">
					</div>
					<div class="sus">
						<label>Idade:</label>
						<input type="number" name="idade" class="in">
						<label>Nome da familia:</label>
						<input type="text" name="hanma" class="in" placeholder="ex: Hanma">
						<label>Altura:</label>
						<input type="number" name="altura" class="in">
					</div>
					<div class="sus">
						<label>Peso:</label>
						<input type="number" name="peso" class="in">
						<label>Apoiador:</label>
						<input type="text" name="apoiar" class="in" placeholder="ex: SpaceX">
					</div>
					<div class="sus">
						<label>Mentor:</label>
						<input type="text" name="meme" class="in" placeholder="ex: Jack Hanma" id="a">
					</div>
				</div>
				<div class="barra">
					<strong>localidade</strong>
					<button class="bt" id="b2"><strong>▲</strong></button>
				</div>
				<div class="end">
					<div class="sus">
						<label>Nacionalidade:</label>
						<input type="text" name="nacao" class="in" placeholder="ex: brasil">
						<label>Continente:</label>
						<input type="text" name="conte" class="in" placeholder="ex: América">
						<label>estado:</label>
						<input type="text" name="state" class="in" placeholder="ex: Texas">
					</div>
					<div class="sus">
						<label>CordenadaX:</label>
						<input type="number" name="x" class="in">
						<label>Cidade:</label>
						<input type="text" name="city" class="in" placeholder="ex: são paulo">
						<label>CodenadaY:</label>
						<input type="number" name="y" class="in">
					</div>
				</div>
				<div class="barra">
					<strong>Atributos iniciais</strong>
					<button class="bt" id="b3"><strong>▲</strong></button>
				</div>
				<div class="con">
					<div class="sus">
						<label>Força:</label>
						<input type="number" name="for" class="in">
						<label>Velocidade:</label>
						<input type="number" name="vel" class="in">
						<label>Agilidade:</label>
						<input type="number" name="agl" class="in">
					</div>
					<div class="sus">
						<label>Inteligência:</label>
						<input type="number" name="int" class="in">
						<label>Tipo de corpo:</label>
						<input type="text" name="body" class="in" placeholder="ex: Hectomorfo">
						<label>Porcentagem de gordura:</label>
						<input type="number" name="por" class="in">
					</div>
					<div class="sus">
						<label>Otimismo:</label>
						<input type="number" name="otm" class="in">
						<label>Raiva:</label>
						<input type="number" name="rav" class="in">
						<label>Seriedade:</label>
						<input type="number" name="ser" class="in">
					</div>
					<div class="sus">
						<label>Felicidade:</label>
						<input type="number" name="fel" class="in">
						<label>Perverção:</label>
						<input type="number" name="per" class="in">
						<label>bondade:</label>
						<input type="number" name="bom" class="in">
					</div>
				</div>
				<div class="barra">
					<strong>Artes Marciais</strong>
					<button class="bt" id="b4"><strong>▲</strong></button>
				</div>
				<div class="form">
					<div class="sus">
						<label>Puro:</label>
						<input type="checkbox" name="es1" class="check">
						<label>Cavaleiro:</label>
						<input type="checkbox" name="es2" class="check">
						<label>Ronin:</label>
						<input type="checkbox" name="es3" class="check">
					</div>
					<div class="sus">
						<label>Capoeira:</label>
						<input type="checkbox" name="es4" class="check">
						<label>Keysi:</label>
						<input type="checkbox" name="es5" class="check">
						<label>Sambo:</label>
						<input type="checkbox" name="es6" class="check">
					</div>
					<div class="sus">
						<label>Kung Fu:</label>
						<input type="checkbox" name="es7" class="check">
						<label>Jiu Jitsu Brasileiro:</label>
						<input type="checkbox" name="es8" class="check">
						<label>Muay Thai:</label>
						<input type="checkbox" name="es9" class="check">
					</div>
					<div class="sus">
						<label>Krav Maga:</label>
						<input type="checkbox" name="es10" class="check">
						<label>Godou:</label>
						<input type="checkbox" name="es11" class="check">
						<label>Karate:</label>
						<input type="checkbox" name="es12" class="check">
					</div>
					<div class="sus">
						<label>Kenpo:</label>
						<input type="checkbox" name="es13" class="check">
						<label>Pro Wrestling:</label>
						<input type="checkbox" name="es14" class="check">
						<label>Street Fighting:</label>
						<input type="checkbox" name="es15" class="check">
					</div>
					<div class="sus">
						<label>Ninjutsu:</label>
						<input type="checkbox" name="es16" class="check">
						<label>Estilo Selvagem:</label>
						<input type="checkbox" name="es17" class="check">
						<label>Estilo animal:</label>
						<input type="checkbox" name="es18" class="check">
					</div>
				</div>
				<div class="barra">
					<strong>Imagens e História</strong>
					<button class="bt" id="b5"><strong>▲</strong></button>
				</div>
				<div class="imgs">
					<div class="sus">
						<label>Rosto:</label>
						<input type="file" name="fface" class="in">
						<label>Corpo:</label>
						<input type="file" name="fbody" class="in">
						<label>Mestre:</label>
						<input type="file" name="fsensei" class="in">
					</div>
					<div class="sus">
						<label>Apoiador:</label>
						<input type="file" name="fapoi" class="in">
						<label>Casa:</label>
						<input type="file" name="fhome" class="in">
					</div>
					<div class="sus">
						<label>História</label>
						<textarea name="his" class="in"></textarea>
					</div>
				</div>
		</main>
		<div class="b">

			<button class="bu" id="ver"><strong>VER FICHA</strong></button>
		</div>
	</body>
	<script src="script\botão.js"></script>
	<script src="script\mouse.js"></script>
	<?php
		if($_POST){
			$nome = $_POST['nome']; $snome = $_POST['nome2']; $apelido = $_POST['app']; $idade = $_POST['idade']; 
			$nfamilia = $_POST['hanma']; $altura = $_POST['altura']; $peso = $_POST['peso']; 
			$apoiador = $_POST['apoiar']; $mentor = $_POST['meme']; $nacao = $_POST['nacao']; 
			$continente = $_POST['conte']; $estado = $_POST['state']; $x = $_POST['x']; 
			$cidade = $_POST['city']; $y = $_POST['y']; $for = $_POST['for']; $vel = $_POST['vel'];
			$agl = $_POST['agl']; $int = $_POST['int']; $body = $_POST['body']; $por = $_POST['por']; 
			$otm = $_POST['otm']; $rav = $_POST['rav']; $ser = $_POST['ser']; $fel = $_POST['fel']; 
			$per = $_POST['per']; $bom = $_POST['bom']; $histo = $_POST['his'];
			$html = '//
				<!DOCTYPE html>
				<html lang="pt-BR">
					<head>
						<meta charset="utf-8">
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<link rel="stylesheet" type="text/css" href="style\estiloF.css">
						<title>'.$nome.' '.$snome.'</title>
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
											<img src="imagens\ficha\face.png" class="imagem" id="face">
											<div class="nomes">
												<label class="lab"><strong>Nome: '.$nome.' '.$snome.'</strong></label>
												<label class="lab"><strong>Familia: '.$nfamilia.'</strong></label>
												<label class="lab"><strong>Apelido: '.$apelido.'</strong></label>
											</div>
											<div class="info">
												<label class="lab" ><strong>Idade: '.$idade.' anos</strong></label>
												<label class="lab" id="a1"><strong>Altura: '.$altura.' m</strong></label>
												<label class="lab" id="a2"><strong>Peso: '.$peso.' kg</strong></label>
											</div>
											<div class="subt" id="d1">
												<label class="lab"><strong>PERSONAGEM</strong></label>
											</div>
										</div>
										<div class="mestre">
											<img src="imagens\ficha\sensei.png" class="mimagem">
											<div class="mnomes">
												<label class="lab"><strong>Nome: '.$mentor.'</strong></label>
												<label class="lab"><strong>Arte Marcial: Run</strong></label>
												<label class="lab"><strong>Nível: 20</strong></label>
											</div>
											<div class="minfo">
												<label class="lab" ><strong>Idade: 20 dias</strong></label>
												<label class="lab" id="ma1"><strong>Altura: 0.15 m</strong></label>
												<label class="lab" id="ma2"><strong>Peso: 0.10 kg</strong></label>
											</div>
											<div class="subt">
												<label class="lab"><strong>MESTRE</strong></label>
											</div>
										</div>
										<div class="apoiador">
											<img src="imagens\ficha\apoiador.png" class="aimagem">
											<div class="anomes">
												<label class="lab"><strong>Nome: '.$apoiador.'</strong></label>
												<label class="lab"><strong>Trabalho: Ancião</strong></label>
												<label class="lab"><strong>Salario dado: $10.000</strong></label>
											</div>
											<div class="ainfo">
												<label class="lab" ><strong>Idade: 85 anos</strong></label>
												<label class="lab" id="aa1"><strong>Altura: 1.47 m</strong></label>
												<label class="lab" id="aa2"><strong>Peso: 50 kg</strong></label>
											</div>
											<div class="subt">
												<label class="lab"><strong>APOIADOR</strong></label>
											</div>
										</div>
									</div>
									<div class="atributos">
										<img src="imagens\ficha\body.png" class="corpo" id="body">
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
											</fieldset>
											<fieldset class="at2">
												<legend><strong>Corpo:</strong></legend>
													<div class="space" id="tipo">
														<label class="lab"><strong>TIPO: '.$body.'</strong></label>
													</div>
													<div class="space">
														<label class="lab"><strong>PORCENTAGEM DE GORDURA: '.$por.'%</strong></label>
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
														<label class="lab"><strong>seriedade: '.$ser.'%</strong></label>
													</div>
													<div class="space">
														<label class="lab"><strong>felicidade: '.$fel.'%</strong></label>
													</div>
													<div class="space">
														<label class="lab"><strong>perveção: '.$per.'%</strong></label>
													</div>
													<div class="space">
														<label class="lab"><strong>bondade: '.$bom.'%</strong></label>
													</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="local">
									<div class="reg">
										<div class="pais">
											<img src="imagens\ficha\bandeira.png" class="pimg">
											<div class="pinfo">
												<label class="lab" ><strong>Continente: '.$continente.'</strong></label>
												<label class="lab" ><strong>Pais: '.$nacao.'</strong></label>
												<label class="lab" ><strong>Estado: '.$estado.'</strong></label>
											</div>
										</div>
										<div class="cidade">
											<img src="imagens\ficha\casa.png" class="himg">
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
											<label class="lab">'.$histo.'</label>
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
												<label class="lab" ><strong>Cavaleiro</strong></label>
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
												<label class="lab" ><strong>Keysi</strong></label>
												<label class="lab" ><strong>Nível: 20</strong></label>	
											</div>
										</div>
										<div class="col">
											<img src="imagens\ficha\artes\6.png" class="limg">
											<div class="linfo">
												<label class="lab" ><strong>Sambo</strong></label>
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
				</html>';
			$file = fopen("$nome.html", 'a+');
			fwrite($file, $html);
			fclose($file);
		}
	?>	
</html>