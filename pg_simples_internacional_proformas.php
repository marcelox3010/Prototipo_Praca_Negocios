
<h4><a href="template.php">Praça Eletrônica de Negócios</a> >> <a href='template.php?conteudo=pg_inicial2'>Quero Vender</a> >>  <a href='template.php?conteudo=pg_inicial2'>Registre Operação de Exportação</a> >>Consultes suas Exportações </h4>


	<p>
		<table width='95%'  style='text-align:right'>	
		
		<tr><td>
		<input type='button' value='Nova exportação' onclick='
			
			document.location = "template.php?conteudo=pg_simples_internacional";
		
		'></td></tr>
		</table>
	</p>

		<p/>

<table width='95%' border='1' style='text-align:center'>	

	<tr>
		<th>Protocolo</th>
		<th>Fatura PROFORMA</th>
		<th>Romaneio de Embarque</th>
		<th>Fatura Comercial</th>
		<th>Operador Logístico</th>
                <th>Recolhimento de Carga</th>
                
		<th>Ações</th>
	</tr>
	<tr>
		<td>1234</td>
		<td align='center' valign='middle'>
			<a href='proforma.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			<a href='Romaneioembarque.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			<a href='faturacomercial.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			
			<img src='images/correios.jpg' title='DM039588517BR' style='width:100px;height:40px;float:initial;vertical-align: middle;' >
		</td>
		
                <td>
                    
                    <a href='javascript:alert("Solicitação de recolhimento de carga enviada com sucesso.")' style="text-decoration: underline">Autorizar recolhimento</a>

                    
                    </td>
                
                <td><input type='button' value='Detalhar' onclick='document.location = "template.php?conteudo=pg_simples_internacional_confirmacao&autorizar=false"'> 
		
		<input type='button' value='Editar' onclick='document.location = "template.php?conteudo=pg_simples_internacional";'> <input type='button' value='Cancelar'></th>
	</tr>
	<tr>
		<td>4567</td>
		<td align='center' valign='middle'>
			<a href='proforma.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			<a href='Romaneioembarque.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			<a href='faturacomercial.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			
			<img src='images/correios.jpg' title='DM039588517BR' style='width:100px;height:40px;float:initial;vertical-align: middle;' >
		</td>
                <td><a  style="text-decoration: underline" href='http://websro.correios.com.br/sro_bin/txect01$.QueryList?P_LINGUA=001&P_TIPO=001&P_COD_UNI=DM039588517BR' target='_blank'>Rastreio da Carga</a></td>
		<td><input type='button' value='Detalhar' onclick='document.location = "template.php?conteudo=pg_simples_internacional_confirmacao&autorizar=false"'> 
		
		<input type='button' value='Editar' onclick='document.location = "template.php?conteudo=pg_simples_internacional";'> <input type='button' value='Cancelar'></th>
	</tr>
	<tr>
		<td>8790</td>
		<td align='center' valign='middle'>
			<a href='proforma.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			<a href='Romaneioembarque.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			<a href='faturacomercial.pdf' style='text-decoration:underline;color:blue' target='_blank'>
				<img src='images/pdf.png' style='width:40px;height:40px;float:initial;vertical-align: middle;'>
			</a>
		</td>
		<td>
			
			<a href='http://websro.correios.com.br/sro_bin/txect01$.QueryList?P_LINGUA=001&P_TIPO=001&P_COD_UNI=DM039588517BR' target='_blank'><img src='images/dhl.jpg' style='width:100px;height:40px;float:initial;vertical-align: middle;' title='DM039588517BR'></a>
		</td>
                
                <td><a style="text-decoration: underline" href='http://websro.correios.com.br/sro_bin/txect01$.QueryList?P_LINGUA=001&P_TIPO=001&P_COD_UNI=DM039588517BR' target='_blank'>Rastreio da Carga</a></td>
		<td><input type='button' value='Detalhar' onclick='document.location = "template.php?conteudo=pg_simples_internacional_confirmacao&autorizar=false"'> 
		
		<input type='button' value='Editar' onclick='document.location = "template.php?conteudo=pg_simples_internacional";'> <input type='button' value='Cancelar'></th>
	</tr>

</table>		




