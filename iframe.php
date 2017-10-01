<html>
    <head>
        <meta charset="utf-8">
       
        <link href="js/tabs/jquery-ui.css" rel="stylesheet">

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

                    xmlhttp.open("GET", "pg_novo_produto_cpm_ajax2.php?funcao=lista_produtos&q="+str, true);
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

                    
                    <?php
                                    
                                    $produtos = "";
                                    foreach($_REQUEST['produto'] as $prod){
                                        
                                        $produtos .= "produto[]=".$prod."&"; 
                                        
                                    }
                                
                    ?>
        
                    xmlhttp.open("GET", "pg_novo_produto_cpm_ajax2.php?<?php echo $produtos; ?>&funcao=detalha_produto&q="+str, true);
                    xmlhttp.send();

                }
                
                
        </script>
        
    </head>
    
    <body>
        <?php //    print_r($_REQUEST); ?>
        <!-- Tabs -->
        Digite o Produto a ser encontrado: 
        <input type='text' style='width: 300px; line-height: 30px' 
                onkeyup="document.getElementById('livesearch').style.display='block';
                        showResult(this.value)" 
                onclick="document.getElementById('livesearch').style.display='block';
                         showResult(this.value)">
        
        <div id="livesearch" style='overflow-y: scroll; max-height: 200px;'></div>                                
        <div id='div_digita_produto' style="border: 1px dotted;padding: 10px"> 
        
        <script src="js/tabs/external/jquery/jquery.js"></script>
        <script src="js/tabs/jquery-ui.js"></script>
        <script>
            
            function a(){  
                            document.getElementById("tabs").style.display = "block";
                            document.getElementById("tb_taxonomia").style.display = "none";
                            $( "#tabs" ).tabs();                             
                        }

        </script>

    </body>

</body>