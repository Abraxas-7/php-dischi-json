<?php

require_once('./functions.php');

$new_disk = [
    'titolo' => $_POST['disk_name'],
    'artista' => $_POST['disk_artist'],
    'url_cover' => $_POST['disk_cover'],
    'anno_pubblicazione' => $_POST['disk_year'],
    'genere' => $_POST['disk_genre']
];

// var_dump($new_disk);

//AGGIUNTA NUOVO DISCO
//recupero 
$music = get_disks();

//aggiunta 
$music[] = $new_disk;

//encoding e salvataggio
$json_music = json_encode($music);
$json_music = file_put_contents('./music.json', $json_music);

//redirect
header('location: ./index.php');
