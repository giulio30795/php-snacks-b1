<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
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

    $keys = array_keys($db);

    for ($i=0; $i < count($db) ; $i++) { 
        echo '<div style="background-color: green; width:300px;"'
                .$keys[$i].'<br>'.'<br>'
                .$db[$keys[0]][$i]['name'].'<br>'
                .$db[$keys[0]][$i]['lastname'].'<br></div>';
    };

    for ($i=0; $i < count($db) ; $i++) { 
        echo '<div style="background-color: red; width:300px;"'
                .$keys[$i].'<br>'.'<br>'
                .$db[$keys[1]][$i]['name'].'<br>'
                .$db[$keys[1]][$i]['lastname'].'<br></div>';
    };
?>