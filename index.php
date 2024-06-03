<?php

require __DIR__ . '/vendor/autoload.php';

use function Stringy\create as s;

// echo($_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']);

echo(s('fòô     bàř')->collapseWhitespace()->swapCase());