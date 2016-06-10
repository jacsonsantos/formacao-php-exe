<?php
ini_set("display_errors",1);
chdir(dirname(__DIR__));
	require "vendor/autoload.php";
use App\Code\User;

$user = new User();

$ok = $user->setUser("jacson","jss123456","jacson@jsmake.com")
	->saveUser();

var_dump($ok);