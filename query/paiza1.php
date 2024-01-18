<?php

[$member_count, $event_count] = array_map('intval', explode(' ', trim(fgets(STDIN))));
$member_names = [];

for ($i = 0; $i < $member_count; $i++) {
     $member_names[trim(fgets(STDIN))] = true;
}

for($i = 0; $i < $event_count; $i++) {
  [$event, $name] = explode(' ', trim(fgets(STDIN)));
  if ($event === 'handshake') {
    ksort($member_names);
    foreach (array_keys($member_names) as $member_name) {
    echo $member_name . "\n";
  }
  } else if ($event === 'join') {
   $member_names[$name] = true; 
  } else if ($event === 'leave') {
    unset($member_names[$name]);
  }
}