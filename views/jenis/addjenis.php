<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
<caption><h1 class="text-center">Data Jenis</h1></caption>
<form class="justify-content-center align-items-center" action="<?= $base_url?>jenis/save" method="post">
    <label class="form-label" for="Jenis Barang">Jenis Barang</label>
    <input class="form-control mb-3" type="text" name="jenisbarang" id="" required>
    <label class="form-label" for="">Keterangan</label>
    <input class="form-control mb-3" type="text" name="ket" id="" required>
    <input type="submit" class="btn btn-success rounded-pill  mb-1" value="Simpan">
    <input type="reset" class="btn btn-danger rounded-pill  mb-1" value="Batal">
</form>