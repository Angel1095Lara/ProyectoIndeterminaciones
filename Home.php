<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel = "stylesheet" href = "css/ejercicioscss.css">
</head>
<body>
    <?php
        $Datos=$_POST;
        
        $Nombre=$Datos['nombre'];
        $ApeP=$Datos['ApeP'];
        $ApeM=$Datos['ApeM'];

        $Correo = $Datos['CorEl'];
        $Contraseña = $Datos['Cont'];

        $header = "From: ". $Correo . "\r\n";
        $header .= "X-Mailer: PHP/". phpversion() . "\r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        
        $message = "BIENVENIDO, "$Nombre." ".$ApeP." ".$ApeM."\r\n";
        $message .= "Su correo es: ". $Correo . "\r\n";
        $message .= "Su contraseña es: ". $Contraseña ."\r\n";

        $destinatario = "prueba@prueba.com";
        $asunto = "Inicio de Sesion";

        mail($destinatario, $asunto, utf8_decode($message), $header);

        ?> <h1>BIENVENIDO: <?php echo  $Nombre." ".$ApeP." ".$ApeM; ?> </h1>

    <section>
        <?php
        echo "<div>";
        echo "<h1>Introducción</h1>";
         echo "El cálculo diferencial es una rama fundamental de las matemáticas que se centra en el estudio de las tasas de cambio y las pendientes de
          las curvas. Uno de los conceptos clave en este campo es el de los límites, los cuales permiten comprender el comportamiento de las funciones 
          a medida que se acercan a puntos específicos. Sin embargo, durante el proceso de cálculo de límites, a menudo nos encontramos con situaciones
         ambiguas conocidas como INDETERMINACIONES.<br><br>
   
         Las indeterminaciones ocurren cuando intentamos evaluar un límite y el resultado no está claramente definido por las operaciones matemáticas 
         básicas. Algunos ejemplos comunes de indeterminaciones son 0/0, ∞/∞, 0 * ∞, ∞ - ∞, y 0^0. Estas formas no determinan un valor específico y requieren métodos adicionales 
         para ser resueltas adecuadamente.<br><br>
         
         Para abordar estas indeterminaciones y encontrar el valor real del límite, los matemáticos han desarrollado varios procedimientos y técnicas 
         que a continuación veremos en los siguientes apartados...</div>";
       ?>
    </section>

    <div class="bGroup">
        <a href="marco_conceptual.php" type="button" class="b">Conceptos</a>
        <a href="Indeterminaciones.php" type="button" class="b">Indeterminaciones y sus formas de factorizacion</a>
        <a href="ejercicios_formulario.php" type="button" class="b">Ejercicios</a>
    <div>
    
</body>
</html>