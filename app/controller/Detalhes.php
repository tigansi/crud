<?php

include('../model/Model_livros.php');
$model_livros = new Model_livros();

$isbn = filter_input(INPUT_POST,'isbn');
echo json_encode($model_livros->Detalhes($isbn));