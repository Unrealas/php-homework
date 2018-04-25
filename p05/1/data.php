<?php

$good_array = normalize_files_array($_FILES);



foreach($good_array['userfile'] as $file):
    $filetxt= 'files.txt';
    $current_date = new DateTime("now", new DateTimeZone('Europe/Vilnius'));
    $data = $file['name']." ".$current_date->format("Y-m-d H:i:s").PHP_EOL;
    $current_date = new DateTime("now", new DateTimeZone('Europe/Vilnius'));
    $uploaddir = __DIR__."\\uploads\\";
    $uploadfile = $uploaddir . ($file['name']);
    if(!file_exists($filetxt)){
        file_put_contents($filetxt, $data);
    } else {
        file_put_contents($filetxt, $data, FILE_APPEND);
    }
    if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded. <br>";
    } else {
        echo "Possible file upload attack! <br>";
    }
endforeach;
;

$file_data = file($filetxt);
foreach($file_data as $line){
    echo $line."<br>";
}

function normalize_files_array($files = []) {
    $normalized_array = [];
    foreach($files as $index => $file) {
        if (!is_array($file['name'])) {
            $normalized_array[$index][] = $file;
            continue;
        }
        foreach($file['name'] as $idx => $name) {
            $normalized_array[$index][$idx] = [
                'name' => $name,
                'type' => $file['type'][$idx],
                'tmp_name' => $file['tmp_name'][$idx],
                'error' => $file['error'][$idx],
                'size' => $file['size'][$idx]
            ];
        }
    }
    return $normalized_array;
}