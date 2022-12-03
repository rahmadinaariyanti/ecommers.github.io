<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
<caption><h2 class="text-center">Edit Data Petugas</h2></caption>
    <?php foreach ($data['petugas'] as $edit) { ?>
        <form class="justify-content-center align-items-center" action="<?= $base_url . 'petugas/update/' . $edit['idpetugas'] ?>" method="post">
            <div>
            <label class="form-label" for="">Id Petugas</label>
            <input class="form-control mb-3" type="text" name="idpetugas" id="" value="<?= $edit['idpetugas'] ?>" readonly>
            </div>
            <div>
            <label class="form-label" for="">Nama Petugas</label>
            <input class="form-control mb-3" type="text" name="nmpetugas" id="" value="<?= $edit['nmpetugas']?>">
            </div>
            <div>
            <label class="form-label" for="">Tanggal Lahir</label>
            <input class="form-control mb-3" type="date" name="tgllahir" id="" value="<?= $edit['tgllahir']?>">
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
            <label class="form-label" for="">Id user</label>
            <input class="form-control mb-3" type="text" name="iduser" id="" value="<?= $edit['iduser']?>">
            </div>
            <div>
            <input type="submit" value="Simpan">
            <input type="reset" value="Batal">
            </div>       
        </form>
    <?php } ?>
</div>

