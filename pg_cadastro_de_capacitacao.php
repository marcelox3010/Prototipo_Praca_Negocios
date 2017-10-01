Procure o curso cursado
<div style="width: 98%;
	height: 800px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">	
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Tipo de Instrumento:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				<select style='margin:0px;padding:0px'>
					<option>Todos</option>
					<option>Cursos</option>
					<option>Ferramentas</option>
					<option>Cartilhas</option>
				</select>			
			</div>			
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
				<b>
					Tema do Conhecimento:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				<select style='margin:0px;padding:0px'>
					<option>Todos</option>
					<option>Finanças</option>
					<option>Gestão</option>
					<option>Empreendedorismo</option>
				</select>			
			</div>			
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;">
				<b>
					Modalidade:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				<select style='margin:0px;padding:0px'>
					<option>Todos</option>
					<option>Presencial</option>
					<option>Semipresencial</option>
					<option>Virtual</option>
				</select>			
			</div>			
		</div>		
		<div style="display: table-row">
			<div style=" display: table-cell; "><b>Localidade (Região/Estados/Municípios):</b></div>
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
			<div style="display: table-cell; ">
				<b>
					Nome do Curso:
				</b>			
			</div>
			<div style="display: table-cell;">				
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;">
				<b>
					Período Inicial:
				</b>			
			</div>
			<div style="display: table-cell;">				
				<input type='text'>
			</div>
		</div>		
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
				<b>
					Período Final:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
				<b>
					&nbsp;
				</b>			
			</div>
			<div style="display: table-cell;" align='right'>
				<p>&nbsp;</p>
				<input type='button' value='Pesquisar' onclick='
				
					document.getElementById("tabela").style.display = "block";
				
				'>
			</div>
		</div>	
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					<hr>
				</b>			
			</div>
			<div style="display: table-cell;width:300px" align='right'>
				<hr>
			</div>
		</div>			
	</div> <!-- fim da div tabela -->	
	<div id='tabela' style='display:none'>	
		<center>
			<table border='1'>
				<caption>Resultado da Pesquisa</caption>
				<tr>
					<th>Tema de Conhecimento</th>
					<th>Tipos de Instrumento</th>
					<th>Nome</th>
					<th>Modalidade</th>
					<th>Localidade</th>
					<th>Período</th>
					<th>Ação</th>
				</tr>
				<tr>
					<td>Finanças</td>
					<td>Ferramenta</td>
					<td>Controle Financeiro</td>
					<td>Presencial</td>
					<td>Brasíli-DF</td>
					<td>01/01/2014 - 31/01/2014</td>
					<td align='center'><a href='javascript:
					
						if(confirm("Declaro que me inscrevi e conclui com sucesso  o curso XXXX ")){
						
							document.location = "template.php?conteudo=pg_capacitacoes_realizadas";
						
						}
					
					
					'>Vincular Curso</a></td>
				</tr>
				<tr>
					<td>..</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td align='center'>...</td>
				</tr>	
				<tr>
					<td>..</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td align='center'>...</td>
				</tr>				
				<tr>
					<td>..</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td align='center'>...</td>
				</tr>	
				<tr>
					<td>Finanças</td>
					<td>Ferramenta</td>
					<td>Controle Financeiro</td>
					<td>Presencial</td>
					<td>Brasíli-DF</td>
					<td>01/01/2014 - 31/01/2014</td>
					<td align='center'><a href='javascript:
					
						if(confirm("Declaro que me inscrevi e conclui com sucesso  o curso XXXX ")){
						
							document.location = "template.php?conteudo=pg_capacitacoes_realizadas";
						
						}
					
					
					'>Vincular Curso</a></td>
				</tr>
			</table>	
		</center>
	</div>		<!-- fim do div tabela -->	
	
	
</div>