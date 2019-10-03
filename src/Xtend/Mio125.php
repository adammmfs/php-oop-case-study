<?php

namespace Xtend;


class Mio125 extends AbstractMotor implements Spek
{
 
  
  public function __construct(){
    $this->transmisi = "automatic";
  } 
  
  public function setTransmisi(string $transmisi){
    $this->transmisi = $transmisi;
  }
  public  function setCc(string $cc){
    $this->cc = $cc;
  }
  public  function setThn(string $thn){
    $this->tahun = $thn;
  }
  public  function getCc(){
    return $this->cc;
  }
  public  function getTransmisi(){
    return $this->transmisi;
  }
  public  function getThn(){
    return $this->thn;
  }
}





// class Mio125 extends AbstractMotor
// {
//   public static function getTransmisi(){
//     return "matic";
//   }
//   public static function getCc(){
//     return "125";
//   }
//   public static function getThn(){
//     return "2017";
//   }
//   public static function getWarna(){
//     return "merah";
//   }
// }
