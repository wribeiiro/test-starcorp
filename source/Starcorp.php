<?php

namespace source;

class Starcorp {

    protected $replace_array = [
        [ 'key' => 3,  'value' => 'IT' ], 
        [ 'key' => 5,  'value' => 'StarCorp'],
        [ 'key' => 15, 'value' => 'StarCorpianos']
    ];
    
    protected $iterator   = 1;
    protected $limit_loop = 100;

    /**
     * getResultNumbers
     *
     * @return void
     */
    public function getResultNumbers(): void {
        for ($i = $this->iterator; $i <= $this->limit_loop; $i++):
            echo "{$this->iterateNumbers($i)} <br>";
        endfor;
    }

    /**
     * iterateNumbers
     *
     * @param integer $inputNumber
     * @return string
     */
    public function iterateNumbers(int $inputNumber): string {
        $loopReplace = $this->replace_array;
        
        usort($loopReplace, function($a, $b) {
            return $a['key'] < $b['key'];
        });

        foreach ($loopReplace as $replace) {
            if ($inputNumber % $replace['key'] === 0) {
                $inputNumber = $replace['value'];
                break;
            }
        }

        return $inputNumber;
    }  
}