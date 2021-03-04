<?php
    if (isset($_GET['dias'])){
        $dias = $_GET["dias"];
        $cont = 0;
        while($dias >= $cont){
            $tdias = $dias / 7;           
            $cont++;  
        }
        $resultado = "Han pasado $tdias semanas";
        
    header("Location:index.php?result=$resultado");
    }
?>