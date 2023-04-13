<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisar número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $num_user=!empty($_GET['num'])?$_GET['num']:0;
        $inteiro=(int)$num_user;
        $parte_real=$num_user-$inteiro;
    ?>
    <main>
        <h1>Análisar números reais</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="caixaMenor">
                <label for="num" class="label primeiro"><h2>Número real:</h2></label>
                <?=
                    "<input type='number' class='main-input' step='0.001' id='num' name='num' value='$num_user'>";
                ?>
            </div>
            <button type="submit">analisar</button>
        </form>
    </main>
    <br>
    <section>
        <h1>Resultado:</h1>
        <div class="caixaMenor">
            <ul>
                <?php
                    echo "<li><h2>Parte inteira: ".number_format($inteiro,0,",",".")."</h2></li>";
                    echo "<li><h2>Parte real:".number_format($parte_real,3,",",".")."</h2></li>";
                ?>
            </ul>
        </div>  
    </section>
</body>
</html>