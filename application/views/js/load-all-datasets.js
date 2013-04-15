 
//might need to specify the class/id of this a[data-toggle="tab"] group...
 $('a[data-toggle="tab"]').click(function(e) {
<<<<<<< HEAD
      console.log($(e.target).attr('href'));

      if ($(e.target).attr('href') == '#set-two') {
        console.log("recognizing set two");
=======

      if ($(e.target).attr('href') == '#set-two') {
>>>>>>> lots of work in load-into-viewport, when you click an eye icon from the right menu it loads the corresponding dataset into the viewport... in window-1 if it's empty, otherwise in window-2... still need to create popup or something if both are full asking user to select one to remove... also you can now click the x button on a loaded set and it closes the set... graphs will also load with their set info once we get the scripts working

        $.get("../models/load_datasets.php", { whoseSets: "yourSets" }, function(msg) {
          rowArray = $.parseJSON(msg);
          console.log(rowArray);
          $('#your-uploads-list').empty();
          for (var p=0; p<rowArray.length; p++) {
            var thisRow = rowArray[p];
            var set_id = thisRow['SET_ID'];
<<<<<<< HEAD
            $('#your-uploads-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="" href="#"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
=======
            $('#your-uploads-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="load-in-viewport" href="#view-set-' + (set_id) + '"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
>>>>>>> lots of work in load-into-viewport, when you click an eye icon from the right menu it loads the corresponding dataset into the viewport... in window-1 if it's empty, otherwise in window-2... still need to create popup or something if both are full asking user to select one to remove... also you can now click the x button on a loaded set and it closes the set... graphs will also load with their set info once we get the scripts working
           }
        });


      } else if ($(e.target).attr('href') == '#set-one') {
<<<<<<< HEAD
        console.log("recognizing set one");
       $.get("../models/load_datasets.php", { whoseSets: "allPublicSets" }, function(msg) {
          rowArray = $.parseJSON(msg);
          console.log(rowArray);
=======

       $.get("../models/load_datasets.php", { whoseSets: "allPublicSets" }, function(msg) {
          rowArray = $.parseJSON(msg);

>>>>>>> lots of work in load-into-viewport, when you click an eye icon from the right menu it loads the corresponding dataset into the viewport... in window-1 if it's empty, otherwise in window-2... still need to create popup or something if both are full asking user to select one to remove... also you can now click the x button on a loaded set and it closes the set... graphs will also load with their set info once we get the scripts working
          $('#public-sets-list').empty();
          for (var p=0; p<rowArray.length; p++) {
            var thisRow = rowArray[p];
            var set_id = thisRow['SET_ID'];
<<<<<<< HEAD
            $('#public-sets-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="" href="#"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-save"></i></a><a class="" href="#"><i class="icon-download-alt"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
=======
            $('#public-sets-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="load-in-viewport" href="#view-set-' + (set_id) + '"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-save"></i></a><a class="" href="#"><i class="icon-download-alt"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
>>>>>>> lots of work in load-into-viewport, when you click an eye icon from the right menu it loads the corresponding dataset into the viewport... in window-1 if it's empty, otherwise in window-2... still need to create popup or something if both are full asking user to select one to remove... also you can now click the x button on a loaded set and it closes the set... graphs will also load with their set info once we get the scripts working
          }
        });
      }

    });


 


