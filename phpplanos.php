
<html>
<head>
<title> Cadastro de Clientes </title>
</head>
</html>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "academia";

$conexao = mysqli_connect($host, $user, $pass, $banco );
//$link = mysqli_connect("HOST", "USUARIO", "SENHA", "BASE");
 
if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 else echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;


$db_selected = mysqli_select_db($conexao, $banco) or die (mysqli_error());

if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>

<?php

    $email     =$_POST['email'];
    $cpf      =$_POST['cpf'];
    $nome      =$_POST['uname'];
    $contato      =$_POST['cont'];
    $senha    =$_POST['psw'];
    $csenha   =$_POST['cpsw'];

//inserindo na tabela
$sql = "INSERT INTO aluno(nome, cpf, email, contato, senha, plano)
                    VALUES('$nome','$cpf','$email','$contato','$senha','GOLD')";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexao);}
	  
	  mysqli_close($conexao);

?>
<?php

$email     =$_POST['email2'];
$cpf      =$_POST['cpf2'];
$nome      =$_POST['uname2'];
$contato      =$_POST['cont2'];
$senha    =$_POST['psw2'];
$csenha   =$_POST['cpsw2'];

//inserindo na tabela
$sql = "INSERT INTO aluno(nome, cpf, email, contato, senha, plano)
                VALUES('$nome','$cpf','$email','$contato','$senha','PLATINUM')";

if (mysqli_query($conexao, $sql)) {
  echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexao);}
  
  mysqli_close($conexao);

?>
<?php

$email     =$_POST['email3'];
$cpf      =$_POST['cpf3'];
$nome      =$_POST['uname3'];
$contato      =$_POST['cont3'];
$senha    =$_POST['psw3'];
$csenha   =$_POST['cpsw3'];

//inserindo na tabela
$sql = "INSERT INTO aluno(nome, cpf, email, contato, senha, plano)
                VALUES('$nome','$cpf','$email','$contato','$senha','DIAMOND')";

if (mysqli_query($conexao, $sql)) {
  echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexao);}
  
  mysqli_close($conexao);

?>