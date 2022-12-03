<?php
if($aksi=='index'){
    $data['jual']=$db->query($connect,"SELECT * FROM vjual");
    $helpers->template('Jual/jual.php',$data);
}
if ($aksi=='add'){
    $idbarang=$uri[4];
    $data['brg']=$db->query($connect,"SELECT * FROM tbarang WHERE idbarang='$idbarang'");
    $data['jual']=$db->query($connect,"SELECT max(right(idjual,4))AS kdjual FROM tjual");
    $helpers->template('Jual/addjual.php',$data);
}
if($aksi=='save'){
    $idjual=$_POST['idjual'];
    $tgljual=$_POST['tgljual'];
	$idbarang=$_POST['idbarang'];
    $nmbarang=$_POST['nmbarang'];
    $jmlbarang=$_POST['jmlbarang'];
    $totalharga=$_POST['totalharga'];
    $bayar=$_POST['bayar'];
    $kembali=$_POST['kembali'];
    $simpan=$db->qry($connect,"INSERT INTO tjual VALUES('$idjual','$tgljual','$nmbarang','$jmlbarang','','$totalharga','$bayar','$kembali','')");
    if($simpan){
        header('location:'.$base_url.'jual');
    }else{
        header('location:'.$base_url.'jual/add');
    }
}
if($aksi=='edit'){
	$idbarang=$uri[4];
	$data['barang']=$db->query($connect, "SELECT * FROM tbarang where idbarang=$idbarang");
	$data['jual']=$db->query($connect, "SELECT max(right(idjual,4))as kodejual FROM tjual");
	$helpers->template('Jual/addjual.php',$data);
}
if($aksi=='save'){
	$idjual=$_POST['idjual'];
	$tgljual=$_POST['tgljual'];
	$idbarang=$_POST['idbarang'];
	$nmbarang=$_POST['nmbarang'];
	$jmlbarang=$_POST['jmlbarang'];
	$totalharga=$_POST['totalharga'];
	$simpan=$db->qry($connect,"INSERT INTO tjual values('$idjual','$tgljual','$idbarang','$jmlbarang','$totalharga')");
	if($simpan)
		header('location:'.$base_url.'jual');
	else{
		header('location:'.$base_url.'jual/add');
}
}
if($aksi=='update'){
	$idjual=$uri[4];
	$tgljual=$_POST['tgljual'];
	$idbarang=$_POST['idbarang'];
	$nmbarang=$_POST['nmbarang'];
	$jmlbarang=$_POST['jmlbarang'];
	$totalharga=$_POST['totalharga'];
	$update=$db->qry($connect,"UPDATE tjual set tgljual='$tgljual',idbarang='$idbarang',qty='$qty',totalharga='$totalharga' where idjual='$idjual'");
	if($update)
	header('location:'.$base_url.'jual');
else{
	header('location:'.$base_url.'jual/edit');
}
}
if($aksi=='delete'){
	$idjual=$uri[4];
	$hapus=$db->qry($connect,"DELETE FROM tjual where idjual='$idjual'");
	if($hapus)
	header('location:'.$base_url.'jual');
else{
	header('location:'.$base_url.'jual/delete');
}
}
?>