
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
<caption><h1 class="text-center">Data Petugas</h1></caption>
<form class="justify-content-center align-items-center" action="<?= $base_url?>petugas/save" method="post">
    <label class="form-label" for="">Id Petugas</label>
    <input class="form-control mb-3" type="text" name="idpetugas"  id=""  >
    <label class="form-label" for="">Nama Petugas</label>
    <input class="form-control mb-3" type="text" name="nmpetugas" id="" required>
    <label class="form-label" for="">Tanggal Lahir</label>
    <input class="form-control mb-3" type="date" name="tgllahir" id="" placeholder="yyyy-mm-dd" value="<?= date('d-m-y')?>" required>
    <label class="form-label" for="">Alamat</label>
    <input class="form-control mb-3" type="text" name="alamat" id="" required>
    <label class="form-label" for="">No Telpon</label>
    <input class="form-control mb-3" type="text" name="notelp" id="" required>
    <label class="form-label" for="">Id user</label>
    <input class="form-control mb-3" type="text" name="iduser" id="" required>
    <input type="submit" class="btn btn-success rounded-pill  mb-1" value="Simpan">
    <input type="reset" class="btn btn-danger rounded-pill  mb-1" value="Batal">
</form>