<?php



function changeLang($url){
    // Split the string by '/'
    $parts = explode('/', $url);

    // Check and change the first part
    $parts[0] = ($parts[0] == 'es') ? 'en' : 'es';

    // Reassemble the string with the new language part
    $newString = implode('/', $parts);
    return $newString;
}
