<style type="text/css">
  .title-c{
    background-color: white;
  }

  .list-kanan{
    list-style: none;
  }
</style>
<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"><?= $stiker->nama ?></h1>
          <span class="color-text-a"><?= $stiker->jenis ?></span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/customboss/printcut">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="./">Katalog</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <?= $stiker->nama ?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<section class="property-single nav-arrow-b">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
          <?php
            foreach (explode(";",$stiker->highlight) as $c) {
              if($c != Null){
          ?>
          
            <div class="carousel-item-b">
              <img src="<?= base_url().'assetsPC/uploads/'.$c ?>" style="max-height: 500px;" alt="">
            </div>

        <?php 
              } 
            } 
        ?>
        </div>
        <div class="row justify-content-between">
          <div class="col-md-5 col-lg-4">
            <div class="property-price d-flex justify-content-center foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="ion-money">Rp</span>
                </div>
                <div class="card-title-c align-self-center">
                  <h5 class="title-c"><?= $stiker->harga ?></h5>
                </div>
              </div>
            </div>
            <div class="property-summary">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d section-t4">
                    <h3 class="title-d">Rincian</h3>
                  </div>
                </div>
              </div>
              <div class="summary-list">
                <ul class="list">
                  <li class="d-flex justify-content-between">
                    <strong>Nama :</strong>
                    <span><?= $stiker->nama ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Ukuran :</strong>
                    <span><?= $stiker->ukuran ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Jenis :</strong>
                    <span><?= $stiker->jenis ?></span>
                  </li>
                  <li class="list-kanan justify-content-between">
                    <strong>Warna Tersedia :</strong>
                    <br/>
                    <span><?= $stiker->warna ?></span>
                  </li>
                  <li class="list-kanan justify-content-between">
                    <strong>Link :</strong><br/>
                    <span>
                      <?php
                        foreach (explode(";",$stiker->link_os) as $c) {
                          if ($c != '' || $c != NULL){
                            $d = explode(",",strval($c));
                            echo '<a href="'.$d[0].'">'.$d[1].'</a>';
                          }
                        }
                      ?>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-7 section-md-t3">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Deskripsi</h3>
                </div>
              </div>
            </div>
            <div class="property-description">
              <p class="description color-text-a">
                <?= $stiker->deskripsi ?>
              </p>
              <!-- <p class="description color-text-a no-margin">
                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                malesuada. Quisque velit nisi,
                pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
              </p> -->
            </div>
            <!-- <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Amenities</h3>
                </div>
              </div>
            </div>
            <div class="amenities-list color-text-a">
              <ul class="list-a no-margin">
                <li>Balcony</li>
                <li>Outdoor Kitchen</li>
                <li>Cable Tv</li>
                <li>Deck</li>
                <li>Tennis Courts</li>
                <li>Internet</li>
                <li>Parking</li>
                <li>Sun Room</li>
                <li>Concrete Flooring</li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
      <!-- <div class="col-md-10 offset-md-1">
        <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
              aria-controls="pills-video" aria-selected="true">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
              aria-selected="false">Floor Plans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
              aria-selected="false">Ubication</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
            <iframe width="100%" height="460" src="https://www.youtube.com/embed/HvGql8HwOIM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
          </div>
          <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
            <img src="<?= base_url().'assetsPC/' ?>img/plan2.jpg" alt="" class="img-fluid">
          </div>
          <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
              width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div> -->
      <div class="col-md-12">
        <div class="row section-t3">
          <div class="col-sm-12">
            <div class="title-box-d">
              <h3 class="title-d">Kontak Pemesanan</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-md-6 col-lg-4">
            <img src="<?= base_url().'assetsPC/' ?>img/agent-4.jpg" alt="" class="img-fluid">
          </div> -->
          <div class="col-md-12 col-lg-6">
            <div class="property-agent">
              <h4 class="title-agent">Suwaldi Mardana</h4>
              <p class="color-text-a">
                Lakukan pemesanan dengan mengubungi kontak kami berikut ini, atau lakukan dengan klik tombol berikut ini.
              </p>
              <ul class="list-unstyled">
                <li class="d-flex justify-content-between">
                  <strong>Phone:</strong>
                  <span class="color-text-a">(222) 4568932</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Mobile:</strong>
                  <span class="color-text-a">777 287 378 737</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Email:</strong>
                  <span class="color-text-a">annabella@example.com</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Skype:</strong>
                  <span class="color-text-a">Annabela.ge</span>
                </li>
              </ul>
              <div class="socials-a">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="property-contact">
              <button class="btn btn-success w-100" id="btn-useEmail">Pesan Menggunakan Email</button>
              <hr/>
              <button class="btn btn-success w-100" id="btn-useWA">Pesan Menggunakan Whatsapp</button>
              <hr/>
              <form class="form-a" id="useEmail" style="display: none;">
                <div class="row">
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                        placeholder="Name *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                        placeholder="Email *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                        rows="8" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Property Single End /-->

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