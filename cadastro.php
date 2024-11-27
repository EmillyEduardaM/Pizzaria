<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

    $nome_cliente = $_POST['nome_cliente'];
    $telefone_cliente =$_POST['telefone_cliente'];
    $endereco_cliente = $_POST['endereco_cliente'];

    $sql = "INSERT INTO clientes (nome_cliente,telefone_cliente, endereco_cliente) VALUES (:nome_cliente,
    :telefone_cliente,:endereco_cliente)";

    $stmt = $conn->prepare ($sql);

    $stmt->bindParam(':nome_cliente',$nome_cliente);
    $stmt->bindParam(':telefone_cliente',$telefone_cliente);
    $stmt->bindParam(':quantidade_pizza',$quantidade);
    $stmt->bindParam(':endereco_cliente',$endereco_cliente);


    $stmt->execute();

    header('location:index.php');
    exit;


}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>cadastrar clientes - Pizzaria</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<nav>

<h1>Cadatro de clientes</h1>
<a href="index.php">Registrar clientes</a>
<a href="pedidos.php">Visualizar clientes</a>
<a href="cadastro.php">Cadastro clientes</a>
</nav>

<h1>Cadastro de clientes</h1>
    <form action="cadastro.php" method="POST">
        <label for="nome_cliente">nome do cliente</label>
        <input type="text" id="nome_cliente" name="nome_cliente" required><br>
        

        <label for="telefone_cliente">telefone</label>
        <input type="text" id="telefone_cliente" name="telefone_cliente" required><br>
    
        <label for="endereco_cliente">endereco</label>
        <input type="text" id="endereco_cliente" name="enderco_cliente" required><br>
    
        <button type="submit">Cadastrar cliente</button>
    </form>


</body>
</html>




    ?>