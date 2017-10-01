<h3>Certificação Econômica</h3>
<p/>
<div style="width: 98%;
	height: 1000px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">
	
	<h4>Cadastro de Certificação Econômica</h4>
	<div style="width: 100%; display: table;border-spacing: 0 13px;">
		<div style="display: table-row;"  >
			<div style="display: table-cell; width:200px">
				<div ><b>Tipo de Certificação:</b></div>
			</div>
			<div style="display: table-cell;">
				<select style='margin:0px;width:100px' 
					
					onchange='
					
						if(this.value == "1" || this.value == "3"){
						
							document.getElementById("a1").style.display = "block";
							document.getElementById("a2").style.display = "block";
							
							document.getElementById("b1").style.display = "none";
							document.getElementById("b2").style.display = "none";
							
							document.getElementById("c1").style.display = "none";
							document.getElementById("c2").style.display = "none";
							
							document.getElementById("janela1").src = "tabela1.php";
							document.getElementById("janela2").src = "tabela2.php";
						
						}else if(this.value == "4"){
							
							document.getElementById("a1").style.display = "none";
							document.getElementById("a2").style.display = "none";
							
							document.getElementById("b1").style.display = "block";
							document.getElementById("b2").style.display = "block";
							
							document.getElementById("c1").style.display = "block";
							document.getElementById("c2").style.display = "block";
														
							document.getElementById("janela1").src = "tabela11.php";
							document.getElementById("janela2").src = "tabela22.php";
						}
						
						else{
						
							document.getElementById("a1").style.display = "none";
							document.getElementById("a2").style.display = "none";
							
							document.getElementById("b1").style.display = "block";
							document.getElementById("b2").style.display = "block";
							
							document.getElementById("c1").style.display = "block";
							document.getElementById("c2").style.display = "block";
							
							document.getElementById("janela1").src = "tabela1.php";
							document.getElementById("janela2").src = "tabela2.php";
						
						}
					
					'
				>				
					<option value='1'>Balanço</option>					
					<option value='2'>Balancete</option>
					<option value='3'>DRE</option>
					<option value='4'>Índice</option>					
				</select>				
				<p/>
			</div>
		</div>
		
		<div style="display: table-row;"  >
			<div style="display: table-cell;-align:right;">
				<div id='a1'>
					<b>Exercício:</b>
				</div>				
			</div>
			<div style="display: table-cell;">
				<div id='a2'>
					<select style='margin:0px;width:100px'>				
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>			
					</select>				
				</div>
			</div>
		</div>
		
		<div style="display: table-row;"  >
			<div style="display: table-cell;-align:right;">
				<div id='b1' style='display:none'>
					<b>Período Inicial:</b>
				</div>
			</div>
			<div style="display: table-cell;">
				<div id='b2' style='display:none'>
					<select style='margin:0px;width:100px'>
						<option>JAN/2014</option>
						<option>FEV/2014</option>
						<option>MAR/2014</option>
						<option>ABR/2014</option>
						<option>MAI/2014</option>
					</select>
				</div>
			</div>
		</div>
		
		<div style="display: table-row;"  >
			<div style="display: table-cell;-align:right;">
				<div id='c1' style='display:none'>
					<b>Período Final:</b>
				</div>
			</div>
			<div style="display: table-cell;">
				<div id='c2' style='display:none'>
					<select style='margin:0px;width:100px'>
						<option>JAN/2014</option>
						<option>FEV/2014</option>
						<option>MAR/2014</option>
						<option>ABR/2014</option>
						<option>MAI/2014</option>
					</select>
				</div>
			</div>
		</div>
		
	</div>
	
	<div style=' border: 1px solid; border-radius: 25px; border-color: #eeeeee;padding:30px'>
		<center>
			<table width='100%'>
				<tr>
					<td>
						<iframe id='janela1' name='janela1' src='tabela1.php' width='99%' style='height:700px;border: 1px solid #dddddd'></iframe>
					</td>
					<td>
						<iframe  name='janela2' id='janela2'  src='tabela2.php' width='99%' style='height:700px;border: 1px solid #dddddd'></iframe>
					</td>
			</table>
		</center>
	</div>
	
</div>