<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    if($_REQUEST['funcao'] == 'lista_produtos'){
        
            echo "<div><a href='javascript:void(0);'"
                                    . " onclick='javascript:"
                                    . "detalha_produto(); "
                                    . "document.getElementById(\"livesearch\").style.display=\"none\"'"
                                    . ">"."Pesquisar ".$_REQUEST['q']." em Roupas Femininas<br/>"."</a></div>";
            echo "<div><a href='javascript:void(0);'"
                                    . " onclick='javascript:"
                                    . "detalha_produto(); "
                                    . "document.getElementById(\"livesearch\").style.display=\"none\"'"
                                    . ">"."Pesquisar ".$_REQUEST['q']." em Roupas Infantis<br/>"."</a></div>";
            echo "<div><a href='javascript:void(0);'"
                                    . " onclick='javascript:"
                                    . "detalha_produto(); "
                                    . "document.getElementById(\"livesearch\").style.display=\"none\"'"
                                    . ">"."Pesquisar ".$_REQUEST['q']." em Artigos de Decoração<br/>"."</a></div>";
            echo "<div><a href='javascript:void(0);'"
                                    . " onclick='javascript:"
                                    . "detalha_produto(); "
                                    . "document.getElementById(\"livesearch\").style.display=\"none\"'"
                                    . ">"."Pesquisar ".$_REQUEST['q']." em Livros<br/>"."</a></div>";
            echo "<div><a href='javascript:void(0);'"
                                    . " onclick='javascript:"
                                    . "detalha_produto(); "
                                    . "document.getElementById(\"livesearch\").style.display=\"none\"'"
                                    . ">"."Pesquisar ".$_REQUEST['q']." em CDs<br/>"."</a></div>";
        
        
    }elseif($_REQUEST['funcao'] == 'detalha_produto'){
        
        echo "abc !!!!!!!!!!!!!!!";
         
    }

?>