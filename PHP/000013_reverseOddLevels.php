<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

  /**
   * @param TreeNode $root
   * @return TreeNode
   */
  function reverseOddLevels($root) {
    if (!$root) {
      return false;
    }

    $level = 0;
    $queue = [$root];

    while ($queue) {
      $levelSize = count($queue);
      $levelValues = [];
      $nodes = [];

      for ($i = 0; $i < $levelSize; $i++) {
        $current = array_shift($queue);

        $levelValues[] = $current->val;
        $nodes[] = $current;

        if ($current->left) {
          $queue[] = $current->left;
        }
        if ($current->right) {
          $queue[] = $current->right;
        }
      }

      if ($level % 2 == 1) {
        $reversedValues = array_reverse($levelValues);
        foreach ($nodes as $index => $node) {
          $node->val = $reversedValues[$index];
        }
      }

      $level++;
    }

    return $root;
  }

}