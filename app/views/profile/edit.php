 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mt-5 text-gray-800">Edit Profile</h1>
</div>
<div class="container d-inline-flex">
    <img class="d-inline mr-5" src="<?= BASEURL; ?>/images/profile.png" style="width:45%;">
    <div class="d-inline">
        <form action="<?= BASEURL; ?>/Profile/ubah" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash();?>
                </div>
            </div>
            <div class="card shadow" style="width: 25rem; font-family:poppins;">
                <div class="card-header text-uppercase">
                    <b>Akun</b>
                </div>
                <ul class="list-group list-group-flush">
                        <div class="form-group">
                            <input type="hidden" name="ID" id="ID" placeholder="Id" value="<?=$data['pelanggan']["ID"];?>"/>
                        </div>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="">Nama</label><br>
                            <input type="text" class="rounded border border-primary form-control" name="nama" id="nama" placeholder="Nama" value="<?=$data['pelanggan']["nama"];?>"/>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="">Username</label> <br>
                            <input type="text" class="rounded border border-primary form-control" name="username" id="username" placeholder="Username" value="<?=$data['pelanggan']["username"];?>"/>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="">Password</label> <br>
                            <input type="password" class="rounded border border-primary form-control" name="password" id="password" placeholder="Password" value="<?=$data['pelanggan']["password"];?>"/>
                        </div>
                    </li>
                </ul>
            </div> <br>
            <button type="submit" name="submit" class="btn bg-primary text-white">Edit</button>
        </form>
    </div>
</div>
</div>
