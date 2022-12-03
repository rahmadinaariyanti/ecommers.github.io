<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
<caption><h2 class="text-center">Data Jenis</h2></caption>
<?php foreach ($data['jenis'] as $edit) { ?>
        <form class="justify-content-center align-items-center" action="<?= $base_url . 'jenis/ubah/' . $edit['idjenis'] ?>" method="post">
        <div>  
        <label class="form-label" for="">Jenis Barang</label>
            <input class="form-control mb-3"  type="text" name="jenisbarang" id="" value="<?= $edit['jenisbarang'] ?>">
            </div>  
            <div>
            <label class="form-label" for="">Keterangan</label>
            <input class="form-control mb-3"  type="text" name="ket" id="" value="<?= $edit['ket'] ?>">
            </div>
            <div>
            <input type="submit" value="Simpan">
            <input type="reset" value="Batal">
            </div>
        </form>
    <?php } ?>
</div>