<h3>Solicitar Ajuda para Implantar sua Ideia Inovadora</h3>
<div style="width: 98%;
	height: 700px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">
	<div style="width: 100%; display: table;border-spacing: 0 13px;">
		
		<!-- <div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Tipo de objeto:
				</b>
			</div>
			<div style="display: table-cell;"> 
				<select style='width:100px;padding:0px;margin:0px;'>
					  <option value="volvo" selected>Todos</option>
					  <option value="volvo">Produto</option>
					  <option value="saab">Serviço</option>	
				</select>
			</div>
		</div>		 -->
		<div style="display: table-row; ">
			<div style="display: table-cell;-align:right;"><b>Abrangência:</b></div>
				<div style="display: table-cell;">
					<input type='radio' name='prod' checked="checked" onclick='javascript:
						document.getElementById("a1").style.display="none";
							document.getElementById("a2").style.display="none";
							
							
							document.getElementById("c1").style.display="block";
							document.getElementById("c2").style.display="block";
							document.getElementById("d1").style.display="block";
							document.getElementById("d2").style.display="block";
							document.getElementById("e1").style.display="block";
							document.getElementById("e2").style.display="block";
					'> Todos produtos cadastrados<br/>
					<input type='radio' name='prod'					
						onclick='javascript:
							document.getElementById("a1").style.display="block";
							document.getElementById("a2").style.display="block";
							
							
							document.getElementById("c1").style.display="none";
							document.getElementById("c2").style.display="none";
							document.getElementById("d1").style.display="none";
							document.getElementById("d2").style.display="none";
							document.getElementById("e1").style.display="none";
							document.getElementById("e2").style.display="none";
							
							
						'> Somente meus produtos
			</div>
		</div>
		
		
		<div style="display: table-row;"  >
			<div style="display: table-cell;-align:right;">
				<div id='X'><b>Selecione o Produto:</b></div>
			</div>
				<div style="display: table-cell;">
					&nbsp;
				</div>
		</div>
		
		<div style="display: table-row;" id='ooo' >
			<div style="display: table-cell;-align:right;">
				<div id='a1' style='display:none'><b>Produto:</b></div>
			</div>
				<div style="display: table-cell;">
					<div id='a2' style='display:none'>
					<select style='width:200px;padding:0px;margin:0px;' onchange=''>
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
		</div>
		
		
		
		
		
		<div style="display: table-row;" id='www'>
			<div style="display: table-cell;-align:right;">
				
				<div id='c1'>
					Categoria:
				</div>
			</div>
				<div style="display: table-cell;">
				<div id='c2'>
					<select style='width:200px;padding:0px;margin:0px;' onchange='document.getElementById("id1").style.display = "none";'>
								  <option value="volvo">Escolha uma categoria</option>
								  <option value="volvo">Vestuário</option>
								  <option value="saab">Alimentação</option>
								  <option value="saab">Informática</option>
								</select>
							</div>
				</div>
		</div>
		
		<div style="display: table-row;" id='eee'>
			<div style="display: table-cell;-align:right;">
				<div id='d1'>
				Subcategoria:
				</div>
			</div>
				<div style="display: table-cell;">
				<div id='d2'>
					<select style='width:200px;padding:0px;margin:0px;' onchange='document.getElementById("id1").style.display = "none";'>
								  <option value="volvo">Escolha uma subcategoria</option>
								  <option value="volvo">Calçados</option>
								  <option value="saab">Roupas masculinas</option>
								  <option value="saab">Roupas infantis</option>
								</select>
								</div>
				</div>
		</div>
		
		<div style="display: table-row;" id='rrr' >
			<div style="display: table-cell;-align:right;">
				
				<div id='e1'>
				Produto:
				</div>
				
			</div>
				<div style="display: table-cell;">
					
					<div id='e2'>
					<select style='width:200px;padding:0px;margin:0px;' onchange=''>
								  <option value="volvo">Escolha um produto</option>
								  <option value="volvo">Sapato</option>
								  <option value="volvo">Tênis</option>
								  <option value="saab">Sandália</option>
								  <option value="saab">Chinelo</option>
								</select></div>
				</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--
		<div style="display: table-row; ">
			
			<div style="display: table-cell;" > 
				<div style='' id='selecione_o_produto'>
					<b>
						Selecione o Produto:
					</b>
				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			<div style="display: table-cell; " >
				
				
				<div id='pesquisa_thessauro' style=''>
					 <table>
						<tr>
							<td>Categoria do Produto:</td>
							<td>
								<select style='width:200px;padding:0px;margin:0px;' onchange='document.getElementById("id1").style.display = "none";'>
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
								<select style='width:200px;padding:0px;margin:0px;' onchange='document.getElementById("id1").style.display = "none";'>
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
								<select style='width:200px;padding:0px;margin:0px;' onchange=''>
								  <option value="volvo">Escolha um produto</option>
								  <option value="volvo">Sapato</option>
								  <option value="volvo">Tênis</option>
								  <option value="saab">Sandália</option>
								  <option value="saab">Chinelo</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div id='meus_produtos' style='display:none' onclick=''>
					 <select style='width:200px;padding:0px;margin:0px;' onchange=''>
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
				
		</div>
