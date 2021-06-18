 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mt-5 text-gray-800">Edit Profile</h1>
</div>
<div class="container">
    <img class="d-inline mr-5" src="<?= BASEURL; ?>/images/profile.png" style="width:20%;">
    <div class="d-inline">
        <form action="<?= BASEURL; ?>/Profile/ubah" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash();?>
                </div>
            </div>
            <div class="form-group">
                <label for="">Nama</label><br>
                <input type="text" name="nama" id="nama" placeholder="Nama" value="<?=$data["nama"];?>"/>
            </div>
            <div class="form-group">
                <label for="">Username</label><br>
                <input type="text" name="username" id="username" placeholder="Username" value="<?=$data["username"];?>"/>
            </div>
            <div class="form-group">
                <label for="">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Password" value="<?=$data["password"];?>"/>
            </div>
            <button type="submit" name="submit" class="btn bg-primary text-white">Edit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>
</div>
