<?php

include('../model/Model_livros.php');
$model_livros = new Model_livros();
$isbn         = filter_input(INPUT_GET,'isbn');

$model_livros->Delete_livros($isbn);
header('location:../painel-adm.php');

