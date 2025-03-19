<?php

function get_disks()
{
    $json_music = file_get_contents('./music.json');
    $music = json_decode($json_music, true);
    return $music;
}
