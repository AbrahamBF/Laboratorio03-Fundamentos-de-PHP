<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4>Resultado de la Calculadora</h4></div>
                    </div>
                    <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];

                        if ($num2 == 0) {
                            echo "<b><p style='color: red'>Error: El segundo número no puede ser cero.</p></b>";
                        } else {
                            if ($num1 > $num2) {
                                $suma = $num1 + $num2;
                                $diferencia = $num1 - $num2;
                                echo "<b><p> 🠪 Suma de los dos números: </b>" . $suma . "</p>";
                                echo "<b><p> 🠪 Diferencia entre los dos números: </b>" . $diferencia . "</p>";
                            } else {
                                $producto = $num1 * $num2;
                                $division = $num1 / $num2;
                                echo "<b><p> 🠪 Producto de los dos números: </b>" . $producto . "</p>";
                                echo "<b><p> 🠪 División del primer número respecto al segundo número: </b>" . $division . "</p>";
                            }
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
