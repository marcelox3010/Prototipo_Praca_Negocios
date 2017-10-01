<?php
$xmlDoc=new DOMDocument();


$x=$xmlDoc->getElementsByTagName('link');
$q = $_GET["q"];


if(strlen($q) >= 3){
    
    $q = strtoupper($q);
    
    $conexao= pg_connect("host=localhost port=5432 dbname=praca_negocios user=postgres password=mdsdti");
    
    $query = "select * from tb_ncm where upper(produto) like '%".strtoupper ($q)."%'";
    
    $resultado = pg_query($conexao, $query);

    while($linha = pg_fetch_array($resultado)){

        print_r($array);    
        $hint .= "<a href='http://www.uol.com.br' target='_blank'>".$linha['codigo']." - ".$linha['produto']."</a><br/>";

    }

    if ($hint=="") {

        $response="sem sugestão";

    } else {

        $response=$hint;

    }

    echo $response;
    
}else{
    
    
    echo "Digite pelo menos 3 caracteres";
    
    
}
?>