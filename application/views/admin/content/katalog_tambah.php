<style type="text/css">
  .table > tbody > tr{
    color: #5a5c69;
  }
</style>
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tambah Katalog Baru</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Katalog Stiker</h6>
    </div>
    <div class="card-body">
      <form method="post" action="<?= base_url().'admin/katalog/tambah/proses' ?>" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama">
        </div>
        <div class="form-group">
          <label for="ukuran">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter harga">
          <small id="emailHelp" class="form-text text-muted">Tulis nominalnya saja</small>
        </div>
        <div class="form-group">
          <label for="ukuran">Ukuran</label>
          <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Enter ukuran">
        </div>
        <div class="form-group">
          <label for="jenis">Jenis</label>
          <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Enter jenis">
        </div>
        <div class="form-group">
          <label for="warna">Warna</label>
          <input type="text" class="form-control" id="warna" name="warna" placeholder="Enter warna">
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="deskripsi">Link Online Shop</label>
          <textarea class="form-control" id="deskripsi" rows="3" name="link_os"></textarea>
          <small id="emailHelp" class="form-text text-muted">
            Format nulis link:<br/>
            www.linkolshop.com/barang1,Nama Online Shop;<br/>
            Contoh:<br/>
            www.tokopedia.com/user1/barang1,Tokopedia;<br/>
            www.shopee.com/user1/barang1,Shopee;<br/>
            pake tanda ; buat pemisah antar link jika link lebih dari 1
          </small>
        </div>
        <div class="form-group">
          <label for="gambar">Upload Gambar Thumbnail</label>
          <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>
        <div class="form-group">
          <label for="highlight_1">Upload Gambar Highlight 1</label>
          <input type="file" class="form-control-file" id="highlight_1" name="highlight_1">
        </div>
        <div class="form-group">
          <label for="highlight_2">Upload Gambar Highlight 2</label>
          <input type="file" class="form-control-file" id="highlight_2" name="highlight_2">
        </div>
        <div class="form-group">
          <label for="highlight_3">Upload Gambar Highlight 3</label>
          <input type="file" class="form-control-file" id="highlight_3" name="highlight_3">
        </div>
        <button type="submit" class="btn btn-primary float-right">Tambah</button>
      </form>
    </div>
  </div>

</div>