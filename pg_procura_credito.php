
Pesquisar Crédito:
<div style="width: 98%;
	height: 310px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	">

	<div style="width: 100%; display: table;border-spacing: 0 13px;">
		
		<div style="display: table-row">
			<div style=" display: table-cell; ">Natureza:</div>
			<div style="display: table-cell; "> 
				<select style='margin:0px;width:200px' onchange='
				
					
					if(this.value == "3"){
						document.getElementById("a1").style.display = "none";
						document.getElementById("a2").style.display = "none";
						document.getElementById("a3").style.display = "block";
						document.getElementById("a4").style.display = "block";
						document.getElementById("a5").style.display = "block";
						document.getElementById("a6").style.display = "block";
					}else{					
						document.getElementById("a1").style.display = "block";
						document.getElementById("a2").style.display = "block";
						document.getElementById("a3").style.display = "none";
						document.getElementById("a4").style.display = "none";
						document.getElementById("a5").style.display = "none";
						document.getElementById("a6").style.display = "none";
					}
				
				'>
					<option value='0' selected>--</option>
					<option value='1'>Capital de Giro</option>
					<option value='2'>Investimento</option>
					<option value='3'>Giro/Investimento</option>
				</select>
			</div>
		</div>
		
		<div style="display: table-row; ">
			<div style=" width:170px;display: table-cell;"><div id='a1'>Valor do empréstimo: R$</div></div>
			<div style="display: table-cell; ">
			<div id='a2'><input type='text' maxlength='13' 
			
			onkeydown='javascript:FormataValor(this,20,event,2);'
			
			></div></div>
		</div>
		<div style="display: table-row; ">
			<div style=" width:170px;display: table-cell;"><div id='a3' style='display:none'>Valor do Giro: R$</div></div>
			<div style="display: table-cell; ">
			<div id='a4' style='display:none'><input type='text' maxlength='13' 
			
			onkeydown='javascript:FormataValor(this,20,event,2);'
			
			></div></div>
		</div>
		<div style="display: table-row; ">
			<div style=" width:170px;display: table-cell;"><div id='a5' style='display:none'>Valor do Investimento: R$</div></div>
			<div style="display: table-cell; ">
			<div id='a6' style='display:none'><input type='text' maxlength='13' 
			
			onkeydown='javascript:FormataValor(this,20,event,2);'
			
			></div></div>
		</div>
		
		<!-- <div style="display: table-row">
			 <div style=" display: table-cell;">Prazo:</div>
			<div style="display: table-cell; ">
						<select style="width: 90px;margin:0">
							<option value='Todos'>Todos</option>
							<option value='1'>1</option>
							<option value='2'>2</option>
							<option value='3'>3</option>
							<option value='4'>4</option>
							<option value='5'>5</option>
							<option value='6'>6</option>
							<option value='7'>7</option>
							<option value='8'>8</option>
							<option value='9'>9</option>
							<option value='10'>10</option>
							<option value='11'>11</option>
							<option value='12'>12</option>
							<option value='24'>24</option>
							<option value='36'>36</option>
							<option value='48'>48</option>
							<option value='60'>60</option>	
						</select> Meses						
			</div>
		</div>	
			-->
		
		
		<div style="display: table-row">
			<div style=" display: table-cell; ">Localidade:</div>
			<div style="display: table-cell; "> 
			
				
				<?php require 'comp_estado.php' ?>
			
				<!-- <table width='97%'>
				
					<tr>
						<td><input type="CHECKBOX" name='modalidade' checked> Todos</td>
						<td><input type="CHECKBOX" name='modalidade'> Acre</td>
						<td><input type="CHECKBOX" name='modalidade'> Alagoas</td>
						<td><input type="CHECKBOX" name='modalidade'> Amapá</td>
					<td><input type="CHECKBOX" name='modalidade'> Amazonas</td>						
						
					
					</tr>
					
					<tr>
						<td><input type="CHECKBOX" name='modalidade'> Bahia</td>
						<td><input type="CHECKBOX" name='modalidade'> Ceará</td>
						<td><input type="CHECKBOX" name='modalidade'> Distrito Federal</td>
						<td><input type="CHECKBOX" name='modalidade'> Espírito Santo</td>
						<td><input type="CHECKBOX" name='modalidade'> Goiás</td>
						
					</tr>
					<tr>
					
					<td><input type="CHECKBOX" name='modalidade'> Maranhão</td>
							<td><input type="CHECKBOX" name='modalidade'> Mato Grosso</td>
						<td><input type="CHECKBOX" name='modalidade'> Mato Grosso do Sul</td>
						<td><input type="CHECKBOX" name='modalidade'> Minas Gerais</td>
						<td><input type="CHECKBOX" name='modalidade'> Pará</td>
						
					</tr>
					
					<tr>
						<td><input type="CHECKBOX" name='modalidade'> Paraíba</td>
						<td><input type="CHECKBOX" name='modalidade'> Paraná</td>
						<td><input type="CHECKBOX" name='modalidade'> Pernambuco</td>
						<td><input type="CHECKBOX" name='modalidade'> Piauí</td>
						<td><input type="CHECKBOX" name='modalidade'> Rio de Janeiro</td>
						
					</tr>
					
					<tr>
						<td><input type="CHECKBOX" name='modalidade'> Rio Grande do Norte</td>
						<td><input type="CHECKBOX" name='modalidade'> Rio Grande do Sul</td>
							<td><input type="CHECKBOX" name='modalidade'> Rondônia</td>
						<td><input type="CHECKBOX" name='modalidade'> Roraima</td>
						<td><input type="CHECKBOX" name='modalidade'> Santa Catarina</td>
						
					</tr>
					
					<tr>
						<td><input type="CHECKBOX" name='modalidade'> São Paulo</td>	<td><input type="CHECKBOX" name='modalidade'> Sergipe</td><td><input type="CHECKBOX" name='modalidade'> Tocantins</td>
							
					
					</tr>
							
				</table>--> 
											
			</div>
			
			
				
		</div>
		
		<div style="display: table-row; ">
			
			<div style="display: table-cell;text-align:right;">&nbsp;</div>
			<div style="display: table-cell;text-align:right;"> 
					<input type='button' value='Ranking' onclick='javascript:  document.location ="template.php?conteudo=pg_ranking";'>			
					<input type='button' value='Pesquisar' onclick='javascript:  document.getElementById("id_tabela_credito").style.display = "block";'>
					
			</div>
		</div>
		
		
		<!-- <div style="display: table-row">
			<div style=" display: table-cell;">Taxa:</div>
			<div style="display: table-cell;"> 
						<select style="width: 90px; margin:0">
							<option value='Todas'>Todas</option>
							<option value='1'>0,5%</option>
							<option value='2'>0,6%</option>
							<option value='3'>0,7%</option>
							<option value='4'>0,8%</option>
							<option value='5'>0,9%</option>
							<option value='6'>1%</option>
							<option value='7'>1,1%</option>
							<option value='8'>1,2%</option>
							<option value='9'>1,3%</option>
							<option value='10'>1,4%</option>
							<option value='11'>1,5%</option>
							<option value='12'>1,6%</option>
							<option value='24'>1,7%</option>
							<option value='36'>1,8%</option>
							<option value='48'>1,9%</option>
							<option value='60'>2%</option>	
						</select> A.M.			
			</div>
		</div> -->
		
		<!-- 
		<div style="display: table-row">
			<div style=" display: table-cell;">Mostrar:</div>
			<div style="display: table-cell;text-align:left;"> 
						<input type='radio' name='mostrar' value='1'> Somente linhas de crédito compatíveis com minha empresa<br>
						<input type='radio' name='mostrar' value='2'> Todas as linhas de crédito
			</div>
		</div>
		-->
		
		
		
	</div>
	
