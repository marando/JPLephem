<?php

namespace Marando\JPLephem\DE;

class JPLSun extends \Marando\JPLephem\DE\JPLBody {

  public function getIdDE() {
    return 11;
  }

  public function getIdNAIF() {
    return 10;
  }

  public function getName() {
    return 'Sun';
  }

}
