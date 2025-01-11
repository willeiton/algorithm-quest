<?php
class MyHashSet {
  
  protected $result;
    /**
     */
    function __construct() {
        $this->result = [];
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key) {

        $this->result[$key] = 'yeah';
        return null;
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) 
    {
        unset($this->result[$key]);
        return null;
    }
  
    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key): bool 
    {
        return isset($this->result[$key]);
    }
}