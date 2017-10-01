<CENTER>
<table border='0' width='95%' style='border-collapse:collapse'>

<tr >

<td><H4><b>1.1.1.1. Receita Bruta de Vendas:</b></H4></td>

<td align='right'><b><H4>R$ 1.000,00</H4></b></td>


</tr>

</TABLE>
<P/>
<table border='0' width='95%' style='border-collapse:collapse'>
	<tr>
		<td width='250px'>Vendas de Mercadorias: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
	<tr>
		<td>Vendas de Mer. Com. Sub. Trib.: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
	<tr>
		<td>Vendas de Mer. para o Exterior: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
	<tr>
		<td>Vendas de Prd. de Fab. Própria: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
	<tr>
		<td>Vendas de Prd. de Fab. Pró. Sub. Trib.: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
</table>

<div align='right'>

<input type='button' value='Ver mais campos' onclick='document.getElementById("dsfvbzdsfzbgasdsdfa").style.display = "block";this.style.display="none"

document.getElementById("sv").style.display="none";

'>
<input type='button' value='Salvar' id='sv' onclick='alert("Seu protocolo é: XXXXX")'>


</div>
<p/>
<div id='dsfvbzdsfzbgasdsdfa' style='display:none'>
	<table  border='0' width='95%' style='border-collapse:collapse'>
	
	<tr>
		<td width='250px'>Vendas Prd. Fab. Pro. para Ext.: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
	
	<tr>
		<td>Vendas de serviços prestados: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
	<tr>
		<td>Vendas de serviços prest. c/ sub. trib.: </td>
		<td align='right'>R$ <input type='text'></td>
	</tr>
	
	<tr>
		<td><div id='d1' style='display:none'>xxx</div></td>
		<td align='right'><div id='d2' style='display:none'>R$ <input type='text'></td>
	</tr>
	</table>
	<p/>
	<div align='right'>
	
	<input type='button' value='Novo campo' onclick='document.getElementById("novo").style.display = "block"'>
	<input type='button' value='Salvar' onclick='alert("Seu protocolo é: XXXXX")'>
	
	
	</div>
	<p/>
	
	<div id='novo' align='left' style='display:none'>
	
		
		Digite o nome do novo campo: <input  type='text' id='fff'><input type='button' value='Ok'
		
		onclick='
			
			document.getElementById("d1").innerHTML = document.getElementById("fff").value;
			document.getElementById("d1").style.display = "block";
			document.getElementById("d2").style.display = "block";
			document.getElementById("novo").style.display = "none"
			
			
		
		'
		
		
		>
	
	</div>
	
	
	
	
	
</div>
</div>


</CENTER>