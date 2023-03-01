<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Nivelacion</title>
</head>

<body class="indigo lighten-5">
    <nav class="white">
        <h1>Actualizar</h1>
   </nav>
    
    <div class="container white" style=" margin-top: 25px; padding: 50px">
        <br>
        <div class="row">
        <a href="index.php">Inicio</a>

        <form action='db/db_update.php' method='GET'>
            <?php include 'db/db_view.php'; ?>
            <button type='submit' class='btn btn-primary'>Actualizar</button>
        </form>
        </div>
    </div>
    <style>
        h1{
            color: black; 
            font-family: Verdana;
            text-align:center;
        }
    </style>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>      
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>