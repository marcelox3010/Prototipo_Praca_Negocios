<h3>Relatório Certificação Econômica</h3>
<p/>
<div style="width: 98%;
	height: 700px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">

	<table>
		<tr>
			<td>
				Tipo de Certificação:  
			</td>
			<td>
		
				<select style='margin:0px; width:200px' id='tr' onchange='
				
				
					if(this.value == "2"){
					
						document.getElementById("x1").style.display = "none";
						document.getElementById("x2").style.display = "none";
						document.getElementById("x3").style.display = "block";
						document.getElementById("x4").style.display = "block";
						document.getElementById("x5").style.display = "block";
						document.getElementById("x6").style.display = "block";
					}else{
					
						document.getElementById("x1").style.display = "block";
						document.getElementById("x2").style.display = "block";
						document.getElementById("x3").style.display = "none";
						document.getElementById("x4").style.display = "none";
						document.getElementById("x5").style.display = "none";
						document.getElementById("x6").style.display = "none";
					
					}
				
				'>
					
					<option value='1'>Balanço</option>
					<option value='2'>Balancete</option>
					<option value='3' >DRE</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<div id='x1'>Exercício:</div> 
			</td>
			<td>
				<div id='x2'>
				<select style='margin:0px; width:200px'>
				
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					
				</select>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id='x3' style='display:none'>Período Inicial:</div> 
			</td>
			<td>
				<div id='x4' style='display:none'>
				<select style='margin:0px; width:200px'>
				
					<option>Jan 2014</option>
					<option>Fev 2014</option>
					<option>Mar 2014</option>
					<option>Abr 2014</option>
					<option>Mai 2014</option>
					
				</select>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id='x5' style='display:none'>Período Final:</div> 
			</td>
			<td>
				<div id='x6' style='display:none'>
				<select style='margin:0px; width:200px'>
				
					<option>Jan 2014</option>
					<option>Fev 2014</option>
					<option>Mar 2014</option>
					<option>Abr 2014</option>
					<option>Mai 2014</option>
				</select>
				</div>
			</td>
		</tr>
		
	</table>
	
	<p/>
	<input value='Consultar Certificação Econômica' type='button' onclick='
	
	
		if(document.getElementById("tr").value == "1" || document.getElementById("tr").value == "3"){
		
			document.getElementById("tr1").style.display = "block";
			document.getElementById("tr2").style.display = "none";
			document.getElementById("tr3").style.display = "none";
			
		
		}else{
		
		
			document.getElementById("tr1").style.display = "none";
			document.getElementById("tr2").style.display = "block";
			document.getElementById("tr3").style.display = "none";
		
		}
		
	
	'>
	
	
	<div id="tr1" style='display:none'>
<table  width='100%' border='1' style=' border-color:#dddddd;border-collapse: collapse; '>
<caption><h3>Certificação Econômica - Balanço - 2014</h3></caption>
	<tr>
		<th>
			<div STYLE='HEIGHT:40PX' >Índice</DIV>
		</th>
		<th>
			<div STYLE='HEIGHT:40PX' >Grupo de Contas</DIV>
		</th>
		<th>
			<div STYLE='HEIGHT:40PX' >Valor</DIV>
		</th>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela2.php"' id='linha1' onmouseout='(document.getElementById("linha1").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha1").style.backgroundColor = "#dddddd");' >
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>1.</div></div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela3.php"'id='linha2' onmouseout='(document.getElementById("linha2").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha2").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;1.1.</div> </a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receita Diversas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela4.php"' id='linha3' onmouseout='(document.getElementById("linha3").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha3").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas Operacionais</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela5.php"' id='linha4' onmouseout='(document.getElementById("linha4").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha4").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.1.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receita Bruta de Venda</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>	
	<tr id='linha5' onmouseout='(document.getElementById("linha5").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha5").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.2.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>(-) Deduções da Receita Bruta</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha6' onmouseout='(document.getElementById("linha6").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha6").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.3.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>(-) Deduções da Receita Financeira</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha7' onmouseout='(document.getElementById("linha7").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha7").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.4.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>(-)  Receita Diversas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha8' onmouseout='(document.getElementById("linha8").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha8").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.2</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas não operacionais</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha9'  onmouseout='(document.getElementById("linha9").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha9").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.2.1</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas Diversas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>

