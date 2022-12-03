<div data-role="panel" data-title-caption="Data Distributor" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<a class="button warning shadowed" href="<?= $base_url; ?>distributor/Add">Tambah Data Distributor</a>
<table class="table row-hover">
    <thead>
        <th>Nomor</th>
        <th>Nama Distributor</th>
        <th>Alamat</th>  
        <th>No Telpon</th>
        <th colspan=2>Tools</th>
    </thead>
    <?php
        $no=1;
    foreach ($data['distributor'] as $distributor){
    ?>
    <tbody>
        <td><?= $no ?></td>
        <td><?= $distributor['nmdist'] ?></td>
        <td><?= $distributor['alamat'] ?></td>
        <td><?= $distributor['notelp'] ?></td>
        <td><a class="button info shadowed" href="<?= $base_url.'distributor/edit/'.$distributor['iddist']?>"><span class="mif-pencil"></a>
        <a class="button alert shadowed" href="<?= $base_url.'distributor/hapus/'.$distributor['iddist'] ?>"onclick="return confirm('Yakin anda ingin menghapus?')"><span class="mif-bin"></span></a></td>
    </tbody>
    <?php
        $no++;
        }
    ?>
</table>