-->		

		
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>Processo Produtivo:</b>
			</div>
			<div style="display: table-cell;"> 
			<input type='text'>
			</div>
		</div>
		
		
		
		
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>Atividade Desenvolvida:</b>
			</div>
			<div style="display: table-cell;"> 
				
					<input type='text'>
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>Tipo de Solução de Inovação:</b>
			</div>
			<div style="display: table-cell;"> 
			
					<input type='text'>
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>Assunto:</b>
			</div>
			<div style="display: table-cell;"> 
			
					<input type='text'>
				
			</div>
		</div>
		
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				&nbsp;
			</div>
			<div style="display: table-cell;"> 
			<div id='meus_produtos' style='' onclick='' align='right'>
					<p>
						<div align='right'>
							<input type='button' value='Consultar' onclick='javascript:document.getElementById("tabela").style.display="block";'>
						</div>
					</p>
				</div>
			</div>
		</div>
	
	
	</div>
	
	
	
	<div align='center' id='tabela' style='display:none'>
		<table border='1' width='99%'>
			<tr>
				<th>Produto</th>
				<th>Tipo de Solução</th>
				<th>Processo Produtivo</th>
				<th>Atividade Desenvolvida</th>
				<th>Data</th>
				<th>Ação</th>
			</tr>
			<tr>
				<td>Vinho</td>
				<td>Nota Técnica</td>
				<td>Processo de Fermentação de UVA</td>
				<td>Método de Esmagamento com os Pés</td>
				<td>23/07/2014</td>
				<td><center><a href='template.php?conteudo=pg_detalhar_solucao2'>Solicitar Ajuda</a></center></td>	
			</tr>
			<tr>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td><center><a href='template.php?conteudo=pg_detalhar_solucao2'>Solicitar Ajuda</a></center></td>	
			</tr>
			<tr>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td><center><a href='template.php?conteudo=pg_detalhar_solucao2'>Solicitar Ajuda</a></center></td>	
			</tr>
			<tr>
				<td>Pão</td>
				<td>Pesquisa</td>
				<td>Pão para microondas</td>
				<td>Método de esmagamento com os pés</td>
				<td>23/07/2014</td>
				<td><center><a href='template.php?conteudo=pg_detalhar_solucao2'>Solicitar Ajuda</a></center></td>	
			</tr>
		</table>
		
		<!--<div align='right'>
			<p><div align='right'><input type='button' value='Solicitar solução de inovação' onclick='
				
				document.location="template.php?conteudo=pg_solicitar_inovacao";
			
			'></p></div>-->
		</div>
	</div>
	
</div>