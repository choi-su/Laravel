<?php
require '/var/www/blog/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('/var/www/blog/app.log', Logger::WARNING));

// add records to the log
$log->warning('경고');
$log->error('에러');