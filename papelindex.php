<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Pedra, Papel e Tesoura!</title>
</head>
<body>

<?php
 
$opcao="";
if(isset($_POST['opcao'])){
    $opcao=$_POST['opcao'];
}

$vence = "";
$opcao = "";
$comp = rand(1, 3);
$pc = "pc";
$Jogador = "Jogador";
?>

    <h1>Jogo Pedra, Papel e Tesoura!</h1>

<form method="post" action="">

<label>Escolha a opção!</label><br>
<legend>Jogador</legend>
<input type="radio" name="nome" id="nome" value="Pedra">Pedra<br>
<input type="radio" name="nome" id="nome" value="Papel">Papel<br>
<input type="radio" name="nome" id="nome" value="Tesoura">Tesoura<br>
<input type=submit><br>
<form>

<?php
define ("Pedra", 0);
define ("Papel", 2);
define ("Tesoura", 3);
?>

<legend>pc</legend>
<?php
   echo "<img src='img/$1.png' alt=''>";
?>

<P>
<legend>Jogador</legend>
<?php
    echo "<img src='img/2.png' alt=''>";
?>
</form>

<legend>ganhador</legend>
<?php
 
if (($opcao==1)&&(($comp==2)||($comp==3))){
    $vence = $pc;
    echo $vence;   
}
if (($opcao==2)&&($comp==1)){
    $vence = $jogador;
    echo $vence;
}
if (($opcao==2)&&($comp==3)){
    $vence = $pc;
    echo $vence;
}
if (($opcao==3)&&($comp==2)){
    $vence = $jogador;
    echo $vence;
}
if (($opcao==3)&&($comp==1)){
    $vence = $pc;
    echo $vence;
} 
?>

</body>
</html>