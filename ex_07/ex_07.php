<?php


setcookie('name', 'toons');

function modify_cookie($para, $value){
    if(in_array($para, $_COOKIE)){
        unset($_COOKIE[$para]);
        setcookie($para, $value);
    }
}
var_dump($_COOKIE);
modify_cookie('name', 'julien');
var_dump($_COOKIE);
