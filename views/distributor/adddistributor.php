<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
<caption><h1 class="text-center">Data Distributor</h1></caption>
<form class="justify-content-center align-items-center" action="<?= $base_url?>distributor/Save" method="post">
    <label class="form-label" for="">Nama Distributor</label>
    <input class="form-control mb-3" type="text" name="nmdist" id="" required>
    <label class="form-label" for="">Alamat</label>
    <textarea class="form-control mb-3"  name="alamat" id="" required></textarea>
    <label class="form-label" for="">NO Telpon</label>
    <input class="form-control mb-3" type="text" name="notelp" id="" required>
    <input type="submit" class="btn btn-success rounded-pill  mb-1" value="Simpan">
    <input type="reset" class="btn btn-danger rounded-pill  mb-1" value="Batal">
</form>
</div>