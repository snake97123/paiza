<?php

[$l, $r] = array_map('intval', explode(' ', trim(fgets(STDIN))));
echo $l + ($r - $l) / 3, " ", $r - ($r - $l) / 3;

?>