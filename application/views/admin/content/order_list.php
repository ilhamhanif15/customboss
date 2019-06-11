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
              <th>Kontak</th>
              <th>Gambar</th>
              <th>Catatan</th>
              <th>Created</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($listOrder->result() as $x){ ?>
              <tr>
                <td><?= $x->id ?></td>
                <td><?= $x->nama ?></td>
                <td><?= $x->kontak ?></td>
                <td>
                  <a href="#" class="pop">
                    <i class="fas fa-file-image" data-img="<?php echo base_url().'assetsPC/uploads/'.$x->file ?>" style="font-size: 40px;"></i>
                  </a>
                </td>
                <td><?= $x->catatan ?></td>
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