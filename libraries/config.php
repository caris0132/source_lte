<?php

error_reporting(E_ALL & ~E_NOTICE & ~8192);

session_start();

//session_destroy();


$config_url_folder = '/source_lte';
$config_url = $_SERVER["SERVER_NAME"] . $config_url_folder;
$_SESSION['ckfinder_baseUrl'] = $config_url;

$config['database']['host'] = 'remotemysql.com';
$config['database']['username'] = 'No9KkoQJGK';
$config['database']['password'] = 'VMTXB2LUzt';
$config['database']['db'] = 'No9KkoQJGK';
$config['database']['port'] = '3306';
$config['database']['charset'] = 'utf8';
$config['database']['prefix'] = 'table_';


$ip_host = '127.0.0.1';
$mail_host = 'noreply@demo98.ninavietnam.com.vn';
$pass_mail = '1234qwer!@';

$config['lang'] = array('vi' => 'Tiếng Việt', 'en' => "Tiếng anh"); #Danh sách ngôn ngữ hỗ trợ

date_default_timezone_set('Asia/Ho_Chi_Minh');
