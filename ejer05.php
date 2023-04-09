<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio-05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4>Resultado</h4></div>
                    </div>
                    <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];
                        $numero3 = $_POST["numero3"];

                        $mayor = $numero1;
                        if ($numero2 > $mayor) {
                        $mayor = $numero2;
                        }
                        if ($numero3 > $mayor) {
                        $mayor = $numero3;
                        }

                        echo "<b> 🠪 El mayor número ingresado es: </b>" . $mayor;
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