<!--	
<table width='95%' border='1' style='text-align:center'>	

	
	
		
	
	
	<tr>
		<th>
			Número da Fatura
		</th>
		<th>
			Passo 1<br>Fechamento da Fatura PROFORMA
		</th>
		<th>
			Passo 2<br>Escolha do Operador Logístico
		</th>
		<th>
			Passo 3<br>Impressão de Documentação da Exportação
		</th>
		<th>
			Ações
		</th>
	
	</tr>
	
	
	
		<tr style='height:50px'>
		<td rowspan='3'>
			2
		</td>
		<td style='background-color:#eeeeee'>
			<a href='template.php?conteudo=pg_simples_internacional' style='text-decoration:underline;color:blue;'>Editar Dados da Exportação</a>
		</td>
		<td rowspan='3'>
			<a href='javascript:void(0)' style='text-decoration:'><i>Selecionar Operador Logístico e Autorizar recolhimento de Carga</i></a>
		</td>
		<td >
			<a href='javascript:void(0)' style='text-decoration:'><i>Imprimir Romaneio de Embarque</i></a>
		</td>
		<td >
			<a href='template.php?conteudo=pg_simples_internacional_confirmacao' style='text-decoration:underline;color:blue'>Detalhar</a>
		</td>
		
	</tr>
	<tr style='height:50px'>
		
		<td style='background-color:#eeeeee'>
			<a href='proforma.pdf' style='text-decoration:underline;color:blue'>Imprimir Dados da PROFORMA</a>
		</td>
		
		<td rowspan='2'>
			<a href='javascript:void(0)' style='text-decoration:'><i>Imprimir Fatura Comercial</i></a>
		</td>
		<td rowspan='2'>
			<a href='javascript:void(0)' style='text-decoration:underline;color:blue'>Cancelar Exportação</a>
		</td>
	
		
	</tr>
	<tr style='height:50px;background-color:#eeeeee'>
		<td>
			<a href='javascript:void(0)' style='text-decoration:underline;color:blue'>Finalizar Passo 1 </a>
		</td>		
		
	</tr>
	
		</tr>
	
	<tr style='height:50px'>
		<td rowspan='3'>
			3
		</td>
		<td>
			<a href='proforma.pdf' style='text-decoration:underline;color:blue'>Imprimir Dados da PROFORMA</a>
		</td>
		<td rowspan='3' style='background-color:#eeeeee'>
			<a href='template.php?conteudo=pg_simples_internacional_escolher_ol' style='text-decoration:underline;color:blue'>Selecionar Operador Logístico e Autorizar recolhimento de Carga</a>
		</td>
		<td >
			<a href='javascript:void(0)' style='text-decoration:'><i>Imprimir Romaneio de Embarque</i></a>
		</td>
		<td >
			<a href='template.php?conteudo=pg_simples_internacional_confirmacao' style='text-decoration:underline;color:blue'>Detalhar</a>
		</td>
		
	</tr>
	<tr style='height:50px'>
		
		<td>
			<a href='template.php?conteudo=pg_simples_internacional)' style='text-decoration:'><i>Editar Dados da Exportação</i></a>
		</td>
		
		<td rowspan='2'>
			<a href='javascript:void(0)' style='text-decoration:'><i>Imprimir Fatura Comercial</i></a>
		</td>
		<td rowspan='2'>
			<a href='javascript:void(0)' style='text-decoration:underline;color:blue'>Cancelar Exportação</a>
		</td>
	
		
	</tr>
	<tr style='height:50px'>
		<td>
			<a href='javascript:void(0)' style='text-decoration:'><i>Passo 1 - Finalizado</i> </a>
		</td>		
		
	</tr>
	
		</tr>
	<tr style='height:50px'>
		<td rowspan='3'>
			4
		</td>
		<td>
			<a href='proforma.pdf' style='text-decoration:underline;color:blue'>Imprimir Dados da PROFORMA</a>
		</td>
		<td rowspan='3'>
			<a href='javascript:void(0)' style='text-decoration:'><i>Selecionar Operador Logístico e Autorizar recolhimento de Carga</i></a>
		</td>
		<td style='background-color:#eeeeee'>
			<a href='Romaneioembarque.pdf' style='text-decoration:underline;color:blue'>Imprimir Romaneio de Embarque</a>
		</td>
		<td >
			<a href='template.php?conteudo=pg_simples_internacional_confirmacao' style='text-decoration:underline;color:blue'>Detalhar</a>
		</td>
		
	</tr>
	<tr style='height:50px'>
		
		<td>
			<a href='template.php?conteudo=pg_simples_internacional' style='text-decoration:'><i>Editar Dados da Exportação</i></a>
		</td>
		
		<td rowspan='2' style='background-color:#eeeeee'>
			<a href='faturacomercial.pdf' style='text-decoration:underline;color:blue'>Imprimir Fatura Comercial</a>
		</td>
		<td rowspan='2'>
			<a href='javascript:void(0)' style='text-decoration:underline;color:blue'>Cancelar Exportação</a>
		</td>
	
		
	</tr>
	<tr style='height:50px'>
		<td>
			<a href='javascript:void(0)' style='text-decoration:'><i>Passo 1 - Finalizado</i> </a>
		</td>		
		
	</tr>
	
		</tr>
	
	
	
