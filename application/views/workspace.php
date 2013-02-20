<?php 

require_once('../models/headerLoggedIn.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Workspace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Le styles -->

    <link href="css/bootstrap.css" rel="stylesheet" />  
    <style type="text/css">
      body {
        /*padding-top: 40px;*/
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
     <link href="css/bootstrap-responsive.css" rel="stylesheet" />
     <link href="css/bootstrap-fileupload.min.css" rel="stylesheet" />
     <link href="css/styles.css" rel="stylesheet" />
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
                                   <link rel="shortcut icon" href="ico/favicon.png" />
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
                <li><a href="#">Sci Dat Viewer</a></li>
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
                <div class="accordion-heading" id="Tips">
                  <a rel="tooltip" data-title="tooltip here!" data-placement="top" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    Current Data Sets
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
                    Current Comparisons
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
        </div><!--/span-->

        <div class="span8">
          
          <div id="viewport" class="viewport-display">
            <h1>Viewport Area</h1>

          </div>
          <div id="toolBar-main" class="tool-bar-main">
            <ul class="nav nav-pills tool-bar">
                <li ><a href=""><!-- <i class="icon-cog"></i> --> <span>Save</span></a></li>
                <li ><a href="" ><!-- <i class="icon-cog"></i> --> <span>Compare</span></a></li>
                <li ><a href="" ><!-- <i class="icon-cog"></i> --> <span>Refresh</span></a></li>
                <!-- <li ><a href=""><i class="icon-cog"></i> <span>Action</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Action <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><span>action</span></a></li>
                        <li><a href=""><span>action</span></a></li>
                        <li><a href=""><span>action</span></a></li>
                    </ul>
                </li> -->
            </ul>
          </div>
         
        </div><!--/span-->

        <!-- begin right sidebar -->

        
        <div class="control-group span2">
          <label class="control-label" for="inputIcon"></label>
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-search"></i></span>
              <input class="span8" id="inputIcon" type="text">
            </div>
          </div>
        </div>
        <div class="span2 sidebar-right">
          <!-- <input placeholder="Search" class="searchMain" name="query" type="text" /> -->
          <div class="btn-group filter-btn">
                <button class="btn btn-medium filterMain">Filter Results</button>
                <button class="btn btn-medium dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>

                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-star"></i> Action</a></li>
                  <li><a href="#"><i class="icon-tag"></i> Another action</a></li>
                  <li><a href="#"><i class="icon-download-alt"></i> Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="icon-tint"></i> Separated link</a></li>
                </ul>    
              </div> <!-- end filter dropup  -->
          <div class="well sidebar-nav">
            <p class="browse-title">
              <i class="icon-eye-open"> </i>Browse Sets</p>
              <ul class="nav nav-tabs my-browse-tabs">
                <li><a href="#set-one" data-toggle="tab">Set Group</a></li>
                <li><a href="#set-two" data-toggle="tab">Set Group</a></li>
                <li><a href="#set-three" data-toggle="tab">Set Group</a></li>
              </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane" id="set-one">
                    <ul class="nav nav-list">
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Two</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Three</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                    </ul>
                    
                  </div>
                  <div class="tab-pane" id="set-two">
                    <ul class="nav nav-list">
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Two</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>

                    </ul>
                    
                  </div>
                  <div class="tab-pane" id="set-three">
                    <ul class="nav nav-list">
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Area Two</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                    </ul>
                  </div>
                </div>

          </div><!--/.well -->
          
        </div><!--/span-->
      </div><!--/row-->

            <hr />

      <!-- Modal Upload -->
      <div id="myModalupload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <button type="button" class="close my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-body my-modal-body">
        <form id="signup" class="form-horizontal" method="post" action="">
            <h3 class="form-signin-heading">Upload Data</h3>
            
            <div class="control-group">
                  <label class="control-label">Username</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-xlarge" id="fname" name="fname" placeholder="<?php echo $USER_USERNAME; ?>">
                </div>
              </div>
            </div>
          
            <div class="control-group ">
                  <label class="control-label">Institution</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-home"></i></span>
                  <input type="text" class="input-xlarge" id="institution" name="institution" placeholder="<?php echo $USER_INSTITUTION; ?>">
                </div>
              </div>
            </div>
            <div class="control-group ">
                  <label class="control-label">Compound / Material</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                  <input type="text" class="input-xlarge" id="material" name="material" placeholder="Material">
                </div>
              </div>
            </div>
            <div class="control-group ">
                  <label class="control-label">Molecular Formula</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                  <input type="text" class="input-xlarge" id="formula" name="formula" placeholder="Formula">
                </div>
              </div>
            </div>
             <div class="control-group ">
                  <label class="control-label">Check all that apply</label>
                <div class="controls">
                  <label class="checkbox">
                    <input type="checkbox" value="">
                    Normal Isotope
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" value="">
                    Non-normal Isotope
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" value="">
                    Option 3
                  </label>
               
                </div>
              </div>
            <div class="control-group ">
                  <label class="control-label">Date Collected</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-calendar"></i></span>
                  <input type="text" class="input-medium" id="calendar" name="calendar" placeholder="mm/dd/yyyy">
                </div>
              </div>
            </div>

            <div class="fileupload fileupload-new" data-provides="fileupload">
              <span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span>
              <span class="fileupload-preview"></span>
              <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>
            </div>

         </form>

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
    <script src="js/jquery1-9.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <script src="js/bootstrap-fileupload.js"></script>  
    

  </body>
</html>