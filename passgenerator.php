<?php
include __DIR__ . '/./functions.php';
session_start();

$_SESSION['pass'] = randomPassword();



header('Location: ./passviewer.php');
