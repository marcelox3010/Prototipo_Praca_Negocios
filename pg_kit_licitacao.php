Consulta Certame:
<div style="width: 98%;
	height: 325px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">
	
	
	<div style="display: table-row; ">
			
		<div style="display: table-cell;-align:right;">Origem:</div>
			<div style="display: table-cell;"> 
			
						<select style='width:100px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Produto</option>
							  <option value="saab">Serviço</option>															  
						</select>
						
			</div>
	</div>
	
	
	<div style="display: table-row; ">
			
		<div style="display: table-cell;-align:right;">N° do Edital/Ano </div>
			<div style="display: table-cell;"> 
			
						<input type='text' size='4'  maxlength='4'/> / <select style='width:100px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">2014</option>
							  <option value="saab">2013</option>															  
						</select>
						
						
			</div>
	</div>
		
		<div style="display: table-row; ">
			
			<div style="display: table-cell;-align:right;">Origem:</div>
			<div style="display: table-cell;"> 
						 <select style='width:100px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Federal</option>
							  <option value="saab">Estadual</option>
							  <option value="saab">Distrital</option>	  
							  <option value="saab">Municipal</option>															  
						</select>
						
						
						
			</div>
		</div>
		
		
		
		<div style="display: table-row; ">
			
		<div style="display: table-cell;-align:right;">Órgão Comprador:</div>
			<div style="display: table-cell;"> 
			
						<select style='width:500px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Ministério da Fazenda</option>
							  <option value="saab">Ministério do Desenvolvimento Social</option>															  
							  <option value="saab">SERPRO</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
						</select>
						
			</div>
	</div>
		<div style="display: table-row">
			<div style=" display: table-cell; ">Localidade (Região/Estados/Municípios):</div>
			<div style="display: table-cell; "> 
			
			
				<div>
					 <select style='width:200px;padding:0px;margin:0px;' width='300px'
					
					
						onchange='javascript:
						
							document.getElementById("div_muni").innerHTML="";
						
							if(this.value=="Todos"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								
							}
							if(this.value=="NO"){
						
								document.getElementById("NO").style.display = "block";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("NO").value = "Todos";
								
							}
							
							else if(this.value=="NE"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "block";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("NE").value = "Todos";
							
							}
							
							else if(this.value=="CO"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "block";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("CO").value = "Todos";
							
							}
							
							else if(this.value=="SE"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "block";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("SE").value = "Todos";
							
							}
							
						7
							else if(this.value=="SU"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "block";
								
								document.getElementById("SU").value = "Todos";
							
							}
							
						
						'
					
					>
						  <option value="Todos">Todos</option>
						  <option value="NO">Norte</option>
						  <option value="NE">Nordeste</option>
						  <option value="CO">Centro-Oeste</option>															  
						  <option value="SE">Sudeste</option>															  
						  <option value="SU">Sul</option>															  
					</select>
				
				</div>
				
				<div>
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='NO' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="AC" >Acre</option>
					  <option value="AP">Amapá</option>															  					  
					  <option value="AM">Amazonas</option>															  					  		  
					  <option value="PA">Pará</option>															  
					  <option value="RO">Rondônia</option>															  
					  <option value="RR">Roraima</option>															  					  
					  <option value="TO">Tocantins</option>															  
				</select>
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='NE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="AL">Alagoas</option>				
					  <option value="BA">Bahia</option>															  
					  <option value="CE">Ceará</option>															  					  
					  <option value="MA">Maranhão</option>															  
					  <option value="PB">Paraíba</option>															  					  
					  <option value="PE">Pernambuco</option>															  
					  <option value="PI">Piauí</option>					  
					  <option value="RN">Rio Grande do Norte</option>	
					  <option value="SE">Sergipe</option>					  					  
				</select>
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='CO' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="DF">Distrito Federal</option>															  
					  <option value="GO">Goiás</option>															  
					  <option value="MT">Mato Grosso</option>															  
					  <option value="MS">Mato Grosso do Sul</option>															  
				</select>				
				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="ES">Espírito Santo</option>															  
					  <option value="MG">Minas Gerais</option>															  
					  <option value="RJ">Rio de Janeiro</option>															  
					  <option value="SP">São Paulo</option>		
				</select>				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SU' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="PR">Paraná</option>															  
					  <option value="RS">Rio Grande do Sul</option>															  
					  <option value="SC">Santa Catarina</option>
				</select>				
				
				</div>
				<div id='div_muni'></div>
				
						
			</div>
			
			
				
		</div>
		
		<div style="display: table-row; ">
			
			<div style="display: table-cell;-align:right;width:200px">Tipo de Licitação:</div>
			<div style="display: table-cell;"> 
			
						 <select style='width:200px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Menor Preço</option>
							  <option value="saab">Melhor Técnica</option>															  
							  <option value="saab">Técnica e Preço</option>															  
						</select>
			
						
			</div>
		</div>
		<div style="display: table-row; ">
			
			<div style="display: table-cell;-align:right;width:200px">Palavras Chave:</div>
			<div style="display: table-cell;"> 
			
						 <input type='text' size='50'>
			
						
			</div>
		</div>
		<div style="display: table-row; ">
			
			<div style="display: table-cell;text-align:right;">&nbsp;</div>
			<div style="display: table-cell;text-align:right;"> 
			
						<input type='button' value='Pesquisar' onclick='javascript:  document.getElementById("id_tabela_credito").style.display = "block";'>
						
			</div>
		</div>
			
		
	</div>
	
