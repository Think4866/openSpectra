

// Datepicker
  	$(function() {
      jQuery('#date_collected').datepicker()
        .on('changeDate', function(ev) {
          jQuery('#date_collected').datepicker('hide');
        })
 	 });


//$(function() {
	$(function() {
		jQuery('#uploadDataset').ajaxForm({
			beforeSubmit: function() {
				jQuery('.fileuploaderrors').empty();
				jQuery('#control-group-material').empty();
				var datasetFilename = jQuery('#datasetfilename').text();
				var calibFilename = jQuery('#calibfilename').text();
				var submitMaterial = jQuery("#material").val();
				var submitFormula = jQuery("#formula").val();
				var submitIsotope = jQuery("input[name='isotope']:checked").val();
				var submitPublic = jQuery("#public").val();
				var submitDate = jQuery("#date_collected").val();
				var submitDescription = jQuery("#description").val();
				if (datasetFilename == '') {
					jQuery('.fileuploaderrors').append('<span class="errorCheck">You must choose a dataset to upload.</span><br />');
				} 
				if (calibFilename == '') {
					jQuery('.fileuploaderrors').append('<span class="errorCheck">You did not select a calibration file!  If you do not upload a calibration set, your dataset will be flagged as "Not Calibrated".</span>');
				}
				if (submitMaterial == '') {
					jQuery('#control-group-material').prepend('<span class="errorCheck">You must list a compound or material.</span>');
				}
				if ((datasetFilename == '' ) || (submitMaterial == '')) {
					return false;
				}
			},
			success: function() {
				jQuery('#uploadDataset').clearForm();
				$("#myModalupload").modal('hide'); 
				$("#myModaluploadConfirm").modal('show'); 
			}
		});
	});

/*
 $(document).on("click", ".closeCustomizedModal", function() {
 		jQuery('.customizedModal').removeClass('in');
		jQuery('.customizedModal').attr('aria-hidden', true);
		jQuery('.customizedModal').css('display', 'none');
		jQuery('.modal-backdrop').remove();
 });
*/

