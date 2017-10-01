	Escolher Operador Logístico:
	<div style="width: 98%;
		height: 800px;
		border: 3px solid #cccccc;
		padding: 5px;
		font-family: Tahoma, sans-serif;">

		<div style="width: 100%; display: table;border-spacing: 0 13px;">
			
			
			<div style="display: table-row; " >		
				
				<div style="display: table-cell;">
					<b>
						Endereço do Exportador:
					</b> 
				</div>
				<div style="display: table-cell;"> 
				
						Rua Pedro Pereira, 6546, Centro, Fortaleza-CE, Brasil
					
				</div>
			</div>
			
			<div style="display: table-row; " >		
				
				<div style="display: table-cell;">
					<b>
						Endereço do Importador:
					</b> 
				</div>
				<div style="display: table-cell;"> 
				
						St. Peter Park Avenue, San Francisco-CA, United States of America.
					
				</div>
			</div>
			<div style="display: table-row; " >		
				
				<div style="display: table-cell;">
					<b>
						Incoterms:
					</b> 
				</div>
				<div style="display: table-cell;"> 
				
						FOB 
				</div>
			</div>
			<div style="display: table-row; " >		
				
				<div style="display: table-cell;">
					<b>
						Volumes:
					</b> 
				</div>
				<div style="display: table-cell;"> 
				
						<table border='1' width='95%'>
						<tr>
							<th>Número do Volume</th>
							<th>Peso Bruto (Kg)</th>
							<th>Peso Líquido (Kg)</th>
							<th>Volume (m³)</th>					
						</tr>
						<tr>
							<td align='right'>1</td>
							<td  align='right'>10,000</td>
							<td  align='right'> 9,500</td>
							<td  align='right'>1,000</th>					
						</tr>
						<tr>
							<td align='right'>2</td>
							<td  align='right'>1,000</td>
							<td  align='right'>8,000</td>
							<td  align='right'>0,100</th>					
						</tr>
						
						<!--<tr >
							<td  colspan='4' align='right'><a href='javascript:
							
								document.location = "http://localhost/PrototipoPracaNegocios/template.php?conteudo=pg_simples_internacional2";
							
							'>Editar</a></td>
												
						</tr>-->
						
						
						
					</table>
				</div>
			</div>
			
			<!--
			<div style="display: table-row; " >			
				<div style="display: table-cell;">
					<b>
						Pagamento do Seguro:
					</b> 
				</div>
				<div style="display: table-cell;"> 
					<select style='padding:0px;margin:0px'>
						<option>Sem seguro</option>
						<option>Exportador</option>
						<option>Importador</option>
						
					
					</select>
					
				</div>
			</div> -->
			<!-- 
			<div style="display: table-row; " >			
				<div style="display: table-cell;">
					<b>
						Ordenar propostas de Operador Logístico por:
					</b> 
				</div>
				<div style="display: table-cell;"> 
				
					<select style='padding:0px;margin:0px'>
						<option>Menor Proximidade</option>
						<option>Maior Proximidade</option>
						<option>Menor Preço</option>
						<option>Maior Preço</option>
						<option>Menor Prazo de Entrega</option>
						<option>Maior Prazo  de Entrega</option>
					</select>
					
					
				</div>
			</div>-->
			
		</div>
		
		<div align='right'>
			
			
				<input value='Procurar Operador Logístico' type='button' onclick='
				
					document.getElementById("xxx").style.display = "block"
				
				'>
				<hr>
			</center>
		</div>
		<div align='center' id='xxx' style='display:none'>
			
			<p>&nbsp;</p>
			<center>
				<h4>Propostas de Operadores Logísticos</h4>
			</center>
			<p>
				<table width='90%' border='0'>
				<tr>
					<td>Ordenar propostas por:
					
						<select style='padding:0px;margin:0px;width:200px'>
							<option>Menor Proximidade</option>
							<option>Maior Proximidade</option>
							<option>Menor Preço</option>
							<option>Maior Preço</option>
							<option>Menor Prazo de Entrega</option>
							<option>Maior Prazo  de Entrega</option>
						</select>
					</td>
				</table>
			
			</p>
			
			<table width='90%' border='1'>
				
				<tr>
					<th>OL</th>
					<th>Nome do Serviço</th>
					<th>Via</th>
					<th>Prazo</th>			
					<th>Valor</th>			
					<th>Escolher</th>			
				</tr>
				
				<tr>
					<td rowspan='3' align='center'>Correios</td>
					<td align='center'>Encomenda Normal</td>
					<td align='center'>Mista</td>
					<td align='center'>30 dias</td>			
					<td align='right'>R$ 30,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				<tr>
					
					<td align='center'> Sedex</td>
					<td align='center'>Terrestre</td>
					<td align='center'>12 dias</td>			
					<td align='right'>R$ 50,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				<tr>
					
					<td align='center'>Sedex 10</td>
					<td align='center'>Aérea</td>
					<td align='center'>5 dias</td>			
					<td align='right'>R$ 150,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				
				<tr>
					<td rowspan='2' align='center'>UPS</td>
					<td align='center'>UPS Simples Normal</td>
					<td align='center'>Mista</td>
					<td align='center'>30 dias</td>			
					<td align='right'>R$ 25,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				<tr>
					
					<td align='center'> UPS Expressa</td>
					<td align='center'>Aérea</td>
					<td align='center'>3 dias</td>			
					<td align='right'>R$ 200,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				<tr>
					<td rowspan='1' align='center'>DHL</td>
					<td align='center'>DHL - expressa plus</td>
					<td align='center'>Mista</td>
					<td align='center'>2 dias</td>			
					<td align='right'>R$ 330,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				<tr>
					<td rowspan='2' align='center'>FEDEX</td>
					<td align='center'> FEDEX - 1</td>
					<td align='center'>Marítima</td>
					<td align='center'>30 dias</td>			
					<td align='right'>R$ 34,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				<tr>
					
					<td align='center'> FEDEX - 2</td>
					<td align='center'>Mista</td>
					<td align='center'>5 dias</td>			
					<td align='right'>R$ 120,00</td>							
					<td align='center'><input type='radio' name='ttt'> </td>			
				</tr>
				
			</table>
			<p/>
			<div>
				<div align='right'><input type='button' value='Selecionar OL e Confirmar Dados para Exportação'
				
				onclick='
				
					document.location="template.php?conteudo=pg_simples_internacional_confirmacao"
				
				'
				
				></div>
			</p>
			
		</div>
		
		
		
	</div>