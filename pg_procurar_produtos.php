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

        xmlhttp.open("GET", "pg_procuar_produto_ajax.php?funcao=lista_produtos&q="+str, true);
        xmlhttp.send();
  
    }
    
    function detalha_produto() {
        
        
            document.getElementById("div_digita_produto").innerHTML = 
                    
                "<center><table width='90%' border='1'>"+
                    "<caption>Produto</caption>"+
                    
                    "<tr>"+
                        
                        "<th>"+
                                    "Fotos"+
                        "</th>"+
                        "<th>"+
                                    "Produto"+
                        "</th>"+                        
                    "</tr>"+
                    "<tr>"+
                        
                        "<td>"+
                                    "<center> <img src='images/biquini1.jpg' style='float: none'/></center>"+
                        "</td>"+
                        "<td align='center'>"+
                                    "Produto: Biquini Luxo<br>"+
                                    "Empresa: Biquini e CIA<br>"+
                                    "(61)3444-4567<br>"+
                                    "<a style='text-decoration:underline' href='mailto:meusbiquinis@taiba.com.br '>biquinis@biquiniecia.com.br</a><br/>&nbsp;<br/>"+
                                    "<a href='template.php?conteudo=pg_mostrar_produtos'>Mostrar todos os produtos da Biquini e CIA</a>" +
                                    
                        "</td>"+
                      
                    "</tr>"+
                     "<tr>"+
                        
                        "<td>"+
                                    "<center> <img src='images/biquini3.jpg' style='float: none'/></center>"+
                        "</td>"+
                        "<td align='center'>"+
                                    "Biquini Luxo II<br>"+
                                    "Super Biquini<br>"+
                                    "(61)3214-9999<br>"+
                                    "<a style='text-decoration:underline' href='mailto:meusbiquinis@taiba.com.br '>biquinis@hotmail.com</a><br/>&nbsp;<br/>"+
                                    "<a href='template.php?conteudo=pg_mostrar_produtos'>Mostrar todos os produtos da Super Biquini</a>" +
                        "</td>"+
                        
                    "</tr>"+
                     "<tr>"+
                        
                        "<td align='center'>"+
                                    "<center> <img src='images/biquini2.jpg' style='float: none'/></center>"+
                        "</td>"+
                        "<td align='center'>"+
                                    "Biquini Luxo II<br>"+
                                    "Taíba Biquinis<br>"+
                                    "(85)3223-7878<br>"+
                                    "<a style='text-decoration:underline' href='mailto:meusbiquinis@taiba.com.br '>meusbiquinis@taiba.com.br</a><br/>&nbsp;<br/>"+
                                    "<a href='template.php?conteudo=pg_mostrar_produtos'>Mostrar todos os produtos da Taíba Biquinis</a>" +
                        "</td>"+
                        
                    "</tr>"+
        
                "</table></center>";
                
  
    }
    
    
    
</script>
<div style="width: 97%;
            height: 1800px;
            border: 3px solid #cccccc;
            padding: 5px;
            MARGIN: 10px;
            font-family: Tahoma, sans-serif;">


    <h3>Procura produtos</h3>
    <p/>
     <div id='div_palavra_chave' style="border: 1px dotted;padding: 10px">
        
        
        Pesquisar: <input value='Digite o produto marca ou modelo' type='text' style='width: 300px; line-height: 30px' onkeyup="document.getElementById('livesearch').style.display='block';showResult(this.value)" onclick="if(this.value == 'Digite o produto marca ou modelo'){ this.value = '';}else{ document.getElementById('livesearch').style.display='block';showResult(this.value)}"> 
        <div id="livesearch" style='overflow-y: scroll; max-height: 200px;'></div>
         
     </div>
    <p/>
    <div id='div_digita_produto' style="border: 1px dotted;padding: 10px"></div>
    
</div>