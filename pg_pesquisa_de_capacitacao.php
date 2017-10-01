<h3>Pesquisa Capacitação:</h3><p/>
<div style="width: 98%;
	height: 800px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">	
		
            
            <div style="display: table-row; ">
			<div style="display: table-cell;">
				<b>
				Modo de Apresentação:
				</b>			
			</div>
			<div style="display: table-cell; ">			
				<?php
					
					if($_REQUEST['funcao'] == '1'){
					
						$selecionado1 = 'checked';
						
						
						$tema_conhecimento = "
						
						
						<div id='a1' >
													
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Empreendedorismo<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Planejamento<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Cooperação<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Finanças<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Pessoas<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Organização<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Leis e Normas<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Mercado<BR/>
													<INPUT TYPE='CHECKBOX' CHECKED='CHECKED'>Inovação<BR/>
													
													
												
												</div>
												
												
						<div id='a2' style='display:none'>
						
						<table >
								
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso melhorar minhas habilidades empreendedoras.</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED=''> Preciso melhorar meus conhecimentos estratégicos, realizar um planejamento para o meu negócio, estabelecer metas e realizar análises de mercado</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso entender mais sobre a cultura de cooperativismo e associativismo para melhorar meu negócio.</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso melhorar meus conhecimentos sobre como administrar os recursos financeiros da minha empresa.</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso conhecer mais sobre recursos humanos e como administrar o comportamento dos meus colaboradores.</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso controlar e melhorar minha produção, os serviços e o processo produtivo da minha empresa.</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso entender mais sobre as leis e normas aplicáveis ao meu negócio.</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso melhorar meus conhecimentos de mercado, conquistar e manter meus clientes e vender mais a preços competitivos.</td></tr>
								<tr><td><INPUT TYPE='CHECKBOX' CHECKED='CHECKED'> Preciso aprender sobre a cultura de inovação e como inovar meu produto, serviço ou processo produtivo para ser mais competitivo, além de desenvolver e inserir novas tecnologias no meu negócio.</td></tr>
								
								</table>
						
						</div>
												
												";
						
					}elseif($_REQUEST['funcao'] == '2'){
						
						$selecionado2 = 'checked';
						
						
						$tema_conhecimento = 
						
							"	
								<div id='a1' style='display:none' ><select style='margin:0px;padding:0px'>
													<option>--</option>
													<option>Empreendedorismo</option>
													<option>Planejamento</option>
													<option>Cooperação</option>
													<option>Finanças</option>
													<option>Pessoas</option>
													<option>Organização</option>
													<option>Leis e Normas</option>
													<option>Mercado</option>
													<option>Inovação</option>
													
												</select>
												</div>
												
												
						<div id='a2' >
						
						<table >
								
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso melhorar minhas habilidades empreendedoras.</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso melhorar meus conhecimentos estratégicos, realizar um planejamento para o meu negócio, estabelecer metas e realizar análises de mercado</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso entender mais sobre a cultura de cooperativismo e associativismo para melhorar meu negócio.</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso melhorar meus conhecimentos sobre como administrar os recursos financeiros da minha empresa.</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso conhecer mais sobre recursos humanos e como administrar o comportamento dos meus colaboradores.</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso controlar e melhorar minha produção, os serviços e o processo produtivo da minha empresa.</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso entender mais sobre as leis e normas aplicáveis ao meu negócio.</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso melhorar meus conhecimentos de mercado, conquistar e manter meus clientes e vender mais a preços competitivos.</td></tr>
								<tr><td><input type='radio' name='tema_conhecimento'> Preciso aprender sobre a cultura de inovação e como inovar meu produto, serviço ou processo produtivo para ser mais competitivo, além de desenvolver e inserir novas tecnologias no meu negócio.</td></tr>
								
								</table>
						
						</div>
								
								
							";

						
					}
					
				?>
				<input type='radio' name='hhh' <?php echo $selecionado1;  ?> 
				
				onclick='
				
					document.getElementById("a1").style.display = "block";
					document.getElementById("a2").style.display = "none";
				
				'
				>   Temas ligados a gestão<br/>
				<input type='radio' name='hhh' <?php echo $selecionado2;  ?> 
				
				
				onclick='
				
					document.getElementById("a1").style.display = "none";
					document.getElementById("a2").style.display = "block";
				
				'
				
				>   Necessidade/Dificuldade
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
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='NE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById(this.value,"div_muni").innerHTML="";'>
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
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='CO' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById(this.value,"div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="DF">Distrito Federal</option>															  
					  <option value="GO">Goiás</option>															  
					  <option value="MT">Mato Grosso</option>															  
					  <option value="MS">Mato Grosso do Sul</option>															  
				</select>				
				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById(this.value,"div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="ES">Espírito Santo</option>															  
					  <option value="MG">Minas Gerais</option>															  
					  <option value="RJ">Rio de Janeiro</option>															  
					  <option value="SP">São Paulo</option>		
				</select>				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SU' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni"); else document.getElementById(this.value,"div_muni").innerHTML="";'>
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
					Perfil do Usuário:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				<select style='margin:0px;padding:0px'>
				<option>Todos</option>	
                                    <option>Potencial do Empreendedor</option>
					<option>MEI</option>
					<option>MicroEmpresa</option>
					<option>Empresa de Pequeno Porte</option>
				</select>			
			</div>			
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:250px ">
				<b>
					Tema do Conhecimento:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				
				<?php
				
				
					echo $tema_conhecimento;
				
				?>
				
				
			</div>			
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
				<b>
					Tipo de Instrumento:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				
                                
				
                                        <input type='checkbox' checked="CHECKED"/>Cursos<BR/>
					<input type='checkbox' checked="CHECKED"/>Ferramentas<BR/>
					<input type='checkbox'  checked="CHECKED"/>Cartilhas<BR/>
				
			</div>			
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
				<b>
					Status:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				
					  
					  <input type='checkbox' checked="CHECKED"/>Previstos<BR/>
					  <input type='checkbox' checked="CHECKED"/>Inscrições Abertas<BR/>
					  <input type='checkbox' checked="CHECKED"/>Em andamento<BR/>
					  <input type='checkbox' checked="CHECKED"/>Encerrados<BR/>
				
			</div>			
		</div>
		
		<div style="display: table-row; ">
			<div style="display: table-cell;">
				<b>
					Modalidade:
				</b>			
			</div>
			<div style="display: table-cell; ">				
				
					
					<input type='checkbox' checked="CHECKED"/>Presencial<BR/>
					<input type='checkbox' checked="CHECKED"/>Semipresencial<BR/>
					<input type='checkbox' checked="CHECKED"/>Virtual<BR/>
				
			</div>			
		</div>		
		
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
				<b>
					Nome do Curso:
				</b>			
			</div>
			<div style="display: table-cell;">				
				
				
					<input type='checkbox' checked="CHECKED"/>Como controlhar minhas finanças<BR/>
					<input type='checkbox' checked="CHECKED"/>Faça seu dinheiro render<BR/>
					<input type='checkbox' checked="CHECKED"/>Corte e Costura<BR/>
					<input type='checkbox' checked="CHECKED"/>Pintura e artesanato<BR/>
				
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
			<div style="display: table-cell;">
				<b>
					<hr>
				</b>			
			</div>
			<div style="display: table-cell;" align='right'>
				<hr>
			</div>
		</div>			
	</div> <!-- fim da div tabela -->	
	<div id='tabela' style='display:none' >	
		<center>
			<table border='1' width='95%'>
				<caption>Resultado da Pesquisa</caption>
				<tr>
					<th>Tema de Conhecimento</th>
					<th>Tipos de Instrumento</th>
					<th>Nome</th>
                    <th>Nome da Instituição</th>
					<th>Perfil do Usuário</th>
					<th>Modalidade</th>
					<th>Localidade</th>
					<th>Período</th>
					<th>Ação</th>
				</tr>
				<tr>
					<td>Finanças</td>
					<td>Ferramenta</td>
					<td>Controle Financeiro</td>
                                        <td>SEBRAE</td>
										<td>MEI</td>
					<td>Presencial</td>
					<td>Brasília-DF</td>
					<td>01/01/2014 - 31/01/2014</td>
					<td align='center'><a href='template.php?conteudo=pg_detalhar_capacitacao'>Detalhar</a></td>
				</tr>
				<tr>
					<td>Finanças</td>
					<td>Ferramenta</td>
					<td>Controle Financeiro</td>
                                        <td>Universidade de Brasília</td>
										<td>MPE</td>
					<td>Presencial</td>
					<td>Brasília-DF</td>
					<td>01/01/2014 - 31/01/2014</td>
					<td align='center'><a href='template.php?conteudo=pg_detalhar_capacitacao'>Detalhar</a></td>
				</tr>
				<tr>
					<td>Finanças</td>
					<td>Ferramenta</td>
					<td>Controle Financeiro</td>
                                        <td>Universidade Católica</td>
										<td>EPP</td>
					<td>Presencial</td>
					<td>Brasília-DF</td>
					<td>01/01/2014 - 31/01/2014</td>
					<td align='center'><a href='template.php?conteudo=pg_detalhar_capacitacao'>Detalhar</a></td>
				</tr>
				<tr>
					<td>Finanças</td>
					<td>Ferramenta</td>
					<td>Controle Financeiro</td>
                                        <td>SEBRAE</td>
										<td>MPE</td>
					<td>Presencial</td>
					<td>Brasília-DF</td>
					<td>01/01/2014 - 31/01/2014</td>
					<td align='center'><a href='template.php?conteudo=pg_detalhar_capacitacao'>Detalhar</a></td>
				</tr>
				<tr>
					<td>Finanças</td>
					<td>Ferramenta</td>
					<td>Controle Financeiro</td>
                                        <td>IFCE</td>
										<td>EPP</td>
					<td>Presencial</td>
					<td>Brasília-DF</td>
					<td>01/01/2014 - 31/01/2014</td>
					<td align='center'>Detalhar</td>
				</tr>
			</table>	
			
			
		</center>
		<p><div align='right'><input type='button' value='Ver minha grade de cursos'
		
			onclick='document.location = "template.php?conteudo=pg_capacitacoes_realizadas"';
		
		></div></p>
	</div>		<!-- fim do div tabela -->	
	
	
</div>