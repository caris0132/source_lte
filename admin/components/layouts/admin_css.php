<?php
$admin_css = [];
$admin_js = [];

/** asset common */
$admin_css[] = 'plugins/fontawesome-free/css/all.min.css';
$admin_css[] = 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css';
$admin_css[] = 'dist/css/adminlte.min.css';
$admin_css[] = 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700';

$admin_js[] = 'plugins/bootstrap/js/bootstrap.bundle.min.js';
$admin_js[] = 'dist/js/adminlte.min.js';
$admin_js[] = 'dist/js/demo.js';
/** end asset common */

/** asset dashboard */
if ($com == 'dashboard') {
    $admin_js[] = 'plugins/chart.js/Chart.min.js';
    $admin_js[] = 'dist/js/pages/dashboard3.js';
}
/** asset dashboard */

/** act man */

// datatable
if (in_array($act, ['man'])) {
    $admin_css[] = 'plugins/datatables-bs4/css/dataTables.bootstrap4.min.css';
    $admin_css[] = 'plugins/datatables-responsive/css/responsive.bootstrap4.min.css';
    $admin_js[] = 'plugins/datatables/jquery.dataTables.min.js';
    $admin_js[] = 'plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';
    $admin_js[] = 'plugins/datatables-responsive/js/dataTables.responsive.min.js';
    $admin_js[] = 'plugins/datatables-responsive/js/responsive.bootstrap4.min.js';
}


// icheck bootstrap
$admin_css[] = 'plugins/icheck-bootstrap/icheck-bootstrap.min.css';

// bootstrap-switch
if (true) {
    $admin_js[] = 'plugins/bootstrap-switch/js/bootstrap-switch.min.js';
}
