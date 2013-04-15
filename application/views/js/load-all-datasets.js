 
//might need to specify the class/id of this a[data-toggle="tab"] group...
 $('a[data-toggle="tab"]').click(function(e) {


      if ($(e.target).attr('href') == '#set-two') {

        $.get("../models/load_datasets.php", { whoseSets: "yourSets" }, function(msg) {
          rowArray = $.parseJSON(msg);
          console.log(rowArray);
          $('#your-uploads-list').empty();
          for (var p=0; p<rowArray.length; p++) {
            var thisRow = rowArray[p];
            var set_id = thisRow['SET_ID'];
            $('#your-uploads-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="load-in-viewport" href="#view-set-' + (set_id) + '"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);

           }
        });


      } else if ($(e.target).attr('href') == '#set-one') {

       $.get("../models/load_datasets.php", { whoseSets: "allPublicSets" }, function(msg) {
          rowArray = $.parseJSON(msg);

          $('#public-sets-list').empty();
          for (var p=0; p<rowArray.length; p++) {
            var thisRow = rowArray[p];
            var set_id = thisRow['SET_ID'];
            $('#public-sets-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="load-in-viewport" href="#view-set-' + (set_id) + '"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-save"></i></a><a class="" href="#"><i class="icon-download-alt"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
          }
        });
      }

    });


 


