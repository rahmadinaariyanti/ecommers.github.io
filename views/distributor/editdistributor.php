<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
<caption><h2 class="text-center">Edit Data Distributor</h2></caption>
    <?php foreach ($data['distri'] as $edit) { ?>
        <form class="justify-content-center align-items-center" action="<?= $base_url . 'distributor/ubah/' . $edit['iddist'] ?>" method="post">
            <div>
            <label class="form-label" for="">Id Distributor</label>
            <input class="form-control mb-3" type="text" name="iddist" id="" value="<?= $edit['iddist'] ?>" readonly>
            </div>
            <div>
            <label class="form-label" for="">Nama Distributor</label>
            <input class="form-control mb-3" type="text" name="nmdist" id="" value="<?= $edit['nmdist']?>">
            </div>
            <div>
            <label class="form-label" for="">Alamat</label>
            <input class="form-control mb-3" type="text" name="alamat" id="" value="<?= $edit['alamat']?>">
            </div>
            <div>
            <label class="form-label" for="">No Telpon</label>
            <input class="form-control mb-3" type="number" name="notelp" id="" value="<?= $edit['notelp']?>">
            </div>
            <div>
            <input type="submit" value="Simpan">
            <input type="reset" value="Batal">
            </div>       
        </form>
    <?php } ?>
</div>

