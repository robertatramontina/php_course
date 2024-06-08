<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
}

//o utilizador do POST faz referência ao nome do input do HTML
$utilizador = $_POST['utilizador'];
$idade = $_POST['idade'];
$localidade = $_POST['localidade'];
//$genero = $_POST['genero'];
//echo $genero."<br>;
//$linguagens = $_POST['linguagens'];

//verificar se os campos foram preenchidos
if(empty($utilizador) || empty($idade) || $localidade == "nada" || isset($_POST['linguagens']) || !is_array($_POST['linguagens']))
{
    $erro = "Os campos são de preenchimento obrigatório";
}
elseif (!isset($_POST['genero']) || !is_array($_POST['genero'])) 
{
    $erro = "Os campos são de preenchimento obrigatório"

    echo "Nome:".$utilizador."<br>";
    echo "Idade:".$idade."<br>";
    echo "Localidade:".$localidade."<br>";
   // echo "Linguagens:".$linguagens;
   echo "Escolhas:".count($_POST['linguagens'])."<br>"; 
   foreach($_POST['linguagens'] as $dados)
{
    echo $dados." ";
}
/*for($i = 0; $i < count($_POST['linguagens']); $i++)
{
    echo $_POST['linguagens][$i]." ";
}
$dados = implode(' ', $_POST['linguagens']);

echo $dados." ";*/
?>