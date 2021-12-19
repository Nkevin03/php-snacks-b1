<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Snack 3</h2>
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$postKey = array_keys($posts);


for ($i = 0; $i < count($posts); $i++){
    echo $postKey[$i]. ":<br>";
    for ($a = 0; $a < count($posts[$postKey[$i]]); $a++){
        echo $posts[$postKey[$i]][$a]['title'] . '<br>';
        echo $posts[$postKey[$i]][$a]['author']. '<br>';
        echo $posts[$postKey[$i]][$a]['text']. '<br>';
    }
}
?>

<h2>Snack4</h2>

<?php
    $number = [];
    while (count($number) < 15){
        $numb = rand(1, 15);
        if (!in_array($numb, $number))
        {
            $number[] = $numb;
        }
    }

    echo var_dump($number);
?>

<h2>Snack5</h2>

<?php
    $text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, excepturi sapiente, optio, inventore eos nesciunt magni temporibus dolores debitis ipsa ad quaerat. Asperiores eius dolorem voluptas voluptates debitis molestias a?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, excepturi sapiente, optio, inventore eos nesciunt magni temporibus dolores debitis ipsa ad quaerat. Asperiores eius dolorem voluptas voluptates debitis molestias a?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, excepturi sapiente, optio, inventore eos nesciunt magni temporibus dolores debitis ipsa ad quaerat. Asperiores eius dolorem voluptas voluptates debitis molestias a?';

    $texts = explode('.', $text);

    for($i = 0; $i < count($texts); $i++){
        echo $texts[$i] . '<br>';
    }
?>

<h2>SnacK 6</h2>

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

    for($i = 0; $i < count($db['pm']); $i++){
        echo '<div class="pm">' . $db['pm'][$i]['name'] . '' . $db['pm'][$i]['lastname'] . '</div>';
    }
 
    for($i = 0; $i < count($db['teachers']); $i++){
        echo '<div class="teachers">' . $db['teachers'][$i]['name'] . '' . $db['teachers'][$i]['lastname'] . '</div>';
    }
?>

<h2>Snack 7</h2>

<?php
    $classe3b = [
        [
            "name" => "kevin",
            "surname" => "Nezosi",
            "votes" => [
               0 => 8,
               1 => 3,
               2 => 7,
               3 => 2,
            ],
        ],
        [
            "name" => "Marco",
            "surname" => "Rossi",
            "votes" => [
               0 => 5,
               1 => 9,
               2 => 5,
               3 => 4,
            ],
        ],
        [
            "name" => "Flavius",
            "surname" => "Vintila",
            "votes" => [
               0 => 5,
               1 => 8,
               2 => 6,
               3 => 10,
            ],
        ],
    ];

    for($i = 0; $i < count($classe3b); $i++){
        echo '<br>' .$classe3b[$i]['name'] . '' . $classe3b[$i]['surname'] . '</br>';
        $media = array_sum($classe3b[$i]['votes']) / count($classe3b[$i]['votes']);
        echo 'La media é: ' . $media . '<br>';
    };


?>



<style>
    
    .pm{
        background-color: green;
    }

    .teachers{
        background-color: red;
    }
</style>

</body>
</html>