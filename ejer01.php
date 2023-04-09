<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio-01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4>Datos del usuario</h4></div>
                    </div>
                    <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $usuario = $_POST["usuario"];
                        $email = $_POST["email"];

                        echo "<b><p> 🠪 Usuario: </b>" . $usuario . "</p>";
                        echo "<b><p> 🠪 Correo Electrónico: </b>" . $email . "</p>";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>