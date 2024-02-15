<?php

use Matteomcr\BrawlstarProject\Controllers\HomeController;
use Matteomcr\BrawlstarProject\Controllers\CharacterController;


$app->get('/', [HomeController::class, 'showHomePage']);

$app->get('/brawler', [CharacterController::class, 'showCharacterPage']);