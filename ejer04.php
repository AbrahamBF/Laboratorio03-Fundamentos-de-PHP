<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio-04</title>
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
                        $nota1 = $_POST["nota1"];
                        $nota2 = $_POST["nota2"];
                        $nota3 = $_POST["nota3"];

                        $promedio = ($nota1 + $nota2 + $nota3) / 3;

                        echo "<h5>Libreta del Alumno</h5><hr>";
                        echo "<b><p> 🠪 Promedio: </b>" . $promedio . "</p>";

                        if ($promedio >= 13) {
                            echo "<b><p>Aprobado</p></b>";
                        } else {
                            echo "<b><p>Reprobado</p></b>";
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