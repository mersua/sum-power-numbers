<?php

/**
 * This class generate max point, wich we will use for find all numbers in the interval [10 ... maxPoint]  
 */
class FindMaxPoint extends AbstractNumbers {
    
    private $power;
    private $maxPoint;
    
    /**
     * Start find max point from 99 because miss single digits number [0-9] and take fist the biggest value - it is 99
     * We wil check next list of max points [99, 999, 9999, 99999, 999999 ...] 
     */
    const START_NUMBER_POINT = 99; 
    
    /**
     * Set power
     * @param int
     * @return void
     */ 
    public function __construct($power) {
        $this->power = $power;
    }
    
    /**
     * Get power
     * @param void
     * @return int
     */
    public function getPower() {
        return $this->power;
    }
    
    /**
     * Get maxPoint
     * @param void
     * @return int
     */
    public function getMaxPoint() {
        return $this->maxPoint;
    }
    
    /**
     * Method return max point (number), when the sum of it numbers in power is bigger then value of number
     * @param void
     * @return int
     */ 
    public function find() {
        
        $this->maxPoint = START_NUMBER_POINT;
        
        while($this->maxPoint <= $this->getSumNumberInPower($this->maxPoint, $this->power)) {
            $this->maxPoint = (int)($this->maxPoint . "9");
        }
        
        return $this->lowerMaxPoint();
        
    }
    
    /**
     * Method return lower max point (number), when the sum of it numbers in power is bigger then value of number
     * @param void
     * @return int
     */ 
    private function lowerMaxPoint() {
        
        $number = $this->maxPoint;
     
        while($number >= $this->getSumNumberInPower($number, $this->power)) {
            
            $this->maxPoint = $number;
            
            //generate array of number
            $maxPointToArray = str_split((string)$number);
            
            //lower maxPoint
            foreach($maxPointToArray as $key => $item) {
                if($item != 1) {
                    $maxPointToArray[$key]--;
                    break;      
                }
            }
            
            //generate new maxPoint
            $number = (int)implode($maxPointToArray);
            
        }
                
        return $this->maxPoint;
        
    }

}