<?php

class UnionFind {
  private $parent = [];
  private $rank = [];

  public function __construct($n) {
    for($i = 0; $i < $n; $i++) {
      $this->parent[$i] = $i;
      $this->rank[$i] = 0;
    }
  }

  public function find($x) {
    if($this->parent[$x] == $x) {
      return $x;
    } else {
      $this->parent[$x] = $this->find($this->parent[$x]);
      return $this->parent[$x];
    }
  }

  public function unite($x, $y) {
    $rootX = $this->find($x);
    $rootY = $this->find($y);
    if($rootX === $rootY){
      return;
    } 
    if($this->rank[$rootX] < $this->rank[$rootY]) {
      $this->parent[$rootX] = $rootY;
    } else {
      $this->parent[$rootY] = $rootX;
      if($this->rank[$rootX] == $this->rank[$rootY]) {
        $this->rank[$rootX]++;
      }
    }
  }
  public function same($x, $y) {
    return $this->find($x) === $this->find($y);
  }
}

 list($N, $Q) = array_map('intval', explode(' ', trim(fgets(STDIN))));
 $unionFind = new UnionFind($N);
 for($i = 0; $i < $Q; $i++) {
    list($P, $A, $B) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    if($P == 1) {
      $unionFind->unite($A - 1, $B - 1);
    } else {
      if($unionFind->same($A - 1, $B - 1)) {
        echo "Yes\n";
      } else {
        echo "No\n";
      }
    }
 }


?>