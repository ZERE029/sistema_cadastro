<?php
$servername = "localhost";
$username = "zere";
$password = "1234";
$dbname = "banco_dado";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];

// Verifica se o usuário já existe no banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM tabela_pes WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $existe = "Usuário já existe!";
    echo '<span style="color: red;">' . $existe . '</span>';
} else {
    // Insere o novo usuário no banco de dados
    $sql = "INSERT INTO tabela_pes (nome, email,senha,cpf,idade) VALUES ('$nome', '$email','$senha','$cpf','$idade')";
    if ($conn->query($sql) === TRUE) {
        $sucesso = "Cadastro realizado com sucesso!";
        echo '<span style="color: green;">' . $sucesso . '</span>';
    } else {
        $erro = "Erro ao cadastrar usuário:";
        echo '<span style="color: red;">' .$erro . $conn->error .'</span>';
    }
}

$conn->close();
?>
