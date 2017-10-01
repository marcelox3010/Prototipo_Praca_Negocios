
<h3>Pesquisa Certificação:</h3><p/>
<div style="width: 98%;
	height: 1100px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">	
		
                <!--<div style="display: table-row; ">
			<div style="display: table-cell;-align:right;"><b>Produto:</b></div>
				<div style="display: table-cell;">					
					<input type='radio' name='prod'  checked='checked' onclick='javascript:
					
						
						document.getElementById("selecione_o_produto").style.display="block";
						document.getElementById("meus_produtos").style.display="none";
						document.getElementById("pesquisa_thessauro").style.display="block";
					
					'> Todos produtos cadastrados<br/>
					<input type='radio' name='prod' 
					
					onclick='javascript:
						
					
					
						document.getElementById("selecione_o_produto").style.display="block";
						document.getElementById("pesquisa_thessauro").style.display="none";
						document.getElementById("meus_produtos").style.display="block";				
					'> Somente meus produtos						
			</div>
		</div>-->
		
                <!--
		<div style="display: table-row; ">
			
			<div style="display: table-cell;" > 
				<div style='display:block;' id='selecione_o_produto'>
					<b>
						Selecione o Produto:
					</b>		
				</div>
			</div>
			<div style="display: table-cell; " >
				<div id='pesquisa_thessauro' style='display:block'>
					 <table>							 
						<tr>
							<td>Categoria do Produto:</td>
							<td>
								<select style='width:200px;padding:0px;margin:0px;' onchange=''>
								  <option value="volvo">Escolha uma categoria</option>
								  <option value="volvo">Vestuário</option>
								  <option value="saab">Alimentação</option>															  
								  <option value="saab">Informática</option>															  
								</select>
							</td>
						</tr>
						<tr>
							<td>Subcategoria:</td>
							<td>
								<select style='width:200px;padding:0px;margin:0px;' onchange=''>
								  <option value="volvo">Escolha uma subcategoria</option>
								  <option value="volvo">Calçados</option>
								  <option value="saab">Roupas masculinas</option>															  
								  <option value="saab">Roupas infantis</option>															  
								</select>
							</td>
						</tr>
						<tr>
							<td>Produto:</td>
							<td>
								<select style='width:200px;padding:0px;margin:0px;' 
									onchange=''>
								  <option value="volvo">Escolha um produto</option>
								  <option value="volvo">Sapato</option>
								  <option value="volvo">Tênis</option>
								  <option value="saab">Sandália</option>															  
								  <option value="saab">Chinelo</option>		
								  
								</select>
							</td>
						</tr>
					</TABLE>
				</div>					
				<div id='meus_produtos' style='display:none' onclick='javascript:
				
					
				
				'>
					 <select style='width:200px;padding:0px;margin:0px;' onchange='
					 
					
					 
					 
					 '>
						  <option value="volvo">Selecione um item</option>
						  <option value="volvo">Sapato 1</option>
						  <option value="saab">Sapato 2</option>															  
						  <option value="saab">Sapato 3</option>															  
						  <option value="saab">Sapato 4</option>															  
						  <option value="saab">Sapato 5</option>															  
						  <option value="saab">Sapato 6</option>															  
						  <option value="saab">...</option>															  
						  <option value="saab">...</option>	
					</select>
				</div>
						
			</div>
		
		</div>	-->	
		<div style="display: table-row; ">
			<div style="display: table-cell;vertical-align: top;">
                             <b>
                                 Produto da Pesquisa:
                             </b>
                        </div>
			<div style="display: table-cell;">					
                            
                                <table WIDTH='100%'>
                                    <tr>
                                        <td>
                                            <select id='ggg1' multiple style="height:100px;WIDTH:100%;margin: 0px;padding: 0px" >
                                                <option>001 - Sapata Bacana - Praça</option>
                                                <option>002 - Sapato Legal - Meus Produtos</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ALIGN='RIGHT'>
                                            <input type='button' value='Adicionar' onclick='javascript:
                                                   
                                                   document.getElementById("jjj1").style.display = "block";
                                                   
                                                   '>
                                        </td>
                                    </tr>
                                </table> 
                            
                                <div id='jjj1' style='display:none;border: 1px dotted; padding: 5px'>
                                    <input type='radio' name='prod'  checked='checked' onclick='javascript:
					
						
						
						document.getElementById("meus_produtos").style.display="none";
						document.getElementById("pesquisa_thessauro").style.display="block";
					
					'> Todos produtos cadastrados<br/>
					<input type='radio' name='prod' 
					
					onclick='javascript:
		
						document.getElementById("pesquisa_thessauro").style.display="none";
						document.getElementById("meus_produtos").style.display="block";				
					'> Somente meus produtos	
                                    <p/>
                                    
                                    
                                    <div id='pesquisa_thessauro' style='display:block'>
					 <table>							 
						<tr>
							<td>Categoria do Produto:</td>
							<td>
								<select style='width:200px;padding:0px;margin:0px;' onchange=''>
								  <option value="volvo">Escolha uma categoria</option>
								  <option value="volvo">Vestuário</option>
								  <option value="saab">Alimentação</option>															  
								  <option value="saab">Informática</option>															  
								</select>
							</td>
						</tr>
						<tr>
							<td>Subcategoria:</td>
							<td>
								<select style='width:200px;padding:0px;margin:0px;' onchange=''>
								  <option value="volvo">Escolha uma subcategoria</option>
								  <option value="volvo">Calçados</option>
								  <option value="saab">Roupas masculinas</option>															  
								  <option value="saab">Roupas infantis</option>															  
								</select>
							</td>
						</tr>
						<tr>
							<td>Produto:</td>
							<td>
								<select style='width:200px;padding:0px;margin:0px;' 
									onchange=''>
								  <option value="volvo">Escolha um produto</option>
								  <option value="volvo">Sapato</option>
								  <option value="volvo">Tênis</option>
								  <option value="saab">Sandália</option>															  
								  <option value="saab">Chinelo</option>		
								  
								</select>
							</td>
						</tr>
					</TABLE>
                                        
				</div>					
                                    
				<div id='meus_produtos' style='display:none' onclick='javascript:
				
					
				
				'>
					 <select style='width:200px;padding:0px;margin:0px;' onchange='
					 
					
					 
					 
					 '>
						  <option value="volvo">Selecione um item</option>
						  <option value="volvo">Sapato 1</option>
						  <option value="saab">Sapato 2</option>															  
						  <option value="saab">Sapato 3</option>															  
						  <option value="saab">Sapato 4</option>															  
						  <option value="saab">Sapato 5</option>															  
						  <option value="saab">Sapato 6</option>															  
						  <option value="saab">...</option>															  
						  <option value="saab">...</option>	
					</select>
				</div><p/>
                                        <input type="button" value='Ok'
                                               
                                               onclick='javascript:
                                                           
                                                           
                                                      document.getElementById("ggg1").innerHTML += "<option>003 - Super Sapato - Praça</option>";    
                                               document.getElementById("jjj1").style.display="none";
                                               '
                                               >
                                        <input type="button" value='Cancelar' onclick='javascript:document.getElementById("jjj1").style.display="none";'>
                                    
                                    
                                    
                                </div>
			</div>
		</div>
                <div style="display: table-row; ">
			<div style="display: table-cell;vertical-align: top;">
                             <b>
                                 Ramo de Atividade:
                             </b>
                        </div>
			<div style="display: table-cell;">					
                            
                                <table WIDTH='100%'>
                                    <tr>
                                        <td>
                                            <select id='ggg12' multiple style="height:100px;WIDTH:100%;margin: 0px;padding: 0px"  >
                                                <option>0111-3/01 - CULTIVO DE ARROZ </option>
                                                <option>5011-4/01 - TRANSPORTE MARÍTIMO DE CABOTAGEM - CARGA</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ALIGN='RIGHT'>
                                            <input type='button' value='Adicionar' onclick='javascript:
                                                   
                                                   document.getElementById("jjj12").style.display = "block";
                                                   
                                                   '>
                                        </td>
                                    </tr>
                                </table> 
                            
                                <div id='jjj12' style='display:none;border: 1px dotted; padding: 5px'>
                                    
                                    
                                    
                                    <div id='pesquisa_thessauro2' style='display:block'>
                                        
                                        <table border='1' width='100%'>
                                             <tr>
                                                 
                                                 	
                                             <th>-</th><th>Seção</th><th>	Divisões</th><th>	Descrição CNAE                                         </th> </tr>
                                             <tr><td><input type='checkbox'/>	</td><td align='center'>A	</td><td>01 .. 03</td><td>	AGRICULTURA, PECUÁRIA, PRODUÇÃO FLORESTAL, PESCA E AQÜICULTURA</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>B	</td><td>05 .. 09</td><td>	INDÚSTRIAS EXTRATIVAS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>C	</td><td>10 .. 33</td><td>	INDÚSTRIAS DE TRANSFORMAÇÃO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>D	</td><td>35 .. 35</td><td>	ELETRICIDADE E GÁS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>E	</td><td>36 .. 39</td><td>	ÁGUA, ESGOTO, ATIVIDADES DE GESTÃO DE RESÍDUOS E DESCONTAMINAÇÃO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>F	</td><td>41 .. 43</td><td>	CONSTRUÇÃO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>G	</td><td>45 .. 47</td><td>	COMÉRCIO; REPARAÇÃO DE VEÍCULOS AUTOMOTORES E MOTOCICLETAS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>H	</td><td>49 .. 53</td><td>	TRANSPORTE, ARMAZENAGEM E CORREIO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>I	</td><td>55 .. 56</td><td>	ALOJAMENTO E ALIMENTAÇÃO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>J	</td><td>58 .. 63</td><td>	INFORMAÇÃO E COMUNICAÇÃO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>K	</td><td>64 .. 66</td><td>	ATIVIDADES FINANCEIRAS, DE SEGUROS E SERVIÇOS RELACIONADOS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>L	</td><td>68 .. 68</td><td>	ATIVIDADES IMOBILIÁRIAS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>M	</td><td>69 .. 75</td><td>	ATIVIDADES PROFISSIONAIS, CIENTÍFICAS E TÉCNICAS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>N	</td><td>77 .. 82</td><td>	ATIVIDADES ADMINISTRATIVAS E SERVIÇOS COMPLEMENTARES</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>O	</td><td>84 .. 84</td><td>	ADMINISTRAÇÃO PÚBLICA, DEFESA E SEGURIDADE SOCIAL</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>P	</td><td>85 .. 85</td><td>	EDUCAÇÃO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>Q	</td><td>86 .. 88</td><td>	SAÚDE HUMANA E SERVIÇOS SOCIAIS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>R	</td><td>90 .. 93</td><td>	ARTES, CULTURA, ESPORTE E RECREAÇÃO</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>S	</td><td>94 .. 96</td><td>	OUTRAS ATIVIDADES DE SERVIÇOS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>T	</td><td>97 .. 97</td><td>	SERVIÇOS DOMÉSTICOS</td></tr>
                                            <tr><td><input type='checkbox'/><td align='center'>U	</td><td>99 .. 99</td><td>	ORGANISMOS INTERNACIONAIS E OUTRAS INSTITUIÇÕES EXTRATERRITORIAIS</td></tr>
                                         </table>
                                         
				</div>					
                                    
				<div id='meus_produtos2' style='display:none' onclick='javascript:
				
					
				
				'>
					 <select style='width:200px;padding:0px;margin:0px;' onchange='
					 
					
					 
					 
					 '>
						  <option value="volvo">Selecione um item</option>
						  <option value="volvo">Sapato 1</option>
						  <option value="saab">Sapato 2</option>															  
						  <option value="saab">Sapato 3</option>															  
						  <option value="saab">Sapato 4</option>															  
						  <option value="saab">Sapato 5</option>															  
						  <option value="saab">Sapato 6</option>															  
						  <option value="saab">...</option>															  
						  <option value="saab">...</option>	
					</select>
				</div><p/>
                                        <input type="button" value='Ok'
                                               
                                               onclick='javascript:
                                                           
                                                           
                                                      document.getElementById("ggg12").innerHTML += "<option>8532-5/00 - EDUCAÇÃO SUPERIOR - GRADUAÇÃO E PÓS-GRADUAÇÃO</option>";    
                                               document.getElementById("jjj12").style.display="none";
                                               '
                                               >
                                        <input type="button" value='Cancelar' onclick='javascript:document.getElementById("jjj12").style.display="none";'>
                                    
                                    
                                    
                                </div>
			</div>
		</div>
		<?php 

				
				
				if($_REQUEST['funcao'] == '1'){
				
					
					$selecionado1 = 'checked';
					
					$yyy = "
						<div id='qwer' style='display:none'>
						
							<input type='checkbox' name='rrr'> ISO <br/>
							<input type='checkbox' name='rrr'> Norma Técnica <br/>
							<input type='checkbox' name='rrr'> Rotulagem <br/>
							<input type='checkbox' name='rrr'> Selo <br/>
							<input type='checkbox' name='rrr'> Normas para Exportação <br/>
						
					</div>
					
					<div id='asdf' >
					
						<input type='checkbox' name='rrr'> Preciso melhorar e implantar a qualidade dos processos da minha empresa <br>
						<input type='checkbox' name='rrr'> Preciso saber sobre as normas obrigatórias para a certificação do meu produto<br>
						<input type='checkbox' name='rrr'> Quero ter acesso às certificações que podem ajudar na competitividade do meu negócio.<br>
						<input type='checkbox' name='rrr'> Preciso conhecer mais sobre os procedimentos de rotulagem de produtos, obrigatórios ou não, para aumentar a competitividade do meu negócio.<br>
						<input type='checkbox' name='rrr'> Gostaria de saber mais sobre a existência de selos de qualidade para aumentar a competitividade do meu negócio.<br>
						<input type='checkbox' name='rrr'> Quero entender mais e adequar minha empresa quanto aos procedimentos para vender em mercados estrangeiros.<br>
					
					</div>
					
					
					
					";
				
				
				}elseif($_REQUEST['funcao'] == '2'){
				
				
					$selecionado2 = 'checked';
					
					
					
					$yyy = 
					
					"
					
					
					<div id='a1'>
						
							<input type='checkbox' name='rrr'>ISO <br/>
							<input type='checkbox' name='rrr'>Norma Técnica <br/>
							<input type='checkbox' name='rrr'> Rotulagem <br/>
							<input type='checkbox' name='rrr'> Selo <br/>
							<input type='checkbox' name='rrr'> Normas para Exportação <br/>
					</div>
					
					<div id='a2' style='display:none'>
					
						<input type='checkbox' name='rrr'> Preciso melhorar e implantar a qualidade dos processos da minha empresa <br>
						<input type='checkbox' name='rrr'> Preciso saber sobre as normas obrigatórias para a certificação do meu produto<br>
						<input type='checkbox' name='rrr'> Quero ter acesso às certificações que podem ajudar na competitividade do meu negócio.<br>
						<input type='checkbox' name='rrr'> Preciso conhecer mais sobre os procedimentos de rotulagem de produtos, obrigatórios ou não, para aumentar a competitividade do meu negócio.<br>
						<input type='checkbox' name='rrr'> Gostaria de saber mais sobre a existência de selos de qualidade para aumentar a competitividade do meu negócio.<br>
						<input type='checkbox' name='rrr'> Quero entender mais e adequar minha empresa quanto aos procedimentos para vender em mercados estrangeiros.
					
					</div>
					
					
					";
					
				
				}



