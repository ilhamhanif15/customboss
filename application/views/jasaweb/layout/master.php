<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('jasaweb/layout/header') ?>

<body>

  <?php $this->load->view('jasaweb/layout/navbar') ?>

  <?php $this->load->view('jasaweb/content/'.$pageContent) ?>

  <?php $this->load->view('jasaweb/layout/footer') ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <?php $this->load->view('jasaweb/layout/script') ?>

</body>
</html>
