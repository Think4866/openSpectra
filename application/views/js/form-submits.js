// Datepicker
  $(function() {
      $('#dp1').datepicker()
        .on('changeDate', function(ev) {
          $('#dp1').datepicker('hide');
        })
  });

$(function() {
	$('#uploadDataset').ajaxForm({
		beforeSubmit: function() {
			$('.fileuploaderrors').empty();
			$('#control-group-material').empty();
			var datasetFilename = $('#datasetfilename').text();
			var calibFilename = $('#calibfilename').text();
			var submitMaterial = $("#material").val();
			var submitFormula = $("#formula").val();
			var submitIsotope = $("input[name='isotope']:checked").val();
			var submitPublic = $("#public").val();
			var submitDate = $("#dp1").val();
			var submitDescription = $("#description").val();
			if (datasetFilename == '') {
				$('.fileuploaderrors').append('<span class="errorCheck">You must choose a dataset to upload.</span><br />');
			} 
			if (calibFilename == '') {
				$('.fileuploaderrors').append('<span class="errorCheck">You did not select a calibration file!  If you do not upload a calibration set, your dataset will be flagged as "Not Calibrated".</span>');
			}
			if (submitMaterial == '') {
				$('#control-group-material').prepend('<span class="errorCheck">You must list a compound or material.</span>');
			}
			if ((datasetFilename == '' ) || (submitMaterial == '')) {
				return false;
			}
		},
		success: function(data) {
			jQuery.noConflict();
			$('#myModaluploadConfirm').modal('show');
			$('#myModalupload').modal('hide');
		}
		//var fname = $("#fname").val();

	});
})
