 <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mt-5 text-gray-800">Profile</h1>
    </div>
    <div class="container d-inline-flex">
        <img class="d-inline mr-5" src="<?= BASEURL; ?>/images/profile.png" style="width:25%;">
        <div class="d-inline">
            <div class="card shadow" style="width: 18rem;font-family:poppins">
                <div class="card-header text-uppercase">
                    <b>Akun</b>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : <?= $data['pelanggan']['nama']?></li>
                    <li class="list-group-item">Username : <?= $data['pelanggan']['username']?></li>
                    <li class="list-group-item"> Password : <?= $data['pelanggan']['password']?></li>
                </ul>
                </div> <br>
            <a href="<?= BASEURL; ?>/profile/edit"><button type="button" class="btn btn-primary">Edit</button></a>
        </div>
    </div>
</div>