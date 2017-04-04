<?php declare(strict_types = 1);
/**
 * @author Tomáš Blatný
 */

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install dependencies `composer install`';
	exit(1);
}

Tester\Environment::setup();
date_default_timezone_set('Europe/Prague');
