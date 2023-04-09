<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio-02</title>
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
                        $num3 = $_POST["num3"];
                        $num4 = $_POST["num4"];

                        $suma = $num1 + $num2;
                        $producto = $num3 * $num4;

                        echo "<b><p> 🠪 Suma de los dos primeros números: </b>" . $suma . "</p>";
                        echo "<b><p> 🠪 Producto del tercer y cuarto número: </b>" . $producto . "</p>";
                    }
                    ?>  
                    </div>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
