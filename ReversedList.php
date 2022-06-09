<?php

$nome_1 = $_POST['nome_1'];
$nome_2 = $_POST['nome_2'];
$nome_3 = $_POST['nome_3'];
$nomes = array($nome_1,$nome_2,$nome_3);

for($n=2; $n>=0;$n--){
    echo $nomes[$n]."<br>";
   }
echo "<hr>";

?>