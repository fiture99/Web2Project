<?php

function dd($data)
{
    var_dump($data);
    die();
}
function redirect($page){
    header('Location: ' . $page);
    die();
}

//getdate();
//date();
