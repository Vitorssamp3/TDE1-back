<?php
list($N, $H) = explode(" ", trim(fgets(STDIN)));

$alturas = array_map('intval', explode(" ", trim(fgets(STDIN))));

$count = 0;
e
foreach ($alturas as $altura) {
    if ($H >= $altura) {
        $count++;
    }
}

echo $count . "\n";
?>

-----------------------------------------------------------------------------------------

<?php
$C = intval(trim(fgets(STDIN)));

$A = intval(trim(fgets(STDIN)));

$alunos_por_viagem = $C - 1;

$viagens = ceil($A / $alunos_por_viagem);

echo $viagens . "\n";
?>
