<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    if($_REQUEST['funcao'] == 'lista_produtos'){
        
        if(strlen($_REQUEST['q']) <= 2){
            
            echo "Digite pelo menos 3 caracteres";
            
        }else{
            
            $q = $_REQUEST['q'];
            require 'ncm_search.php';
            
            
            if(count($array)){
                
                foreach($array as $linha){
                    
                    echo "<div><a href='javascript:void(0);'"
                                    . " onclick='javascript:"
                                    . "detalha_produto(\"".$linha['codigo_tipo']."\"); "
                                    . "document.getElementById(\"livesearch\").style.display=\"none\"'"
                                    . ">".$linha['codigo_tipo']." - ".$linha['tipo']."</a></div>";
                    
                }
                
            }else{
                
                echo "Produto não encontrado";
                
            }
            echo "<div><a href='javascript:void(0)' onclick='javascript:detalha_produto(\"novo\");' style='text-decoration:underline'>Cadastrar Novo Produto.</a></div>";
            
        }
        
    }elseif($_REQUEST['funcao'] == 'detalha_produto'){
        
        $query = "select codigo_principal, produto, ano, codigo_tipo, tipo from tb_prod_ncm "
                    . " where "
                    . " 1=1 "
                    . " and "
                    . " codigo_tipo = '".$_REQUEST['q']."'";
        
        
        
        $conexao= pg_connect("host=localhost port=5432 dbname=praca_negocios user=postgres password=mdsdti");

        $resultado = pg_query($conexao, $query);

        $linha = pg_fetch_array($resultado);
        
        if($_REQUEST['q'] != 'novo'){
            
            $p1 = $linha['codigo_principal']. " - " .$linha['produto'];
            $p2 = $linha['codigo_principal']. " - " .$linha['produto']. " - " .$linha['tipo'];
            $p3 = $linha['codigo_tipo']." - ".$linha['tipo'];
            
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
        
        
        echo "<center>"
                . "<table border='1' width='90%'>"
                . "<caption><h4>Produto Selecionado</h4></caption>"
                . "<tr>"
                . "<td>Natureza:</td> "
                . "<td>".$p1."</td>"
                . "</tr>"
                
                . "<tr>"
                . "<td>Gênero:</td> "
                . "<td>".$p2."</td>"
                . "</tr>"
                
                . "<tr>"
                . "<td>Espécie:</td>"
                . "<td>".$p3."</td>"
                . "</tr>"
                . "</table>"
                . "</center>"
                ;
        echo "<p/><center>"
                . "<table border='1' width='90%'>"
                . "<caption><h4>Insira os dados do produto</h4></caption>"                
                . "<tr>"
                . "<td>Digite o código do seu produto:</td> "
                . "<td><input type='text' size='50'/></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Digite o nome do seu produto:</td>"
                . "<td><input type='text' size='50'/></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Insira a foto do produto:</td>"
                . "<td><input type='file' size='50'/></td>"
                . "</tr>"
                . "</table>"
                . "</center>"
                ;
         echo "<p/><center>"
                . "<table border='1' width='90%'>"
                . "<caption><h4>Caracterísiticas Padrão</h4></caption>"                  
                . "<tr>"
                . "<td>Tecido:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Malha</option><option>Elastano</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Bitola:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Fecho:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Detalhes:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>USO:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Dimensões:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Gênero de uso:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Cores:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Peso:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'><option>-</option><option>Opção 1</option><option>Opção 2</option></select></td>"
                . "</tr>"
                . "<tr>"
                . "<td><div id='f1' align='center' style='display:none'><input type='text' style='width: 95%' value='Digite o nome da nova característica' onclick='this.value=\"\"'/></div></td> "
                . "<td><div id='f2' align='center' style='display:none'><input type='text' style='width: 95%' value='Digite o nome da nova característica' onclick='this.value=\"\"'/></div></td>"
                . "</tr>"
                 
                 
                . "</table>"
                . "<table width='90%'><tr>"
                . "<td colspan='2' align='right'><br><input onclick='document.getElementById(\"f1\").style.display=\"block\";document.getElementById(\"f2\").style.display=\"block\";' type='button' value='Adicionar nova característica'/></a></td> "
                . "</tr></table>"
                . "</center>"
                ;
        
     echo "<p/><center>"
                . "<table border='1' width='90%'>"
                . "<caption><h4>Processo Produtivo</h4></caption>"                
                . "<tr>"
                . "<td>Tecido e Composição:</td> "
                . "<td>"
                . "<select style='width:100%;padding:0px;margin:0px'>"
                    . "<option>-</option>"
                    . "<option>Elastano 90% | Algodão 10%</option>"
                    . "<option>Elastano 80% | Algodão 20%</option>"
                    . "<option>Elastano 60% | Algodão 40%</option>"
                    . "<option>Elastano 50% | Algodão 50%</option>"
                . "</select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Tipo de Tingimento:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    
                    . "<option>Fibra</option>"
                    . "<option>Fio</option>"
                    . "<option>Tecido</option>"
             . "</select></td>"
                . "</tr>"
             . "<tr>"
                . "<td>Tecido Corte:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    
                    . "<option>Laser</option>"
                    . "<option>Reto</option>"
                    . "<option>Tesoura</option>"
             . "</select></td>"
                . "</tr>"
             . "<tr>"
                . "<td>Costura:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    
                    . "<option>Reto</option>"
                    . "<option>Pespontada</option>"
                    
             . "</select></td>"
                . "</tr>"
                . "</table>"
                . "</center>"
                ;
     
     echo "<p/><center>"
                . "<table border='1' width='90%'>"
                . "<caption><h4>Condições de Venda</h4></caption>"                
                . "<tr>"
                . "<td>Formas de Comercialização:</td> "
                . "<td>"
                . "<select style='width:100%;padding:0px;margin:0px'>"
                    . "<option>-</option>"
                    . "<option>Por peça</option>"
                    . "<option>12 peças</option>"
                    . "<option>30 peças</option>"
                    . "<option>50 peças</option>"
                . "</select></td>"
                . "</tr>"
                . "<tr>"
                . "<td>Multiplicador do Corte:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    . "<option>Inteiros</option>"
                    . "<option>Frações de 0,5</option>"
                    
             . "</select></td>"
                . "</tr>"
             . "<tr>"
                . "<td>Tecido Corte:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    . "<option>-</option>"
                    . "<option>Laser</option>"
                    . "<option>Reto</option>"
                    . "<option>Tesoura</option>"
             . "</select></td>"
                . "</tr>"
             . "<tr>"
                . "<td>Grade:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    . "<option>Livre</option>"
                    . "<option>Cada 12 - 3p/5m/4g</option>"
                    . "<option>Cada 30 - 10p/15m/5g</option>"
                    . "<option>Cada 50 - 10p/30m/10g</option>"
             . "</select></td>"
                . "</tr>"
                . "</table>"
                . "</center>"
                ;
     
     
       echo "<p/><center>"
                . "<table border='1' width='90%'>"
                . "<caption><h4>Restrições de Comercialização</h4></caption>"                
                . "<tr>"
                . "<td>Tipo de venda:</td> "
                . "<td>"
                . "<select style='width:100%;padding:0px;margin:0px'>"
                    . "<option>-</option>"
                    . "<option>Só no atacado</option>"
                    . "<option>Só no varejo</option>"
                    . "<option>Atacado/Varejo</option>"                    
                . "</select></td>"
                . "</tr>"
                
             . "<tr>"
                . "<td>Tipos de Cliente:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    . "<option>Só para pessoa física</option>"
                    . "<option>Só para pessoa jurídica</option>"
                    . "<option>Para pessoa física/jurídica</option>"
                    
             . "</select></td>"
                . "</tr>"
               . "<tr>"
                . "<td>Destino da Venda:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    . "<option>Só para comercialização</option>"
                    . "<option>Só para industrialização</option>"
               . "<option>Para comercialização/industrialização</option>"
               . "<option>Para consumo final</option>"
               
                    
             . "</select></td>"
                . "</tr>"
             . "<tr>"
                . "<td>Grade:</td> "
                . "<td><select style='width:100%;padding:0px;margin:0px'>"
                . "<option>-</option>"
                    . "<option>Livre</option>"
                    . "<option>Cada 12 - 3p/5m/4g</option>"
                    . "<option>Cada 30 - 10p/15m/5g</option>"
                    . "<option>Cada 50 - 10p/30m/10g</option>"
             . "</select></td>"
                . "</tr>"
                . "</table>"
                . "</center>"
                ;
         
        echo "<p/><center><input onclick='javascript: document.location = \"template.php?conteudo=pg_catalogo\"' type='button' value='Salvar em Meus Produtos'></center>";
         
    }

?>