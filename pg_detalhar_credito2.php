<div style="width: 97%;
	
	border: 3px solid #cccccc;
	padding: 5px;
	MARGIN: 10px;
	font-family: Tahoma, sans-serif;">

	
	<div style=' font-weight: bold;'>
		&nbsp;<br/>Documentos e Certificações Exigidos:
	</div>
	<div style="border: 1px solid #cccccc;">
		
		<div style="width: 100%; display: table;border-spacing: 0 13px;">
			
			<div style="display: table-row; ">
				<div style="width:170px;display: table-cell;">Dados Cadastrais:</div>
				<div style="display: table-cell;">OK</div>
			</div>
			<div style="display: table-row; ">
				<div style="display: table-cell;">Certificado de Licenciamento Integrado:</div>
				<div style="display: table-cell;"><font color='red'>Pendente</font> (<a href='#' style="text-decoration:underline" onclick='javascript:alert("Direciona para uma página de solução do problema.");'>Obtenha esta documentação)</a></div>
			</div>
			<div style="display: table-row; ">
				<div style="display: table-cell;">Balanço 2012:</div>
				<div style="display: table-cell;">OK</div>
			</div>
			<div style="display: table-row; ">
				<div style="display: table-cell;">Cartificado Negativa Tributária:</div>
				<div style="display: table-cell;">OK</div>
			</div>
				
			
		</div>
	</div>
		
	

	<div style=' font-weight: bold;'>
		&nbsp;<br/>Dados do Crédito:
	</div>
	<div style="border: 1px solid #cccccc;">
		
		<form>		
			<div style="width: 100%; display: table;border-spacing: 0 13px;">
				
				<div style="display: table-row; ">
					<div style=" width:170px;display: table-cell;">
						Valor do Crédito:
					</div>
					<div style="display: table-cell;">
						R$ XXX.XXX,XX
					</div>
				</div>
				<div style="display: table-row; ">
					<div style=" display: table-cell; ">					
						Direcionamento: 
					</div>
					<div style=" display: table-cell; ">
						<input type='checkbox' onclick='javascript:
                                                            
                                                            if(this.checked){
                                                                document.getElementById("hh1").style.display = "block";
                                                                
                                                            }
                                                            else{
                                                                document.getElementById("hh1").style.display = "none";
                                                                
                                                            }
                                                                
                                                            
                                                       
                                                       '> Comércio exterior<br/>
						<input type='checkbox'> Compras Governo<br/>
						<input type='checkbox'> Inovação<br/>				
					</div>				
				</div>
				<div style="display: table-row; ">
					<div style=" display: table-cell; ">					
						Características: 
					</div>
					<div style=" display: table-cell; ">
						<input type='checkbox'> APL's Arranjos Produtivos Locais<br/>
						<input type='checkbox'> Cooperativas <input type='text'> (Informe o CNPJ)<br/>
						<input type='checkbox'> Franquias<br/>				
					</div>
				</div>
			</div>
		</form>
	</div>
	
	<div style=' font-weight: bold;'>
		&nbsp;<br/>Informações Adicionais:
	</div>
	<div style="border: 1px solid #cccccc;">
		
		<div style="width: 100%; display: table;border-spacing: 0 13px;">			
			<div style="display: table-row; ">
				<div style="width:200px;display: table-cell;">Primeira Referência Pessoal:</div>
				<div style="display: table-cell;">Nome: <input type='text'> Telefone: <input type=''></div>
			</div>
			<div style="display: table-row; ">
				<div style="width:170px;display: table-cell;">Segunda Referência Pessoal:</div>
				<div style="display: table-cell;">Nome: <input type='text'> Telefone: <input type=''></div>
			</div>
		</div>
		
		
			
			
			
	</div>
		<div style=' font-weight: bold;'>
		&nbsp;<br/>Garantias
	</div>
	<div style="border: 1px solid #cccccc;">
		
		<div style="width: 100%; display: table;border-spacing: 0 13px;">			
		<div style="display: table-row; ">
				<div style="display: table-cell;"><input type='checkbox'> Pessoais (Aval/Fiança)<br/>
					<input type='checkbox'> Reais (Móveis/Imóveis)<br/>
					<input type='checkbox'> Fundos Garantiadores<br/>
					<input type='checkbox'> Sociedade de Crédito<br/>
                                        <div id='hh1' style='display: none;'>
                                            <input type='checkbox' > Seguro de Crédito à Exportação
                                        </div>
                                
                                </div>
				
			</div>
		</div>		
			
	</div>
	<div style=' font-weight: bold;'>
		&nbsp;<br/>Outros serviços bancários para sua empresa:
	</div>
	<div style="border: 1px solid #cccccc;">
		
		<div style="width: 100%; display: table;border-spacing: 0 13px;">			
		<div style="display: table-row; ">
				
					<input type='checkbox'> Conta Corrente<br/>
					<input type='checkbox'> Seguro<br/>
					<input type='checkbox'> Previdência<br/>
                                        <input type='checkbox'> Máquina de Cartão<br/>
                                
                                </div>
				
			</div>
		</div>		
			
	</div>
		
		<div style=' font-weight: bold;'>
		&nbsp;<br/>Informações Complementares
	</div>
	<div style="border: 0px solid #cccccc;">
		
		<div style="width: 100%; display: table;border-spacing: 0 13px;">			
		<div style="display: table-row; ">
				<textarea></textarea>
		</div>		
			
	</div>	
	<div style="text-align:right">
		<input type='button' value='Voltar' onclick='javascript:document.location = "template.php?conteudo=pg_procura_credito"'>
		<input type='button' value='Enviar Solicitação' onclick="javascript:if(confirm('Autorização de envio de dados - Eu, XXXXX, na qualidade de administrador de empresa (YYYYYYY), autorizo o envio dos dados informados a seguir, por mim validados eletronicamente, nos termos dos poderes que me foram conferidos pelo contrato social a(s) instituições financeira(s) indicadas neste portal. Enviar dados?')) {alert('O protocolo desta solicitação é: 123456789'); document.location = 'template.php?conteudo=pg_protocolos_abertos'; };">
	</div>

</div>
