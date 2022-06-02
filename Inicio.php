<?php
    echo '<link href="index.css" type:"text/css" rel="stylesheet" > '
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" type="text/css" href="css/estilos.css">
    
</head>
<body>
    
<div class="page">
    <div class="container">
        <section class="loader">
            <div></div>
            <div></div>
            <div></div>
        </section>

        <div class="boton" id="login">
 
            <div class="modal-content"> 
                <label for="User" >Usuario</label>
                <input type="text" placeholder="Ingresar aquí" id="user">
                <label for="Password" >Contraseña</label>
                <input type="password" placeholder="Ingresar aquí" id="password">
                <button class="modal-content__button" onclick="entrar()">Ingresar</button>
        </section>
    </div>
</div>

    <script src="script.js"></script>
</body>
</html>