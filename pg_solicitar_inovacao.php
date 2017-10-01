<h3>Solicitar Inovação:</h3>
<div style="width: 98%;
	height:700pxpx;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">
	<div style="width: 100%; display: table;border-spacing: 0 13px;">
		
		
            <div style="display: table-row; ">
			<div style="display: table-cell;-align:right;width:300px">
				<b>Produto:</b>
			</div>
			<div style="display: table-cell;">
				<input type='radio' name='prod' checked="checked" onclick='javascript:
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
		</div>
		
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
								  <option value="volvo" selected>Escolha um produto</option>
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
						  <option value="volvo" selected>Selecione um item</option>
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
			<div style="display: table-cell;" > 				
				<b>Tipo de Solução:</b>
			</div>
			<div style="display: table-cell;  " >
				<select style='padding:0px;margin:0px' onchange='
				
					if( (this.value == "1") || (this.value == "5") || (this.value == "6") ){
					
						document.getElementById("m1").style.display = "none";
						document.getElementById("m2").style.display = "none";
						document.getElementById("m3").style.display = "none";
						document.getElementById("m4").style.display = "none";
					
					}else{
					
						document.getElementById("m1").style.display = "block";
						document.getElementById("m2").style.display = "block";
						document.getElementById("m3").style.display = "block";
						document.getElementById("m4").style.display = "block";
					
					}
				
				'>
					<option value='1'>--</option>
					<option value='2'>Nota Técnica</option>
					<option value='3'>Pesquisa</option>
					<option value='4'>Marca e Patente</option>
					<option value='5'>Apoio financeiro à inovação</option>
					<option value='6'>Apoio para desenvolvimento de uma ideia inovadora</option>
				</select>
			</div>
		</div>
		<div style="display: table-row; ">			
			<div style="display: table-cell;" > 				
				<div id='m1' style='display:none'><b>Descreva o processo produtivo <br>utilizado para obtenção do produto/serviço:</b></div>
			</div>
			<div style="display: table-cell;  " >
				<div id='m2' style='display:none'><textarea></textarea></div>
			</div>
		</div>
		<div style="display: table-row; ">			
			<div style="display: table-cell;" > 				
				<div id='m3' style='display:none'><b>Descreva sua necessidade:</b></div>
			</div>
			<div style="display: table-cell;  " >
				<div id='m4' style='display:none'><textarea></textarea></div>
			</div>
		</div>
		
		
		<div style="display: table-row; ">			
			<div style="display: table-cell;" > 				
				<b>UF para atendimento:</b>
			</div>
			<div style="display: table-cell;  " >
				<select style='padding:0px;margin:0px'>
					  <option value="Todos">Todos</option>
					  <option value="AC" >Acre</option>
					  <option value="AP">Amapá</option>															  					  
					  <option value="AM">Amazonas</option>															  					  		  
					  <option value="PA">Pará</option>															  
					  <option value="RO">Rondônia</option>															  
					  <option value="RR">Roraima</option>															  					  
					  <option value="TO">Tocantins</option>			
					   <option value="AL">Alagoas</option>				
					  <option value="BA">Bahia</option>															  
					  <option value="CE">Ceará</option>															  					  
					  <option value="MA">Maranhão</option>															  
					  <option value="PB">Paraíba</option>															  					  
					  <option value="PE">Pernambuco</option>															  
					  <option value="PI">Piauí</option>					  
					  <option value="RN">Rio Grande do Norte</option>	
					  <option value="SE">Sergipe</option>		
					  <option value="DF">Distrito Federal</option>															  
					  <option value="GO">Goiás</option>															  
					  <option value="MT">Mato Grosso</option>															  
					  <option value="MS">Mato Grosso do Sul</option>		
					  <option value="ES">Espírito Santo</option>															  
					  <option value="MG">Minas Gerais</option>															  
					  <option value="RJ">Rio de Janeiro</option>															  
					  <option value="SP">São Paulo</option>		
					   <option value="PR">Paraná</option>															  
					  <option value="RS">Rio Grande do Sul</option>															  
					  <option value="SC">Santa Catarina</option>
				</select>
			</div>
		</div>
		
		
		 <div style="display: table-row; ">
			<div style="display: table-cell;-align:right;width:300px">
				<b>Instituição Pretendida para Atendimento:</b>
			</div>
			<div style="display: table-cell;">
                            <input type="checkbox"> SERPRO<br>
                            <input type="checkbox"> Instituto Federal de Educação Tecnológica Ceará<br>
                            <input type="checkbox"> Universidade de Brasília<br>
                            <input type="checkbox"> SEBRAE<br>
			</div>
		</div>
		
</div>

<div id='meus_produtos' style='' onclick='' align='right'>
		<p>
			<div align='right'>
				<input type='button' value='Enviar solicitação de inovação' onclick='javascript:alert("Sua solicitação foi enviada. Seu Protocolo para realizar o acompanhamento é: XXXXXXXX");'>
			</div>
		</p>
	</div>