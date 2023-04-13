<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $fuso= new DateTimeZone('America/Sao_Paulo');
        $data= new DateTime('now',$fuso);

        $sal=!empty($_GET['sal'])?$_GET['sal']:0;
        $sal_min=1320;
        $result=$sal/$sal_min;
        $result_int=(int)$result;
        $result_resto=$sal%$sal_min;
        $result_programa=($result_int*$sal_min)+$result_resto;
        $centavos=$sal-$result_programa;
        $result_resto_cents=$result_resto+$centavos;
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <main>
            <h1>Salário mínimo</h1>
            <div class="caixaMenor">
                <label for="sal" class="label primeiro"><h2>Quanto é seu salário?</h2></label>
                <input type="number" class="main-input" step="0.01" id="sal" name="sal" value="<?= $sal ?>">
            </div>
            <button type="submit">Verificar</button>
        </main>
    </form>
    <div>
        <h3>
            O salário mínimo atualmente <strong>(<?= $data->format('d/m/y') ?>)</strong> é de <strong>R$ 1.320,00</strong>
        </h3>
    </div>
    <br>
    <section>
        <div class="caixaMenor">
            <h2>Você recebe cerca de <?= $result_int ?> salários mínimos e R$ <?= number_format($result_resto_cents,2,",",".") ?> !</h2>
        </div>
    </section>
</body>
</html>