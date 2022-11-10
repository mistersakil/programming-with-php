<?php

$string = 'ud83dude00ud83dude03ud83dude04ud83dude01ud83dude06ud83dude05ud83dude02ud83eudd23ud83eudd72u263aufe0fud83dude0aud83dude07ud83dude42ud83dude0dud83eudd70ud83dude18ud83dude0eud83eudd78ud83eudd73ud83dude0f';

function unicode_to_emoji($string)
{

    $strLength = strlen($string);
    $replacement = '\\';
    $stringToArray = [];
    $i = 0;
    $length = 5;

    while ($i < $strLength) {
        $stringToArray[] = substr($string, $i, $length);
        $i += 5;
    }

    $arrayToString = implode('\\', $stringToArray);
    $arrayToString = substr_replace($arrayToString, $replacement, 0, 0);
    return $arrayToString;
}
$arrayToString = unicode_to_emoji($string);


echo json_decode('"' . $arrayToString . '"');