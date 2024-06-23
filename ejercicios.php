<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Angel" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel = "stylesheet" href = "css/ejercicioscss.css">
    <link href="css/echo.css" rel="stylesheet" type="text/css" media="screen">
    <!--El codigo javascript es para que se muestren las operaciones-->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
<header>
        <nav>
            
            <a href = "Home.html" class = "b">Inicio de sesión</a>
            <a href="Introducción.php" class="b">Introducción</a>
            <a href="marco_conceptual.php" class="b">Marco Conceptual</a>
            <a href="ejercicios_formulario.php" class="b">Ejercicios</a>
            
        </nav>
    </header>
<center>
    <?php
        $aciertos = 0;
        $resultados = array(
            "Ejercicio1" => $_POST['ejercicio1'],
            "Ejercicio2" => $_POST['ejercicio2'],
            "Ejercicio3" => $_POST['ejercicio3'],
            "Ejercicio4" => $_POST['ejercicio4'],
            "Ejercicio5" => $_POST['ejercicio5'],
            "Ejercicio6" => $_POST['ejercicio6'],
            "Ejercicio7" => $_POST['ejercicio7']
        );
    ?>
    <div class="contenedor">
        </center>
        <div class="fondoN">
        <center>
    <center>
        <h2>EJERCICIOS DE EJEMPLO</h2>
    </center>
    <!--Ejercicio 1-->
    <h3>Ejercicio 1:<hr></h3>
    <p class="Ejercicios">
        \(\lim_{x\to 3} \frac{x^2-9}{x-3}\)
    </p>
    <?php
        if($resultados['Ejercicio1'] == 6){
            echo '<p class="correcto">Correcto</p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio1'];
            $aciertos++;
        }else{
            echo '<p class="mal">Lo siento esta mal :( </p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio1'];
        }
    ?>
    <div id="Res1">
        <p class="Respuesta">
            = \(\frac{\left(x+3\right)\left(x-3\right)}{x-3}\)
            <br>= x + 3
            <br>= 3 + 3
            <br>= 6
        </p>
    </div>
    <center><button type="button" id="Resultado" onclick="mostrarR(1);">Procedimiento</button></center>

    <!--Ejercicio 2-->
    <h3>Ejercicio 2:<hr></h3>
    <p class="Ejercicios">
        \(\lim_{x\to 0} \frac{3x+2x^2}{5x+6x^3}\)
    </p>
    <?php
        if($resultados['Ejercicio2'] == "3/5"){
            echo '<p class="correcto">Correcto</p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio2'];
            $aciertos++;
        }else{
            echo '<p class="mal">Lo siento esta mal :( </p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio2'];
        }
    ?>
    <div id="Res2">
        <p class="Respuesta">
        = \(\frac{x\left(3+2x\right)}{x\left(5+6x^2\right)}\)
        <br>= \(\frac{3+2x}{5+6x^2}\)
        <br>= \(\frac{3+2\left(0\right)}{5+6\left(0\right)^2}\)
        <br>= \(\frac{3}{5}\)
    </p>
    </div>
    <center><button type="button" id="Resultado" onclick="mostrarR(2);">Procedimiento</button></center>

    <!--Ejercicio 3-->
    <h3>Ejercicio 3:<hr></h3>
    <p class="Ejercicios">
        \(\lim _{x\to 1}\frac{x^2+2x-3}{x-1}\)
    </p>
    <?php
        if($resultados['Ejercicio3'] == 4){
            echo '<p class="correcto">Correcto</p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio3'];
            $aciertos++;
        }else{
            echo '<p class="mal">Lo siento esta mal :( </p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio3'];
        }
    ?>
    <div id="Res3">
        <p class="Respuesta">
        = \(\frac{\left(x+3\right)\left(x-1\right)}{x-1}\)
        <br>= x + 3
        <br>= 1 + 3
        <br>= 4
    </p>
    </div>
    <center><button type="button" id="Resultado" onclick="mostrarR(3);">Procedimiento</button></center>

    <!--Ejercicio 4-->
    <h3>Ejercicio 4:<hr></h3>
    <p class="Ejercicios">
        \(\lim _{x\to -1}\frac{5x^2+6x+1}{x+1}\)
    </p>
    <?php
        if($resultados['Ejercicio4'] == -4){
            echo '<p class="correcto">Correcto</p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio4'];
            $aciertos++;
        }else{
            echo '<p class="mal">Lo siento esta mal :( </p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio4'];
        }
    ?>
    <div id="Res4">
        <p class="Respuesta">
            = \(5\left(x^2+6x+1\right)\)
            <br>= \(\left(5x\right)^2+6\left(5x\right)+5\)
            <br>= \(\frac{\left(5x+5\right)\left(5x+1\right)}{5}\)
            <br>= \(\frac{\left(x+1\right)\left(5x+1\right)}{x+1}\)
            <br>= 5x + 1
            <br>= 5(-1) + 1
            <br>= -4
        </p>
    </div>
    <center><button type="button" id="Resultado" onclick="mostrarR(4);">Procedimiento</button></center>

    <!--Ejercicio 5-->
    <h3>Ejercicio 5:<hr></h3>
    <p class="Ejercicios">
        \(\lim _{x\to 0}\frac{\sqrt{3+x}-\sqrt{3}}{x}\)
    </p>
    <?php
        if($resultados['Ejercicio5'] == "1/2√3"){
            echo '<p class="correcto">Correcto</p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio5'];
            $aciertos++;
        }else{
            echo '<p class="mal">Lo siento esta mal :( </p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio5'];
        }
    ?>
    <div id="Res5">
        <p class="Respuesta">
        = \(\left(\frac{\sqrt{3+x}-\sqrt{3}}{x}\right)\left(\frac{\sqrt{3+x}+\sqrt{3}}{\sqrt{3+x}+\sqrt{3}}\right)\)
        <br>= \(\frac{\left(\sqrt{3+x}-\sqrt{3}\right)^2}{x\left(\sqrt{3+x}+\sqrt{3}\right)}\)
        <br>= \(\frac{3+x-3}{x\left(\sqrt{3+x}+\sqrt{3}\right)}\)
        <br>= \(\frac{1}{\sqrt{3+0}+\sqrt{3}}\)
        <br>= \(\frac{1}{2\sqrt{3}}\)
    </p>
    </div>
    <center><button type="button" id="Resultado" onclick="mostrarR(5);">Procedimiento</button></center>

    <!--Ejercicio 6-->
    <h3>Ejercicio 6:<hr></h3>
    <p class="Ejercicios">
        \(\lim _{x\to -5}\frac{x^3-125}{x-5}\)
    </p>
    <?php
        if($resultados['Ejercicio6'] == 25){
            echo '<p class="correcto">Correcto</p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio6'];
            $aciertos++;
        }else{
            echo '<p class="mal">Lo siento esta mal :( </p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio6'];
        }
    ?>
    <div id="Res6">
        <p class="Respuesta">
        = \(\frac{\left(x-5\right)\left(x^2+5x+5^2\right)}{x-5}\)
        <br>= \(x^2+5x+5^2\)
        <br>= \(\frac{3+x-3}{x\left(\sqrt{3+x}+\sqrt{3}\right)}\)
        <br>= \(\left(-5\right)^2+5\left(-5\right)+25\)
        <br>= 25
    </p>
    </div>
    <center><button type="button" id="Resultado" onclick="mostrarR(6);">Procedimiento</button></center>

    <!--Ejercicio 7-->
    <h3>Ejercicio 7:<hr></h3>
    <p class="Ejercicios">
        \(f\left(x\right)=bx^3\)
        <br>\(\lim _{h\to 0}\frac{f\left(x+h\right)-f\left(x\right)}{h}\)
    </p>
    <?php
        if($resultados['Ejercicio7'] == "3x^2b"){
            echo '<p class="correcto">Correcto</p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio7'];
            $aciertos++;
        }else{
            echo '<p class="mal">Lo siento esta mal :( </p><br>';
            echo "Dato introducido: ".$resultados['Ejercicio7'];
        }
    ?>
    <div id="Res7">
        <p class="Respuesta">
        = \(\frac{b\left(x+h\right)^3-bx^3}{h}\)
        <br>= \(\frac{b\left(x^3+3x^2h+3xh^2+h^3\right)-bx^3}{h}\)
        <br>= \(\frac{bx^3+3x^2bh+3xh^2b+bh^3-bx^3}{h}\)
        <br>= \(\frac{3x^2bh+3xh^2b+bh^3}{h}\)
        <br>= \(\frac{h\left(3x^2b+3xhb+bh^2\right)}{h}\)
        <br>= \(3x^2b+3xhb+bh^2\)
        <br>= \(3x^2b+3x\left(0\right)b+b\left(0\right)^2\)
        <br>= \(3x^2b\)
    </p>
    </div>
    <center><button type="button" id="Resultado" onclick="mostrarR(7);">Ver Resultado</button></center>

    <div class="bGroup">
        <a href="Indeterminaciones.php" type="button" class="b"><- Anterior</a>
    <div>
    </div>
</div>






    <script src="js/ejercicios.js"></script>
</body>
</html>