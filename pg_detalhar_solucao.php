Solicitar Inovação:
<div style="width: 98%;
	height: 900px;
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
				Produto
			</div>
		</div>		 
		<div style="display: table-row; ">
			<div style="display: table-cell;-align:right;"><b>Abrangência:</b></div>
				<div style="display: table-cell;">
					(X) Todos produtos cadastrados<br/>
					(  ) Somente meus produtos
			</div>
		</div>-->
		
		<div style="display: table-row; ">
			
			<div style="display: table-cell;" > 
				<div style='' id='selecione_o_produto'>
					<b>
						Produto:
					</b>
				</div>
			</div>
			<div style="display: table-cell; " >
				<div id='pesquisa_thessauro' style=''>
					 <table>
						<tr>
							<td>Categoria do Produto:</td>
							<td>
								Vestuário
							</td>
						</tr>
						<tr>
							<td>Subcategoria:</td>
							<td>
								Calçados
							</td>
						</tr>
						<tr>
							<td>Produto:</td>
							<td>
								Sapato
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
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Tipo de Solução:
				</b>
			</div>
			<div style="display: table-cell;"> 
				Nota Técnica
			</div>
		</div>		
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Processo Produtivo:
				</b>
			</div>
			<div style="display: table-cell;"> 
				Processo de Fermentação de UVA 
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Atividade Desenvolvida:
				</b>
			</div>
			<div style="display: table-cell;"> 
				Método de esmagamento com os pés 
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Instituição:
				</b>
			</div>
			<div style="display: table-cell;"> 
				Universidade Federal de Lavras
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Data da elaboração da solução:
				</b>
			</div>
			<div style="display: table-cell;"> 
				15/01/2014
			</div>
		</div>
		
		<!--<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Patente:
				</b>
			</div>
			<div style="display: table-cell;"> 
				123:20047
			</div>
		</div>-->
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Problema:
				</b>
			</div>
			<div style="display: table-cell;"> 
				Meu Problema
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Solução do Problema:
				</b>
			</div>
			<div style="display: table-cell;"> 
				A Solução do Problema
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:300px ">
				<b>
					Download:
				</b>
			</div>
			<div style="display: table-cell;"> 
				<a href='javascript:alert("clique aqui para baixar o documento")'>Click aqui</a>
			</div>
		</div>
</div>

<div id='meus_produtos' style='' onclick='' align='right'>
	<p>
		<div align='right'>
			
			<div id='y6'>
			<input type='button' id='x2' value='Voltar' onclick='javascript: document.location="template.php?conteudo=pg_banco_solucao";'> 
			
			
			<input type='button' id='x1' value='Solicitar ajuda para implantação em minha empresa'  onclick='javascript:
				
				document.getElementById("x123").style.display = "block";
				document.getElementById("x456").style.display = "block";
				
				
				document.getElementById("y6").style.display="none";'
				>
			<input type='button' id='x3' value='Solicitar um complemento para esta solução' onclick='javascript:
				
				document.getElementById("x11").style.display = "block";
				document.getElementById("x22").style.display = "block";
				
				document.getElementById("y6").style.display="none";
				
			
			'>			
			</div>
		</div>
	</p>
</div>

<div style="width: 100%; display: table;border-spacing: 0 13px;">
	
        
    <div style="display: table-row; ">  
        
		<div style="display: table-cell;width:300px ">
			<b>
				<div id='x11' style='display:none'>
				
					<div style='height:70px'>
						Selecione seu parceiro
					</div>
					<div style='height:100px;display: table-cell; vertical-align: middle;'>
						Descreva em que esta solução não lhe atendeu:					
					</div>
					<div style='height:30px'>
						&nbsp;
					</div>
					
				</div>
			</b>
		</div>		
		<div style="display: table-cell;width:300px ">
			<div id='x22' style='display:none'>
                <div style='height:60px'>		
							
							<input type="checkbox"> SERPRO<br>
                            <input type="checkbox"> Instituto Federal de Educação Tecnológica Ceará<br>
                            <input type="checkbox"> Universidade de Brasília<br>
                            <input type="checkbox"> SEBRAE<br>
							
				</div>
				<div style='height:100px; display: table-cell;'>
					<textarea></textarea>
				</div>
				<p>&nbsp;</p>
				<div style='height:30px' >
					<input type='button' id='x3' value='Cancelar' onclick='javascript: 
					
						document.getElementById("y6").style.display = "block";
						document.getElementById("x11").style.display = "none";
						document.getElementById("x22").style.display = "none";
					
					;'> 
					<input type='button' value='Enviar solicitação' onclick='javascript:alert("Solicitação Enviada. Seu protocolo de acompanhamento é: XXXXXXXXXXX");
					
						document.location="template.php?conteudo=pg_protocolos_abertos"
					
					'>
				</div>
			</div>
		</div>		
	</div>
</div>
<div style="width: 100%; display: table;border-spacing: 0 13px;">
	<div style="display: table-row; ">
		<div style="display: table-cell;width:300px ">
			<b>
				<div id='x123' style='display:none'>
					
					<div style='height:70px'>Selecione o parceiro:</div>
					<div style='height:100px ;display: table-cell; vertical-align:middle;'>Descreva os problemas enfrentados na implantação da solução:</div> 
					<div style='height:30px'>&nbsp;</div>
					
				</div>
			</b>
		</div>		
		<div style="display: table-cell;width:300px ">
			<div id='x456' style='display:none'>
			 <input type="checkbox"> SERPRO<br>
                            
					<div style='height:60px'>		
							<input type="checkbox"> Instituto Federal de Educação Tecnológica Ceará<br>
                            <input type="checkbox"> Universidade de Brasília<br>
                            <input type="checkbox"> SEBRAE
					</div>                    
					<div style='height:100px;display: table-cell; vertical-align:middle;'>	
						
						<textarea></textarea>
						
					</div>
					<p>&nbsp;</p>
					<div style='height:30px'>	
					
						<input type='button' id='x3' value='Cancelar' onclick='javascript: 
					
								document.getElementById("y6").style.display = "block";
								
								document.getElementById("x123").style.display = "none";
								document.getElementById("x456").style.display = "none";
					
						;'> 
				
				
				
					<input type='button' value='Enviar solicitação' onclick='javascript:alert("Solicitação Enviada. Seu protocolo de acompanhamento é: XXXXXXXXXXX");
					</div>
				
				
					document.location="template.php?conteudo=pg_protocolos_abertos"
				
				'>
				</div>
			</div>
		</div>		
	</div>
</div>