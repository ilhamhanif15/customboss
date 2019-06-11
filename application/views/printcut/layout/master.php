<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('printcut/layout/header') ?>

<body>

  <?php $this->load->view('printcut/layout/navbar') ?>

  <?php $this->load->view('printcut/content/'.$pageContent) ?>

  <?php $this->load->view('printcut/layout/footer') ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <?php $this->load->view('printcut/layout/script') ?>

</body>
</html>
