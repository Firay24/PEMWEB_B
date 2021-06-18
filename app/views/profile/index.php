 <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mt-5 text-gray-800">Profile</h1>
    </div>
    <div class="container">
        <img class="d-inline mr-5" src="<?= BASEURL; ?>/images/profile.png" style="width:20%;">
        <div class="d-inline">
            <h3><?= $data['pelanggan']['nama']?></h3>
            <h3><?= $data['pelanggan']['username']?></h3>
            <h3><?= $data['pelanggan']['password']?></h3>
        </div>
        <br> <br>
        <button type="button" class="btn btn-primary" href="<?= BASEURL; ?>/profile/edit">Edit</button>
    </div>
</div>