<?php
$studentNumber = intval(fgets(STDIN));
$students = [];

for ($i = 0; $i < $studentNumber; $i++) {
    [$height, $name] = explode(' ', trim(fgets(STDIN)));
    $students[] = ['height' => intval($height), 'name' => $name];
}

function compareStudents($a, $b): int {
    return $a['height'] === $b['height']
        ? strcmp($b['name'], $a['name'])
        : $b['height'] <=> $a['height'];
}

usort($students, 'compareStudents');

foreach ($students as $student) {
    echo $student['name'] . "\n";
}