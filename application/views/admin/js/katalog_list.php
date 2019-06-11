<!-- Page level plugins -->
<script src="<?= base_url().'assetsAdmin/' ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url().'assetsAdmin/' ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script type="text/javascript">

$(document).ready(function() {

  $('.pop').on('click', function(e) {
    e.preventDefault();
    var urlGambar = $(this)[0].firstElementChild.dataset.img;
    $('.imagepreview').attr('src', urlGambar);
    $('#imagemodal').modal('show');
  });
  
  var table = $('#dataTable').DataTable( {
        "ordering": false,
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button>Click!</button>"
        } ]
    } );

  $('#dataTable tbody').on( 'click', 'button', function () {
	    var data = table.row( $(this).parents('tr') ).data();
	    alert( data[0] +"'s salary is: "+ data[ 5 ] );
	} );

});

</script>
