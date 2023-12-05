<?php

class BuildingPart {
    public $cost;
    public $parts;
    public $minCost = null;

    public function __construct($cost, $parts) {
        $this->cost = $cost;
        $this->parts = $parts;
    }
}

$n = intval(trim(fgets(STDIN)));

$buildingParts = [];

for ($i = 0; $i < $n; $i++) {
    $data = explode(" ", trim(fgets(STDIN)));
    $cost = intval($data[0]);
    $numParts = intval($data[1]);
    $parts = $numParts > 0 ? array_map('intval', array_slice($data, 2)) : [];
    $buildingParts[] = new BuildingPart($cost, $parts);
    
}


function calculateMinCost($part, $buildingParts) {
    if ($part->minCost !== null) {
        return $part->minCost;
    }

    $minCost = $part->cost; 

    $buildCost = 0;
    if (count($part->parts) > 0) {
        foreach ($part->parts as $partNum) {
            $buildCost += calculateMinCost($buildingParts[$partNum - 1], $buildingParts);
        }
        $part->minCost = min($minCost, $buildCost);
    } else {
        $part->minCost = $minCost;
    }

    return $part->minCost;
}

$minTotalCost = calculateMinCost($buildingParts[0], $buildingParts);

echo $minTotalCost . "\n";



?>
