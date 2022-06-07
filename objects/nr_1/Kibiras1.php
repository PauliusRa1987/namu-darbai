<?php

class Kibiras1{
    protected $akmenuKiekis;

    public function prideti1Akmeni(){
        $this->akmenuKiekis += 1;
    }
    public function pridetiDaugAkmenu(int $kiekis){
        $this->akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu(){
        return $this->akmenuKiekis;
    }
}