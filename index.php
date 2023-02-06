<!-- <?php

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $genero = $_POST['genero'];

    if($genero == 'mujer'){
        echo "Bienvenida Señorita $nombre <br>";
    }
    else{
        echo "Bienvenido Señor $nombre";
    }
    echo "<br> Su correo es $email y su telefono es $telefono <br>gracias por registrarse!";
    

}
else{
?>

    <form action="<?php $_PHP_SELF ?>" name="formulario" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" size="20"><br><br>
        <label>Email:</label>
        <input type="text" name="email" id="email" size="20"><br><br>
        <label>Telefono:</label>
        <input type="text" name="telefono" id="telefono" size="20"><br><br>
        <label>Genero:</label>
        <input type="radio" name="genero" value="mujer">Mujer
        <input type="radio" name="genero" value="hombre">Hombre<br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

<?php
}
?> -->

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
