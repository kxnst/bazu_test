<?php
class Cal {

    private ?int $result = null;

    public function getResult(){
        return $this->result;
    }
    public function add(int $var){
        $this->result = $this->result + $var;
    }
    public function min(int $var){
        $this->result = $this->result - $var;
    }
    public function divide(int $var){
        $this->result = $this->result / $var;
    }
    public function multiply(int $var){
        $this->result = $this->result * $var;
    }
    private function round($var){
        $this->result = round($var);
    }
}