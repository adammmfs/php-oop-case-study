<?php

namespace Xtend;

interface Spek
{
  abstract public function setTransmisi($transmisi);
  abstract public function setCc($cc);
  abstract public function setThn($thn);
}

abstract class AbstractMotor implements Spek
{
  
  abstract protected function setTransmisi($transmisi);
  abstract protected function setCc($cc);
  abstract protected function setThn($thn);

  
//   public function cetak(){
//     print $this->getTransmisi() . "\n";
//     print $this->getCc() . "\n";
//     print $this->getThn() . "\n";
//     print $this->getWarna() . "\n";
//   }
}


