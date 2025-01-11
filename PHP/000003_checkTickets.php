<?php

class Solution {

    public function checkTickets(array $tickets, $k): bool
    {
          if ($tickets[$k] == 0) { 
            return false;
          }
        
    
        return true;
    }

        
        
    /**
     * @param Integer[] $tickets
     * @param Integer $k
     * @return Integer
     */
    function timeRequiredToBuy($tickets, $k) {
    
        $end = true;
        $timeForBuyer[$k] = 0;
        while ($end) {
            for ($i=0 ; $i < count($tickets) ; $i++) {
                if ($tickets[$i] == 0) {
                    continue;
                }
    
                $tickets[$i] = $tickets[$i] - 1;
                

                
                $timeForBuyer[$k] += 1;
                
                if($tickets[$k] == 0) {
                    break;  
                }
                
            }

             $end = $tickets[$k] !== 0;
        }
        


       return $timeForBuyer[$k];
    }
}

$result = new Solution();
var_dump($result->timeRequiredToBuy([84,49,5,24,70,77,87,8], 3));
// var_dump($result->timeRequiredToBuy([5,1,1,1], 2));