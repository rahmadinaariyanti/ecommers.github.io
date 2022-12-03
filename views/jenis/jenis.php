<div data-role="panel" data-title-caption="Data Jenis" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<a class="button warning shadowed" href="<?= $base_url; ?>jenis/Add">Tambah Data Jenis</a>   
<table class="table row-hover">
    <thead>
        <th>Nomor</th>
        <th>Jenis</th>
        <th>Ket</th>
        <th colspan=2>Tools</th>
    </thead>
    <?php
        $no=1;
    foreach ($data['jenis'] as $jenis){
    ?>
    <tbody>
        <td><?= $no ?></td>
        <td><?= $jenis['jenisbarang'] ?></td>
        <td><?= $jenis['ket'] ?></td>
        <td><a class="button info shadowed" href="<?= $base_url.'jenis/edit/'.$jenis['idjenis'] ?>"><span class="mif-pencil"></span></a>
        <a class="button alert shadowed" href="<?= $base_url.'jenis/hapus/'.$jenis['idjenis'] ?>"onclick="return confirm('Yakin anda ingin menghapus?')"><span class="mif-bin"></span></a></td>
    </tbody>
    <?php
        $no++;
        }
    ?>
</table>