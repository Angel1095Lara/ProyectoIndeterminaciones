<!DOCTYPE html>
<html lang="es">
<head>
<link rel = "stylesheet" href = "css/ejercicioscss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        let input = document.querySelector("input")
        let p = document.querySelector("p")
        function addEquation() {
            MathJax.typesetPromise().then(() => {
                p.innerHTML = \\[ ${input.value} \\] + p.innerHTML;
                MathJax.typesetPromise();
            })
        }

    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
     <!--Codigo JavaScript-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
         });
    </script>
</head>
<body>
  <center>
<header >
        <nav>
              <a href = "Home.html" class = "b">Inicio de sesión</a>
              <a href="Introduccion.php" class="b">Introducción</a>
              <a href="marco_conceptual.php" class="b">Marco Conceptual</a>
              <a href="ejercicios_formulario.php" class="b">Ejercicios</a>
        </nav>
    </header>
        </center>
    <!--Fondo con parallax-->
    <div class="section">
        <div class="row container">
        <div class="borde">
            
          <center><h2 class="header white-text">Indeterminaciones</h2></center>
          <center><p class="white-text text-darken-3 lighten-3"></p>Formas de factorizacion</center>
            
        </div>

        </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="imagenes/calc.jpg"></div>
      </div>
      <div class="section black">
        <div class="row container">
        <div class = "Binomio_Cubo">
        <h3>Binomio conjugado</h3>

        <p> Este tipo de factorizar es muy conocida se trata de la forma, en que a un binomio al cuadrado  se representa en una multiplicación<br>
        por si mismo, pero con signo diferente, por ejemplo: <br>
        \(\frac{x^2-4}{x-2}\) cuando \(\lim _{x\to}2\) <br><br>
        
        Para factorizar esta forma, primero como se menciona se debe de representar de la siguiente forma:. <br>
        \(=\frac{\left(x-2\right)\left(x+2\right)}{x-2}\) <br><br>
        
        De esta forma buscamos encontrar un factor común donde se pueda eliminar ya sea con el denominador o el numerador, cómo se muestra <br>
        \(=\frac{\left(x+2\right)}{1}\)<br> <br>
        
        Una vez hecho esto simplemente aplicamos el límite y se resuelve <br>
        \(=2+2\) <br>
        \(=4\) <br><br>
        </p>
      </div>

        </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="imagenes/calc2.jpg"></div>
      </div>
      <div class="section black">
        <div class="row container">
        <div class = "Binomio_Cubo">
        <h3>Factor común</h3>

        <p> Este tipo de factorizar es de los mas faciles aquí lo que se busca simplemente lo que buscamos es encontrar el factor común en la <br>
         expresión, por ejemplo: <br>
        \(\\frac{6x^2+4x}{x}\) cuando \(\lim _{x\to}0\) <br><br>
        
        De esta forma es sencilla, simplemente buscamos ese factor que multiplique a toda la expresión y logre reducirla 
        cómo se muestra a continuación . <br>
        \(=\frac{x\left(6x+4\right)}{x}\) <br><br>
        
        Asi ya eliminamos este factor y se simplifica la expresión <br>
        \(=6x+4\)<br> <br>
        
        Una vez hecho esto simplemente aplicamos el límite y se resuelve <br>
        \(=6\left(0\right)+4\) <br>
        \(=4\) <br><br>
        </p>
      </div>

        </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="imagenes/calculo4.webp"></div>
      </div>
      <div class="section black">
        <div class="row container">
        <div class = "Binomio_Cubo">
        <h3>De la forma: \(=x^2+bx+c\) </h3>

        <p> Este tipo de factorizar es un poco mas complejo que las anteriores, pero lo que buscamos es simplificar la expresión <br>
          y encontrar la forma de eliminar algun termino, por ejemplo: <br>
        \(\frac{x^2-5x+4}{x-1}\) cuando \(\lim _{x\to}-1\) <br><br>
        
        Lo primero es saber que se habren dos paréntesis y nuestro primer término en ambas es aquel que está al cuadrado. <br>
        \(=\left(x\:\:\:\:\:\right)\left(x\:\:\:\:\right)\) <br><br>
        
        El signo del primer paréntesis se pone aquel que está entre \(\:x^2\) y bx, para el segundo paréntesis el signo va a ser <br>
        la multiplicación de ambos signos de la ecuación <br>
        \(=\left(x\-\:\:\:\:\right)\left(x\-\:\:\:\right)\)<br> <br>

        Para el segundo termino buscamos uno que multiplicados nos de el valos de c y sumados o restados el valor de b y 
        colocamos primero al mayor<br>
        \(=\frac{\left(x+4\right)\left(x-4\right)}{\left(x-4\right)}\)<br> <br>
        
        Ya que tenemos factorizado esto eliminamos el término comun con el del denominador <br>
        \(=\frac{\left(x+4\right)}{1}\) <br><br>

        Hecho esto nada mas queda aplicar el límite y resolver. <br>
        \(=1+4\) <br>
        \(=5\) <br>

        </p>
      </div>

        </div>
      </div>

    <div class="parallax-container">
        <div class="parallax"><img src="imagenes/calculo.jpg"></div>
      </div>
      <div class="section black">
        <div class="row container">
        <div class = "ax2bxc">
        <h3>De la forma: \(ax^2+bx+c\) </h3>

        <p> Esta factorizacion es muy similar a la anterior, de esta forma la incognita al cuadrado tiene un coeficiente, por ejemplo: <br>
        \(\frac{6x^2+7x-10}{x^2-4}\) cuando \(\lim _{x\to}-2\) <br><br>
        
        Para factorizar esta forma, primero se debe hacerla parte donde esta esta forma ya sea el numerador o denominador y ya factorizado
        se sustituye. Para factorizar primero multiplicamos por el coeficiente de \(x^2\) la parte que queremos factorizar. <br>
        \(=6\left(6x^2+7x-10\right)\) <br><br>
        
        De esta forma encontramos en comun denominador, para ello multiplicamos todo por el coeficiente, de la siguiente forma:<br>
        \(=\left(6x\right)^2+7\left(6x\right)-60\)<br> <br>
        
        Seguido buscamos factorizar como comun denominador que es 6x y buscamos un numero que sumados den el tercer numero y sumados o restados el segundo, <br>
        para despues dividir uno de los dos terminos por el coeficiente <br>
        \(=\frac{\left(6x+12\right)\left(6x-5\right)}{6}\) <br>
        \(=\left(x+2\right)\left(6x-5\right)\) <br><br>

        Sustituimos el resultado en la ecuacion principal y el denominador los factorizamos por diferencia de cuadrados tema ya antes visto. <br>
        \(=\frac{\left(x+2\right)\left(6x-5\right)}{\left(x+2\right)\left(x-2\right)}\) <br><br>

        Eliminamos terminos semejantes, aplicamos el limite y resolvemos.<br>
        \(=\frac{\left(6x-5\right)}{\left(x-2\right)}\)<br>
        \(=\frac{\left(6\left(-2\right)-5\right)}{\left(-2-2\right)}\)<br>
        \(=\frac{-17}{-4}\)<br>
        </p>
    </div>
        </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="imagenes/calculo3.jpg"></div>
      </div>
      <div class="section black">
        <div class="row container">
        <div class = "Raiz_Cuadrada">
        <h3>Con raiz cuadrada</h3>

        <p> Esta factorizacion la tenemos cuando en uno de los terminos tiene una raiz cuadrada ejemplo: <br>
        \(\frac{\sqrt{x+3}-2}{x-1}\) cuando \(\lim _{x\to}1\) <br><br>
        
        Para factorizar esto, utilizamos un enfoque algebraico para simplificar la expresión. La clave está en 
        eliminar la raíz cuadrada en el numerador. Una técnica útil en estos casos es eliminar la raiz elevando  al 
        cuadrado donde esta la misma. Para ello la multiplicamos por si misma pero con el signo de enmedio contrario. <br>
        pero al multiplicar arriba tambien lo tienes que hacer abajo. <br>
        \(=\left(\frac{\sqrt{x+3}-2}{x-1}\right)\left(\frac{\sqrt{x+3}+2}{\sqrt{x+3}+2}\right)\) <br><br>
        
        Eso simplificado queda: <br>
        \(=\frac{\left(\sqrt{x+3}-2\right)^2}{x-1\left(\sqrt{x+3}+2\right)}\)<br> <br>
        
        Al ser al cuadrado eliminamos la raiz , elevamos al cuadrado el segundo termino y reducimos terminos semejantes.<br>
        \(=\frac{x+3-4}{x-1\left(\sqrt{x+3}+2\right)}\:=\frac{x-1}{x-1\left(\sqrt{x+3}+2\right)}\) <br><br>

        Eliminamos terminos semejantes. <br>
        \(=\frac{1}{\sqrt{x+3}+2}\) <br><br>

        Aplicamos el limite y resolvemos.<br>
        \(=\frac{1}{\sqrt{x+3}+2}\)<br>
        \(=\frac{1}{\sqrt{4}+2}\)<br>
        \(=\frac{1}{2+2}\)<br>
        \(=\frac{1}{4}\)<br>
        </p>
    </div>

        </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="imagenes/calculo4.webp"></div>
      </div>
      <div class="section black">
        <div class="row container">
        <div class = "Binomio_Cubo">
    <h3>Binomio al Cubo</h3>
    <p> 
        En este hay dos formulas depende de si una suma o resta. <br>
        SUMA: \(\left(a+b\right)^3=\left(a^2-ab+b^2\right)\) <br>
        RESTA: \(\left(a-b\right)^3=\left(a^2+ab+b^2\right)\) <br><br>

        En este caso se da cuando los dos terminos estan al cubo, ya sea en el numerador o denominador por ejemplo: <br>
        \(\frac{x^3-125}{x-5}\) cuando \(\lim _{x\to -2}\) <br><br>

        Factorizamos usando la formula que se brindo antes.<br>
        \(=\frac{\left(x-3\right)\left(x^2+5x+25\right)}{x-5}\)<br><br>

        Eliminamos los terminos semejantes. <br>
        \(=\frac{\left(x^2+5x+25\right)}{1}\) <br><br>

        Aplicamos el limite y resolvemos. <br>
        \(=\left(\left(-5\right)^2+5\left(-5\right)+25\right)\)<br>
        \(=25-25+25\)<br>
        \(=25\)
    </p>
    </div>
        </div>
      </div>
    

      

      

      <!--footer-->
      <footer>
      <div class="bGroup">
               <a href="marco_conceptual.php" type="button" class="b"><- Anterior</a>
               <a href="ejercicios_formulario.php" type="button" class="b">Siguiente</a>
           <div>
      </footer>

</body>
</html>