</table>
	
<!--

<table width='95%' border='1'>
	
	<caption>
	
			Histórico das Exportações
		
	</caption>
	
	<tr>
		<th>
			Número da Fatura
		</th>
		<th>
			Data de cadastro
		</th>		
		<th>
			Importador - Razão Social
		</th>
		<th>
			Operador Logísitico
		</th>
		<th>
			Número de Rastreio
		</th>
		<th>
			Opções
		</th>
	</tr>
	<tr>
		<td align='center'>
			999
		</td>
		<td align='center'>
			10/12/2014
		</td>		
		<td align='center'>
			Microsoft Corporation
		</td>
		<td align='center'>
			-
		</td>
		<td align='center'>
			-
		</td>
		<td align='center'>
			<a href='proforma.pdf' target='_blank'>Imprimir PROFORMA</a> | <a href='template.php?conteudo=pg_simples_internacional_escolher_ol'>Selecionar O.L.</a> | <a href='#'>Editar Dados Exportação</a> | <a href='#' onclick='javascript:confirm("Você deseja realmente apagar os dados da exportação? Todos os dados desta exportação serão apagados.")'>Cancelar Exportação</a>
		</td>
	</tr>
	<tr>
		<td align='center'>
			888
		</td>
		<td align='center'>
			06/08/2014
		</td>		
		<td align='center'>
			Google Enterprise
		</td>
		<td align='center'>
			Correios
		</td>
		<td align='center'>
			<a href='http://www2.correios.com.br/sistemas/rastreamento/resultado.cfm' target='_blank'>ZR321561891351</a>
		</td>
		<td align='center'>
			<a href='proforma.pdf' target='_blank'>Imprimir PROFORMA</a> | <a href='Romaneioembarque.pdf' target='_blank'>Imprimir Romaneio de Embarque</a> |<a href='faturacomercial.pdf' target='_blank'> Imprimir Fatura Comercial</a>
		</td>
	</tr>
	<tr>
		<td align='center'>
			777
		</td>
		<td align='center'>
			07/07/2014
		</td>		
		<td align='center'>
			Apple Computers
		</td>
		<td align='center'>
			UPS
		</td>
		<td align='center'>
			<a href='http://www2.correios.com.br/sistemas/rastreamento/resultado.cfm' target='_blank'>ZR12342134</a>
		</td>
		<td align='center'>
			<a href='proforma.pdf' target='_blank'>Imprimir PROFORMA</a> | <a href='Romaneioembarque.pdf' target='_blank'>Imprimir Romaneio de Embarque</a> |<a href='faturacomercial.pdf' target='_blank'> Imprimir Fatura Comercial</a>
		</td>
	</tr>
	<tr>
		<td align='center'>
			666
		</td>
		<td align='center'>
			30/08/2014
		</td>		
		<td align='center'>
			University of California
		</td>
		<td align='center'>
			DHL
		</td>
		<td align='center'>
			<a href='http://www.dhl.com.br/content/br/pt/express/rastreamento.shtml?brand=DHL&AWB=123123123123123123%0D%0A' target='_blank'>123412342134</a>
		</td>
		<td align='center'>
			<a href='proforma.pdf' target='_blank'>Imprimir PROFORMA</a> | <a href='Romaneioembarque.pdf' target='_blank'>Imprimir Romaneio de Embarque</a> |<a href='faturacomercial.pdf' target='_blank'> Imprimir Fatura Comercial</a>
		</td>
	</tr>
	<tr>
		<td align='center'>
			555
		</td>
		<td align='center'>
			30/08/2014
		</td>		
		<td align='center'>
			University of California
		</td>
		<td align='center'>
			-
		</td>
		<td align='center'>
			-
		</td>
		<td align='center'>
			<a href='proforma.pdf' target='_blank'>Imprimir PROFORMA</a> | <a href='template.php?conteudo=pg_simples_internacional_escolher_ol'>Selecionar O.L.</a> | <a href='#'>Editar Dados Exportação</a> | <a href='#' onclick='javascript:confirm("Você deseja realmente apagar os dados da exportação? Todos os dados desta exportação serão apagados.")'>Cancelar Exportação</a>
		</td>
	</tr>
	
	
	
</table>-->



