<style type="text/css">
  .title-c{
    background-color: #ffffffe6;
    border-radius: 70px;
  }

  .btn-circle{
    margin-top: 20px;
    height: 52px;
    border-radius: 80px;
    font-size: 24px;
  }

  .form-control:focus {
    border-color: #2eca6a;
    box-shadow: inset 0 1px 1px #2eca6a, 0 0 8px #2eca6a;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

  .form-lanjutan{
    display: none;
  }

  .custom-upload {
    padding: 1.1rem;
    border-radius: 70px;
    background-color: #1c7a40;
  }

  .custom-upload > .fa {
    font-size: xx-large;
    color: white;
  }

  .title-b {
    font-size:  xx-large;
    margin-left: 5px;
    margin-top: 5px;
    color: white;
  }

  .custom-upload-section {
    background-color: #1c7a40;
    padding-bottom: 4rem;
    padding-top: 4rem;
  }

  #form-upload > .form-group > small {
    color: #c8c8c8 !important;
  }

  .upload_success {
    position: fixed;
    z-index: 9999;
    background-color: #00000087;
    width: 100%;
    height: 100%;
  }

  .animate_f {
    height: inherit;
    width: 14rem;
    margin-left: auto;
    margin-right: auto;
  }

  .an_wrap {
    width: auto;
    height: auto;
    background-color: white;
    margin-top: 15vw;
    padding: 1.5rem;
  }

  .text-scs-upload {
    font-style: oblique;
    text-align: left;
  }

</style>

<?php if( $this->session->flashdata('success_msg_upload') !== NULL ) { ?>
<div class="upload_success">
  <div class="an_wrap row">
    <div class="col-md-3 col-sm-12 offset-md-2">
      <div id="success_animate" class="animate_f"></div>
    </div>
    <div class="col-md-7 col-sm-12 m-auto">
      <h2 class="text-scs-upload">Desain Berhasil Terkirim</h2>
      <small style="font-size: 100%;">Terima Kasih, desain anda akan kami buat. Anda akan dihubungi oleh kami dengan segera</small>
    </div>
  </div>
</div>
<?php } ?>

<!--/ Carousel Star /-->
<div class="intro intro-carousel">
  <div id="carousel" class="owl-carousel owl-theme">
    <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url().'assetsPC/'?>img/slide-1.jpg)">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Doral, Florida
                    <br> 78345</p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">204 </span> Mount
                    <br> Olive Road Two</h1>
                  <p class="intro-subtitle intro-price">
                    <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url().'assetsPC/'?>img/slide-2.jpg)">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Doral, Florida
                    <br> 78345</p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">204 </span> Rino
                    <br> Venda Road Five</h1>
                  <p class="intro-subtitle intro-price">
                    <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url().'assetsPC/'?>img/slide-3.jpg)">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Doral, Florida
                    <br> 78345</p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">204 </span> Alira
                    <br> Roan Road One</h1>
                  <p class="intro-subtitle intro-price">
                    <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Carousel end /-->

<!--/ Services Star /-->
<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Menyediakan</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-ticket"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Pilih Stikermu!</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              Berbagai macam <i>template</i> stiker yang tersedia, dan dapat di <i>custom</i> sendiri
            </p>
          </div>
          <div class="card-footer-c">
            <a href="./printcut/katalog" class="link-c link-icon">Selengkapnya
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-upload"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Upload Desainmu</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              Kamu bisa <i>Upload</i> desainmu dan pilih bahannya sendiri
            </p>
          </div>
          <div class="card-footer-c">
            <a href="#" id="upload-desain-sel" class="link-c link-icon">Selengkapnya
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-phone"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Request Stiker!</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              Kamu dapat melakukan <i>Request</i> stiker kepada team kami, biarkan team kami yang mendesain stikermu!
            </p>
          </div>
          <div class="card-footer-c">
            <a href="./printcut/kontak" class="link-c link-icon">Selengkapnya
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
<!--/ Services End /-->

