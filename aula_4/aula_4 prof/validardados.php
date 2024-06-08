<?php

//o utilizador do POST faz referência ao nome do input do HTML
    $utilizador = $_POST['utilizador'];
    $numeroUm = $_POST['numeroUm'];
    $numeroDois = $_POST['numeroDois'];
    /*
    echo "Olá ".$utilizador."<br>";
    $soma = $numeroUm + $numeroDois;
    echo "A soma dos teus números é de: ".$soma."<br>";
    $multiplicar = $numeroUm * $numeroDois;
    echo "A multiplicação dos teus números é de: ".$multiplicar."<br>";
    $dividir = $numeroUm / $numeroDois;
    echo "A divisão dos teus números é de: ".$dividir."<br>";
    $subtrair = $numeroUm - $numeroDois;
    echo "A subtração dos teus números é de: ".$subtrair."<br>";

    
    //Estrura de decisão IF - ELSE

    //if(isset($_POST['utilizador']) && isset($_POST['numeroUm']) && isset($_POST['numeroUm']))
    if($utilizador != "" && $_POST['numeroUm'] != ""  && $_POST['numeroDois'] != "")
    {
        if($utilizador == "cinel" || $utilizador == "Cinel" || $utilizador == "CINEL")
        {
            echo "Olá CINEL<br>";
        }

        if ($numeroUm > 0)
        {
            echo "O número Um é maior que zero";
        }
        elseif ($numeroUm < 0)
        {
            echo "O número Um é menor que zero";
        }
        else{
            echo "o número Um é igual a zero";
        }

        
    }
    else{

        echo "os campos são de preenchimento obrigatório !";
    }
*/
if(trim($utilizador) != "" && trim($_POST['numeroUm']) != "")
{
    
   if($_POST['numeroUm'] == 12345)
   {
        echo "Acesso permitido";
   }
   else{
        echo "<p style='color:red;'><b>Acesso negado</b></p>";
   }

    
}
else{

    echo "os campos são de preenchimento obrigatório !";
}   


    //echo "Olá ".$_POST['utilizador'];




?>