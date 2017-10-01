<?php

include("mpdf/mpdf.php");
$mpdf=new mPDF('en-x','A4','','',30,15,25,20,5,0);
$mpdf->mirrorMargins = 0;

$header = '
<table width="100%" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 9pt; color: #000000;"><tr>

<td width="70%" align="center"><img src="images/brasao.jpg" width="70px" /><br>
<h3 style="font-size:10pt;font-family:Times New Roman;">REP&Uacute;BLICA FEDERATIVA DO BRASIL
<br>
PRESIDÊNCIA DA REPÚBLICA<br>
SECRETARIA DA MICRO E PEQUENAS EMPRESAS</h3>

</td>
</tr></table>
';
$mpdf->setHTMLHeader($header);


$html = '
<head>
<style type="text/css">
body {
	font-family:"Times New Roman", Times, serif;
	font-size:12pt;
	line-height:135%;
}
p {
	text-indent: 0cm;
	text-align: justify;
	line-height:135%;
	padding-bottom:0cm;
	margin-bottom:0cm;
	padding-top:0cm;
	margin-top:0.2cm;
	margin-bottom:0.7cm;
}
p.texto {
	margin-bottom:0.2cm;
}
p.normal {
	text-align: left;
	margin-bottom:0;
	margin-top:0.5;
}
p.ementa {
	padding-top:2.5cm;
	font-weight:bold;
	line-height:135%;
}
div {
	text-align: justify;
}
h4 {
	padding-top:0cm;
	margin-top:0cm;
	padding-bottom:0cm;
	margin-bottom:0cm;
}
ol {
	padding-top:0cm;
	margin-top:0cm;
	padding-bottom:0cm;
	margin-bottom:0.7cm;
}
</style>
</head>
<h1>&nbsp;</h1>';

$mpdf->WriteHTML($html);


$texto = "CERTIFICAMOS, após pesquisa nos registros eletrônicos as seguinte informações da empresa XXXXXXXXXXX CNPJ XXXXXXXXXXX:<p>";

$texto .= "<ul>";
$texto .= "<li>Regularidade Fiscal Estadual: Não possui nenhuma pendência</li>";
$texto .= "<li>Regularidade Fiscal Municipal: Não possui nenhuma pendência</li>";
$texto .= "<li>Dados Cadastrais: Não possui nenhuma pendência</li>";
$texto .= "<li>Regularidade com a Receita Federal: Não possui nenhuma pendência</li>";
$texto .= "<li>Regularidade com o INSS: Não possui nenhuma pendência</li>";
$texto .= "<li>Regularidade com o FGTS: Não possui nenhuma pendência</li>";
$texto .= "<li>Regularidade com a Junta de Trabalho: Não possui nenhuma pendência</li>";
$texto .= "<li>Certificação Econômica (Balanço): Não possui nenhuma pendência</li>";
$texto .= "<li>Registro Operacional: Não possui nenhuma pendência</li>";
$texto .= "<li>Certificação de Processo: Não possui nenhuma pendência</li>";
$texto .= "<li>Certificação de Produto: Não possui nenhuma pendência</li>";
$texto .= "</ul>";

$texto .= "<p>&nbsp;</p>Número do protocolo: XXXXXXXX";
$texto .= "<br>Número para autenticação: YYYYYYYYYYY";



$html =  "<body><p>&nbsp;</p><p>&nbsp;</p>".$texto."</body>";



$mpdf->WriteHTML($html);

$mpdf->Output();


?>