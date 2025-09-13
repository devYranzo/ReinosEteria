<?php
//VARIABLES
$nombre = $_POST["name"];
$profesion = $_POST["profesion"];
$historia = $_POST["historia"];
/*Atributos*/
$fuerza = $_POST["fuerza"];
$agilidad = $_POST["agilidad"];
$defensa = $_POST["defensa"];
$vitalidad = $_POST["vitalidad"];

//IMAGEN ALEATORIA SEGUN LA PROFESION
$ImagenCazador = array("img/personajes2/Cazador/1.jpg", "img/personajes2/Cazador/2.jpg");
$ImagenCampesino = array('img/personajes2/Campesino/1.jpg', 'img/personajes2/Campesino/2.jpg');
$ImagenClerigo = array('img/personajes2/Clerigo/1.jpg', 'img/personajes2/Clerigo/2.jpg');
$ImagenGuerrero = array('img/personajes2/Guerrero/1.jpg', 'img/personajes2/Guerrero/2.jpg');
$ImagenMago = array('img/personajes2/Mago/1.jpg', 'img/personajes2/Mago/2.jpg');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reinos de Éteria</title>
    <link rel="stylesheet" media="all" href="" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" media="all" href="style/resultado.css" />
</head>

<body>
    <div class="info1">
        <a href="inicio.html" class="cerrar">
            <h2>X</h2>
        </a>
        <div>
            <h1><?php echo $nombre ?></h1>
            <h2><?php echo $profesion ?></h2>
        </div>
        <div class="izquierda">
            <hr>
            <div class="atributos">
                <?php
                echo "<h3> Fuerza .... <span class='respuesta'>" . $fuerza . "</span></h3>";
                echo "<h3> Agilidad .... <span class='respuesta'>" . $agilidad . "</span></h3>";
                echo "<h3> Defensa .... <span class='respuesta'>" . $defensa . "</span></h3>";
                echo "<h3> Vitalidad .... <span class='respuesta'>" . $vitalidad . "</span></h3>";
                ?>
            </div>
            <div class="habilidad">
                <hr>
                <span>
                    <?php
                    if (isset($_POST['enviar'])) {
                        if (!empty($_POST['habilidades'])) {
                            foreach ($_POST['habilidades'] as $habilidades) {
                                echo "<h3 class='respuesta'>" . $habilidades . "</h3></br>";
                            }
                        } else
                            echo "No se ha seleccionado ninguna habilidad";
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="derecha">
            <div class="argazkia">
                <?php
                if ($profesion == "Cazador") {
                    $i = array_rand($ImagenCazador);
                    echo "<img src='$ImagenCazador[$i]' alt='Personaje'>";
                } elseif ($profesion == "Guerrero") {
                    $i = array_rand($ImagenGuerrero);
                    echo "<img src='$ImagenGuerrero[$i]' alt='Personaje'>";
                } elseif ($profesion == "Hechicero") {
                    $i = array_rand($ImagenMago);
                    echo "<img src='$ImagenMago[$i]' alt='Personaje'>";
                } elseif ($profesion == "Campesino") {
                    $i = array_rand($ImagenCampesino);
                    echo "<img src='$ImagenCampesino[$i]' alt='Personaje'>";
                } elseif ($profesion == "Clerigo") {
                    $i = array_rand($ImagenClerigo);
                    echo "<img src='$ImagenClerigo[$i]' alt='Personaje'>";
                } elseif ($profesion == "Desempleado") {
                    $i = array_rand($ImagenClerigo);
                    echo "<img src='$ImagenClerigo[$i]' alt='Personaje'>";
                }
                ?>
            </div>
            <div>
                <hr>
                <div class="historia">
                    <?php
                    echo $historia;
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
