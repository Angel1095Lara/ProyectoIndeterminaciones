<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel = "stylesheet" href = "css/ejercicioscss.css">
</head>
<body>
    <center>
    <header>
        <nav>
            <a href = "Home.html" class = "b">Inicio de sesión</a>
            <a href="marco_conceptual.php" class="b">Marco Conceptual</a>
            <a href="Indeterminaciones.php" class="b">Indeterminaciones y sus formas de factorización</a>
            <a href="ejercicios_formulario.php" class="b">Ejercicios</a>
        </nav>
    </header>
</center>
    <?php
        $Datos=$_POST;
        
        $Nombre=$Datos['nombre'];
        $ApeP=$Datos['ApeP'];
        $ApeM=$Datos['ApeM'];

        ?> <h1>BIENVENIDO: <?php echo  $Nombre." ".$ApeP." ".$ApeM; ?> </h1>


    <section>
        <div>
        <h1 id = "intro">Introducción</h1>
        <p id = introduc>
        <?php
            echo "El cálculo diferencial es una rama fundamental de las matemáticas que se centra en el estudio de las tasas de cambio y las pendientes de
            las curvas. Uno de los conceptos clave en este campo es el de los límites, los cuales permiten comprender el comportamiento de las funciones 
            a medida que se acercan a puntos específicos. Sin embargo, durante el proceso de cálculo de límites, a menudo nos encontramos con situaciones
            ambiguas conocidas como INDETERMINACIONES.<br><br>

            Las indeterminaciones ocurren cuando intentamos evaluar un límite y el resultado no está claramente definido por las operaciones matemáticas 
            básicas. Algunos ejemplos comunes de indeterminaciones son 0/0, ∞/∞, 0 * ∞, ∞ - ∞, y 0^0. Estas formas no determinan un valor específico y requieren métodos adicionales 
            para ser resueltas adecuadamente.<br><br>
         
            Para abordar estas indeterminaciones y encontrar el valor real del límite, los matemáticos han desarrollado varios procedimientos y técnicas 
            que a continuación veremos en los siguientes apartados...;"

       ?>
       </p>
       </div>
    </section>

    <div class="bGroup">
        <a href="Home.html" type="button" class="b"> <- Inicio de sesión</a>
        <a href="marco_conceptual.php" type="button" class="b">Siguiente -></a>
    <div>
    
</body>
</html>