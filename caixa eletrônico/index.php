<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="bank.png" type="image/x-icon">
</head>
<body>
    <?php
        $saque=!empty($_GET['val'])?$_GET['val']:0;
        $val=!empty($_GET['val'])?$_GET['val']:0;
        $not100=0;
        $not50=0;
        $not10=0;
        $not5=0;
        if($val>=100){
           $divisao=$val/100;
           $not100=(int)$divisao;
            $val=$val-($not100*100);
        }
        if($val>=50){
            $divisao=$val/50;
            $not50=(int)$divisao;
            $val=$val-($not50*50);
        }
        if($val>=10){
            $divisao=$val/10;
            $not10=(int)$divisao;
            $val=$val-($not10*10);
        }
        if($val>=5){
            $divisao=$val/5;
            $not5=(int)$divisao;
            $val=$val-($not5*5);
        }
        
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <main>
            <h1 style="color:purple;">Caixa eletrônico</h1>
            <div class="caixaMenor">
                <label for="val" class="label primeiro"><h2>Qual valor deseja sacar?</h2></label>
                <input type="number" class="main-input" id="val" name="val" min="5" step="5" value="<?= $saque ?>">
                <br>
                <h4><strong>Notas disponíveis: 100, 50, 10, 5</strong></h4>
            </div>
            <button type="submit">enviar</button>
        </main>
    </form>
    <section>
        <div class="caixaMenor">
            <h3><b>Saque de R$ <?= number_format($saque,2,",",".") ?> realizado!</b></h3>
            <p>O caixa eletrônico vai te passar as seguintes notas:</p>
            <br>
            <ul>
                <li>
                    <figure>
                        <img src="100-reais.jpg" alt="R$100,00" width="200px">
                    </figure>
                    <span class="vezes">
                        <strong>(x<?= $not100 ?>)</strong>
                    </span>
                </li>
                <li>
                    <figure>
                        <img src="50-reais.jpg" alt="R$50,00" width="200px">
                    </figure>
                    <span class="vezes">
                        <strong>(x<?= $not50 ?>)</strong>
                    </span>
                </li>
                <li>
                    <figure>
                        <img src="10-reais.jpg" alt="R$10,00" width="200px">
                    </figure>
                    <span class="vezes">
                        <strong>(x<?= $not10 ?>)</strong>
                    </span>
                </li>
                <li>
                    <figure>
                        <img src="5-reais.jpg" alt="R$5,00" width="200px">
                    </figure>
                    <span class="vezes">
                        <strong>(x<?= $not5 ?>)</strong>
                    </span>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>