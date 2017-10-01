<?php
    
    //print_r($_REQUEST);
    
    /* 
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    
    if($_REQUEST['funcao'] == 'lista_produtos'){
        
        if(strlen($_REQUEST['q']) <= 2){
            
            echo "Digite pelo menos 3 caracteres.";
            
        }else{
            
            $q = $_REQUEST['q'];
            require 'cpm_search.php';            
            
            if(count($array)){
                
                foreach($array as $linha){
                    
                    echo "<div><a href='javascript:void(0);'"
                                    . " onclick='javascript:"
                                    . "detalha_produto(\"".$linha['cod']."\"); "
                                    . "document.getElementById(\"livesearch\").style.display=\"none\"'"
                                    . ">".$linha['pt']."</a></div>";
                    
                }
                
            }else{
                
                echo "Produto não encontrado";
                
            }
            echo "<div><a href='javascript:void(0)' onclick='javascript:detalha_produto(\"novo\");' style='text-decoration:underline'>Cadastrar Novo Produto.</a></div>";
            
        }
        
    }elseif($_REQUEST['funcao'] == 'detalha_produto'){
        
        $query = "select id, cod, pt from cpv_codes
                        where

                        ( (substring(cod from 1 for 2) = substring('".$_REQUEST['q']."' from 1 for 2)) and (substring(cod from 3 for 6) = '000000') )

                        or

                        ( (substring(cod from 1 for 3) = substring('".$_REQUEST['q']."' from 1 for 3)) and (substring(cod from 4 for 5) = '00000') )

                        or

                        ( (substring(cod from 1 for 4) = substring('".$_REQUEST['q']."' from 1 for 4)) and (substring(cod from 5 for 4) = '0000') )

                        or

                        ( (substring(cod from 1 for 5) = substring('".$_REQUEST['q']."' from 1 for 5)) and (substring(cod from 6 for 3) = '000') )
                        
                        or

                        ( cod = '".$_REQUEST['q']."' )


                        order by

                        cod";
        
        
        $conexao= pg_connect("host=localhost port=5432 dbname=praca_negocios user=postgres password=mdsdti");

        $resultado = pg_query($conexao, $query);
        
        if($_REQUEST['q'] != 'novo'){
            
            $linha = pg_fetch_array($resultado);
            $p1 = $linha['pt'];
            
            $linha = pg_fetch_array($resultado);
            $p2 = $linha['pt'];
            
            $linha = pg_fetch_array($resultado);
            $p3 = $linha['pt'];
            
            $linha = pg_fetch_array($resultado);
            $p4 = $linha['pt'];
            
            $linha = pg_fetch_array($resultado);
            $p5 = $linha['pt'];
            
        }else{
            
            $query2 = "select codigo_principal, produto from tb_prod_ncm
                            group by codigo_principal, produto
                            order by produto ";
            
            $resultado2 = pg_query($conexao, $query2);
            
            $p1 =   "<select style='padding:0px;margin:0px'>";
                
            while ($linha2 = pg_fetch_array($resultado2)){
                
                $x .=  "<option>".$linha2['codigo_principal']. " - ". $linha2['produto'] ."</option>";
                
            }
            
            $p1 .= $x;                    
            $p1 .=  "</select>";
              
            $p2 =   "<select style='padding:0px;margin:0px'>";
            $p2 .= $x;                    
            $p2 .=  "</select>";
            
            $query3 = "select codigo_tipo, tipo from tb_prod_ncm
                            group by codigo_tipo, tipo
                            order by tipo ";
            
            $resultado3 = pg_query($conexao, $query3);
            
            $p3 =   "<select style='padding:0px;margin:0px'>";
                
            while ($linha3 = pg_fetch_array($resultado3)){
                
                $y .=  "<option>".$linha3['codigo_tipo']. " - ". $linha3['tipo'] ."</option>";
                
            }
            
            $p3 .= $y;                    
            $p3 .=  "</select>";
            
        }
        
        
        
        $tabs = '   
                    
                    <div id="tabs" style="display:none; font-size:16;font-family: Georgia, Serif;">
                            
                            <h5>Caractarísticas do Produto</h5>
                            <ul>
                                    <li><a href="#tabs-1"><font size="2">Características</font></a></li>
                                    <li><a href="#tabs-2"><font size="2">Processo Produtivo</font></a></li>
                                    <li><a href="#tabs-3"><font size="2">Condições de Venda</font></a></li>
                            </ul>
                            <div id="tabs-1">';
              
        $query_secoes = "select * from cpv_secoes                           
                            order by secao, categoria";
                 
        $resultado_secoes = pg_query($conexao, $query_secoes);
        while ($linha_secao = pg_fetch_array($resultado_secoes)){
             
            $javascript .= "document.getElementById(\"div_secao_".$linha_secao['secao']."\").style.display = \"none\";
                           "; 
             
            $javascript2 .= "
                                document.getElementById(\"div_primeira_secao_".$linha_secao['secao']."\").style.color = \"#3a82a9\";
                                document.getElementById(\"div_primeira_secao_".$linha_secao['secao']."\").style.backgroundColor = \"#d3d8db\";    
                            ";
                                               
        }
        
        $query_secoes = "select * from cpv_secoes                           
                            order by secao, categoria";
                 
        $resultado_secoes = pg_query($conexao, $query_secoes);
            
        $tabs .= "<h4>Adicionar Características ao Produto</h4>";
        $tabs .= "Defina as características:";
        $tabs .= '<table border="1" width="100%" style="width:100%;border-width:thin;border-spacing:0px;border-style:none;border-color:black">';
        
        $j = 0;
        $array_nomes = Array();
        
        while ($linha_secao = pg_fetch_array($resultado_secoes)){
                
            if ($j == 0) echo "<tr>";
            
            if($linha_secao['categoria'] == '0'){    
                $tabs .= "<td><div id='div_primeira_secao_".$linha_secao['secao']."' align='center' 
                                            style='
                                                display: table-cell;
                                                height:90px;
                                                width:250px;
                                                background-color:#d3d8db;
                                                color:#3a82a9;
                                                vertical-align:middle;
                                                
                                            '
                                            onclick='javascript:
                                               $javascript2
                                                document.getElementById(\"div_primeira_secao_".$linha_secao['secao']."\").style.color = \"#fcb639\";
                                                document.getElementById(\"div_primeira_secao_".$linha_secao['secao']."\").style.backgroundColor = \"#009588\";    
                                                
                                                $javascript
                                                
                                                document.getElementById(\"div_secao_".$linha_secao['secao']."\").style.display = \"block\";
                                                
                                      '><a href='javascript:void(0);'>".$linha_secao['descricao'] . "</a></div></td>";
                $j++;
            }
            
            $array_nomes[$linha_secao['secao']][$linha_secao['categoria']] = $linha_secao['pt'];
            
            if ($j == 4) {$tabs .= "</tr>"; $j =0; }
           
           
        }
             
        $tabs .= "</table>";
        
        $query_grupos = "select * from 
                            (select 	substring(cod from 1 for 1) as secao,
                                        substring(cod from 2 for 1) as grupo, 
                                        cod, 
                                        pt 
                                from cpv_vs
                                order by cod) a

                            order by secao, grupo";
                
       $resultado_grupos = pg_query($conexao, $query_grupos);
        
        $secao_anterior =  '';
        $divs = array();
        
        
        while ($linha_grupos = pg_fetch_array($resultado_grupos)){
            
            $divs[$linha_grupos['secao']][$linha_grupos['grupo']][] = 
                       
                    "<input type='checkbox'> " . $linha_grupos['pt'];
                       
        }
        
        $query_secoes = "select secao from cpv_secoes  
                            group by secao                         
                            order by secao";
        
        $db_nomes_secoes = pg_query($conexao, $query_secoes);
        
        
        $tabs .= "<div style='border: 1px dotted'>";
        while ($linha_secao = pg_fetch_array($db_nomes_secoes)){
               
            $tabs .= "<div id='div_secao_".$linha_secao['secao']."' style='display:none'>";
            
            $query_grupos = "select * from cpv_secoes  
                                where secao = '".$linha_secao['secao']."' and
                                      categoria != '0'                                                   
                                order by categoria";
            
            $db_nomes_grupos = pg_query($conexao, $query_grupos);
            
            while ($linha_grupo = pg_fetch_array($db_nomes_grupos)){
                    
                $tabs .= "<p><div id='div_grupo_".$linha_secao['secao'].$linha_grupo['categoria']."'>";
                
                $tabs .= "<table width='90%' border='1' style='border-width:thin;border-spacing:0px;border-style:none;border-color:black'>";
                $tabs .= "<caption><div align=left><b>- ".$linha_grupo['descricao'] ."</b></div></caption>";

                        foreach($divs[$linha_secao['secao']][$linha_grupo['categoria']] as $a_caracteristica){

                                if($i == 0) echo "<tr>";

                                $tabs .= "<td width='200px'>" . $a_caracteristica . "</td>";
                                $i++;

                                if($i == 3) {                                     
                                    $tabs .= "</tr>"; 
                                    $i = 0;                                
                                }
                        }
                        
                        $tabs .= "</table>";
                        $tabs .= "</div></p>";
                         $i = 0;
                }
                
            $tabs .= "</div>";
                       
        }
       $tabs .= "</div>"
       
        ?> 
            
                
        <?php 
        
                             $produtos = "";
                                    foreach($_REQUEST['produto'] as $prod){
                                        
                                        $produtos .= "produto[]=".$prod."&"; 
                                        
                                    }
                                
              
        
        echo "</center>";

                            $tabs .= '</div>
                            <div id="tabs-2">
                            
                                <p/><center>
                                <table border="1" width="90%">
                                <caption><h4>Processo Produtivo</h4></caption>
                                <tr>
                                <td>Descreva seu processo produtivo:</td> 
                                <td>
                                <textarea></textarea>
                                </tr>

                                </table>
                                </center>

                            </div>
                            <div id="tabs-3">
                            
                                <center>
                                <table border="1" width="90%">
                                <caption><h4>Condições de Venda</h4></caption>              

                                <tr>
                                    <td>Pedido Mínimo:</td> 
                                    <td>

                                            <input type="text"> unidade: <select style="padding: 0px;margin: 0px"><option>--</option><option>Metro</option><option>Caixa</option><option>Metro²</option></select> 

                                    </td>
                                </tr>

                                <tr>
                                    <td>Pedido Máximo:</td> 
                                    <td>

                                            <input type="text"> unidade: <select style="padding: 0px;margin: 0px"><option>--</option><option>Metro</option><option>Caixa</option><option>Metro²</option></select> 

                                    </td>
                                </tr>

                                <tr>
                                    <td>Tipo de Cliente:</td> 
                                    <td>

                                            <select style="padding: 0px;margin: 0px"><option>--</option><option>Pessoa Física</option><option>Pessoa Jurídica</option><option>Pessoa Física e Jurídica</option></select> 

                                    </td>
                                </tr>

                                <tr>
                                    <td>Tipo de Venda:</td> 
                                    <td>

                                            <select style="padding: 0px;margin: 0px"><option>--</option><option>Só no atacado</option><option>Só no varejo</option><option>Atacado e Varejo</option></select> 

                                    </td>
                                </tr>

                                </table>
                                </center>

                            </div>
                         <div align="center">
                         
                                <input type="button" value="Adicionar Produto"
                                
                                    onclick="javascript:parent.document.location = \'tela1.php?'.$produtos.'produto[]='.$_REQUEST['q'].'\'  ;"
                                
                                > 
                         
                                <!-- <input type="button" value="Cancelar" onclick="javascript:parent.parent.jQuery.fancybox.close"> -->
                                
                         </div>
                    </div>
                    
                ';
        
        echo "<center>" 
                
            . "<b>Produto Selecionado: </b>" . $p5 ."<br/><a href='javascript:void(0);a();'>Detalhar Produto</a> - <a href='javascript:void(0);' onclick='document.getElementById(\"tb_taxonomia\").style.display=\"block\";document.getElementById(\"tabs\").style.display = \"none\";' >Classificação do Produto </a>"
                
                . "<div style='display:none;border: 1px solid #dddddd; -moz-border-radius: 15px;
border-radius: 3px;' id='tb_taxonomia'>"
                . "<table border='1' width='90%'  style=' border-width: thin;
                        border-spacing: 0px;
                        border-style: none;
                        border-color: black;' id=''>"
                
                . "<caption><h4>Classificação de: " . $p5 ."</h4></caption>"
                . "<tr>"
                . "<td>Divisão:</td> "
                . "<td>".$p1."</td>"
                . "</tr>"
                
                . "<tr>"
                . "<td>Grupo:</td> "
                . "<td>".$p2."</td>"
                . "</tr>"
                
                . "<tr>"
                . "<td>Classe:</td>"
                . "<td>".$p3."</td>"
                . "</tr>"
                
                . "<tr>"
                . "<td>Categoria:</td>"
                . "<td>".$p4."</td>"
                . "</tr>"
                
                . "<tr>"
                . "<td>Produto:</td>"
                . "<td>".$p5."</td>"
                . "</tr>"
                
                . "<tr style='border: 0px'>"
                . "<td colspan='2' align='right'><a href=\"javascript:void(0);\" onclick='javascript:document.getElementById(\"tb_taxonomia\").style.display = \"none\"; '>(X) Fechar</a></td>"                
                . "</tr>"
                
                . "</table><p>&nbsp;</p>"
                . "</div>"
                
                . $tabs
           
                . "</center>"
                ;
        
        echo "<p/> <center>"; 
        
        $query_secoes = "select * from cpv_secoes                           
                            order by secao, categoria";
                 
        $resultado_secoes = pg_query($conexao, $query_secoes);
        
        while ($linha_secao = pg_fetch_array($resultado_secoes)){
             
            $javascript .= "document.getElementById(\"div_secao_".$linha_secao['secao']."\").style.display = \"none\";
                           "; 
             
            $javascript2 .= "
                                document.getElementById(\"div_primeira_secao_".$linha_secao['secao']."\").style.color = \"#3a82a9\";
                                document.getElementById(\"div_primeira_secao_".$linha_secao['secao']."\").style.backgroundColor = \"#d3d8db\";    
                            ";
                                               
        }
      
    echo "<p/>" ?>
                    
    <?php 

        }

    ?>