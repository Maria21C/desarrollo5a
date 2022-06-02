<?php
echo '<link href="estiloH.css" type:"text/css" rel="stylesheet" >'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="page">
    <div class="nav">
        <div class="nav-title">
            <a href="Curriculum.php">
            </a>
        </div>
        <div class="nav-options">
            <ul>
                <a href="Curriculum.php">
                    <li>Curriculum</li>
                </a>
                <a href="video.php">
                    <li>Video</li>
                </a>
                <a href="tabla.php">
                    <li>Tabla</li>
                </a>
                    <a href="HorarioC.php">
                    <li>Horario</li>
                </a>
                <a href="html.html">
                    <li>Calculadora</li>
                </a>
            </ul>
        </div>
    </div>
    
    <button id = "button">Horario</button>

    <table>
        <thead>
            <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tbody id = "tabla" ></tbody>
    </table>
    <script src="JSHorario.js"></script>
</body>
</html>