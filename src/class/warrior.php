<?php

class Warrior extends Player {
    public function __construct() {
        $this->hp *= 1.5;
        $this->strength *= 0.8;
    }
}