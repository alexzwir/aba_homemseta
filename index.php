<?php  
	require "config.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Pelo Bem do Homem Seta</title>
	<meta name="description" content="">
	<meta name="author" content="Inter.net Development">

	<!-- =======================================================  CSS  ========================================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/style.css">


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- ========================================================  Scripts ==================================================================== -->

	<script src="js/jQuery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery-scrollto.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

	<!-- =======================================================  Facebook Tags ================================================== -->
	<meta property="og:image" content="http://www.pelobemdohomemseta.com.br/images/apple-touch-icon-114x114.png"/>
	<meta property="og:title" content="Pelo Bem do Homem Seta"/>
	<meta property="og:url" content="http://www.pelobemdohomemseta.com.br"/>
	<meta property="og:site_name" content="Pelo Bem do Homem Seta"/>
	<meta property="og:description" content="Participe do nosso abaixo-assinado. Apoie a campanha de requalificação dos homens-seta. "/>

</head>
<body>
	<div id="pai">	

	<!-- ==================================================== HEADER DA PÁGINA =====================================================  -->
	<header>
		<div id="barra_amarela"></div>
			<img src="images/logo.png" id="logo"></img>
			<nav>		
				<ul id="menu">
					<li id="btn_oquee">O que é?</li>
					<li id="btn_contador">Contador</li>
					<li id="btn_quemApoia">Quem apoia?</li>
					<li id="btn_apoie">Apoie essa ideia</li>
					<li id="btn_euVi">Eu vi um homem seta</li>
				</ul>
			</nav>
		</div>

		<script type="text/javascript">

			$(document).ready(function()	{
				$('#btn_oquee').click(function() {
					$('#section_oquee').ScrollTo();
				});
				$('#btn_contador').click(function() {
					$('#contador').ScrollTo()
				});
				$('#btn_quemApoia').click(function() {
					$('#quem_apoia').ScrollTo()
				});
				$('#btn_apoie').click(function() {
					$('#apoie_ideia').ScrollTo()
				});
				$('#btn_euVi').click(function() {
					$('#homem_seta').ScrollTo()
				});
			});

		</script>

	</header>

	 <!--  =======================================================   O QUE É ? ================================================================== -->

	 <section id="section_oquee">


			<div class="content">
				<div id="barra_cinza"></div>
				<div class="header-page">
					<h1>O que é?</h1>
				</div>
			
				<div id="text1">
					<img id="foto_homem_seta" src="images/ideia-img-1.jpg">
					<p>Em 1º de janeiro de 2007 entrou em vigor a Lei Cidade Limpa que atua contra a poluição visual no município de São Paulo. Em resumo “Fica proibida, no âmbito do Município de São Paulo, a colocação de anúncio publicitário nos imóveis públicos e privados, edificados ou não.”</p>
					<p>Independentemente de existirem ou não "brechas" na lei, a BKO optou por fazer diferente e não utilizar mais homens-seta ou homens-placa, que são aquelas pessoas, em suas grandes maiorias jovens, que ficam ao relento, com placas penduradas ao corpo e sem qualquer tipo de segurança psicológica ou física.</p>
					<p>A BKO entende que não faz mais o menor sentido utilizar pessoas para realizar esse tipo de atividade, ainda mais hoje com a grande quantidade de redes sociais que permitem inclusive a geolocalização. Por conta disso já utilizamos o Waze, Google Maps, Foursquare e o Facebook Places para divulgar os nossos empreendimentos.</p>
					<p>É evidente que não podemos recriminar esses trabalhadores, ou ainda virar as costas para essa atividade, <u>mas podemos discordar daqueles que fomentam isso.</u></p>
					<p>O caminho encontrado pela BKO é a criação de um abaixo-assinado online pelo bem dos homens-seta, que possui uma mecânica bastante simples. Quanto mais pessoas participarem, maior será o valor de doação que a BKO efetuará para a Instituição Ampliar, que é um programa de profissionalização de jovens e adolescentes em situação de risco social.</p>
				</div>	
				
				<p id="ultimo_p">Ajude a BKO a fazer diferente.</p>
					
			</div>

	 </section>       


	  <!--  =======================================================   CONTADOR  ================================================================== -->                

	<div id="contador">
		<div id="barra_cinza"></div>
		<div class="content">
			
			<div class="textofone">
				<h1>Curta e <br /> Compartilhe <br />essa <br />Campanha
				<br />
				<span>#PeloBemdoHomemSeta</span>
				</h1>
			</div>


			<!-- CONTADOR DA HOME -->	
			<div class="conteudo-home">
			<?php 
				//faz a query no banco e count a quantidade de registros
				$sql = "select count(*) as qtd from cadastros";
				$result = $mysqli->query($sql);
				$obj = $result->fetch_object();
				$qtd = $obj->qtd;
				#$qtd = 3;	
				$qtd = "$qtd";
				while (strlen($qtd) <= 5) {
					$qtd = '0'.$qtd;
				}
				for($i=0;$i<strlen($qtd);$i++) {
					echo '<img class="number" style="padding-right:0px; float: left;" src="images/numeros/'.$qtd[$i].'.png" />';
				}			
			?>
			<p id="apoiam_causa">já apoiaram essa Causa</p>
			</div>
		</div>
	</div>
	</div>
		<!-- ========================================================== QUEM APOIA ============================================================ -->

			<div id="quem_apoia" class="container apoia">
				<div class="content">
					<div id="barra_cinza"></div>
					<div class="header-page">
						<h1>Quem Apoia?</h1>
					</div>
						
					<p>Veja quem já faz parte desse movimento e participe você também!</p>

					<ul id="carrossel-interno">
						<?php 
							$sql = "select * from cadastros where avatar != '' order by id desc limit 18";
							if ($result = $mysqli->query($sql)) { 
						        while($obj = $result->fetch_object()){ 
						            echo '<li id="avatar" style="background-image:url(https://graph.facebook.com/'.$obj->facebook.'/picture?width=100&height=100) ; background-size:100px 100px; background-repeat: no-repeat; width: 100px; height:200px; float:left; margin: 15px; ">
						            		<a target="_blank" href="https://www.facebook.com/'.$obj->facebook.'">
						            		<img src="images/avatar-interno.png">
											<span style="float: left; position: relative; margin: -43px 0 20px 0; text-align: center;">'.$obj->nome.'</span>
											</a>
										  </li>';
						        } 
						    } 
						?>
						<li>


						
					</ul>
				</div>
			</div>


		<!-- =================================================================== APOIE ESSA IDÉIA =====================================================-->
		<section id="apoie_ideia">
			<div id="barra_cinza"></div>
			<div class="header-page">
				<h1>Apoie essa ideia </h1>
			</div>
					
			<p>É muito fácil apoiar esta causa, basta você preencher nosso abaixo-assinado online e depois compartilhar com seus amigos para ajudar a BKO a mudar a vida dos homens-seta.</p>
				
				
			<h2>Cadastre-se</h2>
			<div id="abaixo">
				<form action="" method="POST" id="ajax_form">
					<table>
						<tr>
							<td id="alinhamento_esquerda"  valign="top" colspan="2">Nome* </td>
						</tr>
						<tr>
							<td  valign="top" colspan="2"><input  type="text" name="nome"id="nome" value=""></td>
						</tr>
						<tr>
							<td id="alinhamento_esquerda" valign="top">E-mail* </td>
							<td  id="alinhamento_esquerda" valign="top">CPF*  </td>
						</tr>
						<tr>
							<td valign="top"><input type="text" id="email" name="email" value=""></td>
							<td valign="top"><input type="text" id="cpf" name="cpf" value=""></td>
						</tr>
						<tr>
							<td  valign="top" colspan="2"><input type="submit" id="cadastrar" value="Cadastrar"></td>
						</tr>
					</table>
				</form>

				<div class="cadastro_success" id="cadastro_realizado"> Cadastro realizado </div>
				
				<script>
					$(document).ready(function(){
						$("#cadastro_realizado").hide();

						$('#ajax_form').submit(function(){
							$("#ajax_form").hide(2000);
							$("#cadastro_realizado").show(3000);

							var dados = $( this ).serialize();
							$.ajax({
								type: "POST",
								url: "gravacadastro.php",
								data: dados,
								success: function( data )
								{
									console.log(data);
								}
							});
							return false;
						});
					});

				</script>

			</div>
		</section>

		<!-- =================================================================== EU VI UM HOMEM SETA =====================================================-->

		<section id="homem_seta">
			<div id="barra_cinza"></div>

			<div class="container">

				<div class="header-page">
					<h1>Você viu um homem seta? </h1>
				</div>
		
				<p>Conte onde você viu um homem-seta e ajude a mapear a cidade de São Paulo.</p>
				<span>
				<form id="ajax_form_euvi">
					<p><b style="font-weight:bold">Seu nome:</b></p> <input style="width:360px;" type="text" id="nome" name="nome_euvi" />
					<p><b style="font-weight:bold">Endereço que você viu:</b></p> <textarea id="endereco" name="endereco_euvi" style="width:360px;height: 20px;"></textarea>
					<p><b style="font-weight:bold">Você falou com um homem-seta?</b></p></br>
					<p id="ajudenos"><b>Ajude-nos a entrar em contato com eles.</b></p></br>
					<p><b style="font-weight:bold">Nome:</b></p> <input style="width:360px;" type="text" id="homemseta" name="homemseta" />
					<p><b style="font-weight:bold">Telefone:</b></p> <input style="width:360px;" type="text" id="telefone_homemseta" name="telefone_homemseta" />

					<input id="enviaseta" type="submit" value="Enviar" />
					
				</form>
				<div class="cadastro_success" id="cadastro_realizado1"> Cadastro realizado </div>
					<script>
						$(document).ready(function(){
							$("#cadastro_realizado1").hide();
							$('#ajax_form_euvi').submit(function(){
								$("#ajax_form_euvi").hide(2000);
								$("#cadastro_realizado1").show(3000);

								var dados = $( this ).serialize();
								$.ajax({
									type: "POST",
									url: "gravacadastro.php",
									data: dados,
									success: function( data )
									{
										console.log(data);
									}
								});
								return false;
							});
						});
					</script>
				</span>
			</div>


		</section>
		<!-- =================================================================== FOOTER =====================================================-->
		
		<footer>
			<div id="barra_cinza"></div>
			<div id="logo_bko">
				<a href="http://www.bko.com.br/" target="_blank">
					<img src="images/logo_bko.png">
				</a>	
			</div>

			<div id="footer">
						<a href="sobre-bko.php">Sobre a BKO</a> | 
						<a href="sobre-ampliar.php">Sobre o Ampliar</a> | 
						<a href="regras-participacao.php">Regras de Participa&ccedil;&atilde;o</a> | 
						<a href="fale-conosco.php">Fale Conosco</a><br /><br />
						Todos os direitos reservados - 2013
								
			</div>

		</footer>

	<!-- ===========================================================  FIM DA DIV PAI ===================================================  -->
	

 
</body>
</html>		