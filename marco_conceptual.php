<!DOCTYPE html>
<html lang="en">
<head>

<link rel = "stylesheet" href = "css/ejercicioscss.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos</title>
</head>
<body>
<center>
<header>
        <nav>
            <a href = "Home.html" class = "b">Inicio de sesión</a>
            <a href="introduccion.php" class="b">Introducción</a>
            <a href="Indeterminaciones.php" class="b">Indeterminaciones y sus formas de factorización</a>
            <a href="ejercicios_formulario.php" class="b">Ejercicios</a>
        </nav>
    </header>
</center>
<center><main>
    <!-- Titulo centrado -->
    <center><h1 class="tituloP">Calculo diferencial: Indeterminaciones</h1></center>
        <center><p>Integrantes</p></center>
        <center><p>Colorado Herrera Lisandro</p></center>
        <center><p>Fernandez Santos Said</p></center>
        <center><p>Hernandez Cordero Alejandro</p></center>
        <center><p>Lara Utrera Angel Yair</p></center>
        <center><p>Lugo Cruz Kevin Alejandro</p></center>

        <center><h2 class="tituloP">Conceptos</h2></center>

    <section class="titulo">
    <?php
    echo "<div>";
    echo "Antes de ir de lleno al tema principal, es importante que tenga presente algunos conceptos claves que son necesarios para el entendimiento
     de dicho tema, por lo que en este apartado habláremos de estos conceptos a continuación:</div> <br>";
     ?>
     </section>
     
     <center><div class="cont">
     <section>
        <div class="bg">
    <?php
    echo "<div>";
     echo "<h3>Cálculo diferencial</h3>"; //subtítulo
    echo "El cálculo diferencial es una rama de las matemáticas que se centra en el estudio de las tasas de cambio y cómo las funciones varían de 
    manera instantánea en puntos específicos. Su enfoque principal es el concepto de derivada, que proporciona una medida precisa de la velocidad 
    con la que una cantidad cambia en relación con otra.</div>";
    ?>
        </div>
    </section>
    
    <section>
    <div class="bg">
    <?php
    echo "<div>";
    echo "<h3>Función</h3>";//Subtítulo
    echo "En el ámbito del cálculo diferencial, una función es una relación matemática entre dos conjuntos, donde a cada elemento del primer 
    conjunto, llamado dominio, le corresponde exactamente un elemento del segundo conjunto, denominado codominio.<br>
    Esta relación establece una regla que asigna a cada elemento del dominio uno y solo un elemento del codominio. Es decir, una función toma un 
    valor de entrada y produce un valor de salida de acuerdo con una regla predefinida.</div>";
    ?>
    </div>
    </section>

    <section>
    <div class="bg">
    <?php
    echo "<div>";
    echo "<h3>Límite</h3>";//Subtítulo
    echo "El concepto de límite es una idea fundamental en cálculo y análisis matemático. Se utiliza para describir el comportamiento de una función
     cuando su entrada se acerca a un valor particular o cuando tiende hacia el infinito o el infinito negativo. El límite de la función nos dice 
     el comportamiento de la función en cualquier instante de tiempo para predecir las propiedades de la función.</div>";
     ?>
     </div>
    </section>
     
    <section>
    <div class="bg">
     <?php
     echo "<div>";
    echo "<h3>Factorización</h3>";//Subtítulo
    echo "La factorización es un proceso a través del cual se descompone una cantidad en factores. Así como los números pueden ser expresados como 
    el producto de dos o más números, un polinomio puede ser expresado como el producto de dos o más expresiones algebraicas.</div>";
    ?>
    </div>
   </section>

   <section>
   <div class="bg">
    <?php
    echo "<div>";
    echo "<h3>Binomio al cuadrado</h3>";//Subtítulo
    echo "Un binomio al cuadrado es una expresión algebraica que consta de dos términos elevados  al cuadrado, sumados o restados entre sí. Su
     estructura general puede representarse como (a+b)^2 o (a-b)^2, donde a y b son términos.<br>El cuadrado de un binomio es igual al cuadrado del 
     primer término menos el doble del producto de los términos más el cuadrado del segundo término (a^2 + 2ab + b^2)</div>";
     ?>
     </div>
     </section>

     <section>
     <div class="bg">
     <?php
     echo "<div>";
    echo "<h3>Binomio al cubo</h3>";
     echo "Un binomio al cubo es una expresión algebraica que consta de dos términos elevados al cubo, sumados o restados entre sí. Su estructura
     general puede representarse como (a+b)^3 p (a-b)^3, donde a y b son términos.<br>El cubo de un binomio es igual al cubo del primer término, 
     más el triple producto del cuadrado del primer término por el segundo, más el triple producto del primer término por el cuadrado del segundo, 
     más el cubo del segundo término. (a^3 + 3a^2b + 3ab^2 + b^3)</div>";
     ?>
     </div>
     </section>

</div></center>

</main></center>
    <div class="bGroup">
        <a href="introduccion.php" type="button" class="b"><- Anterior</a>
        <a href="Indeterminaciones.php" type="button" class="b">Siguiente -></a>
    <div>


</body>
</html>