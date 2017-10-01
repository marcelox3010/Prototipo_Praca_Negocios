Informações do Produto a ser Exportado
<div style="width: 98%;
	height: 650px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">
	<div style="width: 100%; display: table;border-spacing: 0 13px;">	
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Produto:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<select style='padding:0px;margin:0px;'>
					<option>Sapato 1</option>
					<option>Sapato 2</option>
					<option>Sapato 3</option>
					<option>Sapato 4</option>
					<option>Sapato 5</option>
				</select>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Local do Embarque:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Local de Destino:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Local de Entrega da Carga:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Pagador de Frete:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='radio' name='radio_pagador'> Exportador<br/>
				<input type='radio' name='radio_pagador'> Importador
			</div>
			
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Quem contratará a seguradora:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='radio' name='radio_seguradora'> Exportador<br/>
				<input type='radio' name='radio_seguradora'> Importador
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Quantidade:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Volume:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Meio de Transporte:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				<input type='text'>
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Restrições:
				</b>			
			</div>
			<div style="display: table-cell;width:200px ">
				XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX 
				XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX 
				XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX 
			</div>
		</div>
	</div>
	<div>
		<center>
			<input type='button' value='Voltar' onclick='
			
				document.location = "template.php?conteudo=pg_simples_internacional";
			
			'>
			<input type='button' value='Gerar Solicitação' onclick='
			
				alert("Sua solicitação foi enviada para a OL. Seu protocolo de acompanhamento é: XXXXXXXXXXXXXXXXX");
				document.location = "template.php?conteudo=pg_protocolos_abertos"
			
			'>
		</center>
	</div>
</div>