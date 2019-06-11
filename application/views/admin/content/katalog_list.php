<style type="text/css">
  .table > tbody > tr{
    color: #5a5c69;
  }
</style>
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">List Katalog</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Datatable Katalog</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Ukuran</th>
              <th>Jenis</th>
              <th>Warna</th>
              <th>Deskripsi</th>
              <th>Link Olshop</th>
              <th>Gambar</th>
              <th>Created</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($listKatalog->result() as $x){ ?>
              <tr>
                <td><?= $x->id ?></td>
                <td><?= $x->nama ?></td>
                <td><?= $x->harga ?></td>
                <td><?= $x->ukuran ?></td>
                <td><?= $x->jenis ?></td>
                <td><?= $x->warna ?></td>
                <td><?= $x->deskripsi ?></td>
                <td><?php 
                  foreach (explode(";",$x->link_os) as $c) {
                    if ($c != '' || $c != NULL){
                      $d = explode(",",strval($c));
                      echo '<a href="'.$d[0].'">'.$d[1].'</a>';
                    }
                  }
                 ?></td>
                <td>
                  <a href="#" class="pop">
                    <i class="fas fa-file-image" data-img="<?php echo base_url().'assetsPC/uploads/'.$x->gambar ?>" style="font-size: 40px;"></i>
                  </a>
                </td>
                <td><?= $x->created_at ?></td>
                <td></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<div class="modal fade" id="imagemodal" tabindex="-1" style="z-index: 9999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>