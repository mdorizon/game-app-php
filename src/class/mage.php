<?php

class Mage extends Player {
    public function __construct() {
        $this->hp *= 0.5;
        $this->strength *= 1.5;
    }
}