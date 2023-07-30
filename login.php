<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="cu.css">
    <script src="zere.js"></script>
    <title>Login</title>
</head>

<body>
    <?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banco_dado";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Recuperar dados do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    // Verificar se o email e a senha correspondem a um usuário cadastrado
    $sql = "SELECT * FROM tabela_pes WHERE email = '$email' AND senha = '$senha' AND cpf ='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login bem-sucedido, redirecionar para a página de sucesso
        header("Location: capa.php");
    } else {
        // Login inválido, exibir mensagem de erro
        $mensagem = "Login invalido:(";
        echo '<span style="color: red; font-weight: bold;">' . $mensagem . '</span>';
        
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
    ?>
    <a class="btn btn-warning" href="index.html" role="button">Voltar</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>