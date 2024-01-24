<?php
$event_count = intval(trim(fgets(STDIN)));
$superchat_name = [];
$membership_name = [];
for ($i = 0; $i < $event_count; $i++) {
    $event = explode(' ', trim(fgets(STDIN)));
    $event_name = $event[0];
    $event_type = $event[1];
    if ($event_type === 'give') {
        $event_money = intval($event[2]);
        if (isset($superchat_name[$event_name])) {
            $superchat_name[$event_name]['money'] += $event_money;
        } else {
            $superchat_name[$event_name] = ['name' => $event_name, 'money' => $event_money];
        }
    } else {
        $event_join = $event[2];
        $membership_name[$event_name] = $event_join;
    }
} 

uasort($superchat_name, function($a, $b) {
    if ($a['money'] == $b['money']) {
        return strcmp($b['name'], $a['name']);
    }
    return ($a['money'] < $b['money']) ? 1 : -1;
});

ksort($membership_name);

foreach ($superchat_name as $item) {
    echo $item['name'] . "\n";
}
foreach ($membership_name as $name => $join) {
    echo $name . "\n";
}
?>