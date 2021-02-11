<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Created by Carlo Valenzuela">
    <title>Practica getelement</title>
</head>

<body>
    <p>Universidad Tecnológica de Durango</p>
    <p>Nombre del alumno: Carlo Valenzuela</p>
    <span>Carrera: TICS</span>
    <br>
    <span>Moldelo DOM</span>
    <p id="parr2">Tecnológias de la Información</p>
    <script>
        let parr = document.getElementByTagName('p');
        console.log(parr.length);

        let parr2 = document.getElementById('parr2');
        document.parr2.innerHTML= "DN";
    </script>    


</body>

</html>
