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
                <i class="icon-user"></i><span class="hidden-phone"> <?php echo $CC_USER_NAME; ?></span>
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
              <li><a href="#myModal" role="button" class="my-upload-btn" data-toggle="modal">Upload</a></li>

              <!-- Button to trigger notepad modal -->
              <li><a href="#myModal" role="button" class="my-upload-btn" data-toggle="modal">Notepad</a></li>
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
                <li class="active"><a href="index.html"><i class="icon-cog"></i> <span>Action</span></a></li>
                <li ><a href="" ><i class="icon-cog"></i> <span>Action</span></a></li>
                <li ><a href="" ><i class="icon-cog"></i> <span>Action</span></a></li>
                <li ><a href=""><i class="icon-cog"></i> <span>Action</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Action <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><span>action</span></a></li>
                        <li><a href=""><span>action</span></a></li>
                        <li><a href=""><span>action</span></a></li>
                    </ul>
                </li>
            </ul>
          </div>
         
        </div><!--/span-->

        <!-- begin right sidebar -->
        
        <div class="span2 sidebar-right">
          <div class="well sidebar-nav">
            <form id="main-search" class="my-search">
                <input placeholder="Search" class="search-query my-search-query" name="query" type="text" />
            </form>
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
          <div class="btn-group dropup filter-btn">
            <button class="btn btn-small">Filter Results</button>
            <button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>

            <ul class="dropdown-menu">
              <li><a href="#"><i class="icon-star"></i> Action</a></li>
              <li><a href="#"><i class="icon-tag"></i> Another action</a></li>
              <li><a href="#"><i class="icon-download-alt"></i> Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="icon-tint"></i> Separated link</a></li>
            </ul>    
          </div> <!-- end filter dropup  -->
        </div><!--/span-->
      </div><!--/row-->

            <hr />

        <!-- Modal -->
      <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      <script>

        $(document).ready(function(){

            $('#Tips').tooltip('show');


        }
      </script>

  </body>
</html>