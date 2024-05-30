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

    public function attack($target) {
        $target->setHp($target->getHp() - $this->getStrength());
        if ($target->getHp() <= 0) {
            $target->setHp(0);
            echo $target->getUsername() . " a été attaqué par " . $this->getUsername() . " et en est mort !";
        } else {
            echo $target->getUsername() . " a été attaqué par " . $this->getUsername() . " et a maintenant " . $target->getHp() . " points de vie.";
        }
        $this->setXp($this->getXp() + 80);
        if ($this->getXp() >= 100) {
            $this->setLvl($this->getLvl() + 1);
            $this->setXp($this->getXp() - 100);
        }
    }

    public function log(){
        echo "<br>";
        echo "Username : " . $this->getUsername();
        echo "<br>";
        echo "HP : " . $this->getHp();
        echo "<br>";
        echo "LVL : " . $this->getLvl();
        echo "<br>";
        echo "XP : " . $this->getXp();
        echo "<br>";
        echo "Strength : " . $this->getStrength();
        echo "<br>";
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