<?php

/**
 * This class find all numbers in the interval [10 ... maxPoint]  
 */
class FindSumNumbers extends AbstractNumbers {
    
    /**
     * we start find from the minimal two-digit number, it is 10
     */
    const START_VALUE = 10;
    
    private $sum;
    private $arrayNumbers;
    
    private $objectMaxPointClass; // object of FindMaxPoint class
    
    /**
     * @param int
     * @return void
     */ 
    public function __construct($power) {
        //initial value
        $this->sum = 0;
        $this->arrayNumbers = array();
        $this->objectMaxPointClass = new FindMaxPoint($power);         
    }
    
    /**
     * Method return array numbers
     * @param void
     * @return array int
     */ 
    public function findArrayNumbers() {
        
        //check field arrayNumbers        
        if(!empty($this->arrayNumbers)) {
            
            return $this->arrayNumbers;
                
        }
        
        for($i = 10; $i <= $this->objectMaxPointClass->find(); $i++) {
            
            if($i == $this->getSumNumberInPower($i, $this->objectMaxPointClass->getPower())) $this->arrayNumbers[] = $i;
            
        }
        
        return $this->arrayNumbers;
        
    }
    
    /**
     * Method return sum of numbers
     * @param void
     * @return int
     */ 
    public function findSum() {
        
        //check field arrayNumbers
        if(empty($this->arrayNumbers)) {
                    
            $this->arrayNumbers = $this->findArrayNumbers();
        
        }
        
        foreach($this->arrayNumbers as $num) {
                
            $this->sum += $num;
                
        }
        
        return $this->sum;   
        
    }
    
}