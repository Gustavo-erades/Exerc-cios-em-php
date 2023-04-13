<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $num1=!empty($_REQUEST['num1'])?$_GET['num1']:0;
        $num2=!empty($_REQUEST['num2'])?$_GET['num2']:0;
        $pes1=!empty($_REQUEST['pes1'])?$_GET['pes1']:0;
        $pes2=!empty($_REQUEST['pes2'])?$_GET['pes2']:0;
        
        $media_ari=($num1+$num2)/2;
        if($pes1!=0 && $pes2!=0){
            $media_pond=(($num1*$pes1)+($num2*$pes2))/($pes1+$pes2);
        }else{
            $media_pond=0;
        }
        
    ?>
    <main>
        <h1>Média de dois Números</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="caixaMenor">
                <label for="num1" class="label primeiro"><h2>1º Número:</h2></label>
                <input type="number" class="main-input" step="0.01" name="num1" id="num1" value="<?= $num1 ?>">
                <label for="pes1" class="label primeiro"><h2><strong>Peso</strong> do 1º Número:</h2></label>
                <input type="number" class="main-input" name="pes1" id="pes1" value="<?= $pes1 ?>">
                <label for="num2" class="label"><h2>2º Número:</h2></label>
                <input type="number" class="main-input" step="0.01" name="num2" id="num2" value="<?= $num2 ?>">
                <label for="pes2" class="label primeiro"><h2><strong>Peso</strong> do 2º Número:</h2></label>
                <input type="number" class="main-input" name="pes2" id="pes2" value="<?= $pes2 ?>">
            </div>
            <button type="submit">enviar</button>
        </form>
    </main>
    <br>
    <section>
        <div class="caixaMenor">
            <h3> A média aritimética entre <?= $num1 ?> e <?= $num2 ?>  é:<?= number_format($media_ari,2,",",".")?></h3>
            <h3> A média ponderada entre <?= $num1 ?> e <?= $num2 ?>  é:<?= number_format($media_pond,2,",",".")?></h3>
        </div>
    </section>
</body>
</html>