<!--/ Property Star /-->
<section class="section-property section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Stiker Terbaru</h2>
          </div>
          <div class="title-link">
            <a href="./printcut/katalog">Lihat Katalog
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="property-carousel" class="owl-carousel owl-theme">
      <?php 
      foreach ($latestStiker as $x) {
        //Encrypt ID
        $enc_id = encrypt_url($x->id);
      ?>
      <div class="carousel-item-b">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="<?= base_url().'assetsPC/uploads/'.$x->gambar ?>" style="height: 450px;width: 350px;" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="<?= base_url().'printcut/katalog/'.$enc_id ?>"><?= $x->nama ?></a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">Rp. <?= $x->harga ?></span>
                </div>
                <a href="<?= base_url().'printcut/katalog/'.$enc_id ?>" class="link-a">Lihat Selengkapnya
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Ukuran</h4>
                    <span><?= $x->ukuran ?>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Jenis</h4>
                    <span><?= $x->jenis ?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
        }
      ?>
    </div>
  </div>
</section>
<!--/ Property End /-->

<!--/ Testimonials Star /-->
<section class="custom-upload-section section-testimonials section-t8 nav-arrow-a" id="upload-contain">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico custom-upload">
              <span class="fa fa-upload"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-b">Upload Desainmu</h2>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="container">
      <div class="testimonials-box foo">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="testimonials-content">
              <p class="testimonial-text" style="margin-top: 0px;">
                Buat Stikermu sendiri dengan upload desainmu sendiri dengan mudah. Pilih File Desainmu sendiri
                lalu upload dan isi data dirimu, akan kami hubungi secepatnya jika desain sudah siap !
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <form id="form-upload" method="post" enctype="multipart/form-data" action="./printcut/order-desain">
              <div class="custom-file form-group">
                <input type="file" class="custom-file-input form-control" id="customFile" name="file" accept="image/x-png,image/jpeg">
                <label class="custom-file-label" for="customFile">Pilih File</label>
                <small class="form-text text-muted">
                  *Hanya dapat melakukan upload File Gambar (.jpg .jpeg .png)
                </small>
                <div style="display: none;" class="invalid-feedback" id="wrong-ext">Ekstensi File tidak diperbolehkan, hanya dapat melakukan upload untuk file gambar (.jpg .jpeg .png)</div>
              </div>
              <div class="form-group form-lanjutan" style="margin-top: 10px;">
                <label style="color: white;">Selanjutnya: Isi Data Diri Anda<br/>Nama :</label>
                <input type="text" class="form-control" id="form-nama"
                  placeholder="Masukkan Nama Lengkap" required name="nama" >
              </div>
              <div class="form-group form-lanjutan">
                <label style="color: white;">Kontak :</label>
                <input type="text" class="form-control" id="form-kontak"
                  placeholder="Masukkan Kontak" required name="kontak" >
                <small class="form-text text-muted">
                  *Masukkan Kontak yang dapat dihubungi<br/>
                  Contoh: @infocustomboss (LINE), 08XXXXXXXX (WA), infocustomboss@gmail.com, dll
                </small>
              </div>
              <div class="form-group form-lanjutan">
                <label style="color: white;">Catatan :</label>
                <textarea id="form-catatan" class="form-control" placeholder="Beri Catatan Mengenai Desain atau Lainnya" name="catatan" cols="45"
                  rows="5"></textarea>
              </div>
              <div class="form-group form-lanjutan">
                <button type="submit" id="btnUpload" class="btn btn-outline-light form-control btn-circle"><i class="fa fa-upload"></i> Kirimkan Desainmu</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Testimonials End /-->

<!--/ footer Star /-->
<section class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">EstateAgency</h3>
          </div>
          <div class="w-body-a">
            <p class="w-text-a color-text-a">
              Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
              sed aute irure.
            </p>
          </div>
          <div class="w-footer-a">
            <ul class="list-unstyled">
              <li class="color-a">
                <span class="color-text-a">Phone .</span> contact@example.com</li>
              <li class="color-a">
                <span class="color-text-a">Email .</span> +54 356 945234</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">The Company</h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">International sites</h3>
          </div>
          <div class="w-body-a">
            <ul class="list-unstyled">
              <li class="item-list-a">
                <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
              </li>
              <li class="item-list-a">
                <i class="fa fa-angle-right"></i> <a href="#">China</a>
              </li>
              <li class="item-list-a">
                <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
              </li>
              <li class="item-list-a">
                <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
              </li>
              <li class="item-list-a">
                <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
              </li>
              <li class="item-list-a">
                <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>