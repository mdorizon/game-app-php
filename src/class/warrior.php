<?php
require_once __DIR__ . '/player.php';
class Warrior extends Player {
    public function __construct($username) {
        parent::__construct($username);
        $this->setHp($this->getHp() * 1.5);
        $this->setStrength($this->getStrength() * 0.8);
    }
}