</table>
	<table	width='100%' border='0' style=' border-color:#dddddd;border-collapse: collapse; '>
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td align='right'>
				<input type='button' value='Desativar Certificado' onclick='
				
					if(confirm("Deseja realmente desativar este certificado?")){
					
						alert("Certificado Desativado. Protocolo: XXXXXX");
					
					}
				
				'>
			</td>
		</tr>
		
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		
	</table>

	</div>
	
	
	<div id='tr2' style='display:none'>
	
		<table width='100%' border='1' style=' border-color:#dddddd;border-collapse: collapse; '>
		
			<tr>
				<th>Período</th>
				<th>Descrição</th>
				<th>Ação</th>
			</tr>
			<tr>
				<td>Jan 2014 - Mar 2014</td>
				<td>Balancete</td>
				<td align='center'><a href='javascript:void(0);' onclick='
				
					document.getElementById("tr1").style.display = "none";
					document.getElementById("tr2").style.display = "none";
					document.getElementById("tr3").style.display = "block";
					
				'>Visualizar</a></td>
			</tr>
			
			<tr>
				<td>Abr 2014</td>
				<td>Balancete</td>
				<td align='center'><a href='javascript:void(0);' onclick='
				
					document.getElementById("tr1").style.display = "none";
					document.getElementById("tr2").style.display = "none";
					document.getElementById("tr3").style.display = "block";
					
				'>Visualizar</a></td>
			</tr>
			
			<tr>
				<td>Mai 2014 - Ago 2014</td>
				<td>Balancete</td>
				<td align='center'><a href='javascript:void(0);' onclick='
				
					document.getElementById("tr1").style.display = "none";
					document.getElementById("tr2").style.display = "none";
					document.getElementById("tr3").style.display = "block";
					
				'>Visualizar</a></td>
			</tr>
		
		</table>
	
	</div>
	
	<div id='tr3' style='display:none'>
		<table  width='100%' border='1' style=' border-color:#dddddd;border-collapse: collapse; '>
<caption><h3>Certificação Econômica - Balancete - (Jan 2014 - Mar 2014) </h3></caption>
	<tr>
		<th>
			<div STYLE='HEIGHT:40PX' >Índice</DIV>
		</th>
		<th>
			<div STYLE='HEIGHT:40PX' >Grupo de Contas</DIV>
		</th>
		<th>
			<div STYLE='HEIGHT:40PX' >Valor</DIV>
		</th>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela2.php"' id='linha1' onmouseout='(document.getElementById("linha1").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha1").style.backgroundColor = "#dddddd");' >
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>1.</div></div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela3.php"'id='linha2' onmouseout='(document.getElementById("linha2").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha2").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;1.1.</div> </a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receita Diversas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela4.php"' id='linha3' onmouseout='(document.getElementById("linha3").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha3").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas Operacionais</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>
	<tr onclick='parent.document.getElementById("janela2").src="tabela5.php"' id='linha4' onmouseout='(document.getElementById("linha4").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha4").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.1.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receita Bruta de Venda</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 1.000,00</div></a>
		</td>
	</tr>	
	<tr id='linha5' onmouseout='(document.getElementById("linha5").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha5").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.2.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>(-) Deduções da Receita Bruta</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha6' onmouseout='(document.getElementById("linha6").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha6").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.3.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>(-) Deduções da Receita Financeira</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha7' onmouseout='(document.getElementById("linha7").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha7").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1.4.</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>(-)  Receita Diversas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha8' onmouseout='(document.getElementById("linha8").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha8").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.2</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas não operacionais</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>
	<tr id='linha9'  onmouseout='(document.getElementById("linha9").style.backgroundColor = "#ffffff")' onmouseover='(document.getElementById("linha9").style.backgroundColor = "#dddddd");'>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.2.1</div></a>
		</td>
		<td>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>Receitas Diversas</div></a>
		</td>
		<td align='right'>
			<a href='javascript:void(0);' style='text-decoration:none;color:#000000'><div STYLE='HEIGHT:40PX'>R$ 0,00</div></a>
		</td>
	</tr>

</table>

<table	width='100%' border='0' style=' border-color:#dddddd;border-collapse: collapse; '>
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td align='right'>
				<input type='button' value='Desativar Certificado' onclick='
				
					if(confirm("Deseja realmente desativar este certificado?")){
					
						alert("Certificado Desativado. Protocolo: XXXXXX");
					
					}
				
				'>
			</td>
		</tr>
		
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		
	</table>
	
	</div>

	
</div>
		