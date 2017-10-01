<h4><a href="template.php">Praça Eletrônica de Negócios</a> >> <a href='template.php?conteudo=pg_inicial2'>Quero Vender</a> >> <a href='template.php?conteudo=pg_inicial2'>Encontre Compradores no Governo</a> >> Consulte Automática de Licitações </h4>	
<div style="width: 98%;
	height: 450px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">
	

	
	<div style="display: table-row; " >
			
		<div style="display: table-cell;-align:right;"><b>N° do Edital/Ano</b> </div>
			<div style="display: table-cell;"> 
			
						<input type='text' size='4'  maxlength='4'/> / <select style='width:100px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">2014</option>
							  <option value="saab">2013</option>															  
						</select>
						
						
			</div>
	</div>
		
		<div style="display: table-row; ">
			
			<div style="display: table-cell;-align:right;"><b>Origem:</b></div>
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
			
		<div style="display: table-cell;-align:right;"><b>Órgão Comprador:</b></div>
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
			<div style=" display: table-cell; background-color:;vertical-align: middle; "><b>Localidade (Região/Estados/Municípios):</b></div>
			<div style="display: table-cell; "> 
			
				<div style='float:left;'>
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
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='NO' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById("div_muni").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="AC" >Acre</option>
						  <option value="AP">Amapá</option>															  					  
						  <option value="AM">Amazonas</option>															  					  		  
						  <option value="PA">Pará</option>															  
						  <option value="RO">Rondônia</option>															  
						  <option value="RR">Roraima</option>															  					  
						  <option value="TO">Tocantins</option>															  
					</select>
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='NE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById("div_muni").innerHTML="";'>
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
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='CO' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById("div_muni").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="DF">Distrito Federal</option>															  
						  <option value="GO">Goiás</option>															  
						  <option value="MT">Mato Grosso</option>															  
						  <option value="MS">Mato Grosso do Sul</option>															  
					</select>				
					
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='SE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById("div_muni").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="ES">Espírito Santo</option>															  
						  <option value="MG">Minas Gerais</option>															  
						  <option value="RJ">Rio de Janeiro</option>															  
						  <option value="SP">São Paulo</option>		
					</select>				
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='SU' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById("div_muni").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="PR">Paraná</option>															  
						  <option value="RS">Rio Grande do Sul</option>															  
						  <option value="SC">Santa Catarina</option>
					</select>				
					
					</div>
					<div id='div_muni'></div> <a href='javascript:void(0);' onclick='javascript:document.getElementById("dddddddd").style.display = "block";this.style.display="none";'>Adicionar Região</a>
				</div>
				
				<div style='float:left;' >&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div style='float:left;display:none' id='dddddddd' >
				
				
					<div>
						 <select style='width:200px;padding:0px;margin:0px;' width='300px'
						
						
							onchange='javascript:
							
								document.getElementById("div_muni2").innerHTML="";
							
								if(this.value=="Todos"){
							
									document.getElementById("NO2").style.display = "none";
									document.getElementById("NE2").style.display = "none";
									document.getElementById("CO2").style.display = "none";
									document.getElementById("SE2").style.display = "none";							
									document.getElementById("SU2").style.display = "none";
									
									
								}
								if(this.value=="NO"){
							
									document.getElementById("NO2").style.display = "block";
									document.getElementById("NE2").style.display = "none";
									document.getElementById("CO2").style.display = "none";
									document.getElementById("SE2").style.display = "none";							
									document.getElementById("SU2").style.display = "none";
									
									document.getElementById("NO2").value = "Todos";
									
								}
								
								else if(this.value=="NE"){
							
									document.getElementById("NO2").style.display = "none";
									document.getElementById("NE2").style.display = "block";
									document.getElementById("CO2").style.display = "none";
									document.getElementById("SE2").style.display = "none";							
									document.getElementById("SU2").style.display = "none";
									
									document.getElementById("NE2").value = "Todos";
								
								}
								
								else if(this.value=="CO"){
							
									document.getElementById("NO2").style.display = "none";
									document.getElementById("NE2").style.display = "none";
									document.getElementById("CO2").style.display = "block";
									document.getElementById("SE2").style.display = "none";							
									document.getElementById("SU2").style.display = "none";
									
									document.getElementById("CO2").value = "Todos";
								
								}
								
								else if(this.value=="SE"){
							
									document.getElementById("NO2").style.display = "none";
									document.getElementById("NE2").style.display = "none";
									document.getElementById("CO2").style.display = "none";
									document.getElementById("SE2").style.display = "block";							
									document.getElementById("SU2").style.display = "none";
									
									document.getElementById("SE2").value = "Todos";
								
								}
								
							
								else if(this.value=="SU"){
							
									document.getElementById("NO2").style.display = "none";
									document.getElementById("NE2").style.display = "none";
									document.getElementById("CO2").style.display = "none";
									document.getElementById("SE2").style.display = "none";							
									document.getElementById("SU2").style.display = "block";
									
									document.getElementById("SU2").value = "Todos";
								
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
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='NO2' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni2"); else document.getElementById("div_muni2").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="AC" >Acre</option>
						  <option value="AP">Amapá</option>															  					  
						  <option value="AM">Amazonas</option>															  					  		  
						  <option value="PA">Pará</option>															  
						  <option value="RO">Rondônia</option>															  
						  <option value="RR">Roraima</option>															  					  
						  <option value="TO">Tocantins</option>															  
					</select>
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='NE2' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni2"); else document.getElementById("div_muni2").innerHTML="";'>
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
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='CO2' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni2"); else document.getElementById("div_muni2").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="DF">Distrito Federal</option>															  
						  <option value="GO">Goiás</option>															  
						  <option value="MT">Mato Grosso</option>															  
						  <option value="MS">Mato Grosso do Sul</option>															  
					</select>				
					
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='SE2' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni2"); else document.getElementById("div_muni2").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="ES">Espírito Santo</option>															  
						  <option value="MG">Minas Gerais</option>															  
						  <option value="RJ">Rio de Janeiro</option>															  
						  <option value="SP">São Paulo</option>		
					</select>				
					<select style='width:200px;padding:0px;margin:0px;display:none;' id='SU2' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni2"); else document.getElementById("div_muni2").innerHTML="";'>
						  <option value="Todos">Todos</option>
						  <option value="PR">Paraná</option>															  
						  <option value="RS">Rio Grande do Sul</option>															  
						  <option value="SC">Santa Catarina</option>
					</select>				
					
					</div>
					<div id='div_muni2'></div> Adicionar Região
				
				
				
				</div>
			
			</div>
				
		</div>
		
		<div style="display: table-row; ">
			
			<div style="display: table-cell;"><b>Tipo de Licitação:</b></div>
			<div style="display: table-cell; "> 
			
						 <select style='width:200px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Menor Preço</option>
							  <option value="saab">Melhor Técnica</option>															  
							  <option value="saab">Técnica e Preço</option>															  
						</select>
			
						
			</div>
		</div>

		
		<div style="display: table-row; ">
			
			<div style="display: table-cell; "><b>Produtos ou Serviços:</b></div>
			<div style="display: table-cell;   "> 
						
						<input name='dfg' type='radio' checked onclick='
						
							document.getElementById("s1").style.display = "block";
							document.getElementById("s2").style.display = "none";
							document.getElementById("s3").style.display = "none";
						
						'> Todos os produtos cadastrados<br/>
						<input name='dfg' type='radio' onclick='
						
							document.getElementById("s1").style.display = "none";
							document.getElementById("s2").style.display = "block";
							document.getElementById("s3").style.display = "none";
						
						'> Somente meus produtos<br/>
						<input name='dfg' type='radio' onclick='
						
							document.getElementById("s1").style.display = "none";
							document.getElementById("s2").style.display = "none";
							document.getElementById("s3").style.display = "block";
						
						'> Palavras-chaves
						
						<p>
						<div id='s2' style='display:none'>
							<select style='margin:0px'>
								<option>Selecione seu produto</option>
								<option>Sapato 1</option>
								<option>Sapato 2</option>
								<option>Sapato 3</option>
								<option>Sapato 4</option>
							</select>
						</div>
						<div id='s1' >
							<table width='50%'>
								<tr>
									<td>
										Categoria:
									</td>
									<td>
										<select style='margin:0px'>
											<option>Todos</option>
											<option>Vestuário</option>
											<option>Alimentação</option>
											<option>Informática</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Subcategoria:
									</td>
									<td>
										<select style='margin:0px'>
											<option>Todos</option>
											<option>Roupas Masculinas</option>
											<option>Roupas Femininas</option>
											<option>Roupas Infantis</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Produto:
									</td>
									<td>
										<select style='margin:0px'>
											<option>Todos</option>
											<option>Sapato</option>
											<option>Tênis</option>
											<option>Chinelo</option>
										</select>
									</td>
								</tr>
							</table>
						</div>
						<div id='s3' style='display:none' >
							<input type='text' style='width:500px'>
						</div>
						<!--<table>
						<tr>
						<td> Produto/Serviço:</td><td><select style='width:100px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Produto</option>
							  <option value="saab">Serviço</option>															  
						</select>
						</td></tr>
						<tr>
						<td> Categoria:</td><td> <select style='width:200px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Produtos Químicos</option>
							  <option value="saab">Vestuário</option>															  
							  <option value="saab">Alimentação</option>															  
							  <option value="saab">Bijoterias</option>															  
							  <option value="saab">...</option>															  
						</select></td></tr>
						<tr>
						<td> Subcategoria:</td><td> <select style='width:200px;padding:0px;margin:0px;'>
							  <option value="volvo">Todos</option>
							  <option value="volvo">Tênis</option>
							  <option value="saab">Sapatênic</option>															  
							  <option value="saab">Sapato</option>															  
							  <option value="saab">Sandália</option>															  
							  <option value="saab">...</option>															  
							  <option value="saab">...</option>															  
						</select></td></tr>
						
						<tr>
						<td> Palavras-chaves:</td><td> <input type='text' size='50'></td></tr>
						
						<tr>
						<td> Características/Descrições:</td><td>
						
						<p/>
						
						
							<table>
								<tr>
									<td><input type='checkbox'> Característica 1&nbsp;&nbsp;</td>
									<td><input type='checkbox'> Característica 2&nbsp;&nbsp;</td>
									<td><input type='checkbox'> Característica 3&nbsp;&nbsp;</td>
								</tr>
								<tr>
									<td><input type='checkbox'> Característica 4&nbsp;&nbsp;</td>
									<td><input type='checkbox'> Característica 5&nbsp;&nbsp;</td>
									<td><input type='checkbox'> Característica 6&nbsp;&nbsp;</td>
								</tr>
								<tr>
									<td><input type='checkbox'> Característica 7&nbsp;&nbsp;</td>
									<td><input type='checkbox'> Característica 8&nbsp;&nbsp;</td>
									<td><input type='checkbox'> Característica 9&nbsp;&nbsp;</td>
								</tr>
							</table>
						
						</td></tr>
						
						</table>-->
						
			
						
			</div>
		</div>
		
		<div style="display: table-row; ">
			<div style="display: table-cell;text-align:right;">&nbsp;</div>
			<div style="display: table-cell;text-align:right;"> 
						
						<input type='button' value='Salvar Abrangência' onclick='javascript: prompt("Insira o nome o nome da Abrangência que deseja salvar:"); document.location = "template.php?conteudo=pg_abrangencia_salvas"'>
						<input type='button' value='Executar Consulta' onclick='javascript:  document.getElementById("id_tabela_credito").style.display = "block";'>
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



