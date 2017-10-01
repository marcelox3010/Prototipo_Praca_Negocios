<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    if($_REQUEST['funcao'] == 'ncm'){
        
        $nivel = $_REQUEST['nivel'];
        $codigo = $_REQUEST['codigo'];
                
        require 'ncm.php';
        
        echo "Selecione NCM  nível 2: <select style='width:200px'>"
            . "<option value='-'>-</option>";
        
        foreach($array as $linha){
            
            echo "<option value='".$linha['codigo']."'>"
            . $linha['codigo']
            . " - "
            . $linha['produto']
            . "</option>";
            
        }
            
        echo "</select>";
            
    }
        
        
    


?>