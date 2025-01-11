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
   * @param TreeNode $subRoot
   * @return Boolean
   */
  function isSubtree($root, $subRoot) {
    if (!$root) {
      return false;
    }

    $stack = [$root];

    while (!empty($stack)) {
      $current = array_pop($stack);

      if ($current->val == $subRoot->val) {
        if ($this->compare($current, $subRoot)) {
          return true;
        }
      }

      if ($current->right) {
        $stack[] = $current->right;
      }

      if ($current->left) {
        $stack[] = $current->left;
      }
    }

    return false;
  }

  public function compare($root, $subRoot): bool
  {
    if ($root === null && $subRoot === null) {
      return true;
    }

    if ($root === null || $subRoot === null) {
      return false;
    }

    if ($root->val !== $subRoot->val) {
      return false;
    }

    return $this->compare($root->left, $subRoot->left) &&
      $this->compare($root->right, $subRoot->right);
  }
}