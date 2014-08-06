<?php

require_once 'Log.php';

$log = new Log();
$log->write('error from the linux server 2.');
$log->write('could not connect to server.', 'sybase error');
