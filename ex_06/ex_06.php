<?php

setcookie("name", 'humain');

var_dump($_COOKIE["name"]);

function remove_cookie($cookie){
    if(in_array($cookie, $_COOKIE)){
        unset($_COOKIE[$cookie]);
    }
    
}
remove_cookie("name");
var_dump($_COOKIE);