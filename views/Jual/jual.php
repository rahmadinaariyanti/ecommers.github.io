<div data-role="panel" data-title-caption="Data jual" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<a class="button warning shadowed" href="<?= $base_url; ?>jual/add/">Tambah Data Barang</span></a>
<table class="table row-hover">
                      <thead>
                          <th>Id Jual</th>
                          <th>Tanggal Jual</th>
                          <th>Nama Barang</th>
                          <th>Jumlah Barang</th>
                          <th>total Harga</th>
                          <th>Bayar</th>
                          <th>Kembali</th>
                          <th colspan="1">Action</th>
                      </thead>
                      <tbody>
                      <?php
                      
                      foreach ($data['jual'] as $jual)
                        { ?>
                        <tr>
                          <td><?= $jual['idjual'] ?></td>
                          <td><?= $jual['tgljual'] ?></td>
                          <td><?= $jual['nmbarang']?></td>
                          <td><?= $jual['jmlbarang']?></td>
                          <td><?= $jual['totalharga'] ?></td>
                          <td><?= $jual['bayar'] ?></td>
                          <td><?= $jual['kembali'] ?></td>
                          <td><a class="button success shadowed" href="<?= $base_url.'jual/add/'.$jual['idjual']?>"><span class="mif-add-shopping-cart"></span></a>
                          <a class="button alert shadowed" href="<?= $base_url.'jual/delete/'.$jual['idjual'] ?>"onclick="return confirm('Yakin anda ingin menghapus?')"><span class="mif-bin"></span></a></td>   
                      </tr>
                      <?php
                    } ?>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>