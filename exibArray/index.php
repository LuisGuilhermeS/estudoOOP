<?php
include_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="d-inline-block" action="<?= $BASE_URL ?>process.php" method="POST">
        <div class="container">
            <h1>masculino</h1>
            <ul class="div">
                <?php foreach ($masculino as $nome): ?>
                    <li class="text"><?= $nome ?></li>
                <?php endforeach; ?>
            </ul>

            <h1>feminino</h1>
            <ul class="div">
                <?php foreach ($feminino as $nome): ?>
                    <li><?= $nome ?></li>
                <?php endforeach; ?>
            </ul>

            <h1>desconhecidos</h1>
            <ul class="div">
                <?php foreach ($desconhecidos as $nome): ?>
                    <li><?= $nome ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </form>
</body>

</html>
