<?php
    $vezes = @$_POST['vezes'];
?>
<html>
<head>
	<title>Jogo de Dado</title>
</head>
<body>
<form method="post"><b>
Jogar <input type="text" name="vezes" vezes o dado.>
<input type="hidden" name="jogada" value="1">
<input type="submit" value="JOGAR">
</form>

<?php

   if (! isset($_POST['jogada'])){
   $cont = 1; 
   }

   if (! isset($cont)){

   if (empty($_POST['vezes'])){
   $cont2 = 1;
   }
   
   if (! isset($cont2)){

   if ($_POST['vezes'] < 1){
   $cont3 = 1;
   }
 
   if (! isset($cont3)){   

   for ($i = 0; $i < $vezes; $i ++){
   $jogador[] = mt_rand(1, 6); 
   }
   
   $tjogador = 0;

   for($i = 0; $i < $vezes; $i++){
   $vc = $jogador[$i];
  
  switch($vc)
   {
      case 1 :
      echo "\n<img src='dado.png'>";
      break;
      case 2 :
      echo "\n<img src='dado2.png'>";
      break;
      case 3 :
      echo "\n<img src='dado3.png'>";
      break;
      case 4 :
      echo "\n<img src='dado4.png'>";
      break;
      case 5 :
      echo "\n<img src='dado5.png'>";
      break;
      case 6 :
      echo "\n<img src='dado6.png'>";
      break;
   } 
   $tjogador += $vc;
   }

   echo "\n<br><b>Total :" . $tjogador . "</b><br>";

   if ($tjogador <= $vezes*3){
   echo "<b>Que pena você perdeu.</b>";
   } else {
   echo "<b>Você ganhou!</b></";
   }
}
}
}
?>
<br><br><br>
</body>
</html>

