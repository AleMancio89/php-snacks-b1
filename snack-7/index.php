<?php 
/* 
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$class = [
    'Alunno 1' => [
        'nome' => 'Alessandro',
        'cognome' => 'Mancinelli',
        'voti' => [6, 8, 4, 10,]
    ],
    'Alunno 2' => [
        'nome' => 'Laura',
        'cognome' => 'Genova',
        'voti' => [5, 7, 9, 8,]
    ],
    'Alunno 3' => [
        'nome' => 'Giovanni',
        'cognome' => 'Rubino',
        'voti' => [4, 4, 6, 6,]
    ],
    'Alunno 4' => [
        'nome' => 'Maria',
        'cognome' => 'La Porta',
        'voti' => [8, 8, 7, 8,]
    ],
];

foreach ($class as $k => $value){
    echo $value['nome'] . "\n";
    echo $value['cognome'] . "\n";
    echo 'Media voto: ' . (array_sum($value['voti']) / count($value['voti'])) . '<br>';
}



?>