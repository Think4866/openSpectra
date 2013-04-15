/// LOADED SET OPTIONS

 /// when you click an "x" icon under a loaded dataset, it removes the set from the viewport (put in a confirmation option later)

  $(document).on("click", "a.remove-loaded-set", function() {

  	 //retrieve the clicked set's ID number
     var which_set_load_window = $(this).attr('id').replace(/remove-loaded-set-/, '');
     //console.log(which_set_load_window);

     if (which_set_load_window == 1) {
     	$('.filldata1').empty();
     	$('.load-window-1').css('display', 'none');
     	 $('.set-1-empty').show();

     } else if (which_set_load_window == 2) {
     	$('.filldata2').empty();
     	$('.load-window-2').css('display', 'none');
     	 $('.set-2-empty').show();
     }

  });