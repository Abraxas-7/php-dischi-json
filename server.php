<?php

$new_disk = [
    'titolo' => $_POST['disk_name'],
    'artista' => $_POST['disk_artist'],
    'url_cover' => $_POST['disk_cover'],
    'anno_pubblicazione' => $_POST['disk_year'],
    'genere' => $_POST['disk_genre']
];

// var_dump($new_disk);

//aggiunta di un nuovo disco
$json_music = file_get_contents('./music.json');

$music = json_decode($json_music, true);

$music[] = $new_disk;

$json_music = json_encode($music);

$json_music = file_put_contents('./music.json', $json_music);

//redirect
header('location: ./index.php');
