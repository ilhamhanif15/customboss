<script type="text/javascript" src="<?= base_url().'assetsPC/js/' ?>jquery.validate.min.js"></script>
<script type="text/javascript">

	//Cek Upload
	$("#customFile").on("change", function() {
		//init
		var cf = $("#customFile");
		var msg_wrong_ext = $('#wrong-ext');
		var allowedType = ['jpg','jpeg','png'];

		//Reset
		cf.removeClass('is-invalid');
		msg_wrong_ext.hide();

		//get Extension File Name
		var fileName = $(this).val().split("\\").pop();
		var ext = fileName.split(".").pop();

		//Check Extension
		if(allowedType.includes(ext.toLowerCase())){
			$(this).siblings(".custom-file-label").html(fileName);
			$('.form-lanjutan').slideDown(1000, function(){
				$('#form-nama').focus();
			});
		}else{
			$(this).siblings(".custom-file-label").html('Pilih File');
			$(this).val(null);
			cf.addClass('is-invalid');
			msg_wrong_ext.show();
		}
	});

	//Animate Scene Success
	function onSceneActivated(doc, e) {
	  var animation = bodymovin.loadAnimation({
	    container: doc.getElementById('success_animate'), // lottie is the name of the element in step 2
	    path: '<?= base_url().'assetsPC/animation_json/success_anim.json' ?>', // lottie-anim.json is the animation file name
	    renderer: 'svg'
	  });
	}

	onSceneActivated(document);

	//Fade Success Msg After Page all Rendered
	setTimeout(function(){
		$('.upload_success').fadeOut("slow");
	},2500);


	$('#upload-desain-sel').
    click(function(){
        var target = $('#upload-contain');
        if (target.length)
        {
            var top = target.offset().top;
            $('html,body').animate({scrollTop: top-90}, 1000);
            return false;
        }
    });

</script>