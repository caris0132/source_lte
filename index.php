<?php
session_start();
//error_reporting(0);
require 'vendor/autoload.php';
@define('_template', './templates/');
@define('_source', './sources/');
@define('_lib', './libraries/');
include_once _lib . "config.php";
include_once _lib . "constant.php";
include_once _lib . "functions.php";
