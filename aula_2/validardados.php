<html>
    <head>
    </head>
    <body>
<?php

//o utilizador do POST faz referência ao nome do input do HTML
$utilizador = $_POST['utilizador'];
$numeroUm = $_POST['numeroUm'];
$numeroDois = $_POST['numeroDois'];

//abaixo em comentário, código funcionando corretamente, incluso em cometário para testar a função IF que se encontra abaixo
/*echo "Olá, ".$utilizador; echo "!"."<br>"; 
$soma = $numeroUm + $numeroDois;
echo "A soma dos teus números é de ".$soma; echo ".<br>";
//echo "Olá ".$_POST['utilizador']; é a mesma coisa

echo "Olá, ".$utilizador; echo "!"."<br>";
$subtrair = $numeroUm - $numeroDois;
echo "A diferença dos teus números é de ".$subtrair; echo ".<br>";

echo "Olá, ".$utilizador; echo "!"."<br>";
$multiplicar = $numeroUm * $numeroDois;
echo "A multiplicação dos teus números é de ".$multiplicar; echo ".<br>";


echo "Olá, ".$utilizador; echo "!"."<br>";
$dividir = $numeroUm / $numeroDois;
echo "A divisão dos teus números é de ".$dividir; echo".<br>"*/   


//if(isset($_POST['utilizador']) && isset($_POST['numeroUm']) && isset($_POST['numeroDois']))
if($_POST['utilizador'] != "" && $_POST['numeroUm'] != "" && $_POST['numeroDois'] != "")
{
    if($utilizador == "cinel" || $utilizador == "Cinel" || $utilizador == "CINEL")
    {
        echo "Olá, Cinel!<br>";
    }
    if($numeroUm > 0){
        echo "O número Um é maior que zero.";
    }
    elseif($numeroUm < 0){
        echo "O número Um é menor que zero.";
    }
    else{
        echo "O número Um é igual a zero.";
    }
}
else
{
    echo "Os campos são de preenchimento obrigatório.";
}    

?>
</body>
</html>