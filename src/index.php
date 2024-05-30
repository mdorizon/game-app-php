<?php
require_once __DIR__ . '/class/player.php';
require_once __DIR__ . '/class/warrior.php';
require_once __DIR__ . '/class/mage.php';

$player1 = new Warrior("John", "password");
$player2 = new Mage("Mc", "password");

echo "username " . $player1->getUsername() . "<br>";
echo "HP " . $player1->getHp() . "<br>";
echo "strength " . $player1->getStrength() . "<br>";

echo "<br>";

echo "username " . $player2->getUsername() . "<br>";
echo "HP " . $player2->getHp() . "<br>";
echo "strength " . $player2->getStrength() . "<br>";

echo "<br>";

$player1->attack($player2);