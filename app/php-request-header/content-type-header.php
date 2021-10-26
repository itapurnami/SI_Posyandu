<?php

    //Cara memanggil header Content Type
    if ($_SERVER['CONTENT=TYPE'] == 'application/json') {
        echo "Content-Type = application/json";
    } elseif ($_SERVER['CONTENT_TYPE'] == 'application/xml') {
        echo "Content-Type = application/xml";
    } else {
        echo "Content=Type is not valid";
    }
?>