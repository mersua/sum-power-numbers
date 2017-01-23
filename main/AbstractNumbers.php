<?php

abstract class AbstractNumbers {
    
    /**
     * Method calculate sum of digitalis of number in power
     * @param int $number, int $power
     * @return int
     */  
    public function getSumNumberInPower($number, $power) {
        
        //generate array of number
        $numberToArray = str_split((string)$number);
        
        //calculate sum all numbers of array in power
        $sum = 0;
        foreach($numberToArray as $item) {
            $sum += pow((int)$item, $power);
        } 
            
        return $sum;
    }
    
}