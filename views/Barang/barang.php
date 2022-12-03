<div data-role="panel" data-title-caption="Tambah Data Barang" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<a class="button warning " href="<?= $base_url; ?>barang/add">Tambah Data Barang<span class="mif-add"></span></a>
<th colspan="1"></th>
<table class="table table-border cell-border">
    <thead>
        <th>Id Barang</th>
        <th>Nama Barang</th>
        <th>Jenis Barang</th>
        <th>Stok Barang</th>
        <th>Harga Barang</th>
        <th>Status Barang</th>
        <th>Pengirim</th>
        <th colspan="3">Tools</th>
    </thead>
    <?php
    foreach ($data['barang'] as $barang ) {
        ?>
    <tbody>
        <td><?= $barang['idbarang']?></td>
        <td><?= $barang['nmbarang']?></td>
        <td><?= $barang['jenisbarang']?></td>
        <td><?= $barang['stok']?></td>
        <td><?= $barang['harga']?></td>
        <?php
        if($barang['status']==1){
            if($barang['stok']>=1){
            $status="Ready";
        }else{
            $status="Sold Out";
        }
        }
        ?>
        <td><?= $status;?></td>
        <td><?= $barang['nmdist']?></td>
        <td><a class="button success" href="<?= $base_url.'jual/add/'.$barang['idbarang']?>"><span class="mif-cart"> </a>
        <a class="button info" href="<?= $base_url.'barang/edit/'.$barang['idbarang']?>"><span class="mif-pencil"></a>
        <a class="button alert" href="<?= $base_url.'barang/hapus/'.$barang['idbarang'] ?>"onclick="return confirm('Yakin anda ingin menghapus?')"><span class="mif-bin"></span></a></td>
    </tbody>
    <?php } ?>
</table>