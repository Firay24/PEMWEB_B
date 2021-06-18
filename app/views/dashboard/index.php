        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

        </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mt-5 text-gray-800">Dashboard</h1>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($data['kelas'] as $kelas) : ?>
                    <div class="col-lg-5 col-sm-7 ml-5 mr-3">

                    <!-- Basic Card Example -->
                        <div class="card shadow mb-4 d-flex">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        <?php echo '<img style="width:100%;" src="data:image/jpeg;base64,'.base64_encode( $kelas['image'] ).'"/>'?>
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <b><?=$kelas['judulKelas'] ?></b>
                                    <br>
                                    <?=$kelas['jenisKelas'] ?>
                                    <br>
                                    <?=$kelas['hargaKelas'] ?>
                                    <br>
                                    <button type="submit" name="daftar" class="btn bg-primary text-white">Daftar</button>
                                </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>
