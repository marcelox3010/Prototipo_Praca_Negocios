<div>
					 <?php
						
						if($numero_componente == ''){
							$numero_componente = '1';
						}
						
					 ?>
					 
					 <select style='width:200px;padding:0px;margin:0px;' width='300px'
					
					
						onchange='javascript:
						
							document.getElementById("div_muni<?php echo $numero_componente; ?>").innerHTML="";
						
							if(this.value=="Todos"){
						
								document.getElementById("NO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("NE<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("CO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("SE<?php echo $numero_componente; ?>").style.display = "none";							
								document.getElementById("SU<?php echo $numero_componente; ?>").style.display = "none";
								
								
							}
							if(this.value=="NO"){
						
								document.getElementById("NO<?php echo $numero_componente; ?>").style.display = "block";
								document.getElementById("NE<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("CO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("SE<?php echo $numero_componente; ?>").style.display = "none";							
								document.getElementById("SU<?php echo $numero_componente; ?>").style.display = "none";
								
								document.getElementById("NO<?php echo $numero_componente; ?>").value = "Todos";
								
							}
							
							else if(this.value=="NE"){
						
								document.getElementById("NO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("NE<?php echo $numero_componente; ?>").style.display = "block";
								document.getElementById("CO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("SE<?php echo $numero_componente; ?>").style.display = "none";							
								document.getElementById("SU<?php echo $numero_componente; ?>").style.display = "none";
								
								document.getElementById("NE<?php echo $numero_componente; ?>").value = "Todos";
							
							}
							
							else if(this.value=="CO"){
						
								document.getElementById("NO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("NE<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("CO<?php echo $numero_componente; ?>").style.display = "block";
								document.getElementById("SE<?php echo $numero_componente; ?>").style.display = "none";							
								document.getElementById("SU<?php echo $numero_componente; ?>").style.display = "none";
								
								document.getElementById("CO<?php echo $numero_componente; ?>").value = "Todos";
							
							}
							
							else if(this.value=="SE"){
						
								document.getElementById("NO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("NE<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("CO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("SE<?php echo $numero_componente; ?>").style.display = "block";							
								document.getElementById("SU<?php echo $numero_componente; ?>").style.display = "none";
								
								document.getElementById("SE<?php echo $numero_componente; ?>").value = "Todos";
							
							}
							
						
							else if(this.value=="SU"){
						
								document.getElementById("NO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("NE<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("CO<?php echo $numero_componente; ?>").style.display = "none";
								document.getElementById("SE<?php echo $numero_componente; ?>").style.display = "none";							
								document.getElementById("SU<?php echo $numero_componente; ?>").style.display = "block";
								
								document.getElementById("SU<?php echo $numero_componente; ?>").value = "Todos";
							
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
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='NO<?php echo $numero_componente; ?>' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni<?php echo $numero_componente; ?>"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="AC" >Acre</option>
					  <option value="AP">Amapá</option>															  					  
					  <option value="AM">Amazonas</option>															  					  		  
					  <option value="PA">Pará</option>															  
					  <option value="RO">Rondônia</option>															  
					  <option value="RR">Roraima</option>															  					  
					  <option value="TO">Tocantins</option>															  
				</select>
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='NE<?php echo $numero_componente; ?>' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni<?php echo $numero_componente; ?>"); else document.getElementById("div_muni").innerHTML="";'>
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
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='CO<?php echo $numero_componente; ?>' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni<?php echo $numero_componente; ?>"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="DF">Distrito Federal</option>															  
					  <option value="GO">Goiás</option>															  
					  <option value="MT">Mato Grosso</option>															  
					  <option value="MS">Mato Grosso do Sul</option>															  
				</select>				
				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SE<?php echo $numero_componente; ?>' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni<?php echo $numero_componente; ?>"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="ES">Espírito Santo</option>															  
					  <option value="MG">Minas Gerais</option>															  
					  <option value="RJ">Rio de Janeiro</option>															  
					  <option value="SP">São Paulo</option>		
				</select>				
				<select style='width:200px;padding:0px;margin:0px;display:none;' id='SU<?php echo $numero_componente; ?>' onchange='javascript:if(this.value!="Todos") ajax_estados(this.value, "div_muni<?php echo $numero_componente; ?>"); else document.getElementById("div_muni").innerHTML="";'>
					  <option value="Todos">Todos</option>
					  <option value="PR">Paraná</option>															  
					  <option value="RS">Rio Grande do Sul</option>															  
					  <option value="SC">Santa Catarina</option>
				</select>				
				
				
				</div>
				<div id='div_muni<?php echo $numero_componente; ?>'></div>