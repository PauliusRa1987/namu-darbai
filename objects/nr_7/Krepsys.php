<!-- 7.Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą dydis lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei dydis). -->
<?php

class Krepsys{
    const DYDIS = 500;
    public $karzinka;

    public function kiekis(){
        return self::DYDIS;
    }
    public function skaiciuokle($klubas){
        if ($klubas->valgomas == true && $klubas->sukirmijes == false) {
                    $this->karzinka += $klubas->svoris;
            }

        
    }
    // public function __set($name, $value)
    // {
    //     while (self::DYDIS >= $name) {
    //         $name +=$value;
    //     }return $name;
    // }

    // public function kaupikas(Grybas $grybiena){
    //     if ($grybiena->valgomas == true && $grybiena->sukirmijes == false) {
    //         $this->karzinka += $grybiena->svoris;
    //     }
    //     return self::DYDIS >= $this->karzinka;
    // }
    

}