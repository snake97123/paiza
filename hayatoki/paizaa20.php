<?php

  $input = trim(fgets(STDIN));
  $replace = str_replace(', maybe.', '!!', $input);
  echo $replace;
?>