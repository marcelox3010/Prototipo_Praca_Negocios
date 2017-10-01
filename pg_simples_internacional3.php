<h4><a href="template.php">Praça Eletrônica de Negócios</a> >> <a href='template.php?conteudo=pg_inicial2'>Quero Vender</a> >> <a href='template.php?conteudo=pg_inicial2'>Registre Operação de Exportação</a> >> Simule uma Exportação </h4>
<div style="width: 98%;
	height: 1900px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;">
	<div style="width: 100%; display: table;border-spacing: 0 13px;">	
		
		
		<div style="display: table-row; background-color:#eeeeee;">
			<div style="display: table-cell;width:300px ">
				<b>
					Endereço de Origem
				</b>			
			</div>
			<div style="display: table-cell;">
			
				&nbsp;
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
                                    Utilizar endereço cadastrado?
				</b>			
			</div>
			<div style="display: table-cell;">
			
                            <input type='radio' name='ffff' checked="checked" onclick='
                                   
                                    document.getElementById("avb1").style.display = "block";
                                    document.getElementById("avb2").style.display = "block";
                                    document.getElementById("avb3").style.display = "block";
                                    document.getElementById("avb4").style.display = "block";
                                    
                                    document.getElementById("avf1").style.display = "none";
                                    document.getElementById("avf2").style.display = "none";
                                    document.getElementById("avf3").style.display = "none";
                                    document.getElementById("avf4").style.display = "none";
                                   
                                   '>  Sim
                                <input type='radio' name='ffff' onclick='
                                    
                                    document.getElementById("avb1").style.display = "none";
                                    document.getElementById("avb2").style.display = "none";
                                    document.getElementById("avb3").style.display = "none";
                                    document.getElementById("avb4").style.display = "none";  
                                    
                                    document.getElementById("avf1").style.display = "block";
                                    document.getElementById("avf2").style.display = "block";
                                    document.getElementById("avf3").style.display = "block";
                                    document.getElementById("avf4").style.display = "block";
                                   
                                   '> Não
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Endereço:
                                        
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<div id='avb1'>Rua Pedro Pereira, 1655.</div>
                                <div id='avf1' style='display:none'><input type='text' size='70' /></div>
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Bairro:
                                        
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<div id='avb2'>Centro</div>
                                <div id='avf2' style='display:none'><input type='text' size='50' /></div>
				
			</div>
		</div>
		<div style="display: table-row;">
			<div style="display: table-cell;width:200px ">
				<b>
					Município:
                                        
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<div id='avb3'>Fortaleza-CE</div>
                                <div id='avf3' style='display:none'><input type='text' size='30' /></div>
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					CEP:
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<div id='avb4'>60035-001</div>
                                <div id='avf4' style='display:none'><input type='text' size='7' /></div>
				
			</div>
		</div>
		
		
		
		
            <div style="display: table-row; background-color:#eeeeee;">
			<div style="display: table-cell;width:200px ">
				<b>
					Endereço de Destino
				</b>			
			</div>
			<div style="display: table-cell;">
			
				&nbsp;
				
			</div>
		</div>
            
            
            
            <!--<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Local de Embarque:
				</b>			
			</div>
			<div style="display: table-cell; "> 
				
				
				<select style='padding:0px;margin:0px' onchange='javascript:if(this.value=="1") {document.getElementById("ggg").style.display="block";}else{document.getElementById("ggg").style.display="none";}'>
				<option value='2'> No endereço da empresa</option>
				 <option value='3'> No endereço do Operador Logístico</option>
				<option value='1'>  Cadastrar novo endereço</option>
				<select>
				
				<div id='ggg' style='display:none;'>
					 <select style='width:200px;padding:0px;margin:0px;' width='300px'
					
					
						onchange='javascript:
						
							document.getElementById("div_muni").innerHTML="";
						
							if(this.value=="Todos"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								
							}
							if(this.value=="NO"){
						
								document.getElementById("NO").style.display = "block";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("NO").value = "Todos";
								
							}
							
							else if(this.value=="NE"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "block";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("NE").value = "Todos";
							
							}
							
							else if(this.value=="CO"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "block";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("CO").value = "Todos";
							
							}
							
							else if(this.value=="SE"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "block";							
								document.getElementById("SU").style.display = "none";
								
								document.getElementById("SE").value = "Todos";
							
							}
							
						
							else if(this.value=="SU"){
						
								document.getElementById("NO").style.display = "none";
								document.getElementById("NE").style.display = "none";
								document.getElementById("CO").style.display = "none";
								document.getElementById("SE").style.display = "none";							
								document.getElementById("SU").style.display = "block";
								
								document.getElementById("SU").value = "Todos";
							
							}
							
						
						'
					
					>
						  <option value="Todos">Todos</option>
						  <option value="NO">Norte</option>
						  <option value="NE">Nordeste</option>
						  <option value="CO">Centro-Oeste</option>															  
						  <option value="SE">Sudeste</option>															  
						  <option value="SU">Sul</option>															  
					</select>
				
				</div>
				<div>
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='NO' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value,"div_muni"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="AC" >Acre</option>
					  <option value="AP">Amapá</option>															  					  
					  <option value="AM">Amazonas</option>															  					  		  
					  <option value="PA">Pará</option>															  
					  <option value="RO">Rondônia</option>															  
					  <option value="RR">Roraima</option>															  					  
					  <option value="TO">Tocantins</option>															  
				</select>
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='NE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value,"div_muni"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="AL">Alagoas</option>				
					  <option value="BA">Bahia</option>															  
					  <option value="CE">Ceará</option>															  					  
					  <option value="MA">Maranhão</option>															  
					  <option value="PB">Paraíba</option>															  					  
					  <option value="PE">Pernambuco</option>															  
					  <option value="PI">Piauí</option>					  
					  <option value="RN">Rio Grande do Norte</option>	
					  <option value="SE">Sergipe</option>					  					  
				</select>
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='CO' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value,,"div_muni"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="DF">Distrito Federal</option>															  
					  <option value="GO">Goiás</option>															  
					  <option value="MT">Mato Grosso</option>															  
					  <option value="MS">Mato Grosso do Sul</option>															  
				</select>				
				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SE' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value,"div_muni"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="ES">Espírito Santo</option>															  
					  <option value="MG">Minas Gerais</option>															  
					  <option value="RJ">Rio de Janeiro</option>															  
					  <option value="SP">São Paulo</option>		
				</select>				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SU' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value,"div_muni"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="PR">Paraná</option>															  
					  <option value="RS">Rio Grande do Sul</option>															  
					  <option value="SC">Santa Catarina</option>
				</select>				
				
				</div>
				<div id='div_muni'></div>
			</div>
		</div>-->
            
            <div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Endereço de destino:
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<input type='text' size="68">
				
			</div>
		</div>
            
		
                <div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					País de Destino:
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<SELECT STYLE='PADDING:0PX;MARGIN:0PX'>
					<option>  Afeganistão</option>
					<option>  África do Sul</option>
					<option>  Akrotiri</option>
					<option>  Albânia</option>
					<option>  Alemanha</option>
					<option>  Andorra</option>
					<option>  Angola</option>
					<option>  Anguila</option>
					<option>  Antárctida</option>
					<option>  Antígua e Barbuda</option>
					<option>  Antilhas Neerlandesas</option>
					<option>  Arábia Saudita</option>
					<option>  Arctic Ocean</option>
					<option>  Argélia</option>
					<option>  Argentina</option>
					<option>  Arménia</option>
					<option>  Aruba</option>
					<option>  Ashmore and Cartier Islands</option>
					<option>  Atlantic Ocean</option>
					<option>  Austrália</option>
					<option>  Áustria</option>
					<option>  Azerbaijão</option>
					<option>  Baamas</option>
					<option>  Bangladeche</option>
					<option>  Barbados</option>
					<option>  Barém</option>
					<option>  Bélgica</option>
					<option>  Belize</option>
					<option>  Benim</option>
					<option>  Bermudas</option>
					<option>  Bielorrússia</option>
					<option>  Birmânia</option>
					<option>  Bolívia</option>
					<option>  Bósnia e Herzegovina</option>
					<option>  Botsuana</option>
					<option>  Brasil</option>
					<option>  Brunei</option>
					<option>  Bulgária</option>
					<option>  Burquina Faso</option>
					<option>  Burúndi</option>
					<option>  Butão</option>
					<option>  Cabo Verde</option>
					<option>  Camarões</option>
					<option>  Camboja</option>
					<option>  Canadá</option>
					<option>  Catar</option>
					<option>  Cazaquistão</option>
					<option>  Chade</option>
					<option>  Chile</option>
					<option>  China</option>
					<option>  Chipre</option>
					<option>  Clipperton Island</option>
					<option>  Colômbia</option>
					<option>  Comores</option>
					<option>  Congo-Brazzaville</option>
					<option>  Congo-Kinshasa</option>
					<option>  Coral Sea Islands</option>
					<option>  Coreia do Norte</option>
					<option>  Coreia do Sul</option>
					<option>  Costa do Marfim</option>
					<option>  Costa Rica</option>
					<option>  Croácia</option>
					<option>  Cuba</option>
					<option>  Dhekelia</option>
					<option>  Dinamarca</option>
					<option>  Domínica</option>
					<option>  Egipto</option>
					<option>  Emiratos Árabes Unidos</option>
					<option>  Equador</option>
					<option>  Eritreia</option>
					<option>  Eslováquia</option>
					<option>  Eslovénia</option>
					<option>  Espanha</option>
					<option>  Estados Unidos</option>
					<option>  Estónia</option>
					<option>  Etiópia</option>
					<option>  Faroé</option>
					<option>  Fiji</option>
					<option>  Filipinas</option>
					<option>  Finlândia</option>
					<option>  França</option>
					<option>  Gabão</option>
					<option>  Gâmbia</option>
					<option>  Gana</option>
					<option>  Gaza Strip</option>
					<option>  Geórgia</option>
					<option>  Geórgia do Sul e Sandwich do Sul</option>
					<option>  Gibraltar</option>
					<option>  Granada</option>
					<option>  Grécia</option>
					<option>  Gronelândia</option>
					<option>  Guame</option>
					<option>  Guatemala</option>
					<option>  Guernsey</option>
					<option>  Guiana</option>
					<option>  Guiné</option>
					<option>  Guiné Equatorial</option>
					<option>  Guiné-Bissau</option>
					<option>  Haiti</option>
					<option>  Honduras</option>
					<option>  Hong Kong</option>
					<option>  Hungria</option>
					<option>  Iémen</option>
					<option>  Ilha Bouvet</option>
					<option>  Ilha do Natal</option>
					<option>  Ilha Norfolk</option>
					<option>  Ilhas Caimão</option>
					<option>  Ilhas Cook</option>
					<option>  Ilhas dos Cocos</option>
					<option>  Ilhas Falkland</option>
					<option>  Ilhas Heard e McDonald</option>
					<option>  Ilhas Marshall</option>
					<option>  Ilhas Salomão</option>
					<option>  Ilhas Turcas e Caicos</option>
					<option>  Ilhas Virgens Americanas</option>
					<option>  Ilhas Virgens Britânicas</option>
					<option>  Índia</option>
					<option>  Indian Ocean</option>
					<option>  Indonésia</option>
					<option>  Irão</option>
					<option>  Iraque</option>
					<option>  Irlanda</option>
					<option>  Islândia</option>
					<option>  Israel</option>
					<option>  Itália</option>
					<option>  Jamaica</option>
					<option>  Jan Mayen</option>
					<option>  Japão</option>
					<option>  Jersey</option>
					<option>  Jibuti</option>
					<option>  Jordânia</option>
					<option>  Kuwait</option>
					<option>  Laos</option>
					<option>  Lesoto</option>
					<option>  Letónia</option>
					<option>  Líbano</option>
					<option>  Libéria</option>
					<option>  Líbia</option>
					<option>  Listenstaine</option>
					<option>  Lituânia</option>
					<option>  Luxemburgo</option>
					<option>  Macau</option>
					<option>  Macedónia</option>
					<option>  Madagáscar</option>
					<option>  Malásia</option>
					<option>  Malávi</option>
					<option>  Maldivas</option>
					<option>  Mali</option>
					<option>  Malta</option>
					<option>  Man, Isle of</option>
					<option>  Marianas do Norte</option>
					<option>  Marrocos</option>
					<option>  Maurícia</option>
					<option>  Mauritânia</option>
					<option>  Mayotte</option>
					<option>  México</option>
					<option>  Micronésia</option>
					<option>  Moçambique</option>
					<option>  Moldávia</option>
					<option>  Mónaco</option>
					<option>  Mongólia</option>
					<option>  Monserrate</option>
					<option>  Montenegro</option>
					<option>  Mundo</option>
					<option>  Namíbia</option>
					<option>  Nauru</option>
					<option>  Navassa Island</option>
					<option>  Nepal</option>
					<option>  Nicarágua</option>
					<option>  Níger</option>
					<option>  Nigéria</option>
					<option>  Niue</option>
					<option>  Noruega</option>
					<option>  Nova Caledónia</option>
					<option>  Nova Zelândia</option>
					<option>  Omã</option>
					<option>  Pacific Ocean</option>
					<option>  Países Baixos</option>
					<option>  Palau</option>
					<option>  Panamá</option>
					<option>  Papua-Nova Guiné</option>
					<option>  Paquistão</option>
					<option>  Paracel Islands</option>
					<option>  Paraguai</option>
					<option>  Peru</option>
					<option>  Pitcairn</option>
					<option>  Polinésia Francesa</option>
					<option>  Polónia</option>
					<option>  Porto Rico</option>
					<option>  Portugal</option>
					<option>  Quénia</option>
					<option>  Quirguizistão</option>
					<option>  Quiribáti</option>
					<option>  Reino Unido</option>
					<option>  República Centro-Africana</option>
					<option>  República Checa</option>
					<option>  República Dominicana</option>
					<option>  Roménia</option>
					<option>  Ruanda</option>
					<option>  Rússia</option>
					<option>  Salvador</option>
					<option>  Samoa</option>
					<option>  Samoa Americana</option>
					<option>  Santa Helena</option>
					<option>  Santa Lúcia</option>
					<option>  São Cristóvão e Neves</option>
					<option>  São Marinho</option>
					<option>  São Pedro e Miquelon</option>
					<option>  São Tomé e Príncipe</option>
					<option>  São Vicente e Granadinas</option>
					<option>  Sara Ocidental</option>
					<option>  Seicheles</option>
					<option>  Senegal</option>
					<option>  Serra Leoa</option>
					<option>  Sérvia</option>
					<option>  Singapura</option>
					<option>  Síria</option>
					<option>  Somália</option>
					<option>  Southern Ocean</option>
					<option>  Spratly Islands</option>
					<option>  Sri Lanca</option>
					<option>  Suazilândia</option>
					<option>  Sudão</option>
					<option>  Suécia</option>
					<option>  Suíça</option>
					<option>  Suriname</option>
					<option>  Svalbard e Jan Mayen</option>
					<option>  Tailândia</option>
					<option>  Taiwan</option>
					<option>  Tajiquistão</option>
					<option>  Tanzânia</option>
					<option>  Território Britânico do Oceano Índico</option>
					<option>  Territórios Austrais Franceses</option>
					<option>  Timor Leste</option>
					<option>  Togo</option>
					<option>  Tokelau</option>
					<option>  Tonga</option>
					<option>  Trindade e Tobago</option>
					<option>  Tunísia</option>
					<option>  Turquemenistão</option>
					<option>  Turquia</option>
					<option>  Tuvalu</option>
					<option>  Ucrânia</option>
					<option>  Uganda</option>
					<option>  União Europeia</option>
					<option>  Uruguai</option>
					<option>  Usbequistão</option>
					<option>  Vanuatu</option>
					<option>  Vaticano</option>
					<option>  Venezuela</option>
					<option>  Vietname</option>
					<option>  Wake Island</option>
					<option>  Wallis e Futuna</option>
					<option>  West Bank</option>
					<option>  Zâmbia</option>
					<option>  Zimbabué</option>

				</SELECT>
				
			</div>
		</div>
			
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Data  Desejável do Embarque:
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<input type='text'>
				
			</div>
		</div>	
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Data  Desejável da Entrega do Produto:
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<input type='text'>
				
			</div>
		</div>	
		
		<div style="display: table-row; background-color:#eeeeee;">
			<div style="display: table-cell;width:200px ">
				<b>
					Produtos 
                                        
				</b>			
			</div>
			<div style="display: table-cell;">
			
				&nbsp;
				
			</div>
		</div>
		<div style="display: table-row; ">
			<div style="display: table-cell;width:200px ">
				<b>
					Adicionar produtos:
				</b>			
			</div>
			<div style="display: table-cell;">
			
				<table>
				<tr>
					<td>
						Produto:
					</td>
					<td colspan='2'> 
						<select style='width:255px;padding:0px;margin:0px'>
							
							<option>Sapato 1</option>
							<option>Sapato 2</option>
							<option>Sapato 3</option>
							<option>Sapato 4</option>
							<option>Sapato 5</option>
						
						</select>
					</td>
					</tr>
                                        <tr>
					<td>
						Código armonizado:
					</td>
					<td colspan='2'> 
                                            <input type='text' value='123456789' disabled="disabled">
					</td>
					</tr>
                                        
					
                                         <tr>
						<td>
							Unidade de medida:
						</td>
						<td colspan='2'>
                                                     <select style='margin:0px;pading:0px;'>
                                                         
                                                           <option>--</option>
                                                           <option>metro</option>
                                                           <option>m²</option>
                                                           <option>m³</option>
                                                           <option>Kg</option>
                                                           <option>unidade</option>
                                                           <option>litro</option>
                                                         
                                                     </select>
						</td>
					</tr>
                                        
                                        
                                        <tr>
						<td>
							Quantidade:
						</td>
						<td colspan='2'>
							<input type='text' style='width:250px'>
						</td>
					</tr>
					<tr>
						<td>
							Moeda:
						</td>
						<td>
							<?php require 'select_moedas.php'; ?>
						</td>
						<td>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td>
							Preço unitário:
						</td>
						<td>
							<input type='text'  style='width:250px'>
						</td>
						<td>
							<input type='button' value='Incluir'>
						</td>
					</tr>
				</table>
				
			</div>
		</div>
		
	</div><!-- fim da div tabela -->		
	<div align='center'>
	
		
		<table border='1' width='90%'>
			<caption>Produtos Inclusos</caption>
			<tr>
				<th>Produtos</th>
				<th>Restrições</th>
				<th>Qtd.</th>
				
				<th>Preço Unitário</th>
				<th>Preço Total</th>
				<th>Ação</th>
			</tr>
			<tr>
				<td>Sapato 1</td>
				<td><center><a href='javascript:void(0);' onclick='alert("Restrições de Órgãos Anuentes:\n\nÓrgão: Ministério da Defesa\nRestrição: Bota Militar")'><font color='red'>Ver Restrições</font></center></td>
				<td align='right'>3</td>
				
				<td align='right'>R$ 100,00</td>
				<td align='right'>R$ 300,00</td>
				<th><a href='#'>Remover</a></th>
			</tr>
			<tr>
				<td>Sapato 2</td>
				<td><center>-</center></td>
				<td align='right'>100</td>
				
				<td align='right'>R$ 50,00</td>
				<td align='right'>R$ 5000,00</td>
				<th><a href='#'>Remover</a></th>
			</tr>
			<tr bgcolor='#eeeeee'>
				
				<td align='' colspan='4'>Total Geral</td>
				<td align='right' colspan='1'>R$ 5300,00</td>
				<td align='right' colspan='1'>&nbsp;</td>
			</tr>
		</table>
		
		
		
            
            
            
		<p>&nbsp;</p>
                
                <div style="width: 100%; display: table;border-spacing: 0 13px;">	
		
		
		<div style="display: table-row; background-color:#eeeeee;">
			<div style="display: table-cell;text-align: left ">
				<b>
					Volumes
				</b>			
			</div>
			
		</div>
                    </div>
                
                <div style='text-align: left'>
                <table>
                                        <tr>
						<td>Tipo de embalagem:</td>
                                                <td colspan='2'>
                                                    
                                                    <select style='padding: 0px;margin: 0px'>
                                                        
                                                        <option>Papelão</option>
                                                        <option>Madeira</option>
                                                        <option>Plástico</option>
                                                        
                                                    </select>
                                                    
                                                </td>
					</tr>
					<tr>
						<td>Número do Volume:</td>
						<td><input type='text' colspan='2'> </td>
					</tr>
					<tr>
						<td>Número de Volumes:</td>
						<td><input type='text' colspan='2'> </td>
					</tr>
                                        
                                        <tr>
						<td>Peso bruto:</td>
						<td colspan='2'><input type='text'> (Kg)</td>
					</tr>
					<tr>
						<td>Peso líquido:</td>
						<td><input type='text' colspan='2'> (Kg)</td>
					</tr>					
					<tr>
						<td>Volume:</td>
						<td><input type='text'> (m³)</td>
						
					</tr>
                </table>
                
                 <input type='button' value='Adicionar Volume'>
                 </div>
                 
                <p>
                    <div style='width:100%'>
                 <table border='1' width='100%'>
                        <caption>Volumes Adicionados</caption>
                            <tr>
                                    <th>Número do volume</th>
                                    <th>Tipo de embalagem</th>

                                    <th>Número de Volumes</th>                                               
                                    <th>Peso Bruto (Kg)</th>
                                    <th>Peso Líquido (Kg)</th>
                                    <th>Volume (m³)</th>					
                            </tr>
                            <tr>
                                    <td align='right'>1</td>
                                    <td>Madeira</td>
                                    <td align='right'>4</td>                                                
                                    <td  align='right'>10,000</td>
                                    <td  align='right'> 9,500</td>
                                    <td  align='right'>1,000</th>					
                            </tr>
                            <tr>
                                    <td align='right'>2</td>
                                    <td>Plástico</td>
                                    <td align='right'>5</td>                                                
                                    <td  align='right'>1,000</td>
                                    <td  align='right'>8,000</td>
                                    <td  align='right'>0,100</th>					
                            </tr>
                            
										
                </table></div>
                
                 <div style='width:100%; text-align: right'><p/>
                     <div>
                  <input type='button' value='Simular' onclick='javascript:
			
                                        document.getElementById("ddddddd").style.display = "block";
			
                                       '></div></div>
                
                
		<div align='center'>
		
		<p/>
			<center>
                        
                        <p>
                        <div id='ddddddd' style='display:none'>
                            
                            
                                            <div style="width: 100%; display: table;border-spacing: 0 13px;">	
		
		
		<div style="display: table-row; background-color:#eeeeee;">
			<div style="display: table-cell;text-align: left ">
				<b>
