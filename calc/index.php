<?php
require_once 'processing.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
       <h1>entre com o valor numérico</h1>
        <input type="number" name="value1" placeholder="valor 1" required>

        <h1>entre com outro valor numérico</h1>
        
        <input type="number" name="value2" placeholder="valor 2" required> 
        <h1>escolha a operação</h1>

        <select name="operation" required>
            <option value="soma">Somar</option>
            <option value="subtracao">Subtrair</option>
            <option value="multiplicacao">Multiplicar</option>
            <option value="divisao">Dividir</option> 
        </select>
        <button type="submit">Calcular</button>

        <h1>Resultado</h1>
        <?php if (!empty($result)) : ?>
            <h1><?= ($result) ?></h1>
        <?php endif; ?>
    </form>
</body>
</html>