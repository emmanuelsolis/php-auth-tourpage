<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;500,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
        <header class="navbar-conteiner">
               <nav>
                   <ul>
                     <li><a href="#home">Home</a></li>
                     <li><a href="#about">About</a></li>
                     <li><a href="#services">Services</a></li>
                     <li><a href="#contact">Contact</a></li>
                   </ul>
                 </nav>
        </header>
        <main class="main">
            <h2>Viaja con nosotro al paraíso en la tierra</h2>
            <h3>Tanzania</h3>
            <div class="imagen-contenedor">
                <img src="./img/africa.jpg" alt="tanzania">
            </div>
            <p>"Bienvenidos a Tanzania, un lugar lleno de maravillas naturales y
                cultura rica. Desde las majestuosas montañas del Kilimanjaro hasta las
                vastas llanuras del Serengeti, Tanzania es un paraíso para los amantes
                de la naturaleza. Descubre la vida salvaje en sus parques nacionales y
                contempla la belleza de los atardeceres sobre el lago Victoria. Además,
                conoce las tradiciones y costumbres de las diversas tribus locales y
                sumérgete en la cultura tanzana. ¡Te invitamos a explorar este hermoso
                país y crear recuerdos inolvidables!"</p>
        </main>
        <aside>
            <h4>Aquí está una lista de cosas que se pueden hacer en Tanzania:</h4>
            <ol>
                <li>Explorar el Parque Nacional de Serengeti y ver la gran migración de animales.</li>
                <li>Sumergirse en la cultura local visitando los pueblos Masai.</li>
                <li>Ir en un safari para ver los Big Five (león, elefante, rinoceronte, búfalo y leopardo).</li>
                <li>Nadar en las playas de Zanzíbar.</li>
                <li>Visitar el Monte Kilimanjaro, el pico más alto de África.</li>
                <li>Descubrir la fauna y la flora en el Parque Nacional de Ngorongoro.</li>
                <li>Ir en una expedición a la llanura de Selous.</li>
                <li>Ver los colores del mercado Stone Town en Zanzíbar.</li>
                <li>Visit the cultural center and museum of Makonde Plateau.</li>
                <li>Participar en actividades al aire libre como senderismo, rafting, equitación o buceo.</li>
            </ol>
            <div class="imagen-contenedor">
                <img src="./img/safari.jpg" alt="tanzania">
            </div>
            <div class="imagen-contenedor">
                <img src="./img/tribu.jpg" alt="tanzania">
            </div>
             <div class="imagen-contenedor">
                <img src="./img/mount-kilimanjaro.jpg.jpg" alt="tanzania">
            </div> 
            
        </aside>
        <div class="widget-1">
            <h3>Bienvenido</h3>
            <div class="formulario-contenedor">
                <form action="<?php $_PHP_SELF ?>" method="post">
                <?php
                    if(isset($_POST['nombre'])){
                        $nombre=$_POST['nombre'];
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        $genero = "";

                        if(isset($_POST['genero'])){
                            $genero=$_POST['genero'];
                        }else {
                            $genero="";
                        }

                        $campos = array();

                        if($nombre == ""){
                            array_push($campos, "El nombre no puede estar vacío");
                        }
                        if($email == "" || strpos($email, "@") === false || strpos($email, ".") === false){
                            array_push($campos, "El correo electrónico no puede estar vacío y debe tener un formato válido ");
                        };
                        if($password == "" || strlen($password) < 6){
                            array_push($campos, "La contraseña no puede estar vacía y debe tener al menos 6 caracteres");
                        };
                        if($genero == ""){
                            array_push($campos, "<div class='w3-panel w3-red'><p>Debe seleccionar un género</p></div>");
                        };
                        if(count($campos) > 0){
                            echo "<div class='error'>";
                            for($i = 0; $i < count($campos); $i++){
                                echo "<li>".$campos[$i]."</li>";
                            };
                        }else {
                            echo "<div class='success'>
                            Registrado con éxito!!";
                        };     
                        echo "</div"; 
                    }   ;
                ?>
                    <label for="nombre">Nombre completo: </label> <br>
                    <input type="text" name="nombre" id="nombre">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password"><br>
                    <input type="radio" name="genero" id="genero" value="hombre">Hombre
                    <input type="radio" name="genero" id="genero" value="mujer">Mujer
                    <br><br>
                    <input type="submit" name="enviar" value="Registrarse">
                </form>
            </div>
        </div>
        <div class="widget-2">
            <h3>Que Lugares  le gustaría visitar</h3>
            <div class="formulario-contenedor">
                <form action="index.php" method="post">
                    <label for="opcion-1">
                        <input type="checkbox" name="lugares[]" id="opcion-1" value="serengeti">Serengeti
                    </label>
                    <label for="opcion-2">
                        <input type="checkbox" name="lugares[]" id="opcion-2" value="kilimanjaro">Kilimanjaro
                    </label>
                    <label for="opcion-3">
                        <input type="checkbox" name="lugares[]" id="opcion-3" value="zanzibar">Zanzibar
                    </label>
                    <label for="opcion-4">
                        <input type="checkbox" name="lugares[]" id="opcion-4" value="selous">Selous
                    </label>
                    <label for="opcion-5">
                        <input type="checkbox" name="lugares[]" id="opcion-5" value="ngorongoro">Ngorongoro
                    </label>
                    <label for="opcion-6">
                        <input type="checkbox" name="lugares[]" id="opcion-6" value="masai">Masai
                    </label>
                    <label for="opcion-7">
                        <input type="checkbox" name="lugares[]" id="opcion-7" value="stone town">Stone Town
                    </label>
                    <label for="opcion-8">
                        <input type="checkbox" name="lugares[]" id="opcion-8" value="makonde plateau">Makonde Plateau
                    </label>
                    <h4>Elije las actividades que le agrada realizar en vacaciones</h4>
                    <select name="actividades" multiple id="actividades">
                        <option value="senderismo">Senderismo</option>
                        <option value="rafting">Rafting</option>
                        <option value="equitación">Equitación</option>
                        <option value="buceo">Buceo</option>
                    </select><br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>
            </div>
        </div><br>
        <footer class="footer-distributed footer">
            <div class="footer-left">
                <h3>Bussinessmarts<span>logo</span></h3>
                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>
                    <a href="#">Blog</a>
                    <a href="#">Pricing</a>
                    <a href="#">About</a>
                    <a href="#">Faq</a>
                    <a href="#">Contact</a>
                </p>
                <p class="footer-company-name">Company Name © 2015</p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+1.555.555.5555</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">support@company.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </footer>
    </div>
    
    
</body>
</html>