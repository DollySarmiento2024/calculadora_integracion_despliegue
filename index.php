<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora</title>
</head>

<body>
    <header>
        <h1>Calculadora Web</h1>
    </header>

    <form id="form_calculadora" action="" method="post">
        <h2>Calcula tu operación</h2>
        <!-- Ingresar el primer valor -->
        <input class="caja" type="number" name="num1" placeholder="Introduce el primer número:" required><br>
        <select name="operacion" id="operacion" class="caja">
            <option value="+">Suma +</option>
            <option value="-">Resta -</option>
            <option value="*">Multiplicación *</option>
            <option value="/">División /</option>
            <option value="sqrt">raizCuadrada sqrt</option>
        </select><br>
        <!-- Ingresar el segundo valor-->
        <input class="caja" type="number" name="num2" placeholder="Introduce el segundo número:" required><br>
        <!-- Boton Calcular-->
        <input id="boton_calcular" type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    require_once __DIR__ . '/./src/Calculadora.php';
    use App\Calculadora;
    

    if (isset($_POST['calcular']) && $_POST['calcular'] == "Calcular") 
    {
        //Instanciar objeto clase triangle
        $numero1 = htmlspecialchars($_POST['num1'] ?? "", ENT_QUOTES);
        $numero2 = htmlspecialchars($_POST['num2'] ?? "", ENT_QUOTES);
        $operacion = htmlspecialchars($_POST['operacion'] ?? "", ENT_QUOTES);
        
      
        $calculadora = new Calculadora();

        switch ($operacion) {
            case '+':
                $suma=$calculadora->suma($numero1, $numero2);
                echo "<p>La suma de $numero1 y $numero2 es $suma</p>";
                break;
            
            case '-':
                $resta=$calculadora->resta($numero1, $numero2);
                echo "<p>La resta de $numero1 y $numero2 es $resta</p>";
                break;

            case '*':
                $multiplicacion=$calculadora->multiplicacion($numero1, $numero2);
                echo "<p>La multiplicacion de $numero1 y $numero2 es $multiplicacion</p>";
                break;

            case '/':
                $division=$calculadora->division($numero1, $numero2);
                echo "<p>La division de $numero1 y $numero2 es $division</p>";
                break;            

            case 'sqrt':
                $raizCuadrada=$calculadora->raizCuadrada($numero1);
                echo "<p>La raizCuadrada de $numero1 es $raizCuadrada</p>";
                break;     
        }
    }

    ?>

    <footer>
        <ul>
            <li>Dolly Fernanda Sarmiento Quintana</li>
            <li><a href="mailto:dosaqu@alumnatflorida.es">dosaqu@alumnatflorida.es</a></li>
            <li>Despliegue de Aplicaciones Web</li>
            <li><a href="https://www.floridauniversitaria.es/">Florida Universitaria</a></li>
    </footer>
      
</body>
</html>
