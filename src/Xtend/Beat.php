<?php

namespace Xtend;

class Beat implements Spek
{
  private $cc;
  private $transmisi;
  private $thn;
  
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
  public  function getSpek(){
    return $this->cc;
    return $this->transmisi;
    return $this->thn;
  }
}

$a = new Beat();
$a->setCc(110); $a->setThn(2010);

echo $a->getSpek();

