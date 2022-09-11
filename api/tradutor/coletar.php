<?php

$dir = '../../data';

$actions = $_POST['actions'];

$videos = $_POST['videos'];

foreach ($actions as $action) {
    mkdir($dir . "/" . $action, 0777, true);
    for ($i = 0; $i < count($videos); $i++) {
        
        $arquivo = "$i.json";
        $json = json_encode($videos[$i]);
        $file = fopen("$dir/$action/$arquivo", 'w');
        fwrite($file, $json);
        fclose($file);
        
    }
}

echo 1;