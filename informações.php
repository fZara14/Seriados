
<?php

function getSeriados()
{
    $url ="http://api.tvmaze.com/shows";
    return json_decode(file_get_contents($url));
}
