<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-center mt-4">Pesquisar Clima</h1><br>
    <label for="cidade">Informe o nome da cidade:</label> <br>
    <input type="text" id="cidade" name="cidade">
    <button class="btn btn-success ml-2" id="buscar">Buscar</button> <br>
    <div class="card mt-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title" id="nome"></h5>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <p class="card-text" id="temp"></p>
            <p class="card-text" id="nascer"></p>
            <p class="card-text" id="por"></p>
        </div>
    </div>

<script src="./js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>