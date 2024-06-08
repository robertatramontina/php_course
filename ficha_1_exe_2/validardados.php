<html>
<head><title>Validar Dados</title> </head>
<body>

<?php
$utilizador = $_POST['utilizador'];
$password = $_POST['password']; 

if(trim($utilizador) != "" && trim($password) != "")
{
  
    if($password == 12345) {
        echo "Acesso Permitido";
    } 
    else{ 
        echo "<p style='color:red;'><b>Acesso Negado</b></p><br>";
    }
}
else{
echo "Os campos são de preenchimento obrigatório.";
}


?>
</body>


</html>