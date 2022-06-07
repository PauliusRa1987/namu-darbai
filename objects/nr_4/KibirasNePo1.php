<?php

class KibirasNePo1 extends Kibiras3{
    public function prideti1Akmeni(){
      echo  $this->akmenuKiekis += rand(2, 5), '<br>';
    }
}