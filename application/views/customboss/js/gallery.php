<script type="application/javascript" src="<?= base_url().'assets/'?>js/imagesloaded.3.1.8.min.js"></script>
<script type="application/javascript" src="<?= base_url().'assets/'?>js/jquery.masonry.3.2.1.min.js"></script>
<script type="application/javascript" src="<?= base_url().'assets/'?>js/jquery.magnific-popup.min.js"></script>

<script>
    function init_masonry(){
      var $container = $('#content');

      $container.imagesLoaded( function(){
          $container.masonry({
            itemSelector: '.box',
            isAnimated: true
        });
      });
    }

    $(document).ready(function(){
        
        //Init jQuery Masonry layout
        init_masonry();

        // Magnific Popup
        $('.gallery-images-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
        });

        //Select menu onchange
        $("#collapsed-navbar").change(function () {
            window.location = $(this).val();
        });
    
    });
</script>