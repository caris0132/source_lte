<?php

/**
 * cấu hình
 */

$table = $com;
$type = $_GET['type'];
$act = $_GET['act'];
$items;
$item;

$config_type = $admin_type[$com][$type ? $type : 0];

switch ($act) {
    case 'man':
        getItems();
        $template = 'man_tpl.php';
        break;

    default:
        redirect('', 404);
        break;
}

function getItems () {
    global $d, $items, $table, $type;


}

?>
