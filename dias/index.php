<html>
    <head>
    </head>
    <body>
        <h1>*Desarrolle un algoritmo que permita determinar a partir de un número de dias, 
        ingresado por pantalla, ¿Cuántas semanas constituyen el número de dias?.*</h1>
            <form action="dias.php" method="GET">
                <table>
                    <tr>
                        <td>
                            <label>Ingrese cuantas semanas hay en el numero de dias puesto: </label>  
                        </td>
                        <td>
                            <input type="number" name="dias" required=""/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <br><button class="btn btn-primary">enviar</button>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                    if (isset($_GET['result'])) {
                        $resultado = $_GET['result'];
                        echo $resultado;
                    }
                    
            ?>
            <div>
                <button><a href="../index.php">Regresar</a></button><br>
            </div>
    </body>
</html>