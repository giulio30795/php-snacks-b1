<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Giulio Rossi',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Paolo Verdi',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Federico Bottiglia',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Gianni Bicchiere',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Claudio Bianchi',
            'text' => 'Testo post 5'
        ],
    ],
];
$keypost = array_keys($posts);


for ($i=0; $i < count($posts) ; $i++) { 
    echo 'Data:'.$keypost[$i].'<br>'.'<br>'.'<br>';

    for ($k=0 ; $k < count($posts[$keypost[$i]]) ; $k++) { 
        echo 'Titolo: '.$posts[$keypost[$i]][$k]['title'].'<br>';
        echo 'Author: '.$posts[$keypost[$i]][$k]['author'].'<br>';
        echo 'Text: '.$posts[$keypost[$i]][$k]['text'].'<br>'.'<br>';
    };
}


?>