</div>


<div id='id_tabela_credito' style="display:none" >
	<table style="width:100%;" border='1'>
		<caption>Resultado Pesquisa</caption>
		<tr>
			<th>N° do Edital</th>
			<th>Origem</th>
			<th>Órgão</th>
			<th>Objeto</th>
			<th>UF/Cidade</th>
			<th>Tipo de Licitação</th>
			<th>Dt Final p/ Inscrição</th>						
			<th>Ação</th>
		</tr>
		<tr>
			<td>0013/2014</td>
			<td>Federal</td>
			<td>MDS</td>
			<td>Fábrica de Software</td>
			<td>DF/Brasília</td>
			<td>Técnica e Preço</td>
			<td>31/12/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0001/2014</td>
			<td>Federal</td>
			<td>SMPE/PR</td>
			<td>Computador Desktop</td>
			<td>DF/Brasília</td>
			<td>Menor Preço</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0025/2014</td>
			<td>Estadual</td>
			<td>Secretaria de Saúde</td>
			<td>Dipirona</td>
			<td>GO/Goiania</td>
			<td>Menor Preço</td>
			<td>14/10/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0001/2014</td>
			<td>Estadual</td>
			<td>Secretaria de Obras</td>
			<td>Construção Aterro Sanitário</td>
			<td>DF/Brasília</td>
			<td>Melhor Técnica</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		
		<tr>
			<td>0150/2014</td>
			<td>Municpal</td>
			<td>Secretaria de Educação</td>
			<td>Livros Didáticos</td>
			<td>CE/Fortaleza</td>
			<td>Menor Preço</td>
			<td>09/11/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>8888/2014</td>
			<td>Municipal</td>
			<td>Secretaria de Educação</td>
			<td>Instrumentos Musicais</td>
			<td>GO/Planaltina</td>
			<td>Menor Preço</td>
			<td>10/10/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0006/2014</td>
			<td>Federal</td>
			<td>DNOCS</td>
			<td>Licença de Banco de Dados</td>
			<td>CE/Fortaleza</td>
			<td>Menor Preço</td>
			<td>11/11/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0098/2014</td>
			<td>Estadual</td>
			<td>Prefeitura de SP</td>
			<td>Construção de via</td>
			<td>SP/São Paulo</td>
			<td>Menor Preço</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0056/2014</td>
			<td>Federal</td>
			<td>SUDENE</td>
			<td>Adutora</td>
			<td>PE/Recife</td>
			<td>Melhor Técnica</td>
			<td>01/10/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0001/2014</td>
			<td>Federal</td>
			<td>SMPE/PR</td>
			<td>Computador Desktop</td>
			<td>DF/Brasília</td>
			<td>Menor Preço</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
	
		<tr>
			<td colspan='8'><center> <a href='#'> << </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href='#'><</a>  Página 1 de 100 <a href='#'>></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href='#'>>></a></center></td>
			
		</tr>
	</table>


</div>

