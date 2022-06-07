<!-- 9.(STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka. -->

<?php
class MarsoPalydovas
{
  private $title;
  static private $objectNr = 0;
  static private $palydovas1;
  static private $palydovas2;

  private function __construct()
  {
    if (self::$objectNr === 1) {
      $this->title = 'Deimas';
    } else if (self::$objectNr === 2) {
      $this->title = 'Fobas';
    }
  }

  function get_title()
  {
    return $this->title;
  }

  public static function createObj()
  {
    if (!self::$palydovas1) {
      self::$objectNr = 1;
      self::$palydovas1 = new self;
      return self::$palydovas1;
    } else if (!self::$palydovas2) {
      self::$objectNr = 2;
      self::$palydovas2 = new self;
      return self::$palydovas2;
    } else {
      if (rand(1, 2) === 1) {
        return self::$palydovas1;
      } else {
        return self::$palydovas2;
      }
    }
  }
}





// class MarsoPalydovas{

//     private $title;

    
    
//     public static function create($n){
//         self::$title= $n;
//         return new MarsoPalydovas;
//     }
// }