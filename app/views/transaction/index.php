 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mt-5 text-gray-800">Transaction</h1>
    </div>

    <!-- Body Conten -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Transaction History</h6>
            </div>
            <div class="card-body">
                <a class="btn btn-primary mb-3" href="<?= BASEURL; ?>/dashboard" role="button">Tambah kelas</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Price</th>
                                <th>Datetime</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['class'] as $class) : ?>
                                <tr>
                                    <td><?= $class['judulKelas']; ?></td>
                                    <td><?= $class['Total']; ?></td>
                                    <td><?= $class['Waktu']; ?></td>
                                    <?php if($class['Keterangan']=='Bayar') :?>
                                        <td><a href="" class="badge badge-warning"><?= $class['Keterangan']; ?></a></td>
                                    <?php else: ?>
                                        <td><a href="" class="badge badge-success"><?= $class['Keterangan']; ?></a></td>
                                    <?php endif ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
