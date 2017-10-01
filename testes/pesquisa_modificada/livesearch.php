<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');
$q = $_GET["q"];

$q = str_replace("ç","C", $q);
$q = str_replace("Ç","C", $q);

$q = str_replace("á","A", $q);
$q = str_replace("Á","A", $q);
$q = str_replace("â","A", $q);
$q = str_replace("Â","A", $q);
$q = str_replace("à","A", $q);
$q = str_replace("À","A", $q);
$q = str_replace("ã","A", $q);
$q = str_replace("Ã","A", $q);

$q = str_replace("é","E", $q);
$q = str_replace("É","E", $q);
$q = str_replace("ê","E", $q);
$q = str_replace("Ê","E", $q);

$q = str_replace("í","I", $q);
$q = str_replace("Í","I", $q);

$q = str_replace("ó","O", $q);
$q = str_replace("Ó","O", $q);
$q = str_replace("ô","O", $q);
$q = str_replace("Ô","O", $q);
$q = str_replace("õ","O", $q);
$q = str_replace("Õ","O", $q);

$q = str_replace("ó","O", $q);
$q = str_replace("Ó","O", $q);


$q = strtoupper($q);



$conexao= pg_connect("host=localhost port=5432 dbname=praca_negocios user=postgres password=mdsdti");

$query = "select codigo_principal, produto, ano, codigo_tipo, tipo from tb_prod_ncm "
        . " where "
        . " 1=1 "
        . " and "
        . " tipo LIKE '%".$q."%'"
        . "  ";



$resultado = pg_query($conexao, $query);

while($linha = pg_fetch_array($resultado)){    
    
    print_r($array);    
    $hint .= "<a href='http://www.uol.com.br' target='_blank'>".$linha['tipo']."</a><br/>";
 
}

if ($hint=="") {
  
    $response="sem sugestão";
    
} else {
  
    $response=$hint;
    
}

echo $response;

?>