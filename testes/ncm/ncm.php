<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $array[] = '';

    if($nivel == '' || $nivel == 0 || $nivel == 1){
        
        $conexao    = pg_connect("host=localhost port=5432 dbname=praca_negocios user=postgres password=mdsdti");    
        $query      = "select * from tb_ncm where length(codigo) = 5";
        $resultado  = pg_query($conexao, $query);
        
        while($linha = pg_fetch_array($resultado)){

            $array[] = $linha;
                    
        }
        
    }elseif ($nivel == 2){
        
        $conexao    = pg_connect("host=localhost port=5432 dbname=praca_negocios user=postgres password=mdsdti");    
        $query      = "select * from tb_ncm where "
                            . " replace(codigo,'.','') like replace('".$codigo."%','.','') "
                            . " and "
                            . " length(codigo) > 5"; 
        $resultado  = pg_query($conexao, $query);
        
        while($linha = pg_fetch_array($resultado)){

            $array[] = $linha;
                    
        }
        
    }


?>