</div>


<div id='id_tabela_credito' style="display:none" >
	<table style="width:100%;" border='1'>
		<caption>Resultado Pesquisa</caption>
		<tr>
			<th>Selecione</th>
			<th>Banco</th>
			<th>Modalidade</th>
			<th>Natureza</th>
			
			<th>Empréstimos R$</th>
			
			<th>Faturamento Exigido</th>
			<th>Prazo</th>
			<th>Juros</th>
			<th>Localidades</th>
			
			
			
			<th>Ação</th>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td>
			<td>Banco do Brasil</td>
			<td>BB Microcrédito
Desenvolvimento
Regional Sustentável</td>
			<td>Investimento</td>
			
			<td align='right'> R$ 1.000,00  até<br/> R$ 100.000,00</td>
			
			<td align='right'>R$25.000,00 até<br/> R$ 200.000,00</td>
			<td>12 até 120(meses)</td>
			<td>0,8% ~ 1% a.m</td>
			<td align='center'>Todos Estados</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Banco do Brasil</td>
			<td>BB Giro Flex</td>
			<td>Capital de Giro</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$1.000,00 até<br/> R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>
			
			<td align='center'>RS, SC e PR</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Banco do Brasil</td>
			<td>BB Microcrédito
Empreendedor PJ</td>
			<td>Capital de Giro</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$40.000,00 até <br/>R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>
			<td align='center'>MG, SP e RJ</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Caixa Econômica Federal</td>
			<td>Construgiro</td>
			<td>Investimento</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$35.000,00 até <br/>R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>
			<td align='center'>Todos Estados</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Caixa Econômica Federal</td>
			<td>Desconto de Cheque Eletrônico</td>
			<td>Capital de Giro</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$15.000,00 até <br/>R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>			
			<td align='center'>Todos Estados</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Caixa Econômica Federal</td>
			<td>Desconto de Duplicatas</td>
			<td>Capital de Giro</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$40.000,00 até<br/> R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>			
			<td align='center'>Todos Estados</td>
			<td ><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Banco de Brasília</td>
			<td>Progiro - Micro e Pequenas Empresas </td>
			<td>Capital de Giro</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$7.000,00 até <br/>R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>
			<td align='center'>DF</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Banco de Brasília</td>
			<td>Antecipação de Recebíveis Cartão</td>
			<td>Giro/Investimento</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$13.000,00 até<br/> R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>
			<td align='center'>DF</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Banco de Brasília</td>
			<td>Crédito Construção Civil </td>
			<td>Investimento</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$50.000,00 até<br/> R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>
			<td align='center'>DF</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
		<tr>
			<td align='center'><input type='checkbox'/></td><td>Banco de Brasília</td>
			<td>Microfinanças Pessoa Jurídica  </td>
			<td>Capital de Giro</td>
			<td align='right'> R$ 1.000,00 até <br/> R$ 100.000,00</td>
			<td align='right'>R$15.000,00 até <br/>R$ 200.000,00</td>
			<td>12 até 120 (meses)</td>
			<td>0,8% ~ 1% a.m</td>
			<td align='center'>DF</td>
			<td><a href='template.php?conteudo=pg_detalhar_credito' style="text-decoration: underline"><center>Detalhar</center></a></td>
		</tr>
	
	</table>

	<table 	style="width:100%;" border='0'>
		<tr>
			<TD align='right'>
				&nbsp;
			</TD>
		</tr>
		<TR>
		
		
			<TD align='right'>
				<input type='button' value='Solicitar Crédito' onclick='
				
					document.location = "template.php?conteudo=pg_detalhar_credito2";
				
				'>
			</TD>
		
		
		</TR>
	
	<tr>
			<TD align='right'>
				&nbsp;
			</TD>
		</tr>
	</TABLE>
</div>

