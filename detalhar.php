

<?php

    
            
            $query = "select id, cod, pt from cpv_codes
                        where

                        ( (substring(cod from 1 for 2) = substring('".$_REQUEST['produto']."' from 1 for 2)) and (substring(cod from 3 for 6) = '000000') )

                        or

                        ( (substring(cod from 1 for 3) = substring('".$_REQUEST['produto']."' from 1 for 3)) and (substring(cod from 4 for 5) = '00000') )

                        or

                        ( (substring(cod from 1 for 4) = substring('".$_REQUEST['produto']."' from 1 for 4)) and (substring(cod from 5 for 4) = '0000') )

                        or

                        ( (substring(cod from 1 for 5) = substring('".$_REQUEST['produto']."' from 1 for 5)) and (substring(cod from 6 for 3) = '000') )
                        
                        or

                        ( cod = '".$_REQUEST['produto']."' )


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
            
        }
        
        
        echo "<center><table border='1' style='width:95%'><caption>Taxonomia</caption><tr><td>$p1</td><tr><td>$p2</td></tr><tr><td>$p3</td></tr><tr><td>$p4</td></tr><tr><td>$p5</td></tr></table></center>" ;
        echo "<p>&nbsp;</p><center><table style='width:95%' border='1'>";
        
        echo "<caption>Características</caption>"; 
        echo "<tr><td>Material</td><td>Não-Metal</td><td>Couro</td></tr>";
        echo "<tr><td>Utilização Designada</td><td>Utilização Didática</td><td>Para Utilização em Escolas</td></tr>";
        echo "<tr><td>Escala e Dimensõe</td><td>Dimensões e Potência</td><td>Volume Exigido: 100 cm³</td></tr>";
        
        echo "</table></center>"; 
?>