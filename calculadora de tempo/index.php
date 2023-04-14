<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de tempo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="relogio.png" type="image/x-icon">
</head>
<body>
    <?php
        $seg=!empty($_GET['seg'])?$_GET['seg']:0;
        if($seg>=60){
            $min=$seg/60;
        }else{
            $min=0;
        }
        if($min>=60){
            $h=$min/60;
        }else{
            $h=0;
        };
        if($h>=24){
            $d=$h/24;
        }else{
            $d=0;
        }
       if($d>=14){
            $s=$d/(24*14);
       }else{
            $s=0;
       }

       $fuso= new DateTimeZone('America/Sao_Paulo');
       $hora= new DateTime('now',$fuso);
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <main>
            <h1>Contador de tempo</h1>
            <div class="caixaMenor">
                <label for="seg" class="label primeiro"><h2>Qual é o total de segundos?</h2></label>
                <input type="number" class="main-input" min="1" id="seg" name="seg">
            </div>
            <button type="submit">enviar</button>
        </main>
    </form>
    <br>
    <section>
        <h2 style="color:purple;"><strong>Totalizando tudo:</strong></h2>
        <div class="caixaMenor">
            <h3>Analisando o que você digitou, <strong><?= number_format($seg,0,"",".")?> segundos equivalem a</strong>:</h3>
            <hr>
            <br>
            <ul>
                <li><?= number_format($s,0,"",".") ?> Semanas</li>
                <li><?= number_format($d,0,"",".") ?> Dias</li>
                <li><?= number_format($h,0,"",".") ?> Horas</li>
                <li><?= number_format($min,0,"",".") ?> Minutos</li>
                <li><?= number_format($seg,0,"",".") ?> Segundos</li>
            </ul>
        </div>
    </section>
    <br>
    <section>
       <span id="horario">
            <?php echo $hora->format("H:i"); ?>
       </span>
    </section>
</body>
</html>