Operadores Logísticos Disponíveis				</b>			
			</div>
			
		</div>
                    </div>
                       <table width='90%' border='1'>
				
				<tr>
					<th>OL</th>
					<th>Nome do Serviço</th>
					<th>Via</th>
					<th>Prazo</th>	
                                        <th>Data de Validade <br/>da Proposta</th>	
					<th>Valor</th>			
					
				</tr>
				
				<tr>
					<td rowspan='3' align='center'>Correios</td>
					<td align='center'>Encomenda Normal</td>
					<td align='center'>Mista</td>
					<td align='center'>30 dias</td>
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 30,00</td>							
					
				</tr>
				<tr>
					
					<td align='center'> Sedex</td>
					<td align='center'>Terrestre</td>
					<td align='center'>12 dias</td>			
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 50,00</td>							

				</tr>
				<tr>
					
					<td align='center'>Sedex 10</td>
					<td align='center'>Aérea</td>
					<td align='center'>5 dias</td>	
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 150,00</td>							
					
				</tr>
				
				<tr>
					<td rowspan='2' align='center'>UPS</td>
					<td align='center'>UPS Simples Normal</td>
					<td align='center'>Mista</td>
					<td align='center'>30 dias</td>	
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 25,00</td>							
					
				</tr>
				<tr>
					
					<td align='center'> UPS Expressa</td>
					<td align='center'>Aérea</td>
					<td align='center'>3 dias</td>	
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 200,00</td>							
					
				</tr>
				<tr>
					<td rowspan='1' align='center'>DHL</td>
					<td align='center'>DHL - expressa plus</td>
					<td align='center'>Mista</td>
					<td align='center'>2 dias</td>	
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 330,00</td>							
					
				</tr>
				<tr>
					<td rowspan='2' align='center'>FEDEX</td>
					<td align='center'> FEDEX - 1</td>
					<td align='center'>Marítima</td>
					<td align='center'>30 dias</td>	
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 34,00</td>							
					
				</tr>
				<tr>
					
					<td align='center'> FEDEX - 2</td>
					<td align='center'>Mista</td>
					<td align='center'>5 dias</td>	
                                        <td align='center'>10/10/2014</td>
					<td align='right'>R$ 120,00</td>							
					
				</tr>
				
                </table></div>
                        
                        
                        </center>
                
                
			
		</div>
		
	</div>
	
	
</div>