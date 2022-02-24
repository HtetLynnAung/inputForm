<?php

require_once 'connection.php';

require_once 'user.php';

session_start();

global $pdo;

$user = new User($pdo);
