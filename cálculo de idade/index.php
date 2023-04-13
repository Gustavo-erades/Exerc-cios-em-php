<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $ano_nasc=!empty($_GET['nasc'])?$_GET['nasc']:'X';
        $ano=!empty($_GET['ano'])?$_GET['ano']:date("Y");
        if($ano_nasc!='X'){
            $idade=$ano-$ano_nasc;
        }else{
            $idade='X';
        }
        
    ?>
    <main>
        <h1>Cálculo de idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <div class="caixaMenor">
                <label for="nasc" class="label primeiro"><h2>Seu ano de nascimento:</h2></label>
                <input type="number" class="main-input" id="nasc" name="nasc" value="<?= $ano_nasc ?>">
                <br>
                <label for="ano" class="label"><h2>quer saber sua idade em que ano?</h2></label>
                <h4>atualmente estamos em (<?= date("Y") ?>)</h4>
                <br>
                <input type="number" class="main-input" name="ano" id="ano" value="2023">
            </div>
            <button type="submit">enviar</button>
        </form>
    </main>
    <br><br>
    <section>
        <h2 style="color:purple;"><strong>Resposta:</strong></h2><br>
        <h4>Quem nasceu em <?= $ano_nasc ?> terá <?= $idade ?> anos em <?= $ano ?> !</h4>
    </section>
</body>
</html>