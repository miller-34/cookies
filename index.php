<?php 
if(isset($_POST['nome'])) {
    $venc = time() + (30 * 24 * 60 * 60); // 30 dias
    setcookie("nome", $_POST['nome'], $venc);
    header("location: boasvindas.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <form action="" method="post">
        <P>Qual seu nome?</P>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>