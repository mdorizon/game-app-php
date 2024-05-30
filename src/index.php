<?php
require_once __DIR__ . '/class/warrior.php';
require_once __DIR__ . '/class/mage.php';

$player1 = new Warrior("Warrior");
$player2 = new Mage("Mage");

$player1 = new Warrior("warrior");
$player2 = new Mage("Mage");

echo "<br>";
echo "Phase 1";
echo "<br>";

$player1->log();
$player2->log();

$player1->attack($player2);

echo "<br>";
echo "Phase 2";
echo "<br>";

$player1->log();
$player2->log();

$player1->attack($player2);

echo "<br>";
echo "Phase 3";
echo "<br>";

$player1->log();
$player2->log();