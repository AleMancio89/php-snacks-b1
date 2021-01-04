<?php 
/* 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


echo "<div style = 'height: 50px; width: 150px; background-color: grey; border: 1px solid black; padding: 10px;'>";

foreach($db['teachers'] as $key => $value){
    echo $value['name'] . ' ' . $value['lastname'] . '<br>';
}

echo "</div>";


echo "<div style = 'height: 50px; width: 150px; background-color: green; border: 1px solid black; padding: 10px;'>";

foreach($db['pm'] as $key => $value){
    echo $value['name'] . ' ' . $value['lastname'] . '<br>';
}

echo "</div>";

?>
