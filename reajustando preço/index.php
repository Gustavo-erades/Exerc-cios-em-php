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
        $percent=!empty($_GET['percent'])?$_GET['percent']:0;
        if($val!=0 && $percent!=0){
            $aumento=($percent*$val)/100;
            $result=$aumento+$val;
        }else{
            $result=$val+$percent;
        }
        
    ?>
    <main>
        <h1>Reajuste de preço</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="caixaMenor">
                <label for="val" class="label primeiro"><h2>Valor original do produto:</h2></label>
                <input type="number" class="main-input" name="val" id="val" min="0.10" step="0.1" value="<?= $val ?>">
                <label for="percent" class="label"><h2><span id="num_percent">?</span>% de aumento:</h2></label>
                <input type="range" class="main-input" name="percent" id="percent" min="1" max="100" step="1" value="<?=$percent?>"
                oninput="mudar_porcentagem()">
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
    <script>
        mudar_porcentagem()
        function mudar_porcentagem(){
            num_percent.innerText=percent.value;
        }
    </script>
</body>
</html>
