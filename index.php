<?php

define("Aniversario", 31);

$variavel = 0;
$tentativas = 0;
while($variavel != Aniversario) {
    $variavel = rand(1, 31);
    $tentativas++;

};
 echo "O dia do seu nascimento é: ".Aniversario. "e foram gastas $tentativas para gerar esse número";
?>
