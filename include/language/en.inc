<?php

  function lang($word)
  {
      static $lang=array(
        "key"=>'value',
      );

      return $lang[$word];
  }

?>