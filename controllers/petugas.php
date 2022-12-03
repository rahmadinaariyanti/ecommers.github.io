<?php
if($aksi=='index'){
	$data['petugas']=$db->query($connect,"SELECT * FROM tpetugas");
	$helpers->template('petugas/petugas.php',$data);
}
if($aksi=='create'){
	$data['petugas']=$db->query($connect,"SELECT * FROM tpetugas");
	$helpers->template('petugas/addpetugas.php',$data);
}
if($aksi=='save'){
	$idpetugas=$uri[4];
	$nmpetugas=$_POST['nmpetugas'];
	$tgllahir=$_POST['tgllahir'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
    $iduser=$_POST['iduser'];
$simpan=$db->qry($connect,"INSERT INTO tpetugas VALUES('$nmpetugas','$tgllahir','$alamat','$notelp','$iduser') ");
if($simpan)
	header('location:'.$base_url.'petugas');
else{
	header('location:'.$base_url.'petugas/create');
}
}
if($aksi=='edit'){
	$idpetugas=$uri[4];
	$data['petugas']=$db->query($connect,"SELECT * FROM tpetugas where idpetugas='$idpetugas'");
	$helpers->template('petugas/edit.php',$data);
}
if($aksi=='update'){
	$idpetugas=$uri[4];
	$nmpetugas=$_POST['nmpetugas'];
	$tgllahir=_POST['tgllahir'];
    $alamat=_POST['alamat'];
    $notelp=_POST['notelp'];
    $iduser=_POST['iduser'];
	$update=$db->qry($connect,"UPDATE tpetugas set nmpetugas='$nmpetugas',tgllahir='$tgllahir',alamat='$alamat',notelp='$notelp',iduser='$iduser' where idpetugas='$idpetugas'");
	if($update)
	header('location:'.$base_url.'petugas');
else{
	header('location:'.$base_url.'petugas/edit'.$idpetugas);
}
}
if($aksi=='delete'){
	$idpetugas=$uri[4];
	$hapus=$db->qry($connect,"DELETE FROM tpetugas where idpetugas='$idpetugas'");
	if($hapus)
	header('location:'.$base_url.'petugas');
else{
	header('location:'.$base_url.'petugas/delete');
}
}
?>