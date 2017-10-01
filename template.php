<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
                <title>Portal Empresa Simples - Praça de Negócios</title>
		
		<script src="js/js.js"></script> 
		<script src="js/funcoes_externas.js"></script> 
		<script src="js/js.js"></script> 
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
                
                <script src="js/lightbox/js/jquery-1.11.0.min.js"></script>
                <script src="js/lightbox/js/lightbox.min.js"></script>
		
                <link type="text/css" href="css/normalize.css" media="all" rel="stylesheet" />
                <link type="text/css" href="css/portal.css" media="all" rel="stylesheet" />
          
	</head>
	
	<body>	
		<div id="divCabecalho">
			
                        <div id="divGoverno">
				<div class="logoBrasil"></div>
				<div class="barraacessiblidade"></div>
				<div class="partialBar"></div>
			</div>			
			<div id="divMenuSuperior">
				<div id="divMenuIrPara">          
					<ul>             
						<li>Ir para o conteúdo <a href="#">1</a></li>             
						<li>Ir para o menu <a href="#">2</a></li>             
						<li>Ir para a busca <a href="#">3</a></li>             
						<li class="last">Ir para o rodapé <a href="#">4</a></li>         
					</ul>
				</div> 							
				<div id="divMenuAcessibilidade">
					<ul>              
						<li><a href="#">ACESSIBLIDADE</a></li>             
						<li><a href="#">CONTRASTE</a></li>             
						<li><a href="#">MAPA DO SITE</a></li>                     
					</ul>
				</div> 							
			</div>
			<div id="divBarraEmpresaSimples">
				<a href="start.html"><img src="images/header/marca.png"/></a>				
				<img class="imagem_slogan" src="images/header/slogan.png"/>
			</div>
		</div>
		<div id="divConteudo">		      

			<div id="divMenu">
				<div id="divMenuEsquerdo"></div>
				<div id="divMenuDireito"></div>				
				<div id="divMenuCentral">
					<div id="divRSS" title="RSS">
						<a href="#"><img  src="images/header/rss.png"/></a>
					</div>

					<div id="divBuscar">
						<input type="text" value="Buscar em Portal Empresa Simples"/>
						<button title="pesquisar" class="btnPesquisar"></button>
					</div>											
				

					<ul>             
						<li><a href="#">Sobre o Portal</a></li>             
						<li class="separador">|</li>
						<li><a href="#">Empresômetro</a></li>            
						<li class="separador">|</li>             
						<li><a href="#">Praça de Negócios</a></li>
					</ul>
				</div>

			</div>
			<div id="divBreadcrumb">
				
                                <ul>
					<li class="first">Seja bem-vindo,</li>
					<li class="last">Nome do usuário logado. Seu último login foi 16:14 26/02/2015</li>
				</ul>
			</div>			
                        
			<div id="divTudo">
				<div id="divMenuEsquerdo">		
					
					<div class="Menulinks">
						
						<?php 
						
							require("MenuMPE.php");
						
						?>
						 
					</div>
					<div id="divMEI">
						<img src="images/conteudo/MEI.png"/>
					</div>

					<div id="divPAB">
						<img src="images/conteudo/PAB.png"/>
					</div>
				</div>
				
				<div id="divConteudoDuasColunas" >
                                    
                                    
                                    <?php
                                    
                                        if($_REQUEST['conteudo'] == 'pg_simples_internacional_confirmacao' ) $tamanho = '2000';
                                        elseif($_REQUEST['conteudo'] == 'pg_novo_produto') $tamanho= '2000';
                                        else $tamanho = '1600';
                                    
                                    ?>
                                    
					<div id="divConteudoDuasColunasGeral" STYLE='height:<?php echo $tamanho; ?>px'>
						<h2>Praça de Negócios</h2>
						<div id="divConteudoDuasColunasDetalhe" STYLE='height:<?php echo $tamanho; ?>px' >
							<p class="sub_titulo">
								
								<?php
									
									if($_REQUEST['conteudo'] == ""){
									
										require("pg_inicial.php");
										
									}
									elseif($_REQUEST['conteudo'] == "pg_procurar_credito"){
									
										require("pg_procurar_credito.php");
									
									}
									elseif($_REQUEST['conteudo'] == "pg_procura_credito"){
									
										require("pg_procura_credito.php");
										
									}
									elseif($_REQUEST['conteudo'] == "pg_historico_credito"){
									
										require("pg_historico_credito.php");
										
									}
									elseif($_REQUEST['conteudo'] == 'pg_detalhar_credito'){
										
										require("pg_detalhar_credito.php");
									
									}									
									elseif($_REQUEST['conteudo'] == 'pg_protocolos_abertos'){
										
										require("pg_protocolos_abertos.php");
									
									}
									elseif($_REQUEST['conteudo'] == 'pg_protocolo_interagir_credito'){
										
										require("pg_protocolo_interagir_credito.php");
									
									}
									elseif($_REQUEST['conteudo'] == 'pg_protocolo_interagir_credito2'){
										
										require("pg_protocolo_interagir_credito2.php");
									
									}
									elseif($_REQUEST['conteudo'] == 'pg_kit_licitacao'){
										
										require("pg_kit_licitacao.php");
									
									}elseif($_REQUEST['conteudo'] == 'pg_gerar_kit'){
										
										require("pg_gerar_kit.php");
									
									}elseif($_REQUEST['conteudo'] == 'pg_kit_padrao_licitacao'){
										
										require("pg_kit_padrao_licitacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_abrangencia'){
										
										require("pg_abrangencia.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_abrangencia_salvas'){
										
										require("pg_abrangencia_salvas.php");
										
									}
									elseif($_REQUEST['conteudo'] == 'pg_pesquisa_de_certificacao'){
										
										require("pg_pesquisa_de_certificacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_cadastro_de_certificacao'){
										
										require("pg_cadastro_de_certificacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_banco_solucao'){
										
										require("pg_banco_solucao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_solicitar_inovacao'){
										
										require("pg_solicitar_inovacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_detalhar_solucao'){
										
										require("pg_detalhar_solucao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_pesquisa_de_capacitacao'){
										
										require("pg_pesquisa_de_capacitacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_cadastro_de_capacitacao'){
										
										require("pg_cadastro_de_capacitacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_detalhar_capacitacao'){
										
										require("pg_detalhar_capacitacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_capacitacoes_realizadas'){
										
										require("pg_capacitacoes_realizadas.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional'){
										
										require("pg_simples_internacional.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_detalhar_ol'){
										
										require("pg_detalhar_ol.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional_produtos'){
										
										require("pg_simples_internacional_produtos.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_protocolo_detalhar_simples_internacional'){
										
										require("pg_protocolo_detalhar_simples_internacional.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_proforma'){
										
										require("pg_proforma.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_proforma2'){
										
										require("pg_proforma2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_protocolo_romancio_de_embarque'){
										
										require("pg_protocolo_romancio_de_embarque.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional2'){
										
										require("pg_simples_internacional2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional_proformas'){
										
										require("pg_simples_internacional_proformas.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional_escolher_ol'){
										
										require("pg_simples_internacional_escolher_ol.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional_confirmacao'){
										
										require("pg_simples_internacional_confirmacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_detalhar_capacitacao2'){
										
										require("pg_detalhar_capacitacao2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_banco_solucao2'){
										
										require("pg_banco_solucao2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_banco_solucao3'){
										
										require("pg_banco_solucao3.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_detalhar_solucao2'){
										
										require("pg_detalhar_solucao2.php");
										
									}
									elseif($_REQUEST['conteudo'] == 'pg_detalhar_solucao3'){
										
										require("pg_detalhar_solucao3.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_texto_capacitacao'){
										
										require("pg_texto_capacitacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_inserir_outros_certificados'){
										
										require("pg_inserir_outros_certificados.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_texto_certificacao_processo_produto'){
										
										require("pg_texto_certificacao_processo_produto.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_detalhar_inovacao'){
										
										require("pg_detalhar_inovacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_texto_inovacao'){
										
										require("pg_texto_inovacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_cadastro_de_certificacao_economica'){
										
										require("pg_cadastro_de_certificacao_economica.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_cadastro_de_certificacao_economica_2'){
										
										require("pg_cadastro_de_certificacao_economica_2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_relarotio_certificacao_economica'){
										
										require("pg_relarotio_certificacao_economica.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_abrangencia_editar'){
										
										require("pg_abrangencia_editar.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_texto_credito'){
										
										require("pg_texto_credito.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_detalhar_credito2'){
										
										require("pg_detalhar_credito2.php");
										
									}
									elseif($_REQUEST['conteudo'] == 'pg_ranking'){
										
										require("pg_ranking.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_cred'){
										
										require("pg_cred.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_edital_padrao'){
										
										require("pg_edital_padrao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_texto_simples_internacional'){
										
										require("pg_texto_simples_internacional.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_texto_compras'){
										
										require("pg_texto_compras.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_catalogo'){
										
										require("pg_catalogo.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_catalogo_cadastrar_produto'){
										
										require("pg_catalogo_cadastrar_produto.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_novo_produto'){
										
										require("pg_novo_produto.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_procurar_produtos'){
										
										require("pg_procurar_produtos.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_mostrar_produtos'){
										
										require("pg_mostrar_produtos.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_rel_cert_cadast'){
										
										require("pg_rel_cert_cadast.php");
										
									}
                                                                        
                                                                        elseif($_REQUEST['conteudo'] == 'pg_conteudo_capacitacao'){
										
										require("pg_conteudo_capacitacao.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_encontre_emp_reg_int_comp'){
										
										require("pg_encontre_emp_reg_int_comp.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_prod'){
										
										require("pg_prod.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional_proformas2'){
										
										require("pg_simples_internacional_proformas2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_simples_internacional3'){
										
										require("pg_simples_internacional3.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_encontre_poss_comprador'){
										
										require("pg_encontre_poss_comprador.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_novo_produto2'){
										
										require("pg_novo_produto2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_inicial2'){
										
										require("pg_inicial2.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_inicial3'){
										
										require("pg_inicial3.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_inicial4'){
										
										require("pg_inicial4.php");
										
									}elseif($_REQUEST['conteudo'] == 'pg_inicial5'){
										
										require("pg_inicial5.php");
										
									}elseif($_REQUEST['conteudo'] == 'inicial'){
										
										require("inicial.php");
										
									}elseif($_REQUEST['conteudo'] == 'veja_pot_praca'){
										
										require("veja_pot_praca.php");
										
									}
									
									else echo "Página não encontrada";
									
								
								?>
							</p>
							</div>
						</div>
					</div>
					<div id="divVoltar">
						<a href="#"><img src="images/conteudo/setatopo.png"/>voltar ao topo</a>
					</div>
				</div>
			</div>
		<div id="divRodape">
			<div id="divMapaSite">
				<div class="LinksMapa">
					<ul>             
						<li><a class="titulo" href="#">Política de Acesso</a></li>             						
					</ul>			
				</div>
				<div class="LinksMapa">
					<ul>
						<li><a class="titulo" href="#">Sobre o Portal</a></li>
						<li><a class="titulo" href="#">Empresômetro</a></li>						
						<li><a class="titulo" href="#">Praça de Negócios</a></li>
					</ul>						
				</div>
				<div class="LinksMapa">
					<ul>
						<li class="titulo">Registro e Legalização de Empresas</li>             
						<li><a href="#">Informaçõe sobre o Registro de Legalização de Empresas</a></li>             
						<li><a href="#">Inicie o Serviço</a></li>						
					</ul>					
				</div>
				<div class="LinksMapa">
					<ul>             
						<li class="titulo">Praça Eletrônica de Negócios</li>
						<li><a href="#">Informações sobre a Praça Eletrônica de Negócios</a></li>             
						<li><a href="#">Entre na Praça</a></li>
					</ul>
				</div>
				<div class="LinksLast">
					<ul>
						<li class="titulo">RSS</li>             
						<li><a href="#">O que é RSS ?</a></li>             
						<li><a href="#">Assine nosso RSS</a></li>
					</ul>
				</div>							
			</div>				
			<div id="divMapaBrasil">
				<img class="imagemAcesso" src="images/rodape/acesso.png"/>						
				<img class="imagemBrasil" src="images/rodape/brasil.png"/>
			</div>
			<div id="divEndSecretaria">
				<p>SECRETARIA DA MICRO E PEQUENA EMPRESA: Esplanada dos Ministérios - Bloco O, 7o. andar - Brasília/DF</p>
			</div>
			
			<div id="divSolucaoSerpro">
				<p>Solução Serpro desenvolvido em código aberto <span class="destaque">Liferay</span> </p>
			</div>
		</div>
	</body>
</html>


<script>
function ajax_estados(estado, div) {
  
  //alert("oi2");
  
  
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(div).innerHTML=xmlhttp.responseText;
    }
  }
	xmlhttp.open("GET","municipios.php?estado="+estado,true);
	xmlhttp.send();
  
}
</script>

