<?php
include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore('player1', 'player2', 2, 3);

echo $tennisGame;