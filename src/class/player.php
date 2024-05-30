<?php

class Player {
    private $username;
    private $password;
    private $lvl = 0;
    private $xp = 0;
    protected $hp = 100;
    protected $strength = 10;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function attack($targetCharacter) {
        $targetCharacter->hp -= $this->strength;
        echo $targetCharacter->getUsername() . " a été attaqué par " . $this->getUsername() . " et a maintenant " . $targetCharacter->hp . " points de vie.";
    }

    public function getUsername() { return $this->username; }
    public function getLvl() { return $this->lvl; }
    public function getXp() { return $this->xp; }
    public function getHp() { return $this->hp; }
    public function getStrength() { return $this->strength; }
}