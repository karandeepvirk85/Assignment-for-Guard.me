<?php

function isStringValid($string){
    if(empty($string) || strpos($string,'!') || ctype_upper(substr($string, 2, 1)) === false){
        return false;
    }
        
    return preg_match("/^(?=.*\d)(?=.*..[A-Z])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?=.*[aeiou]).{5,20}.$/i", $string) ? true : false;
}
?>