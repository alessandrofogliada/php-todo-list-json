<?php
// salvo in una variabile il file json 
$json_string = file_get_contents('todo_list.json');

// trasformo la stringa in un file php 
$list = json_decode($json_string , true);

// trasformo il file php come se fosse un json 
header('Content-Type: application/json');

// ritrasformo il file php in un file json 
echo json_encode($list);




