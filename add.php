<?php
    if(trim($_POST['newitem']) && trim($_POST['body'])) {
        if(file_exists('posts.json')){
        $json = file_get_contents('posts.json');
        $posts = json_decode($json, true);
    } else {
        $posts = [];
    }
        $posts[] = [
            'title' => $POST['title'],
            'body' => $POST['body']
    ];
    $json = json_encode($posts);
    $_file = fopen('posts.json', 'w');
    fwrite($file, $json);
    fclose($file);
}
header('Location: /index.php');
die();