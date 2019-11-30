<?php
include('functions/Url.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Administrativo</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- CSS painel-adm.php -->
    <link rel="stylesheet" href="<?php echo Url::Base_url() ?>assets/css/painel-adm/style-painel-adm.css">

</head>

<body>
    <?php include('view/painel-adm/navbar.php'); ?>
    <?php include('view/painel-adm/card-form.php'); ?>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <!-- Script de cadastro -->
    <script src="<?php echo Url::Base_url() ?>assets/js/painel-adm/script-cadastro.js"></script>

    <!-- Script de detalhes -->
    <script src="<?php echo Url::Base_url() ?>assets/js/painel-adm/script-detalhes.js"></script>
</body>

</html>