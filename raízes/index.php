<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $num=!empty($_GET['num'])?$_GET['num']:0;
        $raiz_quadrada= sqrt($num);
        $raiz_cubica= pow($num, 1/3);
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <main>
            <h1>Raízes de um número</h1>
            <div class="caixaMenor">
                <label for="num" class="label primeiro"><h2>Número:</h2></label>
                <input type="number" class="main-input" id="num" name="num" value="<?= $num ?>">
            </div>
            <button type="submit">Calcular</button>
        </main>
        <br><br>
        <div>
            <h3>
                <strong>OBS:</strong> É aceito apenas <strong>números naturais!<strong>
            </h3>
        </div>
        <br>
    </form>
    <section>
        <div class="caixaMenor">
            <ul>
                <li>
                    <h2>Raíz Quadrada: <?= number_format($raiz_quadrada,2,",",".") ?></h2>
                </li>
                <li>
                    <h2>Raíz Cúbica: <?= number_format($raiz_cubica,2,",",".") ?></h2>
                </li>
            </ul> 
        </div>
    </section>
</body>
</html>