<?php 

require_once('../models/headerLoggedIn.php');

?>

<?php include 'header.php' ?>

  
  <body class="workspace-body">

    <!-- topbar starts -->
    <div class="my-navbar navbar">
      <div class="navbar-inner my-navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">

              <a class="btn  dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user"></i><span class="hidden-phone"><?php echo $CC_USER_NAME; ?></span>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#myModalprofile" role="" class="my-profile-modal" data-toggle="modal" data-dynamic="true">Profile</a></li>
                <li class="divider"></li>
                <li><a href="../models/logout.php">Logout</a></li>
              </ul>
         
            </div><!-- user dropdown ends -->
            <div class="top-nav nav-collapse">
              <ul class="nav workspace-nav">
                <li class="active"><a href="#">Workspace</a></li>
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
        
        <div class="span2">                  <!-- left sidebar begins -->
          <div class="well sidebar-nav sidebar-left">

             <ul class="nav logo-header">
                <li><a href="#"><span>Spectra</span>View</a></li>

              </ul>
            <p class="dashboard-title">Dashboard</p>

            
            <ul class="nav nav-list left-navigation">   
              <!-- Button to trigger upload modal -->
              <li><a href="#myModalupload" role="button" class="my-upload-btn" data-toggle="modal" data-dynamic="true"><i class="icon-upload"> </i>Upload</a></li>
              <li><a href="#myModalnotebook" role="button" class="my-notebook-btn" data-toggle="modal" data-dynamic="true"><i class="icon-pencil"> </i>Notebook</a></li>

            </ul>

            <p class="dashboard-divider">Your Saved Content</p>

            <ul class="nav nav-tabs my-browse-tabs nav-stacked" id="allSetsTabs">

              <li><a href="#saved-one" id="favorites-list-title" data-toggle="tab"><i class="icon-star"> </i>Favorites</a></li>
              <li><a href="#saved-two" id="saved-sets-list-title" data-toggle="tab"><i class="icon-briefcase"> </i>Saved Data Sets</a></li>
              <li><a href="#saved-three" id="saved-comps-list-title" data-toggle="tab"><i class="icon-briefcase"> </i>Saved Comparisons</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane" id="saved-one">
                <ul id="favorites-list" class="nav nav-list set-list">

                  <div class="btn-group">
                    <a class="" href="#" title="favorite">
                      <i class="tools icon-star" title="un-favorite" data-toggle="tooltip"></i>
                    </a>
                    <a class="" href="#" title="view">
                      <i class="tools icon-eye-open" title="view" data-toggle="tooltip"></i>
                    </a>                                   
                    <a class="" href="#" title="download">
                      <i class="tools icon-download-alt" title="download" data-toggle="tooltip"></i>
                    </a>
                    <a class="" href="#" title="trash">
                      <i class="tools icon-trash" title="favorite" data-toggle="tooltip"></i></a>
                  </div>

                </ul> 
              </div>

              <div class="tab-pane" id="saved-two">
                <ul id="saved-sets-list" class="nav nav-list set-list">

                  <div class="btn-group">
                    <a class="" href="#" title="favorite">
                      <i class="tools icon-star-empty" title="favorite" data-toggle="tooltip"></i>
                    </a>
                    <a class="" href="#" title="view">
                      <i class="tools icon-eye-open" title="view" data-toggle="tooltip"></i>
                    </a>                                   
                    <a class="" href="#" title="download">
                      <i class="tools icon-download-alt" title="download" data-toggle="tooltip"></i>
                    </a>
                    <a class="" href="#" title="trash">
                      <i class="tools icon-trash" title="trash" data-toggle="tooltip"></i>
                    </a>
                    <a class="saved" href="#" title="favorite">
                      <i class="tools icon-save" title="save" data-toggle="tooltip"></i>
                    </a>
                  </div>

                </ul>
              </div>

              <div class="tab-pane" id="saved-three">
                <ul id="saved-comps-list" class="nav nav-list set-list">

                  <div class="btn-group">
                    <a class="" href="#" title="favorite">
                      <i class="tools icon-star-empty" title="favorite" data-toggle="tooltip"></i>
                    </a>
                    <a class="" href="#" title="view">
                      <i class="tools icon-eye-open" title="view" data-toggle="tooltip"></i>
                    </a>                                   
                    <a class="" href="#" title="download">
                      <i class="tools icon-download-alt" title="download" data-toggle="tooltip"></i>
                    </a>
                    <a class="" href="#" title="trash">
                      <i class="tools icon-trash" title="trash" data-toggle="tooltip"></i>
                    </a>
                    <a class="saved" href="#" title="favorite">
                      <i class="tools icon-save" title="save" data-toggle="tooltip"></i>
                    </a>
                  </div>

                </ul>
              </div>

            </div><!--end tab content -->

           
          </div><!--/.well -->
        </div><!--/span 2-->

        <div class="span8">    <!-- viewport begins -->
          
          <div id="viewport" class="viewport-display">

            <!-- start screen -->

            <div id="start_screen_window">

              <?php include 'start-screen.php' ?>

            </div>

            <!-- end start screen -->



            <!-- comparison template -->
            <div id="comparison_window" style="display:none;">

              <?php include 'comparison-template.php' ?>

            </div>

            <!-- end comparison template -->


            <!-- set load windows 1 and 2 -->
           
            <div id="set_load_window-1" class="set-view-1 span12" style="display:none;">

              <?php include 'load-window-1.php' ?>

            </div>

            <div id="set_load_window-2" class="set-view-2 span12" style="display:none;">

              <?php include 'load-window-2.php' ?>

            </div>

             <!-- end set load windows 1 and 2 -->

             <!--  end set view content -->

          </div>   <!-- end viewport display -->


          <div class="row-fluid">
            <div id="toolBar-main" class="tool-bar-main span12">
              <ul class="nav btn-custom nav-pills tool-bar">
                  <li ><a href="#"><i class="icon-save"></i> <span>Save</span></a></li>
                  <li ><a href="#" ><i class="icon-play"></i> <span>Compare</span></a></li>
                  <li ><a href="#" ><i class="icon-refresh"></i> <span>Refresh</span></a></li>
              </ul>
            </div>
          </div>
         
        </div><!--/span 8 viewport-->

        <!-- begin right sidebar -->

        
        <div class="control-group span2 search-bar">

          <label class="control-label" for="inputIcon"></label>
          <div class="controls">
            <div class="input-prepend search-bar">
              <span class="add-on"><i class="icon-search"></i></span>
              <input class="span9 search-bar" id="inputIcon" type="text" placeholder="Search Data"/>
            </div>
          </div>
        </div>
        <div class="span2 sidebar-right">

          <div class="well sidebar-nav">
            <p class="browse-title"><!-- <i class="icon-eye-open"> </i> -->Browse Data Sets</p>

              <ul class="nav nav-tabs my-browse-tabs nav-stacked" id="allSetsTabs">
                <li><a href="#myModalfilter" role="button" data-toggle="modal" data-dynamic="true" class=""><i class="icon-sort"> </i>Filter</a></li>
                <li><a href="#set-one" id="public-sets-title" data-toggle="tab"><i class="icon-file"> </i>Public Sets</a></li>
                <li><a href="#set-two" id="your-uploads-title" data-toggle="tab"><i class="icon-circle-arrow-up"> </i>Your Uploads</a></li>
              </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane" id="set-one">
                    <ul id="public-sets-list" class="nav nav-list set-list">

                      <!-- All Public Sets datasets will be displayed here -->

                    </ul> 
                  </div>

                  <div class="tab-pane" id="set-two">
                    <ul id="your-uploads-list" class="nav nav-list set-list">

                      <!-- Your Uploads datasets will be displayed here -->

                    </ul>
                  </div>

                </div><!--end tab content -->

          </div><!--/.well -->
          
        </div><!--/span-->
      </div><!--/row-->

            

      <?php  include 'modals.php' ?>


    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery1-9.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    
    <script src="js/bootstrap-fileupload.js"></script>
    <script src="js/bootstrap-scroll-modal.js"></script>  <!-- added for scrolling modals -->
    <script src="js/jRespond.min.js"></script>
	  <script type="text/javascript" src="http://multigraph.github.com/download/multigraph-min.js"></script>
    <script type="text/javascript" src="js/load-all-datasets.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/form-submits.js"></script>
    <script type="text/javascript" src="js/load-into-viewport.js"></script>
    <script type="text/javascript" src="js/loaded-set-options.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.tools').tooltip();

      });



    </script>




  </body>
</html>