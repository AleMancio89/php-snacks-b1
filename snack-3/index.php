<?php
/* 
Creare un array di array. Ogni array figlio avrà come chiave una data in
questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
post associati a quella data.
Stampare ogni data con i relativi post.
*/

$posts = [
    '01/12/2020' => [
        [
            'titolo' => 'Post 1',
            'autore' => 'Giovanni',
            'testo' => 'Ho ricevuto candele al minestrone per lavaggi a mano, così mi vestirò di rosso erba aspettando il coniglio polare in una notte di rugiada bollente.'
        ],
        [
            'titolo' => 'Post 2',
            'autore' => 'Alberto',
            'testo' => 'I coccodrilli balzarono fuori e menarono la commessa mentre la spiaggia si riempiva di moscerini e quindi fu tutto un fracasso di ciambelle zuccherate in maniera cavalleresca.'
        ]
    ],
    '06/12/2020' => [
        [
            'titolo' => 'Post 3',
            'autore' => 'Laura',
            'testo' => "L'albero di aranci mi ha detto che il vento che gli gira per la testa stasera andrà a prendersi un caffè insieme al figlio del cuscino a forma di busta di latte che si trova sul mio letto."
        ],
        [
            'titolo' => 'Post 4',
            'autore' => 'Alessandro',
            'testo' => "La franchezza sola tira a giocare, ma il tombolo non assale i canguri perché un giaguaro ha verniciato la carta di sassi e la giostra mangia mais per dire che l'aveva tartassato di suocere bollite, mentre un sonnifero dichiara la misericordia domani, che torna al crepuscolo senza franchezza nelle gambe."
        ],
        [
            'titolo' => 'Post 5',
            'autore' => 'Flavio',
            'testo' => 'Un fifone rientra a vivere lontano, ma tra trote e maiali vide che un giorno la vita che canta ma non piange da coccinella sperduta.'
        ]
    ],
    '15/12/2020' => [
        [
            'titolo' => 'Post 6',
            'autore' => 'Martina',
            'testo' => 'Con le tende sbarazzine la lampada che cancella il passato e i denti che strisciano nel fango.'
        ],
        [
            'titolo' => 'Post 7',
            'autore' => 'Veronica',
            'testo' => "Adoro giocare con la palla con in mano la borsa della spesa blu di marmo come la mia macchina che ho sollevato con un dito l'altro ieri prima di entrare nella galassia del mio gatto Bernardo con la testa girata verso il basso che russa ogni tanto."
        ],
    ]
];


foreach ($posts as $date => $value) {
    ?> <h3>Data: <?= $date ?> </h3> 
    <?php foreach ($value as $post){
    ?> <h4><?= $post['titolo'] ?></h4>
        <p><strong>Autore: <?= $post['autore'] ?></strong></p>       
        <p><?= $post['testo'] ?></p> <?php        
    }
} 
?>

