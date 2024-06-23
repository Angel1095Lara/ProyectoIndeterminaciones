<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel = "stylesheet" href = "css/ejercicioscss.css">
    <!--El codigo javascript es para que se muestren las operaciones-->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
    <form action="ejercicios.php" method="POST">
        <div class="contenedor">
            <div class="fondoN">
        <center>
            <h2>EJERCICIOS DE EJEMPLO</h2>
            <br>
            <p>Para algunos resultados ocuparas colocar el simbolo "^" para representar los exponentes, <br>
                para representar fracciones ocuparas "/" y para las raices "√". <br>
                No te preocupes por aprender a colocar estos simbolos, ya que estaran disponibles con un solo click.
            </p>
        </center>
        <!--Ejercicio 1-->
        <h3>Ejercicio 1:<hr></h3>
        <p class="Ejercicios">
            \(\lim_{x\to 3} \frac{x^2-9}{x-3}\)
        </p>
        <input type="text" name="ejercicio1" id="ejercicio1" required>
        <button type="button" id="exponenteB" name="caracter" onclick="exponente(1);" required> ^ </button>
        <button type="button" id="fraccionB" name="caracter" onclick="fraccion(1);" required> / </button>
        <button type="button" id="raizB" name="caracter" onclick="raiz(1);" required> √ </button>

        <!--Ejercicio 2-->
        <h3>Ejercicio 2:<hr></h3>
        <p class="Ejercicios">
            \(\lim_{x\to 0} \frac{3x+2x^2}{5x+6x^3}\)
        </p>
        <input type="text" name="ejercicio2" id="ejercicio2" required>
        <button type="button" id="exponenteB" name="caracter" onclick="exponente(2);" required> ^ </button>
        <button type="button" id="fraccionB" name="caracter" onclick="fraccion(2);" required> / </button>
        <button type="button" id="raizB" name="caracter" onclick="raiz(2);" required> √ </button>

        <!--Ejercicio 3-->
        <h3>Ejercicio 3:<hr></h3>
        <p class="Ejercicios">
            \(\lim _{x\to 1}\frac{x^2+2x-3}{x-1}\)
        </p>
        <input type="text" name="ejercicio3" id="ejercicio3" required>
        <button type="button" id="exponenteB" name="caracter" onclick="exponente(3);" required> ^ </button>
        <button type="button" id="fraccionB" name="caracter" onclick="fraccion(3);" required> / </button>
        <button type="button" id="raizB" name="caracter" onclick="raiz(3);" required> √ </button>

        <!--Ejercicio 4-->
        <h3>Ejercicio 4:<hr></h3>
        <p class="Ejercicios">
            \(\lim _{x\to -1}\frac{5x^2+6x+1}{x+1}\)
        </p>
        <input type="text" name="ejercicio4" id="ejercicio4" required>
        <button type="button" id="exponenteB" name="caracter" onclick="exponente(4);" required> ^ </button>
        <button type="button" id="fraccionB" name="caracter" onclick="fraccion(4);" required> / </button>
        <button type="button" id="raizB" name="caracter" onclick="raiz(4);" required> √ </button>

        <!--Ejercicio 5-->
        <h3>Ejercicio 5:<hr></h3>
        <p class="Ejercicios">
            \(\lim _{x\to 0}\frac{\sqrt{3+x}-\sqrt{3}}{x}\)
        </p>
        <input type="text" name="ejercicio5" id="ejercicio5" required>
        <button type="button" id="exponenteB" name="caracter" onclick="exponente(5);" required> ^ </button>
        <button type="button" id="fraccionB" name="caracter" onclick="fraccion(5);" required> / </button>
        <button type="button" id="raizB" name="caracter" onclick="raiz(5);" required> √ </button>

        <!--Ejercicio 6-->
        <h3>Ejercicio 6:<hr></h3>
        <p class="Ejercicios">
            \(\lim _{x\to -5}\frac{x^3-125}{x-5}\)
        </p>
        <input type="text" name="ejercicio6" id="ejercicio6" required>
        <button type="button" id="exponenteB" name="caracter" onclick="exponente(6);" required> ^ </button>
        <button type="button" id="fraccionB" name="caracter" onclick="fraccion(6);" required> / </button>
        <button type="button" id="raizB" name="caracter" onclick="raiz(6);" required> √ </button>
        
        <!--Ejercicio 7-->
        <h3>Ejercicio 7:<hr></h3>
        <p class="Ejercicios">
            \(f\left(x\right)=bx^3\)
            <br>\(\lim _{h\to 0}\frac{f\left(x+h\right)-f\left(x\right)}{h}\)
        </p>
        <input type="text" name="ejercicio7" id="ejercicio7" required>
        <button type="button" id="exponenteB" name="caracter" onclick="exponente(7);" required> ^ </button>
        <button type="button" id="fraccionB" name="caracter" onclick="fraccion(7);" required> / </button>
        <button type="button" id="raizB" name="caracter" onclick="raiz(7);" required> √ </button>

        <center><input type="submit" id="Resultado" value="Resultados"></center>

        <div class="bGroup">
            <a href="Indeterminaciones.php" type="button" class="b">Indeterminaciones y sus formas de factorizacion</a>
            <a href="marco_conceptual.php" type="button" class="b">Conceptos</a>
        <div>
        </div>
    </div>

        <script src="js/ejercicios.js"></script>
    </form>
</body>
</html>