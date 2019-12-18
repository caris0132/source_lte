<?php

function check_login() {
	if ($_SESSION['login_admin']) {
		return true;
	}
	return false;
}

function magic_quote($str, $d=false)
{
    if (is_array($str))
    {
        foreach($str as $key => $val)
        {
            $str[$key] = magic_quote($val);
        }
        return $str;
    }
    if (is_numeric($str)) {
        return $str;
    }
    if(get_magic_quotes_gpc()){
        $str = stripslashes($str);
    }
    if (function_exists('mysqli_real_escape_string') AND $d)
    {
        return $d->escape($str);
    }
    else
    {
        return addslashes($str);
    }
}


function getMenuPermission($title, $table, $act, $type)
{
	global $config_url;
	$base_link = "<li class=\"nav-item\"><a class=\"nav-link\" href='{%link%}'><i class=\"far fa-circle nav-icon\"></i><p>{%title%}</p></a></li>";
    $link = "$table";

    $query_builder = http_build_query(compact('act', 'type'));
    if ($query_builder) {
        $link .= "?$query_builder";
    }

	return str_replace(["{%link%}", "{%title%}"], [$link, $title], $base_link);
}

function checkAuthAccess($sum_auth_access, $auth_access = AUTH_ACCESS_READ)
{
	if ( $sum_auth_access === $auth_access) {
		return true;
	}

	$list_auth[]=AUTH_ACCESS_READ;
	$list_auth[]=AUTH_ACCESS_CREATE;
	$list_auth[]=AUTH_ACCESS_UPDATE;
	$list_auth[]=AUTH_ACCESS_DELETE;
	rsort($list_auth);

	foreach ($list_auth as $item_access) {
		if ($sum_auth_access == $auth_access) {
			return true;
		}
		if ($sum_auth_access >= $item_access) {
			$sum_auth_access = $sum_auth_access - $item_access;
		}
	}

	return false;
}

function transfer($msg,$page="index.php",$success=true)
{
	$showtext = $msg;
	$page_transfer = $page;
	include("admin/components/common/transfer_tpl.php");
	exit();
}





function createSlug ($str)
{
    $str = strtolower($str);
    $str = preg_replace('/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/',"a", $str);
    $str = preg_replace('/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/',"e", $str);
    $str = preg_replace('/ì|í|ị|ỉ|ĩ/',"i", $str);
    $str = preg_replace('/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/',"o", $str);
    $str = preg_replace('/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/',"u", $str);
    $str = preg_replace('/ỳ|ý|ỵ|ỷ|ỹ/',"y", $str);
    $str = preg_replace('/đ/',"d", $str);
    $str = preg_replace('/[^a-zA-Z0-9]/'," ", $str);
    $str = trim($str);
    $str = preg_replace("/ + /"," ", $str);
    $str = preg_replace("/\s+/","-", $str);
    $str = preg_replace("/-+/","-", $str);
    return $str;

}

function redirect($url, $statusCode = 301)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
