<div style="width: 98%;
	height: 900px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">			
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Produto</b>
			</div>
			<div style="display: table-cell; ">
			
				&nbsp;
			</div>
		</div>		
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				Categoria:
			</div>
			<div style="display: table-cell; ">
			
				Vestuário
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				Subcategoria:
			</div>
			<div style="display: table-cell; ">
			
				Calçados
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				Nome do Produto:
			</div>
			<div style="display: table-cell; ">
			
				Sapato
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Tipo de Certificação:</b>
			</div>
			<div style="display: table-cell; ">
			
				ISO
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Nome da Certificação:</b>
			</div>
			<div style="display: table-cell; ">
			
				ISO 9001
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Obrigatório:</b>
			</div>
			<div style="display: table-cell; ">
			
				Sim
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Instituição:</b>
			</div>
			<div style="display: table-cell; ">
			
				INMETRO
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Data da Criação:</b>
			</div>
			<div style="display: table-cell; ">
			
				10/10/2010
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Orientações Gerais:</b>
			</div>
			<div style="display: table-cell; ">
			
				XXXXXX XXXXXX XXXXXX XXXXXX XXXXXX XXXXXX XXXXXX 
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Custo para obtenção da norma:</b>
			</div>
			<div style="display: table-cell; ">
			
				R$ 0,00
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>Download da Norma:</b>
			</div>
			<div style="display: table-cell; ">
			
				<a href='javascript:void(0);' style='text-decoration:underline' onclick='javascript:alert("aqui aparece o PDF da norma")'>Clique aqui</a>
				
			</div>
		</div>
		
		<div style="display: table-row; ">
			<div style="display: table-cell; " >
			
				<b>Download da Norma Traduzida:</b>
			</div>
			<div style="display: table-cell; ">
			
				Não disponível. Para solicitar norma traduzida: <a href='javascript:void(0);' style='text-decoration:underline' onclick='alert("Seu protocolo é: XXXXXX");'>Clique aqui</a>
				
			</div>
		</div>
		
		<div style="display: table-row; ">
			<div style="display: table-cell; ">
			
				<b>&nbsp;</b>
			</div>
			<div style="display: table-cell; " align='right'>
				
				
                                
                               
                                <input type='button' value='Obter Ajuda de um Especialista para Implantação'
				onclick='
				
				document.getElementById("a1").style.display = "block";
				document.getElementById("a2").style.display = "none";
				
				'
				>
				<input type='button' value='Visualizar acreditadores para Certificação' onclick='
				
				document.getElementById("a1").style.display = "none";
				document.getElementById("a2").style.display = "block";
				
				'>				
				
				<p>
                                    <div align='right'><input type='button' value='Voltar'
                                                              onclick='document.location = "template.php?conteudo=pg_pesquisa_de_certificacao&funcao=1";'></div>
			</div>
		</div>
	</div>
	
	<p/>
	<div style='display:none;border: 1px solid; padding:30px;border-radius: 25px;border-color:#dddddd' id='a1'>
		<table width='95%' >
		
			<tr>
				<td><b>Localidade:</b></td>
				<td>
					<?php require "comp_estado.php" ?>
				</td>
			</tr>
			
			<tr>
				<td><b>Instituição:</b></td>
				<td>
					<select style='padding:0px;margin:0px;'>	
						<option>SEBRAE</option>
						<option>SEBRAETEC</option>
						<option>UNB</option>
					</select>
					
					<p/>
					<div align='right'><input type='button' value='Enviar Solicitação' 
					onclick='alert("Seu protocolo é: XXXXXXXX"); document.getElementById("a1").style.display = "none";'></div>
				</td>
				
			</tr>
		
		</table>
	</div>
	
	<div style='display:none;border: 1px solid; padding:30px;border-radius: 25px;border-color:#dddddd'' id='a2'>
	 	<table width='30%' >
		<tr>
				<td><b>Consultores:</b></td>
				<td>
					
					<select style='margin: 0px;padding: 0px'>
                                            
                                            <option>Todos</option><option>Público</option>
                                            <option>Privado</option>
                                        </select>
					
				</td>
			</tr>
			<tr>
				<td><b>Localidade:</b></td>
				<td>
					
					
					<?php 
						
						$numero_componente = '2';
						require "comp_estado.php" 
						
					?>
				</td>
			</tr>
			<tr>
				<td colspan='2' align='right'>
					<input type='button' value='Pesquisar' onclick='
					
						document.getElementById("o1").style.display = "block";
					
					'>
				</td>
			</tr>
						
						
		</table>
		
		<div id='o1' style='display:none'>
			<p/>
			<center>
			<table width='95%' border='1'>
				<caption>Praça de Negócios</caption>
				<tr>
					
				<th>Enviar Contato</th>	
                                    <th>Instituição</th>
					<th>Endereço</th>
					<th>Telefone</th>
				</tr>
				
				<tr>
					
                                        <td align='center'>
                                            <input type='checkbox'>
					</td>
                                        <td>
						ABNT
					</td>
					
					<td>
						Rua XYZ, Número 1350, Bairro XPTO
					</td>
					
					<td>
						(66) 6666-6666
					</td>
					
				</tr>
				<tr>
                                        <td align='center'>
                                            <input type='checkbox' >
					</td>
					<td>
						IFG
					</td>
					
					<td>
						Praça Souza Naves, 490, 3º andar
					</td>
					
					<td>
						(99) 9999-9999
					</td>
					
				</tr>
				
			
			</table>
                            <p><center><input type='button' value='Enviar Meus Contatos para Instiuição' onclick='alert("Contatos Enviados, Protocolo XXXXX")
                                              
                                              document.getElementById("a2").style.display="none";
                                              
                                              '>
                               
                            
                            </center>
			</center>
		
		</div>
	</div>
	
	
	
</div>