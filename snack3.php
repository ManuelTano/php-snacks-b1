<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e
 come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<?php

 $posts = [

    '29/08/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Alessio Cordari',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Alessio Cordari',
            'text' => 'Testo post 2'
        ],
    ],
    '30/08/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Francesco Tovani',
            'text' => 'Testo post 3'
        ]
    ],
    '31/08/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Gabriele Chiarello',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Gabriele Chiarello',
            'text' => 'Testo post 5'
        ],
        [
         'title' => 'Post 6',
            'author' => 'Gabriele Chiarello',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php foreach ($posts as $date => $value) : ?>
        <li>
            <h4><?=$date?></h4>
             <ul>
              <?php foreach($value as $post) : ?>
                <li>
                 <?=
                    'Titolo: '  .$post["title"] .'<br>'
                    .'Autore: '  .$post["author"] .'<br>'
                    .'Testo: '  .$post["text"] .'<br><br>'
                 ?>
                </li>
                 <?php endforeach; ?>
              </ul>
          </li>
        <?php endforeach; ?>
    </ul>
</body>
</body>
</html>