<html>
<head>  
    <meta charset="UTF-8"/>
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
      xmlhttp.open("GET","livesearch.php?q="+str,true);
      xmlhttp.send();
    }


    function ncm_nivel_2(codigo){
        
        if (codigo.length==0) {
            
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
              
                document.getElementById("ncm_nivel_2").style.display = "block";
                document.getElementById("ncm_nivel_2").innerHTML = xmlhttp.responseText;
            
            }
            
        }
        
        
        xmlhttp.open("GET","acessorio.php?funcao=ncm&nivel=2&codigo="+codigo,true);
        xmlhttp.send();
        
    }

</script>
</head>
    <body>
        <form>
            NCM: <input type="text" size="30" onkeyup="showResult(this.value);">
            <div id="livesearch"  style="overflow:auto ; width:600px; max-height: 150px;"></div>
        </form>    
        <div id='ncm_nivel_1'>
            Selecione o NCM Nível 1:

                <select style='width:200px' onchange='
                        
                        ncm_nivel_2(this.value);

                    '>
                    <option value='-'>-</option>";            
                    <?php                    

                        require_once 'ncm.php'; 

                        foreach($array as $linha){

                            echo "<option value='".$linha['codigo']."' title='".$linha['produto']."'>".$linha['produto']."</option>";

                        }                
                    ?>
                </select>

            </form>
        </div>

        <div id='ncm_nivel_2' style="display:none"></div>

    </body>
</html> 