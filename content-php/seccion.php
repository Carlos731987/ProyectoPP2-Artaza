<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi Mascota</title>
    <link rel="icon" href="Images/Icono.png">
    <link rel="stylesheet" href="./estilos/estilos.css">
    <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{/*fondo de todo el sitio*/
                font-family: Arial, Helvetica, sans-serif;
                background-image: url('Fondo-login.png');
                background-repeat: no-repeat;
                background-size: 100% 100vh;
            }
            .Index-titulo{
                text-align: center;
                padding: 20px 0;
            }
            .Index-titulo_encabezado{
                background-size: contain;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: rgb(185, 143, 112);
            }
            .Index-parrafo p{
                color: rgb(85, 66, 52);
                text-align: center;
                background-color:rgb(231, 171, 58) ;
                padding: 30px;
            }
            
            h2 {
                color: rgb(85, 66, 52);
                text-align: center;
                padding: 30px;
            }

            a {
                align-items: center;
                justify-content: space-between;
            }
            .container {
                background-color: yellow;
                height:50vh;
                margin:5%;

                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }
    </style>
</head>

<body>
    <header class="Index-titulo">
        <div class="Index-titulo_encabezado">
            <h1>"Mi Mascota"</h1>   
            <h3><i>El sitio donde encontras tu mascota</i></h3>            
        </div>
    </header>
    <div class="Index-parrafo">
    <div class="Index-parrafo">
        <p><i><b>Aquí encontraras algunos tips para tus primeros pasos en php</b></p></i>
    </div>
    <article>
        <p>Para conocer como trabajar con variables</p>
        <a href="./variables.php" target="_blank">Variables</a>
    </article>
    <article>
        <p>Para conocer como trabajar con comentarios</p>
        <a href="./comentarios.php" target="_blank">Comentarios</a>
    </article>
    <article>
        <p>Para conocer como trabajar con constantes</p>
        <a href="./constantes.php" target="_blank">Constantes</a>
    </article>
    </div><br><br><br>
    <div class="contenedor">
        <h2>Material de lectura</h2>
        <a href="https://ibeltran-my.sharepoint.com/:b:/g/personal/klehrd_itbeltran_com_ar/EVqk6jIIfpNKlPWKlJR1hYwBlxYWKuea6LGssqNYJWs8Yg?e=eIvGpZ" target="_blank"><img src="image.png" alt=""></a>
    </div>
</body>

</html>