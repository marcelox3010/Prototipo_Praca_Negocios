<h4><a href="template.php">Praça Eletrônica de Negócios</a> >> <a href='template.php?conteudo=pg_inicial2'>Quero Vender</a> >> <a href='template.php?conteudo=pg_inicial2'>Seja Mais Lucrativo</a> >> Cadastro Certificado de Processos e Produtos </h4>		

Cadastro de Certificação:
<div style="width: 98%;
	height: 500px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">	
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Escolha seu produto/Serviço:
				</b>
			</div>
			<div style="display: table-cell;"> 
				 <select style='width:200px;padding:0px;margin:0px;' onchange='
				 
					document.getElementById("id1").style.display ="block";
					document.getElementById("id2").style.display ="block";
				 
				 '>
						  <option value="volvo">Selecione</option>
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
		<div style="display: table-row; ">
			<div style="display: table-cell;">
				<hr>
			</div>
			<div style="display: table-cell;">
				<hr>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px">
				<b>
					<div id='id1' style='display:none'>Escolha a norma:</div>
				</b>
			</div>
			<div style="display: table-cell;"> 
				<div id='id2' style='display:none;'>								
						<table  width='80%' border='1'>
						
						<tr>
							<td>
								ABNT NBR 14136:1998
							</td> 
							<td>
								<a href='http://www.abntcatalogo.com.br/norma.aspx?ID=61164' target='_blank'>Consultar Norma</a>								
							</td>
							<td align='left' colspan=2>
								<input type='button' value='Cadastrar Certificado'
								onclick='
								
									document.getElementById("id3").style.display = "block";
									document.getElementById("id4").style.display = "block";
								
								'
								
								> <br/>
							</td>
						</tr>
						<tr>
							<td>
								 IEC 14136:2003
							</td>
							<td>
								<a href='http://www.abntcatalogo.com.br/norma.aspx?ID=61164' target='_blank'>Consultar Norma</a>							
							</td>
							<td>
								<a href='javascript:alert("Tela de Visualização");'>Certificado cadastrado</a>
							</td>
						</tr>
						<tr>
							<td>
								IEC 14136:2003
							</td>
							<td>
								<a href='http://www.abntcatalogo.com.br/norma.aspx?ID=61164' target='_blank'>Consultar Norma</a>							
							</td>
							<td>
								<a href='javascript:alert("Tela de Visualização");'>Certificado cadastrado</a>
							</td>
						</tr>
						
						<tr>
							<td>
								IEC60669-2-1:2002<br/>
							</td>
							<td>
								<a href='http://www.abntcatalogo.com.br/norma.aspx?ID=61164' target='_blank'>Consultar Norma</a>
							</td>	
							<td align='left' colspan=2>
								<input type='button' value='Cadastrar Certificado'

									onclick='

										document.getElementById("id3").style.display = "block";
										document.getElementById("id4").style.display = "block";
								

										'

								> <br/>
							</td>
						</tr>
						
					</table>
				</div>
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
		
		<div style="display: table-row; ">
			<div style="display: table-cell;">
				<b>
					<div id='id3' style='display:none;'>
						Certificação:
					</div>
				</b>
			</div>
			<div style="display: table-cell;">
				<div id='id4' style='display:none'>
				<table>
					<tr>
						<td>
							Insira o arquivo do certificado:
						</td>
						<td>
							<input type="file" name="pic" >
						</td>
					</tr>
					<tr>
						<td>
							Número da certificação:
						</td>
						<td>
							<input type="text" name="pic" >
						</td>
					</tr>
					<tr>
						<td>
							Data de Obtenção:
						</td>
						<td>
							<input type="text" name="pic" >
						</td>
					</tr>
					<tr>
						<td>
							Valido até:
						</td>
						<td>
							<input type='text'>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type='button' value='Enviar Solicitação' onclick='
							
								alert("Solicitação cadastrada com sucesso. Seu número de protocolo é: XXXXXXX	");
							
							'>						
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		
		
	</div>	
	
	
	
	
	
	
	
	
</div>
	



