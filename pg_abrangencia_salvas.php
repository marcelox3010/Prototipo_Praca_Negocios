<h4><a href="template.php">Praça Eletrônica de Negócios</a> >> <a href='template.php?conteudo=pg_inicial2'>Quero Vender</a> >> <a href='template.php?conteudo=pg_inicial2'>Encontre Compradores no Governo</a> >> Consulte Resultado de Pesquisa Automática </h4>	

<div style="width: 98%;
	height: 200px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">
	
	
		
		<div style="display: table-row; ">			
			<div style="display: table-cell;-align:right;">
				<center>
				<table border='1' width='90%'>
					<caption>Abrangências Salvas</caption>
					<tr>
						<th>Nome da Abrangência</th>
						<th>Ação</th>
					</tr>
					<tr>
						<td>Abrangência número 1 <b>(3)</b></td>
						<th>
						
						<input type='button' value='Consultar' onclick='javascript:  document.getElementById("id_tabela_credito").style.display = "block";'>
						<input type='button' value='Editar' onclick='javascript:  document.location = "template.php?conteudo=pg_abrangencia_editar";'>
						<input type='button' value='Excluir' onclick='javascript: confirm("Você realmente deseja apagar esta abrangência?"); alert("Sua abrangência foi salva na seção \"Abrangências Salvas\"");'></th>
					</tr>
					<tr>
						<td>Abrangência número 2 <b>(1)</b></td>
						<th><input type='button' value='Consultar' onclick='javascript:  document.getElementById("id_tabela_credito").style.display = "block";'>
						<input type='button' value='Editar' onclick='javascript: document.location = "template.php?conteudo=pg_abrangencia_editar";'>
						<input type='button' value='Excluir' onclick='javascript: confirm("Você realmente deseja apagar esta abrangência?"); alert("Sua abrangência foi salva na seção \"Abrangências Salvas\"");'></th>
					</tr>
					<tr>
						<td>Abrangência número 3 <b>(2)</b></td>
						<th><input type='button' value='Consultar' onclick='javascript:  document.getElementById("id_tabela_credito").style.display = "block";'>
						<input type='button' value='Editar' onclick='javascript:  document.location = "template.php?conteudo=pg_abrangencia_editar";;'>
						<input type='button' value='Excluir' onclick='javascript: confirm("Você realmente deseja apagar esta abrangência?"); alert("Sua abrangência foi salva na seção \"Abrangências Salvas\"");'></th>
					</tr>
					<tr>
						<td>Abrangência número 4 <b>(0)</b></td>
						<th><input type='button' value='Consultar' onclick='javascript:  document.getElementById("id_tabela_credito").style.display = "block";'>
						<input type='button' value='Editar' onclick='document.location = "template.php?conteudo=pg_abrangencia_editar";'>
						<input type='button' value='Excluir' onclick='javascript: confirm("Você realmente deseja apagar esta abrangência?"); alert("Sua abrangência foi salva na seção \"Abrangências Salvas\"");'></th>
					</tr>
				</table>
				</center>
				</div>			
		</div>
		
		
		
		<div style="display: table-row; ">
			<div style="display: table-cell;text-align:right;">&nbsp;</div>
			<div style="display: table-cell;text-align:right;"> 
						
			</div>
		</div>
	</div>
</div>


<div id='id_tabela_credito' style="display:none" >
	<table style="width:100%;" border='1'>
		<caption>Resultado Pesquisa</caption>
		<tr>
			<th>N° do Edital</th>
			<th>Origem</th>
			<th>Órgão</th>
			<th>Objeto</th>
			<th>UF/Cidade</th>
			<th>Tipo de Licitação</th>
			<th>Dt Final p/ Inscrição</th>						
			<th>Ação</th>	
		</tr>
		<tr>
			<td><b>013/2014* </b></td>
			<td>Federal</td>
			<td>MDS</td>
			<td>Fábrica de Software</td>
			<td>DF/Brasília</td>
			<td>Técnica e Preço</td>
			<td>31/12/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td><b>0001/2014*</b></td>
			<td>Federal</td>
			<td>SMPE/PR</td>
			<td>Computador Desktop</td>
			<td>DF/Brasília</td>
			<td>Menor Preço</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0025/2014</td>
			<td>Estadual</td>
			<td>Secretaria de Saúde</td>
			<td>Dipirona</td>
			<td>GO/Goiania</td>
			<td>Menor Preço</td>
			<td>14/10/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0001/2014</td>
			<td>Estadual</td>
			<td>Secretaria de Obras</td>
			<td>Construção Aterro Sanitário</td>
			<td>DF/Brasília</td>
			<td>Melhor Técnica</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		
		<tr>
			<td>0150/2014</td>
			<td>Municpal</td>
			<td>Secretaria de Educação</td>
			<td>Livros Didáticos</td>
			<td>CE/Fortaleza</td>
			<td>Menor Preço</td>
			<td>09/11/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>8888/2014</td>
			<td>Municipal</td>
			<td>Secretaria de Educação</td>
			<td>Instrumentos Musicais</td>
			<td>GO/Planaltina</td>
			<td>Menor Preço</td>
			<td>10/10/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0006/2014</td>
			<td>Federal</td>
			<td>DNOCS</td>
			<td>Licença de Banco de Dados</td>
			<td>CE/Fortaleza</td>
			<td>Menor Preço</td>
			<td>11/11/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0098/2014</td>
			<td>Estadual</td>
			<td>Prefeitura de SP</td>
			<td>Construção de via</td>
			<td>SP/São Paulo</td>
			<td>Menor Preço</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0056/2014</td>
			<td>Federal</td>
			<td>SUDENE</td>
			<td>Adutora</td>
			<td>PE/Recife</td>
			<td>Melhor Técnica</td>
			<td>01/10/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td>0001/2014</td>
			<td>Federal</td>
			<td>SMPE/PR</td>
			<td>Computador Desktop</td>
			<td>DF/Brasília</td>
			<td>Menor Preço</td>
			<td>25/09/2014</td>			
			<td><a href='template.php?conteudo=pg_gerar_kit' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
	
		<tr>
			<td colspan='8'><center> <a href='#'> << </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href='#'><</a>  Página 1 de 100 <a href='#'>></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href='#'>>></a></td></tr><tr><td colspan='8'> <center>* - Novo Edital</center></td>
			
		</tr>
	</table>


</div>


