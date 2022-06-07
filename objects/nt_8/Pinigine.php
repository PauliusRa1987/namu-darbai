<?php



class Pinigine{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    public function ideti(int $kiekis){
        if($kiekis <= 2){
            $this->metaliniaiPinigai += $kiekis;
        }
        $this->popieriniaiPinigai += $kiekis;
    }
    public function monetos(){
        
            return 'Monetoos: '.$this->metaliniaiPinigai.'<br>';
        
    }
    public function Banknotai(){

            return 'Banknotai: '.$this->popieriniaiPinigai.'<br>';
        
    }
}