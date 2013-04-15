$(function() {
	$('#createAccount').ajaxForm({

		beforeSubmit: function() {
			jQuery('.errormsgs').empty();
			// had to put jQuery prefix because of conflicting library for the .modal controls
			//var datasetFilename = $('#datasetfilename').text();
			//var calibFilename = $('#calibfilename').text();
			var submitPrefix = jQuery("#prefix").val();
			var submitFname = jQuery("#fname").val();
			var submitLname = jQuery("#lname").val();
			var submitSuffix = jQuery("#suffix").val();
			var submitInstitution = jQuery("#institution").val();
			var submitEmail = jQuery("#email").val();
			var submitUname = jQuery("#unamenew").val();
			var submitPasswd = jQuery("#passwdnew").val();
			var submitConpasswd = jQuery("#conpasswdnew").val();
			var passwdError = false;
			var testerrors = false;
			//var submitPasswd = $("#passwd").val();
			//var submitConpasswd = $("#conpasswd").val();
			if (submitFname == '') {
				jQuery('#control-group-fname').append('<span class="errorCheck">This field is required.</span>');
				testerrors = true;
			} 
			if (submitLname == '') {
				jQuery('#control-group-lname').append('<span class="errorCheck">This field is required.</span>');
				testerrors = true;
			}
			if (submitEmail == '') {
				jQuery('#control-group-email').append('<span class="errorCheck">This field is required.</span>');
				testerrors = true;
			}
			if (submitUname == '') {
				jQuery('#control-group-uname').append('<span class="errorCheck">You must choose a username.</span>');
				testerrors = true;
			}
			//make sure passwords are entered and match
			if (submitPasswd == '') {
				jQuery('#control-group-passwd').append('<span class="errorCheck">Please enter a password.</span>');
				testerrors = true;
			} else if (submitConpasswd == '') {
				jQuery('#control-group-conpasswd').append('<span class="errorCheck">Please re-enter your password.</span>');
				testerrors = true;
			} else if (submitPasswd !== submitConpasswd) {
				jQuery('#control-group-conpasswd').append('<span class="errorCheck">Passwords do not match.</span>');
				testerrors = true;
			}
			//if any form errors, don't submit
			if (testerrors == true) {
				return false;
			}
		}, 
		dataType: 'json', 
		success: function(data) {
			jQuery.noConflict();
			if (data.username_available == 'false') {
				jQuery('.errormsgs').empty();
				jQuery('#control-group-uname').append('<span class="errorCheck">Sorry, this username already exists.  Please choose a different username.</span>');
			} else if (data.pass_uname !== '' && data.pass_passwd !== '') {
				jQuery('#myModalAccountCreated').modal('show');
				jQuery('#new_uname').attr("value", data.pass_uname);
				jQuery('#new_passwd').attr("value", data.pass_passwd);
				jQuery('#myModalCreateAccount').modal('hide');
			} else {
				//alert("both conditions are false...");
			}

		}

	});
});