?>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Modo de Apresentação:
				</b>
			</div>
			<div style="display: table-cell;"> 
				
				<input type='radio' name='qwert' <?php echo $selecionado1; ?> 
				
				onclick='
					
					document.getElementById("qwer").style.display = "none";
					document.getElementById("asdf").style.display = "block";
				
				'
				
				> Por necessidade de regularização da minha empresa<br/>
				<input type='radio' name='qwert' <?php echo $selecionado2; ?> 
				onclick='
					
					document.getElementById("qwer").style.display = "block";
					document.getElementById("asdf").style.display = "none";
				
				'
				
				
				> Por tipos de certificação ou normatização
			</div>
		</div>	
		
		
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Tipo de Certificado:
				</b>
			</div>
			<div style="display: table-cell;"> 
				<?php 
				
					echo $yyy;
				
				?>
				
			</div>
		</div>	
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					&nbsp;
				</b>
			</div>
			<div style="display: table-cell;" align='right'> 
				<input type='button' value='Pesquisar Certificações' onclick=' 
				document.getElementById("div_janio").style.display = "block"
				
				
				'>
			</div>
		</div>	
		
		<div style="display: table-row; ">
			<div style="display: table-cell;">
				<hr>
			</div>
			<div style="display: table-cell;">
				<hr>
			</div>
		</div>
			
	</div>
	
	
	<div style='display:none' id='div_janio'>
	<center>
	<table width='95%' border='1'>
		
		<tr>
			<th>Produto</th>
			<th>Tipo de Certificação</th>
			<th>Nome da Certificação</th>
			<th>Obrigatório</th>
			<th>Instituição</th>
			<th>Ação</th>
		</tr>
		
		<tr>
			<td rowspan='3'>Sapato 1</td>
			<td>ISO (Processo)</td>
			<td>ISO 9001 (Processo)</td>
			<td align='center'>SIM</td>
			<td>INMETRO</td>
			<td align='center'><a href='template.php?conteudo=pg_detalhar_inovacao'>Detalhar</a></td>
		</tr>
		
		<tr>			
			<td>Norma Técnica</td>
			<td>ABNT NBR123</td>
			<td align='center'>SIM</td>
			<td>INMETRO</td>
			<td align='center'><a href='template.php?conteudo=pg_detalhar_inovacao'>Detalhar</a></td>
		</tr>
		
		<tr>			
			<td>Rotulagem</td>
			<td>Rotulagem XYZ</td>
			<td align='center'>Não</td>
			<td>ANVISA</td>
			<td align='center'><a href='template.php?conteudo=pg_detalhar_inovacao'>Detalhar</a></td>
		</tr>
		
		<tr>
			<td rowspan='2'>Sapato 2</td>
			<td>ISO (Processo)</td>
			<td>ISO 9001 (Processo)</td>
			<td align='center'>SIM</td>
			<td>INMETRO</td>
			<td align='center'><a href='template.php?conteudo=pg_detalhar_inovacao'>Detalhar</a></td>
		</tr>
		
		<tr>			
			<td>Rotulagem</td>
			<td>Rotulagem XYZ</td>
			<td align='center'>Não</td>
			<td>ANVISA</td>
			<td align='center'><a href='template.php?conteudo=pg_detalhar_inovacao'>Detalhar</a></td>
		</tr>
	
	</table>
	</center>
	<p/>
	<div align='right'>
	
		<input type='button' value='Selos e certificações privadas'

			onclick='
                            
                            //document.getElementById("div_janio_2").style.display="block"
                            alert("falta definição de link");
                        
                        '

		>
		
	</div>
	<p/>
	<div style='display:none;padding:30px;
					border: 1px solid;
					border-radius: 25px;
					border-color:#dddddd' id='div_janio_2'>
	<center>
		<table border='0' width='95%'>
			
			<tr>
			
				<td>Tipo de Certificação:</td>
				<td>
					<select style='padding:0px;margin:0px' onchange='
					
						if(this.value=="5"){
							document.getElementById("r1").style.display ="block";
							document.getElementById("r2").style.display ="block";
						
						}else{
							document.getElementById("r1").style.display ="none";
							document.getElementById("r2").style.display ="none";
						
						}
					
					'>
							
							
							<option value='1'> ISO (Processo) </option>
							<option value='2'> Norma Técnica </option>
							<option value='3'> Rotulagem </option>
							<option value='4'> Selo </option>
							<option value='5'> Normas para Exportação </option>
							
				
					</select>
				</td>
			
			</tr>
			
			<tr>
			
				<td><div id='r1' style='display:none'>País:</div></td>
				<td>
					<div id='r2' style='display:none'>
						<select style='padding:0px;margin:0px'>
							<option>Brasil</option>
							<option>Estados Unidos</option>
							<option>Japão</option>
							<option>Portugal</option>						
						</select>
					</div>
				</td>
			
			</tr>
			<tr>
			
				<td>Setor Produtivo:</td>
				<td>
					<select style='padding:0px;margin:0px'>
						<option>Comércio</option>
						<option>Serviços</option>
					</select>
				</td>
			
			</tr>
			
			<tr>
			
				<td>Especificação da Solução:</td>
				<td>
					<textarea></textarea>
				</td>
			
			</tr>
			
			
		
		</table>
		</center>
		
		<div align='right'>
		
			<input type='button' value='Enviar Solicitação' onclick='javascript:alert("Seu protocolo é: XXXXXXX"); 
			
			document.getElementById("div_janio_2").style.display = "none";
			
			'>
		</div>
	</div>
	
	</div>
	
	
	
	
	</div>
	



