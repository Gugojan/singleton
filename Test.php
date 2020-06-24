<?php
class Test
{
    private $a = 'dd';
    public function setA($a){
        $this->a .= $a;
        return $this;
    }
    public function setB($a){
        $this->a .= $a;
        return $this;
    }
    public function getAB(){
        return $this->a;
    }

}