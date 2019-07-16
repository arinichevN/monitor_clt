<?php
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
error_reporting(E_STRICT);

$frameworkPath =  './f_php/main.php';
require_once($frameworkPath);
go(dirname(__FILE__));
