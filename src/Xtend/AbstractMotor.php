<?php

namespace Xtend;

abstract class AbstractMotor
{
  abstract protected function getTransmisi();
  abstract protected function getCc();
  abstract protected function getThn();
  abstract protected function getWarna();
  
  public function cetak(){
    print $this->getTransmisi() . "\n";
    print $this->getCc() . "\n";
    print $this->getThn() . "\n";
    print $this->getWarna() . "\n";
  }
}


