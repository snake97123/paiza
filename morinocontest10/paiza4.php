<?php 

function is_child_node($parent, $child) {
  if ($parent * 2 + 1 === $child || $parent * 2 + 2 === $child) {
    return "Yes";
  } else {
    return "No";
  }
}

list($a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$answer = is_child_node($a, $b);
echo $answer;

?>