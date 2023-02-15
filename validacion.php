<?php
// if (isset($_POST['enviar'])) {
//     $usuarios = [];
//     $correo = $_REQUEST['email'];
//     $contraseña = $_REQUEST['password'];
//     //Realizamos un push de los datos del formulario al array
//     $usuarios[$correo] = $contraseña;
//     // var_dump($usuarios);
//     $nombre = $_POST['nombre'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $genero = "";

//     if (isset($_POST['genero'])) {
//         $genero = $_POST['genero'];
//     } else {
//         $genero = "";
//     }

//     $campos = array();

//     if ($nombre == "") {
//         array_push($campos, "El nombre no puede estar vacío");
//     }
//     if ($email == "" || strpos($email, "@") === false || strpos($email, ".") === false) {
//         array_push($campos, "El correo electrónico no puede estar vacío y debe tener un formato válido ");
//     };
//     if ($password == "" || strlen($password) < 6) {
//         array_push($campos, "La contraseña no puede estar vacía y debe tener al menos 6 caracteres");
//     };
//     if ($genero == "") {
//         array_push($campos, "Debe seleccionar un género");
//     };
//     if (count($campos) > 0) {
//         echo "<div class='error'>";
//         for ($i = 0; $i < count($campos); $i++) {
//             echo "<li>" . $campos[$i] . "</li>";
//         };
//     } else {
//         echo "<div class='success'>
//         Registrado con éxito!!";
//     };
//     echo "</div";
// };
/* TODO ------------------------------------------------------------------------------ */
if (isset($_POST['login'])) {
    $user = $_REQUEST['email'];
    $contraseña = $_REQUEST['password'];
$usuarios=array(
    "emma@gmail.com"=>"123456",
    "chemo@outlook.com"=>"890651",
    "jacinto@udgvirtial.udg.mx" => "787365"

);


   if($usuarios[$user] == $contraseña)
   {
    echo "Usuarioo valido";
   }
    else
    {
     echo "Usuario no valido";
    };


}
?>
<br>
<a href="./formulario.html">Volver al Home</a>