

<?php

if(isset($_POST['enviar'])){
        $lugares = $_POST['lugares'];
        $actividades = $_POST['actividades'];
         echo "Los lugares que te gustaría visitar son: ";
         foreach($lugares as $lugar){
              echo "$lugar ";
         }
         echo "<br>Las actividades prefieres son: ";
         foreach($actividades as $actividad){
              echo "$actividad ";
         }
    }
    else{
        echo "No se ha enviado el formulario";
    }
?>


<br><br>
<a href="formulario.php">Volver al Home</a>
