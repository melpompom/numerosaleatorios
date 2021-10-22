<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou impar</title>
</head>
<body>

<?php
            $impar = 0;
            $par = 0;
            $resultado = "--";
            $soma = 0;

            if(isset($_POST["geranum"])){
                $impar = rand(0, 10);
                $par = rand(0, 10);
                $soma = $impar+$par;

                if($soma % 2 == 0){
                    $resultado = "par";
                }else{
                    $resultado = "impar";
                }
            }
        ?>

<div>
<h1>Jogo Par ou impar</h1><br>

<div>
                    <label>Escolha um número!</label>
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <br>
<label>Informe se é par ou impar:</label><br>
<input type="radio" name="nome" value="Par">Par<br>
<input type="radio" name="nome" value="Impar">Impar<br>
</div>
<br>

<form method="POST">
                <input type="submit" name="geranum" value="Enviar!">
            </form>
<div> 
<br>

</div>
            <div class ="resultado">
                <p>Resultado: <?php echo $resultado;?></p>
            </div>

</div>
</body>
</html>