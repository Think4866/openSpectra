/// LOADING INTO THE VIEWPORT

 /// when you click an "eye" icon under a dataset, load it in the viewport if possible

  $(document).on("click", "a.load-in-viewport", function() {

      //retrieve the clicked set's ID number
      var thisSetID = $(this).attr('href').replace(/#view-set-/, '');

      //CONDITION: if the comparison window is visible, generate prompt to confirm leaving the comparison window
      if ($('#comparison_window').css('display') !== 'none') {
        alert('the comparison window is open, so a prompt will appear confirming you want to leave the comparison window in order to load a new dataset?');
      }
      //CONDITION: if neither of the 2 #set_load_windows is available, generate a prompt asking which #set_load_window to replace
      else if(($('.load-window-1').css('display') !== 'none') && ($('.load-window-2').css('display') !== 'none')) {
        //insert code here to generate a prompt asking which #set_load_window to replace
        console.log('neither of the #set_load_windows is available, so a prompt will appear asking which one to replace with the new dataset!');

      } else {
          // one of the 2 #set_load_windows is available! so let's get the set...
          $.get("../models/load_this_dataset.php", { whichSet: thisSetID }, function(msg) {
            
            var thisSetDetails = $.parseJSON(msg);

            //format incoming data
            var userPrefix = ' ';
            var userSuffix = ' ';
            var calibrationIncluded = 'Not included';
            var isotopeValue = "1";
            var descriptionContent = ' (none available)';
            var muglFileURL = thisSetDetails['MUGL_URL'];

            if(thisSetDetails['PREFIX'] !== null && thisSetDetails['PREFIX'] !== '') {
                userPrefix = thisSetDetails['PREFIX'];
            }
            if(thisSetDetails['SUFFIX'] !== null && thisSetDetails['SUFFIX'] !== '') {
                userSuffix = thisSetDetails['SUFFIX'];
            }
            if(thisSetDetails['ORIGCALIB_URL'] !== null && thisSetDetails['ORIGCALIB_URL'] !== '') {
                calibrationIncluded = 'Included';
            }
            if(thisSetDetails['ISOTOPE'] == "1") {
                isotopeValue = 'Normal';
            } else if(thisSetDetails['ISOTOPE'] == "0") {
              isotopeValue = 'Non-normal';
            } else if(thisSetDetails['ISOTOPE'] == "na") {
              isotopeValue = 'Not applicable';
            }
            if(thisSetDetails['DESCRIPTION'] !== null && thisSetDetails['DESCRIPTION'] !== '') {
                descriptionContent = thisSetDetails['DESCRIPTION'];
            }

          // CONDITION: load new dataset in #set_load_window-1 if the start screen is displayed (having just logged in) or if the set-1-empty is displayed
          if(($('#start_screen_window').css('display') !== 'none') || ($('.set-1-empty').css('display') !== 'none')) {
              //if this is the first time loading data, show the empty spot for #set_load_window-2
              if($('#set_load_window-2').css('display') == 'none') {
                $('#set_load_window-2').show();
                $('.set-2-empty').show();
              }
          
              $('#start_screen_window').css('display', 'none');
              $('.set-1-empty').css('display', 'none');
              $('#set_load_window-1').show();
              $('.load-window-1').show();

              //append the set ID onto the file-title h3 heading
              $('#file-title-1').append(thisSetID);

              //print the user's name including prefix and suffix if applicable
              $('.filldata1.info-data-name').empty().append(userPrefix+" "+thisSetDetails['FIRSTNAME']+" "+thisSetDetails['LASTNAME']+" "+userSuffix);

              $('.filldata1.info-data-material').empty().append(thisSetDetails['MATERIAL']);
              $('.filldata1.info-data-date').empty().append(thisSetDetails['DATE_COLLECTED']);
              $('.filldata1.info-data-institution').empty().append(thisSetDetails['INSTITUTION']);

              //indicate if a calibration set was included in the upload of this set
              $('.filldata1.info-data-calibration').empty().append(calibrationIncluded);

              //indicate the normal, non-normal or n/a status of the isotope
              $('.filldata1.info-data-isotope').empty().append(isotopeValue);

              $('.filldata1.info-data-formula').empty().append(thisSetDetails['MOLECULARFORMULA']);

              //check if initial uploader included a description
              $('.filldata1.description-content').empty();
              $('.filldata1.description-content').append(descriptionContent);

              //append class, id and href-specific info to set options icon buttons
              //$('a#remove-loaded-set-1').attr('href').replace(/#/, '');

              if (muglFileURL !== null && muglFileURL !== '' && muglFileURL !== undefined) {
                $ = window.multigraph.jQuery;
                $('#graph-window-1').multigraph({ 'mugl' : muglFileURL, 'width' : '100%', 'height' : '100%' });
                console.log("muglFileURL = "+muglFileURL);
                //console.log('This copy of Multigraph uses JQuery version ' + $().jquery);
              } else {
                $('#graph-window-1').append('<p> [ no graph available ]</p>');
              }
              


              console.log('#start_screen_window was displayed, or #set_load_window-1 had set-1-empty child, so we added the set '+thisSetID+' in #set_load_window-1!');
          }

              // CONDITION: load new dataset in #set_load_window-2 if .load-window-1 is displayed and .set-2-empty is also displayed
          else if(($('.load-window-1').css('display') !== 'none') && ($('.set-2-empty').css('display') !== 'none')) {

              $('.set-2-empty').css('display', 'none');
              $('.load-window-2').show();

              //append the set ID onto the file-title h3 heading
              $('#file-title-2').append(thisSetID);

              //print the user's name including prefix and suffix if applicable
              $('.filldata2.info-data-name').empty().append(userPrefix+" "+thisSetDetails['FIRSTNAME']+" "+thisSetDetails['LASTNAME']+" "+userSuffix);

              $('.filldata2.info-data-material').empty().append(thisSetDetails['MATERIAL']);
              $('.filldata2.info-data-date').empty().append(thisSetDetails['DATE_COLLECTED']);
              $('.filldata2.info-data-institution').empty().append(thisSetDetails['INSTITUTION']);

              //indicate if a calibration set was included in the upload of this set
              $('.filldata2.info-data-calibration').empty().append(calibrationIncluded);

              //indicate the normal, non-normal or n/a status of the isotope
              $('.filldata2.info-data-isotope').empty().append(isotopeValue);

              $('.filldata2.info-data-formula').empty().append(thisSetDetails['MOLECULARFORMULA']);

              //check if initial uploader included a description
              $('.filldata2.description-content').empty();
              $('.filldata2.description-content').append(descriptionContent);

              if (muglFileURL !== null && muglFileURL !== '' && muglFileURL !== undefined) {
                $ = window.multigraph.jQuery;
                $('#graph-window-2').multigraph({ 'mugl' : muglFileURL, 'width' : '100%', 'height' : '100%' });
                console.log("muglFileURL = "+muglFileURL);
              } else {
                $('#graph-window-2').append('<p> [ no graph available ]</p>');
              }

             console.log('#set_load_window-1 had a dataset already, and #set_load_window-2 was empty, so we loaded the new set '+thisSetID+' in #set_load_window-2!');
          }

        }); //end ajax call to load_this_dataset

      }

    }); //end (document).on("click") function for loading into viewport


  


// call jRespond and add breakpoints
    var jRes = jRespond([
        {
            label: 'handheld',
            enter: 0,
            exit: 767
        },{
            label: 'tablet',
            enter: 768,
            exit: 979
        },{
            label: 'laptop',
            enter: 980,
            exit: 1199
        },{
            label: 'desktop',
            enter: 1200,
            exit: 10000
        }
    ]);

    // register enter and exit functions for multiple breakpoints
    jRes.addFunc({
        breakpoint: 'handheld',
        enter: function() {
          console.log('entered handheld');
          $('canvas').width('100%').height('100%');
        },
        exit: function() {
        }
    });

    jRes.addFunc({
        breakpoint: 'tablet',
        enter: function() {
          console.log('entered tablet');
          $('canvas').width('100%').height('100%');
        },
        exit: function() {
        }
    });

    jRes.addFunc({
        breakpoint: 'laptop',
        enter: function() {
          console.log('entered laptop');
          //$('canvas').remove();
          $('canvas').width('100%').height('100%');
        },
        exit: function() {
        }
    });

    jRes.addFunc({
        breakpoint: 'desktop',
        enter: function() {
          console.log('entered desktop');
          $('canvas').width('100%').height('100%');
        },
        exit: function() {
        }
    });



 ///////////////////////////