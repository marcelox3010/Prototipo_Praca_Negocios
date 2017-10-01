<html>

	<head>
		
                <STYLE TYPE="text/css">
               
                TD{font-family: Arial; font-size: 9pt;}
               
                </STYLE>
            
                <meta charset="UTF-8"/>
		<title>
			
			Protótipo - Tela 1
			
		</title>
                
                
                <script src="js/lightbox/js/jquery-1.11.0.min.js"></script>
                
                <!-- Add mousewheel plugin (this is optional) -->
                <script type="text/javascript" src="js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>

                <!-- Add fancyBox main JS and CSS files -->
                <script type="text/javascript" src="js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
                <link rel="stylesheet" type="text/css" href="js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />

                <!-- Add Button helper (this is optional) -->
                <link rel="stylesheet" type="text/css" href="js/fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
                <script type="text/javascript" src="js/fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

                <!-- Add Thumbnail helper (this is optional) -->
                <link rel="stylesheet" type="text/css" href="js/fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
                <script type="text/javascript" src="js/fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

                <!-- Add Media helper (this is optional) -->
                <script type="text/javascript" src="js/fancy/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
                
                <script type="text/javascript">
                    $(document).ready(function() {
                            /*
                             *  Simple image gallery. Uses default settings
                             */

                            $('.fancybox').fancybox();

                            /*
                             *  Different effects
                             */

                            // Change title type, overlay closing speed
                            $(".fancybox-effects-a").fancybox({
                                    helpers: {
                                            title : {
                                                    type : 'outside'
                                            },
                                            overlay : {
                                                    speedOut : 0
                                            }
                                    }
                            });

                            // Disable opening and closing animations, change title type
                            $(".fancybox-effects-b").fancybox({
                                    openEffect  : 'none',
                                    closeEffect	: 'none',

                                    helpers : {
                                            title : {
                                                    type : 'over'
                                            }
                                    }
                            });

                            // Set custom style, close if clicked, change title type and overlay color
                            $(".fancybox-effects-c").fancybox({
                                    wrapCSS    : 'fancybox-custom',
                                    closeClick : true,

                                    openEffect : 'none',

                                    helpers : {
                                            title : {
                                                    type : 'inside'
                                            },
                                            overlay : {
                                                    css : {
                                                            'background' : 'rgba(238,238,238,0.85)'
                                                    }
                                            }
                                    }
                            });

                            // Remove padding, set opening and closing animations, close if clicked and disable overlay
                            $(".fancybox-effects-d").fancybox({
                                    padding: 0,

                                    openEffect : 'elastic',
                                    openSpeed  : 150,

                                    closeEffect : 'elastic',
                                    closeSpeed  : 150,

                                    closeClick : true,

                                    helpers : {
                                            overlay : null
                                    }
                            });

                            /*
                             *  Button helper. Disable animations, hide close button, change title type and content
                             */

                            $('.fancybox-buttons').fancybox({
                                    openEffect  : 'none',
                                    closeEffect : 'none',

                                    prevEffect : 'none',
                                    nextEffect : 'none',

                                    closeBtn  : false,

                                    helpers : {
                                            title : {
                                                    type : 'inside'
                                            },
                                            buttons	: {}
                                    },

                                    afterLoad : function() {
                                            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                                    }
                            });


                            /*
                             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
                             */

                            $('.fancybox-thumbs').fancybox({
                                    prevEffect : 'none',
                                    nextEffect : 'none',

                                    closeBtn  : false,
                                    arrows    : false,
                                    nextClick : true,

                                    helpers : {
                                            thumbs : {
                                                    width  : 50,
                                                    height : 50
                                            }
                                    }
                            });

                            /*
                             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
                            */
                            $('.fancybox-media')
                                    .attr('rel', 'media-gallery')
                                    .fancybox({
                                            openEffect : 'none',
                                            closeEffect : 'none',
                                            prevEffect : 'none',
                                            nextEffect : 'none',

                                            arrows : false,
                                            helpers : {
                                                    media : {},
                                                    buttons : {}
                                            }
                                    });

                            /*
                             *  Open manually
                             */

                            $("#fancybox-manual-a").click(function() {
                                    $.fancybox.open('1_b.jpg');
                            });

                            $("#fancybox-manual-b").click(function() {
                                    $.fancybox.open({
                                            href : 'iframe.php',
                                            type : 'iframe',
                                            padding : 4
                                            
                                    });
                            });

                            $("#fancybox-manual-c").click(function() {
                                    $.fancybox.open([
                                            {
                                                    href : '1_b.jpg',
                                                    title : 'My title'
                                            }, {
                                                    href : '2_b.jpg',
                                                    title : '2nd title'
                                            }, {
                                                    href : '3_b.jpg'
                                            }
                                    ], {
                                            helpers : {
                                                    thumbs : {
                                                            width: 75,
                                                            height: 50
                                                    }
                                            }
                                    });
                            });


                    });
            </script>
            <style type="text/css">
                    .fancybox-custom .fancybox-skin {
                            box-shadow: 0 0 50px #222;
                           
                    }

                    body {
                            //max-width: 700px;
                            //margin: 0 auto;
                    }
            </style>
                
                                         
	
	</head>

	<body style='margin:0px; font-size: 13 ;font-family: arial'>
		
		<!-- CABEï¿½ALHO -->
		<div style='width:777px;margin: 0px auto'>
		
			<img src='topo_siasg.jpg'/>
		
		</div>
		
		<!-- MENU -->
		<div style='background-color:#f8a227;width:777px;margin: 0px auto; '>
		
			<div style='display:table; width:100%'>
			
				<div style='display:table-row'>
					
					<div style='display:table-cell'>
						
						<div align='center' ><font color='white'>Licitação</font></div>
					
					</div>
						
					<div style='display:table-cell'>
						
						<div align='center'><font color='white'>Dispensa/Inexigibilidade</font></div>
					
					</div>
					
					<div style='display:table-cell'>
						
						<div align='center'><font color='white'>Pedido de Cotação</font></div>
					
					</div>
						
					<div style='display:table-cell'>					
						
						<div align='center'><font color='white'>Eventos</font></div>
					
					</div>
					
					<div style='display:table-cell'>
					
						<div align='center'><font color='white'>Sub-rogação</font></div>
					
					</div>
					
					<div style='display:table-cell'>					
					
						<div align='center'><font color='white'>Apoio</font></div>
						
					</div>
					
					<div style='display:table-cell'>
					
						<div align='right'><font color='white'>Sair</font></div>
					
					</div>
				
				</div>
				
			</div>
			
		</div>
		
		<!-- Detalhes -->
		
		<div style='background-color:#d7d6c4;width:777px;margin: 0px auto'>
						
			<div style='display:table; width:100%'>
				
                                <div style='display:table-row'>
					
					<div style='display:table-cell'>
						
                                             &nbsp;
                                                 
						
					</div>
                                </div>
                               
                            
				<div style='display:table-row'>
					
					<div style='display:table-cell'>
						
						Ambiente: <b>Produção</b>
                                                 
						
					</div>
			
					<div style='display:table-cell'>
						
						<div align='center'><h3>Incluir Aviso de Licitação</h3></div>
					
					</div>
			
					<div style='display:table-cell;'>
						
						<div align='right'>12/03/2015 17:37:08</div>
						
					</div>
				
				</div>
			
		</div>
		
		<!-- Formulário -->
		<div style='background-color:#f4f4f4;width:777px;margin: 0px auto' >
			
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:100%'>
							&nbsp;
					</div>
				</div>
			</div>
			
			<!-- Primeira Linha -->
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:50%px'>
							Órgão
					</div>
					<div style='display: table-cell;width:50%'>
							UASG Responsável
					</div>
				</div>
			</div>
			
			<!-- Segunda Linha -->
			<div style='display: table;width:100%'>
				<div style='display: table-row;'>
					<div style='display: table-cell;width:50%'>
                                            <input style='width:98%' type='text' value='20101 - PRESIDENCIA DA REPUBLICA' disabled='disabled'>
					</div>
					<div style='display: table-cell;width:50%'>
                                            <input style='width:98%' type='text' value='690001 - SECRETARIA ESPECIAL DA MICRO EMPRESA' disabled='disabled'>
					</div>
				</div>
			</div>
			
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:100%'>
							&nbsp;
					</div>
				</div>
			</div>
			
			<!-- Terceira Linha -->
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:25%'>
							Modalidade da Licitação
					</div>
					<div style='display: table-cell;width:25%'>
							Número da Licitação
					</div>
					<div style='display: table-cell;width:25%'>
							Forma de Realização
					</div>
					<div style='display: table-cell;width:25%'>
							Características
					</div>
				</div>
			</div>
			
			<!-- Quarta Linha -->
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:25%'>
							<input type='text' value='Pregão' disabled='disabled'>
					</div>
					<div style='display: table-cell;width:25%'>
							<input type='text' value='00001/2015' disabled='disabled'>
					</div>
					<div style='display: table-cell;width:25%'>
							<input type='text' value='Eletrônico' disabled='disabled'>
					</div>
					<div style='display: table-cell;width:25%'>
							<input type='text' value='Tradicional' disabled='disabled'>
					</div>
				</div>
			</div>
			
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:100%'>
							&nbsp;
					</div>
				</div>
			</div>
			
			<!-- Quinta Linha -->
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:25%'>
							Quantidade de itens
					</div>
					<div style='display: table-cell;width:25%'>
							Total de itens incluídos
					</div>	
					<div style='display: table-cell;width:25%'>
							&nbsp;
					</div>	
					<div style='display: table-cell;width:25%'>
							&nbsp;
					</div>						
				</div>
			</div>
			
			<!-- Sexta Linha -->
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					<div style='display: table-cell;width:25%'>
							<input type='text' value='15' disabled='disabled'>
					</div>
					<div style='display: table-cell;width:25%'>
							<input type='text' value='0' disabled='disabled'>
					</div>				
					<div style='display: table-cell;width:25%'>
							&nbsp;
					</div>	
					<div style='display: table-cell;width:25%'>
							&nbsp;
					</div>			
				</div>
			</div>
			
			<div style='display: table;width:100%'>
				<div style='display: table-row;width:100%'>
					
					<div style='display: table-cell;width:100%'>
					
							&nbsp;
							
					</div>
					
				</div>
			</div>
			
		</div>
		
		
		<!-- Produtos -->
		
		<div>
			
			<fieldset>
			
				<legend>Item</legend>
				
				<div id='div_produtos'></div>
                                
                                
                                <?php
                                    //print_r($_REQUEST);
                                    $produtos = "";
                                    foreach($_REQUEST['produto'] as $prod){
                                        
                                        $produtos .= "produto[]=".$prod."&"; 
                                        
                                    }
                                
                                ?>
                                
                                <div align="right"><a class="fancybox fancybox.iframe" href="iframe.php?<?php echo $produtos; ?>">Adicionar Produtos</a></div>
                                
                                <?php
                                
                                    if(is_array($_REQUEST['produto'])){
                                        
                                        echo "<table style='width:100%;text;border-width:thin;border-spacing:0px;border-style:none;border-color:black' border='1'>"
                                        . "         <caption style='font-family: Arial; font-size: 9pt;'>Lista de Produtos</caption>";
                                        
                                        foreach ($_REQUEST['produto'] as $prodx){

                                            $queryx = "select cod,pt from cpv_codes where  cod = '".$prodx."'";

                                            $conexao= pg_connect("host=localhost port=5432 dbname=praca_negocios user=postgres password=mdsdti");

                                            $resultado = pg_query($conexao, $queryx);

                                            $linha = pg_fetch_array($resultado);

                                            echo "<tr><td>" . $linha['pt'] . "</td>"
                                                    . "<td align=center ><a class='fancybox fancybox.iframe' href='detalhar.php?produto=".$linha[cod]."'>Detalhar</a></td>"
                                                    . "<td align=center><a href='tela1.php'>Remover</a></td></tr>";
                                        }
                                        
                                        echo "</table>";
                                        
                                    }else{
                                        
                                        echo "<p>Nenhum produto adicionado ao certame</p>";
                                        
                                    }
                                
                                ?>
				
			</fieldset>
		
		</div>
		
		<div style='display: table;width:100%'>
                    
                    <div style='display: table-row;width:100%'>
                    
                            <div style='display: table-cell;width:100%'>
                                
                                &nbsp;
                                
                            </div>
                        
                    </div>
                    
		</div>
		
		<!-- Rodapé -->
		<div style='background-color:#cdcdcd;width:777px;margin: 0px auto; width:100%'>
		            
                    <center>
                        
                        <img src='serpro.gif'>
                        
                    </center>
                	
		</div>
	
	</body>


</html>