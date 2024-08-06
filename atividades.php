//1-a
<?php
echo "Insira um número inteiro positivo: ";
$numero = intval(fgets(STDIN));

$i = 0;
while ($i <= $numero) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
}
?>

//1-b
<?php
echo "Insira um número inteiro: ";
$numero = intval(fgets(STDIN));

$i = 1;
while ($i <= 10) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
    $i++;
}
?>

//1-c 
<?php
$soma = 0;
while (true) {
    echo "Insira um número inteiro (ou 'q' para sair): ";
    $input = trim(fgets(STDIN));
    if ($input == 'q') {
        break;
    }
    $numero = intval($input);
    $soma += $numero;
}
echo "A soma dos números é: $soma\n";
?>

//1-d
<?php
$senha_correta = "1234";
$tentaivas = 0;

while ($tentaivas < 3) {
    echo "Insira a senha: ";
    $senha = trim(fgets(STDIN));
    if ($senha == $senha_correta) {
        echo "Senha correta! Acesso concedido.\n";
        break;
    } else {
        echo "Senha incorreta.\n";
        $tentaivas++;
    }
}

if ($tentaivas == 3) {
    echo "Você excedeu o número de tentativas.\n";
}
?>

//1-e
<?php
$soma = 0;
while (true) {
    echo "Insira um número inteiro (ou um número negativo para parar): ";
    $numero = intval(fgets(STDIN));
    if ($numero < 0) {
        break;
    }
    $soma += $numero;
}
echo "A soma dos números é: $soma\n";
?>
////////////
//2-a
<?php
echo "Insira um número inteiro positivo: ";
$numero = intval(fgets(STDIN));

$i = 0;
do {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
} while ($i <= $numero);
?>

//2-b
<?php
echo "Insira um número inteiro: ";
$numero = intval(fgets(STDIN));

$i = 1;
do {
    echo "$numero x $i = " . ($numero * $i) . "\n";
    $i++;
} while ($i <= 10);
?>

//2-c
<?php
$soma = 0;
do {
    echo "Insira um número inteiro (ou 'q' para sair): ";
    $input = trim(fgets(STDIN));
    if ($input == 'q') {
        break;
    }
    $numero = intval($input);
    $soma += $numero;
} while (true);
echo "A soma dos números é: $soma\n";
?>

//2-d
<?php
$senha_correta = "1234";
$tentaivas = 0;

do {
    echo "Insira a senha: ";
    $senha = trim(fgets(STDIN));
    if ($senha == $senha_correta) {
        echo "Senha correta! Acesso concedido.\n";
        break;
    } else {
        echo "Senha incorreta.\n";
        $tentaivas++;
    }
} while ($tentaivas < 3);

if ($tentaivas == 3) {
    echo "Você excedeu o número de tentativas.\n";
}
?>

//2-e
<?php
$soma = 0;
do {
    echo "Insira um número inteiro (ou um número negativo para parar): ";
    $numero = intval(fgets(STDIN));
    if ($numero < 0) {
        break;
    }
    $soma += $numero;
} while (true);
echo "A soma dos números é: $soma\n";
?>

//2-f
<?php
$count = 0;
do {
    $numero = rand(1, 100);
    $count++;
    echo "Número gerado: $numero\n";
} while ($numero != 50);

echo "Foram gerados $count números até o 50 aparecer.\n";
?>

//2-g
<?php
$senha_correta = "1234";
do {
    echo "Insira a senha: ";
    $senha = trim(fgets(STDIN));
} while ($senha != $senha_correta);

echo "Senha correta! Acesso concedido.\n";
?>

//2-h
<?php
$soma = 0;
$count = 0;
do {
    echo "Insira um número inteiro (ou um número negativo para parar): ";
    $numero = intval(fgets(STDIN));
    if ($numero < 0) {
        break;
    }
    $soma += $numero;
    $count++;
} while (true);

if ($count > 0) {
    $media = $soma / $count;
    echo "A média dos números é: $media\n";
} else {
    echo "Nenhum número foi inserido.\n";
}
?>