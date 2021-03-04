<?php
    if (isset($_GET['meses'])){
        $meses = $_GET["meses"];
        $cont = 0;
        while($meses >= $cont){
            $tmeses = $meses / 4;           
            $cont++;  
        }
        $resultado = "Han pasado $tmeses meses";
        
    header("Location:index.php?result=$resultado");
    }
    
?>