<?php

class FindMaxPoint {
    
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
        
        while($this->maxPoint <= $this->getSumNumberInPower($this->maxPoint)) {
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
     
        while($number >= $this->getSumNumberInPower($number)) {
            
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
    
    /**
     * Method calculate sum of all numbers in power
     * @param int $number
     * @return int
     */  
    private function getSumNumberInPower($number) {
        
        //generate array of number
        $numberToArray = str_split((string)$number);
        
        //calculate sum all numbers of array in power
        $sum = 0;
        foreach($numberToArray as $item) {
            $sum += pow((int)$item, $this->power);
        } 
            
        return $sum;
    }
    
}