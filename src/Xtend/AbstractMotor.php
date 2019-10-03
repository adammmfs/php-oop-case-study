<?php
namespace Xtend;


abstract class AbstractMotor
{
  protected $cc;
  protected $thn;
  protected $transmisi;
  abstract function setTransmisi($transmisi);
  abstract function setCc($cc);
  abstract function setThn($thn);
  
  public function __construct(){
      $this->setCc(100);
  }
  
//   public function cetak(){
//     print $this->getTransmisi() . "\n";
//     print $this->getCc() . "\n";
//     print $this->getThn() . "\n";
//     print $this->getWarna() . "\n";
//   }

}

// $a = new AbstractMotor();
// echo $a->setCC('125');
