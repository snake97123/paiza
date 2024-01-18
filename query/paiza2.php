<?php

list($group_member_count, $history_event_count) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$group_member = [];
$event_responsible_student = [];
for($i = 0; $i < $group_member_count; $i++) {
  $group_member[trim(fgets(STDIN))] = true;
}

for($i = 0; $i < $history_event_count; $i++) {
  [$event_year, $responsible_student_name] = explode(' ', trim(fgets(STDIN)));
   $event_year = intval($event_year);
   $event_responsible_student[$event_year][] = $responsible_student_name;
}

ksort($event_responsible_student);
foreach($event_responsible_student as $event_year => $responsible_student_name) {
  sort($responsible_student_name);
  foreach($responsible_student_name as $name)
  echo $name . "\n";
}

?>