<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $dividendo=!empty($_GET['num1'])?$_GET['num1']:1;
        $divisor=!empty($_GET['num2'])?$_GET['num2']:1;
        $divisao=$dividendo/$divisor;
        $quociente=(int)$divisao;
        $resto=$dividendo%$divisor;

    ?>
    <main>
        <h1>Analisar divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="caixaMenor">
                <label for="num1" class="label primeiro"><h2>Dividendo:</h2></label>
                <input type="number" class="main-input" id="num1" name="num1" value="<?= $dividendo ?>">
                <label for="num2" class="label"><h2>Divisor:</h2></label>
                <input type="number" class="main-input" id="num2" name="num2" value="<?= $divisor ?>">
            </div>
            <button type="submit">calcular</button>
        </form>
    </main>
    <br>
    <section>
        <table>
            <tr id="dividendo_divisor">
                <td id="dividendo"><?= $dividendo ?></td>
                <td id="divisor"><?= $divisor ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr id="resto_quociente">
                <td id="resto"><?= $resto ?></td>
                <td id="quociente"><?= $quociente ?></td>
            </tr>
        </table>
    </section>
    <br>
    <section class="legenda">
        <table class="todas_cores">
            <tr>
                <td id="cor1"></td>
                <td><h4 class="td_texto">Dividendo</h4></td>
                <td id="cor2"></td>
                <td><h4 class="td_texto">Divisor</h4></td>
                <td id="cor3"></td>
                <td><h4 class="td_texto">Quociente</h4></td>
                <td id="cor4"></td>
                <td><h4 class="td_texto">Resto</h4></td>
            </tr>
        </table>
    </section>
</body>
</html>