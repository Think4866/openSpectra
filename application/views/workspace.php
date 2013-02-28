<?php 

require_once('../models/headerLoggedIn.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>Workspace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <!-- Le styles -->

    <link href="css/bootstrap.css" rel="stylesheet"/>  
    <style type="text/css">
      body {
        /*padding-top: 40px;*/
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
     <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
     <link href="css/bootstrap-fileupload.min.css" rel="stylesheet"/>
     <link href="css/styles.css" rel="stylesheet"/>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png"/>
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"/>
                                   <link rel="shortcut icon" href="ico/favicon.png"/>


  </head>

  <body>

    <!-- topbar starts -->
    <div class="navbar">
      <div class="navbar-inner my-navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">

              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user"></i><span class="hidden-phone"> Welcome, <?php echo $CC_USER_NAME; ?></span>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li class="divider"></li>
                <li><a href="../models/logout.php">Logout</a></li>
              </ul>
         
            </div><!-- user dropdown ends -->
            <div class="top-nav nav-collapse">
              <ul class="nav">
                <li><a href="#">SpectraView</a></li>
                <li class="active"><a href="#" >Workspace</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div><!--/.nav-collapse -->
            </div>
            </div>
      </div>
  <!-- topbar ends -->

    <div class="container-fluid my-container-fluid">
      <div class="row-fluid">
        
        <div class="span2">
          <div class="well sidebar-nav sidebar-left">
            
            <ul class="nav nav-list left-navigation">   
              <!-- Button to trigger upload modal -->
              <li><a href="#myModalupload" role="button" class="my-upload-btn" data-toggle="modal">Upload</a></li>

              <!-- Button to trigger notepad modal -->
              <li><a href="#myModalnotepad" role="button" class="my-upload-btn" data-toggle="modal">Notepad</a></li>
            </ul>

            <div class="accordion" id="accordion2">
              <div class="accordion-group sortable">
                <div class="accordion-heading">
                  <a rel="tooltip" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    Saved Data Sets
                  </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <ul class="nav nav-list left-navigation">           
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Two</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>


                    </ul>
                  </div>
                </div>
              </div><!--end accordion group1 -->

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                    Saved Comparisons
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <ul class="nav nav-list left-navigation">           
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Two</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>

                    </ul>
                  </div>
                </div>
              </div><!--end accordion group2 -->

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                    Favorites
                  </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <ul class="nav nav-list left-navigation">           
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Two</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>


                    </ul>
                  </div>
                </div>
              </div><!--end accordion group3 -->
              
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                    History
                  </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <ul class="nav nav-list left-navigation">           
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Two</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>

                    </ul>
                  </div>
                </div>
              </div><!--end accordion group4 -->

            </div><!--end left bar accordion -->
          </div><!--/.well -->
        </div><!--/span 2-->

        <div class="span8">
          
          <div id="viewport" class="viewport-display">
           
          <div id="set_load_window" class="set-view span12">
            <div id="graph-window" class="graph span6">

              <!--   load graph here -->

            </div>
            <div id="set-info" class="info span6">

              <div id="display-info" class="info-display span12">
                <section class="info-content span10 offset2">
                    <ul class="set-info span6">
                      <li>name</li>
                      <li>material</li>
                      <li>date uploaded</li>
                      <li>institution</li>
                    </ul>
                    <ul class="set-info-other span6">
                      <li>callibration</li>
                      <li>isotope</li>
                      <li>molecular formula</li>
                      <li>other info</li>
                    </ul>
                </section>
              </div>

              <div id="set-tools" class="set_tools span12">
                  <ul class="row-one-tools pull-right">
                    <li><a href="#"><i class="icon-pencil"></i></a></li>
                    <li><a href="#"><i class="icon-star-empty"></i></a></li>
                    <li><a href="#"><i class="icon-folder-close"></i></a></li>
                    <li><a href="#"><i class="icon-remove"></i></a></li>
                    <li><a href="#"><i class="icon-download-alt"></i></a></li>
                   
                  </ul>
            <!--       <ul class="row-two-tools span6">
                    
                    <li><a href="#"><i class="icon-info-sign"></i></a></li>
                  
                  </ul> -->

              </div>  <!-- end tools -->

            </div>  <!--  end info -->

          </div>  <!-- end set view -->

            <div class="set-2-empty span12">
              <section class="load-another span12">
                <div class="btn-toolbar pagination-centered">
                  <div class="btn-group">
                    <label>Add Another Set</label>
                    <a href="#" class="btn"><i class="icon-folder-open"></i> <strong>Choose</strong></a>
                    <a href="#" class="btn"><i class="icon-eye-open"></i> <strong>Browse</strong></a>
                    <a href="#" class="btn"><i class="icon-arrow-up"></i> <strong>Upload</strong></a>
                  </div>
                </div>
              </section>
            </div>  <!-- end set two empty -->

           <!--  end set view content -->

          </div>   <!-- end viewport display -->

          <div id="toolBar-main" class="tool-bar-main">
            <ul class="nav nav-pills tool-bar">
                <li ><a href="#"><i class="icon-folder-open"></i> <span>Save</span></a></li>
                <li ><a href="#" ><i class="icon-play"></i> <span>Compare</span></a></li>
                <li ><a href="#" ><i class="icon-refresh"></i> <span>Refresh</span></a></li>
            </ul>
          </div>
         
        </div><!--/span 8 viewport-->

        <!-- begin right sidebar -->

        
        <div class="control-group span2">
          <label class="control-label" for="inputIcon"></label>
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-search"></i></span>
              <input class="span9 search-bar" id="inputIcon" type="text"/>
            </div>
          </div>
        </div>
        <div class="span2 sidebar-right">

          <div class="well sidebar-nav">
            <p class="browse-title"><i class="icon-eye-open"> </i>Browse Sets</p>
             <div class="btn-group filter-btn">
                <button class="btn btn-small filterMain">Filter Results</button>
                <button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>

                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-user"></i> Name</a></li>
                  <li><a href="#"><i class="icon-pencil"></i> Material</a></li>
                  <li><a href="#"><i class="icon-home"></i> Institution</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="icon-pencil"></i> Other</a></li>
                </ul>    
              </div> <!-- end filter dropup  -->

              <ul class="nav nav-tabs my-browse-tabs" id="allSetsTabs">
                <li><a href="#set-one" id="public-sets-title" data-toggle="tab">Public Sets</a></li>
                <li><a href="#set-two" id="your-uploads-title" data-toggle="tab">Uploads</a></li>
              </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane" id="set-one">
                    <ul id="public-sets-list" class="nav nav-list set-list">

                      <!--
                      <li><a href="#" data-toggle="collapse" data-target="#set-options-id1">Data Set One</a></li>                      
                        <ul id="set-options-id1" class="collapse"> 
                              <li class="btn-group">
                                <a class="" href="#" title="view"><i class="icon-eye-open"></i></a>
                                <a class="" href="#" title="save"><i class="icon-folder-close"></i></a>
                                <a class="" href="#" title="download"><i class="icon-download-alt"></i></a>
                                <a class="" href="#" title="favorite"><i class="icon-star-empty"></i></a>
                              </li>
                        </ul> 
                      <li><a href="#" data-toggle="collapse" data-target="#set-options-id2">Data Set Two</a></li>                      
                        <ul id="set-options-id2" class="collapse"> 
                              <li class="btn-group">
                                <a class="" href="#"><i class="icon-eye-open"></i></a>
                                <a class="" href="#"><i class="icon-folder-close"></i></a>
                                <a class="" href="#"><i class="icon-download-alt"></i></a>
                                <a class="" href="#"><i class="icon-star-empty"></i></a>
                              </li>
                        </ul> 
                      <li><a href="#" data-toggle="collapse" data-target="#set-options-id3">Data Set Three</a></li>                      
                        <ul id="set-options-id3" class="collapse"> 
                              <li class="btn-group">
                                <a class="" href="#"><i class="icon-eye-open"></i></a>
                                <a class="" href="#"><i class="icon-folder-close"></i></a>
                                <a class="" href="#"><i class="icon-download-alt"></i></a>
                                <a class="" href="#"><i class="icon-star-empty"></i></a>
                              </li>
                        </ul>  
                      -->

                    </ul>  <!-- end set list one -->
                    
                  </div><!--end tab set one -->

                  <div class="tab-pane" id="set-two">
                    <ul id="your-uploads-list" class="nav nav-list set-list">

                      <!--
                      <li><a href="#" data-toggle="collapse" data-target="#set-options-id4"><span class="dataSetTitle"></span></a></li>                      
                        <ul id="set-options-id4" class="collapse"> 
                              <li class="btn-group">
                                <a class="" href="#"><i class="icon-eye-open"></i></a>
                                <a class="" href="#"><i class="icon-folder-close"></i></a>
                                <a class="" href="#"><i class="icon-download-alt"></i></a>
                                <a class="" href="#"><i class="icon-star-empty"></i></a>
                              </li>
                        </ul>  

                      <li><a href="#" data-toggle="collapse" data-target="#set-options-id5">Data Set Two</a></li>                      
                        <ul id="set-options-id5" class="collapse"> 
                             <li class="btn-group">
                                <a class="" href="#"><i class="icon-eye-open"></i></a>
                                <a class="" href="#"><i class="icon-folder-close"></i></a>
                                <a class="" href="#"><i class="icon-download-alt"></i></a>
                                <a class="" href="#"><i class="icon-star-empty"></i></a>
                              </li>
                        </ul>  

                      <li><a href="#" data-toggle="collapse" data-target="#set-options-id6">Data Set Three</a></li>                      
                        <ul id="set-options-id6" class="collapse"> 
                              <li class="btn-group">
                                <a class="" href="#"><i class="icon-eye-open"></i></a>
                                <a class="" href="#"><i class="icon-folder-close"></i></a>
                                <a class="" href="#"><i class="icon-download-alt"></i></a>
                                <a class="" href="#"><i class="icon-star-empty"></i></a>
                              </li>
                        </ul>  
                      -->

                    </ul>  <!-- end set list two -->
                  </div><!--end tab set two -->
                </div><!--end tab content -->

          </div><!--/.well -->
          
        </div><!--/span-->
      </div><!--/row-->

            <hr />

      <!-- Modal Upload -->
      <div id="myModalupload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <button type="button" class="close my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-body my-modal-body">
          <form id="signup" class="form-horizontal" method="post" action="">
            <h5 class="form-signin-heading">Upload Data</h5>
            
            <div class="control-group">
                  <label class="control-label">Username</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-xlarge" id="fname" name="fname" placeholder="<?php echo $USER_USERNAME; ?>" />
                </div>
              </div>
            </div>

            <div class="control-group ">
                  <label class="control-label">Compound / Material</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                  <input type="text" class="input-xlarge" id="material" name="material" placeholder="Material"/>
                </div>
              </div>
            </div>

            <div class="control-group ">
                  <label class="control-label">Molecular Formula</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                  <input type="text" class="input-xlarge" id="formula" name="formula" placeholder="Formula"/>
                  </div>
              </div>
            </div>

             <div class="control-group ">
                  <label class="control-label">Check all that apply</label>
                <div class="controls">
                  <label class="radio">
                    <input type="radio" value=""/>
                    Normal Isotope
                  </label>
                  <label class="radio">
                    <input type="radio" value=""/>
                    Non-normal Isotope
                  </label>
                  <label class="radio">
                    <input type="radio" value=""/>
                    N/A
                  </label>
                </div>
              </div>

              <div class="control-group ">
                  <label class="control-label">Keep this data private</label>
                <div class="controls">
                  <label class="checkbox">
                    <input type="checkbox" value=""/>
                    <span class="small-text">(sets are public by default and can be made private or public at any time)</span>
                  </label>
                </div>
              </div>

            <div class="control-group ">
                  <label class="control-label">Date Collected</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-calendar"></i></span>
                  <input type="text" class="input-medium" id="calendar" name="calendar" placeholder="mm/dd/yyyy"/>
                  </div>
              </div>
            </div>

            <div class="control-group ">
                  <label class="control-label">Add a description</label>
              <div class="controls">
                  <div class="description-form">
                    <form class="form-inline">
                      <textarea rows="3">
                      </textarea>
                    </form>
                    
                  </div>
              </div>
            </div>

            <div class="fileupload fileupload-new" data-provides="fileupload">
              <span class="btn btn-large btn-file"><span class="fileupload-new">Upload Data Set</span><span class="fileupload-exists">Change</span><input type="file"/></span>
              <span class="fileupload-preview"></span>
              <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>

            <div class="fileupload fileupload-new" data-provides="fileupload">
              <span class="btn btn-small btn-file"><span class="fileupload-new">Upload Callibration Data</span><span class="fileupload-exists">Change</span><input type="file"/></span>
              <span class="fileupload-preview"></span>
              <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>

            <div class="upload_submit">
                <button id="upload-submit" type="submit" class="btn btn-file">Submit</button>
            </div>

          </form>
        </div>
      </div>


      <!-- Modal Notepad -->
      <div id="myModalnotepad" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Modal header</h3>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary">Save changes</button>
        </div>
      </div>
        

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <script src="js/bootstrap-fileupload.js"></script>
    <script src="js/jRespond.min.js"></script>
	<script type="text/javascript" src="http://multigraph.github.com/download/multigraph-min.js"></script>

	<script type="text/javascript">

  var muglFileURL = <?php echo "'" . $ORIGFILE_URL . "'"; ?>;

  $ = window.multigraph.jQuery;
  $('#graph-window').multigraph({ 'mugl' : muglFileURL, 'width' : '100%', 'height' : '100%' });
  console.log('This copy of Multigraph uses JQuery version ' + $().jquery);
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


		console.log('This copy of Multigraph uses JQuery version ' + $().jquery);
		
	</script>


  <script type="text/javascript">

    $('a[data-toggle="tab"]').click(function(e) {
      console.log($(e.target).attr('href'));

      if ($(e.target).attr('href') == '#set-two') {
        console.log("recognizing set two");

        $.get("../models/load_datasets.php", { whoseSets: "yourSets" }, function(msg) {
          rowArray = $.parseJSON(msg);
          console.log(rowArray);
          $('#your-uploads-list').empty();
          for (var p=0; p<rowArray.length; p++) {
            var thisRow = rowArray[p];
            var set_id = thisRow['SET_ID'];
            $('#your-uploads-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="" href="#"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-folder-close"></i></a><a class="" href="#"><i class="icon-download-alt"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
           }
        });


      } else if ($(e.target).attr('href') == '#set-one') {
        console.log("recognizing set one");
       $.get("../models/load_datasets.php", { whoseSets: "allPublicSets" }, function(msg) {
          rowArray = $.parseJSON(msg);
          console.log(rowArray);
          $('#public-sets-list').empty();
          for (var p=0; p<rowArray.length; p++) {
            var thisRow = rowArray[p];
            var set_id = thisRow['SET_ID'];
            $('#public-sets-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="" href="#"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-folder-close"></i></a><a class="" href="#"><i class="icon-download-alt"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
          }
        });
      }

    });

  </script>

    

  </body>
</html>