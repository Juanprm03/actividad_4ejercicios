<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
    <h1>Examples</h1>
    <nav>
        
            <a href="ejercicio1.php" class="btn btn-dark">Ejercicio 1</a>  <br>
            <a href="ejercicio2.php" class="btn btn-dark">Ejercicio 2</a>   <br>
            <a href="ejercicio3.php" class="btn btn-dark">Ejercicio 3</a>   <br>
            <a href="ejercicio4.php" class="btn btn-dark">Ejercicio 4</a>    
        
    </nav>
    </header>
    <section>
    <h2>Variables</h2>
    <?php
    // variables
    //str gretting = "Hola"; // Fuertemente tipado

    $gretting= "Hello"; //Debilmente tipado

    echo "$gretting Care monda <br>";

$thing= "Mundo";

echo $gretting. " ". $thing . "<br>";

//
$numero_one = 45;
$numero_two = 675;
$resultado = $numero_one+ $numero_two;

echo $resultado . "<br>";
//
$active = true;

// 
$users = array("name" => "Juan", "firstname" => "Ruiz",  "lastname" => "Marin", "age" => 18, "email" => "juan@gmail.com") ;

echo "User is " . $users[ "name" ]. " " . $users[ "email" ] . "<br>";




    ?>
    </section>
    <br><br><br><br>
    <footer>
        &copy; Created by JPRM - 2024
    </footer>
</body>
</html>