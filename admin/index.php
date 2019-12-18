<?php
if (!isset($dispatcher)) {
    header('Location: ' . "dashboard", true, 301);
    die();
}
$com = $var_router['com'];

if (!$d) {
    $d = new MysqliDb ($config['database']);
}

switch ($com) {
    case '':
        break;

    default:
        $component = $com;
        if ($component) {
            include "components/$component/index.php";
        }
        else {
            redirect('404.php', 404);
        }
        break;
}

include "components/layouts/admin_css.php";

$template = $template ? "components/$component/$template" : 'components/layouts/404.php';


?>
<!DOCTYPE html>
<html>

<head>
    <base href="//<?= $config_url . "/admin/" ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <?php foreach ( $admin_css as $item_css ): ?>
    <link rel="stylesheet" href="<?= $item_css ?>">
    <?php endforeach; ?>
    <link rel="stylesheet" href="dist/css/admin_style.css">
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include "components/layouts/top_tpl.php" ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include "components/layouts/left_tpl.php" ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php include $template ?>
        </div>
        <!-- /.content-wrapper -->

        <?php include "components/layouts/footer_tpl.php" ?>
    </div>
    <!-- ./wrapper -->

    <?php include "components/layouts/admin_js.php" ?>


</body>

</html>
