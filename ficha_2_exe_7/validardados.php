<?php

$utilizador = $_POST['nome'];
$email = $_POST['email'];
$avaliacao = $_POST['avaliacao'];
$comentario = $_POST['comentario'];
$erro = "Todos os campos são de preenchimento obrigatório";

//verificar se os campos foram preenchidos
if(empty($utilizador) || empty($email) || empty($comentario) || empty($avaliacao))
{
    echo $erro;
}
else
{
    echo $utilizador."<br>";
    echo $email."<br>";
    echo $avaliacao."<br>";
    echo $comentario."<br>";
     
}