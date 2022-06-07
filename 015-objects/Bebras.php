<?php 
// daro Antanas
class Bebras {

    public $tail = 'long';
    private $age = '23';
    private $name, $vaikai;
    
    public function __construct(string $n, array $c){
        echo '<br>'.'magic construct'.'<br>';
        $this->eathIsYourAge();
        $this->age = rand(10, 200);
        $this->eathIsYourAge();
        $this->name = $n;
        $this->vaikai = $c;
    }
    
        
 

    public function eathIsYourAge(){ //geter
        // echo '<br>'.'Labas'.++$this->age.'<br>';
    }

    public function changeAnge(int $age){ //seter
        if($age > 25){
            return;
        }
        $this->age = $age;
    }

    public function __destruct(){
        echo '<br>'.'magic destuct'.'<br>';
    }
   public function __get($what)
   {
    // echo '<br>get magic'.$what.'<br>';
    // return 'nieko ner namie';
    // return $this->$what;
   }
   public function __set($where, $what){
    echo '<br>set magic'. $where .' '.$what.'<br>'; 
   }
}