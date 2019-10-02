<?php

namespace Xtend;

class Beat extends AbstractMotor
{
  private $cc;
  private $transmisi;
  private $thn;
  
  public function __construct(){
    $this->transmisi = "automatic";
  } 
  
  public static function setTransmisi(string $transmisi){
    $this->transmisi = $transmisi;
  }
  public static function setCc(string $cc){
    $this->cc = $cc;
  }
  public static function setThn(string $thn){
    $this->tahun = $thn;
  }
  public static function getSpek(){
    return $this->cc;
    return $this->transmisi;
    return $this->thn;
  }
}
