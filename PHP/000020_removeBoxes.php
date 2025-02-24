<?php
// Dynamic programming - Hard
class Solution {

  private $memo = [];
  private $boxes;

  /**
   * @param Integer[] $boxes
   * @return Integer
   */
  function removeBoxes(array $boxes): int {
    $this->boxes = $boxes;
    $this->memo = [];

    return $this->calculateRange(0, count($boxes) - 1, 0);
  }

  private function calculateRange(int $start, int $end, int $boxesCounter): int {
    if ($start > $end) {
      return 0;
    }

    $key = "$start-$end-$boxesCounter";

    if (isset($this->memo[$key])) {
      return $this->memo[$key];
    }

    while ($start < $end && $this->boxes[$start] === $this->boxes[$start + 1]) {
      $start++;
      $boxesCounter++;
    }

    $score = ($boxesCounter + 1) * ($boxesCounter + 1) + $this->calculateRange($start + 1, $end, 0);

    for ($m = $start + 1; $m <= $end; $m++) {
      if ($this->boxes[$m] === $this->boxes[$start]) {
        $score = max($score,
          $this->calculateRange($start + 1, $m - 1, 0) +
          $this->calculateRange($m, $end, $boxesCounter + 1)
        );
      }
    }

    $this->memo[$key] = $score;

    return $score;
  }
}


