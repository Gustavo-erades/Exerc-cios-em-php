<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $val=!empty($_GET['val'])?$_GET['val']:0;
        $percent=!empty($_GET['percent'])?$_GET['percent']:50;
        $aumento=($percent*$val)/100;
        $result=$aumento+$val;
    ?>
    <main>
        <h1>Reajuste de preço</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="caixaMenor">
                <label for="val" class="label primeiro"><h2>Valor original do produto:</h2></label>
                <input type="number" class="main-input" name="val" id="val" value="<?= $val ?>">
                <label for="percent" class="label"><h2><?= $percent ?>% de aumento:</h2></label>
                <input type="range" class="main-input" name="percent" id="percent" min="5" max="95" step="5" value="50">
            </div>
            <button type="submit">enviar</button>
        </form>
    </main>
    <br><br>
    <section>
        <div class="caixaMenor">
            <h3>Um produto que custava R$ <?= number_format($val,2,",",".") ?> com um aumento de % <?= $percent ?> passa a custar R$ <?= number_format($result,2,",",".") ?>.</h3>
        </div>
    </section>
</body>
</html>