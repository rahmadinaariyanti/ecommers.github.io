<div data-role="panel" data-title-caption="Data Petugas" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<a class="button warning shadowed" href="<?= $base_url; ?>petugas/create">Tambah Data petugas</a>   
<table class="table row-hover">
    <thead>
        <th>Id Petugas</th>
        <th>Nama Petugas</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No Telpon</th>
        <th>Id user</th>
        <th colspan=2>Tools</th>
    </thead>
    <?php
        $no=1;
    foreach ($data['petugas'] as $petugas){
    ?>
    <tbody>
        <td><?= $petugas['idpetugas'] ?></td>
        <td><?= $petugas['nmpetugas'] ?></td>
        <td><?= $petugas['tgllahir'] ?></td>
        <td><?= $petugas['alamat'] ?></td>
        <td><?= $petugas['notelp'] ?></td>
        <td><?= $petugas['iduser'] ?></td>
        <td><a class="button info shadowed " href="<?= $base_url.'petugas/edit/'.$petugas['idpetugas'] ?>"><span class="mif-pencil"></span></a>
        <a class="button alert shadowed" href="<?= $base_url.'petugas/delete/'.$petugas['idpetugas'] ?>"onclick="return confirm('Yakin anda ingin menghapus?')"><span class="mif-bin"></span></a></td>
    </tbody>
    <?php
        $no++;
        }
    ?>
</table>