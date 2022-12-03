<?php
if($aksi=='index'){
    $data['distributor']=$db->query($connect,"SELECT * FROM tdistributor");
    $helpers->template('distributor/distributor.php',$data);
}
if($aksi=='Add'){
    $data['iddist']=$db->query($connect,"SELECT max(iddist) as iddist FROM tdistributor");
    $helpers->template('distributor/adddistributor.php');
}
if($aksi=='Save'){
    $nmdist=$_POST['nmdist'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
    $simpan=$db->qry($connect,"INSERT INTO tdistributor VALUES('$iddist','$nmdist','$alamat','$notelp')");
    if($simpan)
        header('location:'.$base_url. 'distributor');
    else{
        header('location:'.$base_url. 'distributor/Add');
    }
}
if($aksi=='edit'){
    $iddist=$uri[4];
    $data['distri']=$db->query($connect,"SELECT * FROM tdistributor WHERE iddist='$iddist'");
    $helpers->template('distributor/editdistributor.php',$data);
}
if ($aksi=='ubah'){
    $iddist=$uri[4];
    $nmdist=$_POST['nmdist'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
    $ubah=$db->qry($connect,"UPDATE tdistributor SET nmdist='$nmdist',alamat='$alamat',notelp='$notelp' WHERE iddist='$iddist'");
    if($ubah)
        header('location:'.$base_url.'distributor');
    else{
        header('location:'.$base_url.'distributor/edit');
    }
}
if($aksi=='hapus'){
    $iddist=$uri[4];
    $hapus=$db->qry($connect,"DELETE FROM tdistributor WHERE iddist='$iddist'");
    if($hapus)
    header('location:'.$base_url.'distributor');
    else{
        header('location:'.$base_url.'distributor/hapus');
    }
}