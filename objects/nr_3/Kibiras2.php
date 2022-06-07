<!-- 3.(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą. -->

<?php
class Kibiras2{
    protected $akmenuKiekis;
    static private $akmenuKiekisVisuoseKibiruose;

    
    // public static function prideti1Akmeni(){
    //   return  ++self::$akmenuKiekisVisuoseKibiruose;
    // }
    public function pridetiDaugAkmenu(int $kiekis){
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }
    public static function kiekPririnktaAkmenu(){
        return self::$akmenuKiekisVisuoseKibiruose;
    }
    
}