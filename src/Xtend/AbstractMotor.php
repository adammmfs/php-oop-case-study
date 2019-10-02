<?php
namespace Xtend;
interface Spek
{
    public function setTransmisi($transmisi);
    public function setCc($cc);
    public function setThn($thn);
}
abstract class AbstractMotor implements Spek
{
  
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
