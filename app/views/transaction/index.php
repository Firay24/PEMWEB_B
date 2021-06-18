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
                <div>
                    <a class="btn btn-primary mb-3" href="<?= BASEURL; ?>/dashboard" role="button">Tambah kelas</a>
                </div>
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
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm"><?= $class['Keterangan']; ?></button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalBayar">Hapus</button>
                                        </td>
                                    <?php else: ?>
                                        <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalLunas"><?= $class['Keterangan']; ?></button></td>
                                    <?php endif ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Modal lunas -->
                <div class="modal fade" id="ModalLunas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Terima Kasih Anda Sudah Membayar Kelas Ini</p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-outline-primary" href="<?= BASEURL; ?>/classes" role="button">BELAJAR SEKARANG</a>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">OK</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Modal bayar -->
                <div class="modal fade" id="ModalBayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
