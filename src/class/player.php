<?php

abstract class Player {
    private $username;
    private $hp;
    private $lvl;
    private $xp;
    private $strength;

    public function __construct($username) {
        $this->setUsername($username);
        $this->setHp(100);
        $this->setXp(0);
        $this->setLvl(1);
        $this->setStrength(50);
    }

    public function attack($targetCharacter) {
        $targetCharacter->hp -= $this->strength;
        if ($targetCharacter->getHp() <= 0) {
            $targetCharacter->setHp(0);
            echo $targetCharacter->getUsername() . " a été attaqué par " . $this->getUsername() . " et en est mort !";
        } else {
            echo $targetCharacter->getUsername() . " a été attaqué par " . $this->getUsername() . " et a maintenant " . $targetCharacter->getHp() . " points de vie.";
        }
    }

    public function setUsername($username) { $this->username = $username; }
    public function setLvl($lvl) { $this->lvl = $lvl; }
    public function setXp($xp) { $this->xp = $xp; }
    public function setHp($hp) { $this->hp = $hp; }
    public function setStrength($strength) { $this->strength = $strength; }
    
    public function getUsername() { return $this->username; }
    public function getLvl() { return $this->lvl; }
    public function getXp() { return $this->xp; }
    public function getHp() { return $this->hp; }
    public function getStrength() { return $this->strength; }
}