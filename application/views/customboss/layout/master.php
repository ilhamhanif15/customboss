<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('customboss/layout/header') ?>

<body class="<?php if (isset($bodyClass)){echo $bodyClass;} ?>">
    <div class="main-body">	
        <div class="container">
            <div class="row">               
                <div class="main-page">

                    <?php $this->load->view('customboss/layout/aside') ?>

                    <?php $this->load->view('customboss/content/'.$pageContent) ?>

                </div> <!-- .main-page -->
            </div> <!-- .row -->           
            
            <?php $this->load->view('customboss/layout/footer') ?>

        </div> <!-- .container -->
    </div> <!-- .main-body -->


    <?php $this->load->view('customboss/layout/script') ?>

</body>
</html>
