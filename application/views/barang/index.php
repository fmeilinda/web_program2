<?php if ($this->session->flashdata('flash')): ?> 
<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
  <strong>Data Barang</strong> <?= $this->session->flashdata('flash'); ?> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
</div> 
<?php endif; ?>

<?php if (empty($barang)):?> 
  <div class="alert alert-danger" role="alert"> 
    Data Barang Ditak ditemukan... 
  </div>
  <?php endif; ?>
<div class="container">
    <div class="row-mt-3">
        <div class="colmd-6"><br>
            <a href="http://localhost/latihancodeigniter3/penjualan/barang/tambah/" class="btn btn-danger">Tambah Data Barang </a>
        </div>
</div>
<div class="row mt-3"> 
  <div class="col-md-6"> 
    <form action="" method="post"> 
      <div class="input-group"> 
        <input type="text" class="form-control" placeholder="Cari Data Barang..." name="keyword"> 
        <button class="btn btn-info" type="submit" >Cari</button> 
      </div> 
  </div>
</div><br>
    </form>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 bg-info">
                        <div class="card-header py-3 bg-dark">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
    <div class="card-body">
    <div class="table-responsive bg-white">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead bgcolor='yellow'>
    <th scope="col">No</th>
    <th scope="col">Kode Barang</th>
    <th scope="col">Nama Barang</th>
    <th scope="col">Harga</th>
    <th scope="col">Stock</th>
    <th scope="col">action</th>
</tr>
</thead>
<tbody>
    <tr><tr>
<?php  foreach( $barang as $brg ):?>
    <td><?= ++$start;?></td>
    <td><?= $brg['id_barang'];?></td>
    <td><?= $brg['nama_barang']; ?></td>
    <td><?= $brg['harga']; ?></td>
    <td><?= $brg['stok']; ?></td>
    <td><a href="http://localhost/latihancodeigniter3/penjualan/barang/detail/<?=$brg['id_barang'];?>" class="btn btn-primary" >Detail</a>
        <a href="http://localhost/latihancodeigniter3/penjualan/barang/ubah/<?=$brg['id_barang'];?>" class="btn btn-success">Ubah</a> 
        <a href="http://localhost/latihancodeigniter3/penjualan/barang/hapus/<?=$brg['id_barang'];?>" class="btn btn-danger" onclick= "return confirm ('Yakin akan dihapus?');">Hapus</a></td>
    </tr></tr>
    <?php endforeach ?>

    </tbody>
    </table>
    <?=$this->pagination->create_links();?>
    </div>