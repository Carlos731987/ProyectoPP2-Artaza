<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Verificación de Edad</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

h1 {
    color: #333;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-size: 16px;
    color: #555;
}

input[type="number"] {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    font-size: 16px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #3498db;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

a:hover {
    background-color: #2980b9;
}

p {
    color: #777;
    margin-top: 20px;
}
    </style>
</head>

<body>
    <div class="container">
        <h1>Verificación de Edad</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $edad = intval($_POST['edad']);

            if ($edad >= 18) {
                echo "<h1>Bienvenido a Only Cars-Motors</h1>";                
                echo "<a href='principal.html'>Ir a la página principal</a>";
            } else {
                echo "<h1>Acceso Denegado</h1>";
                echo "<p>Debes tener al menos 18 años para ingresar a esta página.</p>";
            }
        } else {
        ?>
            <form method="post" action="">
                <label for="edad">Ingresa tu edad:</label>
                <input type="number" id="edad" name="edad" class="edad" required>
                <input type="submit" value="Ingresar">
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>