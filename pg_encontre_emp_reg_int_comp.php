<script>
    
    function showResult(str) {
  
        if (str.length==0) {
          document.getElementById("livesearch").innerHTML="";
          document.getElementById("livesearch").style.border="0px";
          return;
        }
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
          }
        }

        xmlhttp.open("GET", "pg_novo_produto_ajax.php?funcao=lista_produtos&q="+str, true);
        xmlhttp.send();
  
    }
    
    function detalha_produto(str) {
  
        if (str.length==0) {
          document.getElementById("livesearch").innerHTML="";
          document.getElementById("livesearch").style.border="0px";
          return;
        }
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("div_digita_produto").innerHTML=xmlhttp.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
          }
        }

        xmlhttp.open("GET", "pg_novo_produto_ajax2.php?funcao=detalha_produto&q="+str, true);
        xmlhttp.send();
  
    }
    
    
    
</script>
<div style="width: 97%;
            height: 1800px;
            border: 3px solid #cccccc;
            padding: 5px;
            MARGIN: 10px;
            font-family: Tahoma, sans-serif;">
    
    <h4><a href="template.php">Praça Eletrônica de Negócios</a> >> <a href='template.php?conteudo=pg_inicial2'>Quero Vender</a> >> <a href='template.php?conteudo=pg_inicial2'>Encontre Clientes</a> >> Encontrem Empresas que Registraram Intenção de Compra</h4>
    <p/>
    
    <div id='div_palavra_chave' style="border: 1px dotted;padding: 10px">
        
        Digite a categoria do seu produto: 
        <input type='text' style='width: 300px; line-height: 30px' onkeyup="document.getElementById('livesearch').style.display='block';showResult(this.value)" onclick="document.getElementById('livesearch').style.display='block';showResult(this.value)"> 
        <div id="livesearch" style='overflow-y: scroll; max-height: 200px;'></div>
         
     </div>
    <p/>
    <div id='div_digita_produto' style="border: 1px dotted;padding: 10px"></div>
    
</div>