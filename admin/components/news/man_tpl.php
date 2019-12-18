<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $config_type['title'] ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?= $config_type['title'] ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable_content" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th data-priority="1" data-orderable="false" data-searchable="false">check</th>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Hiển thị</th>
                                <th>Nổi bật</th>
                                <th data-priority="1" data-orderable="false" data-searchable="false">Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 100; $i++) : ?>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" checked id="checkboxSuccess<?= $i ?>">
                                            <label for="checkboxSuccess<?= $i ?>">
                                            </label>
                                        </div>
                                    </td>
                                    <td><?= $i ?></td>
                                    <td>ten <?= $i ?></td>
                                    <td>
                                        <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-warning">Edit <i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger">Delete <i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th data-priority="1" data-orderable="false" data-searchable="false">check</th>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Hiển thị</th>
                                <th>Nổi bật</th>
                                <th data-priority="1" data-orderable="false" data-searchable="false">Thao tác</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
