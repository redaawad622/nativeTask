<?php

function lang($word)
{
    static $lang=array(
        "key"=>'القيمة',
    );

    return $lang[$word];
}

?>