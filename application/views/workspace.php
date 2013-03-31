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
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>  
    <link href="css/font-awesome.min.css" rel="stylesheet" />
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
     <link href="css/bootstrap-scroll-modal.css" rel="stylesheet" />
     <link href="css/styles.css" rel="stylesheet"/>
     <!-- <link href="css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet" />  --> <!-- added for fancy text editor // not working -->
    
    

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
                <i class="icon-user"></i><span class="hidden-phone"> Welcome, <?php echo $CC_USER_NAME; ?></span>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#myModalprofile" role="" class="my-profile-modal" data-toggle="modal" data-dynamic="true">Profile</a></li>
                <li class="divider"></li>
                <li><a href="../models/logout.php">Logout</a></li>
              </ul>
         
            </div><!-- user dropdown ends -->
            <div class="top-nav nav-collapse">
              <ul class="nav">
               <!--  <li><a href="#">SpectraView</a></li> -->
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
        
        <div class="span2">                  <!-- left sidebar begins -->
          <div class="well sidebar-nav sidebar-left">

             <ul class="nav logo-header">
                <li><a href="#">SpectraView</a></li>
              </ul>
            <p class="dashboard-title">Dashboard</p>

            
            <ul class="nav nav-list left-navigation">   
              <!-- Button to trigger upload modal -->
              <li><a href="#myModalupload" role="button" class="my-upload-btn" data-toggle="modal" data-dynamic="true"><i class="icon-upload"> </i>Upload</a></li>

              <!-- Button to trigger notepad modal -->
              <li><a href="#myModalnotepad" role="button" class="my-notepad-btn" data-toggle="modal" data-dynamic="true"><i class="icon-pencil"></i>Notepad</a></li>
            </ul>

            <div class="accordion" id="accordion2">
              <div class="accordion-group sortable">
                <div class="accordion-heading">
                  <a rel="tooltip" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    <i class="icon-briefcase"> </i>Saved Data Sets
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
                    <i class="icon-briefcase"> </i>Saved Comparisons
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
                    <i class="icon-star"> </i>Favorites
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
                    <i class="icon-calendar"> </i>History
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

        <div class="span8">    <!-- viewport begins -->
          
          <div id="viewport" class="viewport-display">
           
          <div id="set_load_window" class="set-view span12">
            <div id="graph-window" class="graph span6">

              <!--   load graph here -->

            </div>
            <div id="set-info" class="info span6">           <!-- set info display -->

              <div id="display-info" class="info-display span12">
                <section class="info-content span11 offset1">
                    <ul class="set-info span6">
                      <li>Name: <span class="info-data">User Name</span></li>
                      <li>Material: <span class="info-data">Data Set Material</span></li>
                      <li>Date Uploaded: <span class="info-data">03/20/2013</span></li>
                      <li>Institution: <span class="info-data">UNCA</span></li>
                    </ul>
                    <ul class="set-info span6">
                      <li>Callibration</li>
                      <li>Isotope</li>
                      <li>Molecular Formula</li>
                      <li id="uploaded-notes-show"><a href=""><i class="icon-eye-open"></i>Show Notes</a></li>
                    </ul>
                    
                      <div class="span11 offset1 uploaded-notes">
                        <p>These are the notes uploaded by the user. We should have a button to show and hide these notes.
                          These are the notes uploaded by the user. We should have a button to show and hide these notes.
                          These are the notes uploaded by the user. We should have a button to show and hide these notes.</p>
                      </div>
                    
                </section>
              </div>

              <div id="set-tools" class="set_tools span12">
                  <ul class="row-one-tools pull-right">
                    <li><a href="#"><i class="icon-pencil"></i></a></li>
                    <li><a href="#"><i class="icon-star-empty"></i></a></li>
                    <li><a href="#"><i class="icon-save"></i></a></li>
                    <li><a href="#"><i class="icon-remove"></i></a></li>
                    <li><a href="#"><i class="icon-download-alt"></i></a></li>
                   
                  </ul>

              </div>  <!-- end tools -->

            </div>  <!--  end info -->

          </div>  <!-- end set view -->

            <div class="set-2-empty span12">
              <section class="load-another span12">
                <div id="add-another-btns" class="btn-toolbar pagination-centered">
                  <div class="">
                    <label>Add Another Set</label>
                    <a href="#" class="btn btn-custom"><i class="icon-folder-open"></i> <strong>Choose</strong></a>
                   
                    <a href="#" class="btn btn-custom"><i class="icon-arrow-up"></i> <strong>Upload</strong></a>
                  </div>
                </div>
              </section>
            </div>  <!-- end set two empty -->

           <!--  end set view content -->

          </div>   <!-- end viewport display -->

          <div id="toolBar-main" class="tool-bar-main">
            <ul class="nav btn-custom nav-pills tool-bar">
                <li ><a href="#"><i class="icon-save"></i> <span>Save</span></a></li>
                <li ><a href="#" ><i class="icon-play"></i> <span>Compare</span></a></li>
                <li ><a href="#" ><i class="icon-refresh"></i> <span>Refresh</span></a></li>
            </ul>
          </div>
         
        </div><!--/span 8 viewport-->

        <!-- begin right sidebar -->

        
        <div class="control-group span2 search-bar">

          <label class="control-label" for="inputIcon"></label>
          <div class="controls">
            <div class="input-prepend search-bar">
              <span class="add-on"><i class="icon-search"></i></span>
              <input class="span9 search-bar" id="inputIcon" type="text" placeholder="Search Data Sets"/>
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

            <!-- <hr /> -->

      <!-- Modal Upload -->
      <div id="myModalupload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <button lass="btn my-close-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="modal-body my-modal-body">
          <form id="signup" class="form-horizontal" method="post" action="upload_datasets.php">
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
              <span class="btn btn-small btn-file"><span class="fileupload-new">Upload Calibration Data</span><span class="fileupload-exists">Change</span><input type="file"/></span>
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
          <button class="btn my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Notepad</h3>
        </div>
        <div class="modal-body">
          <textarea class="notepad-textarea" placeholder="Enter text ..."></textarea>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary">Save changes</button>
        </div>
      </div>

      <!-- Modal Profile -->
      <div id="myModalprofile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button class="btn my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Your User Profile</h3>
        </div>
        <div class="modal-body">
          <div class="well">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
              <li><a href="#profile" data-toggle="tab">Password</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane active in" id="home">
                <form id="tab">
                    <div class="control-group">
                <label class="control-label">Prefix</label>
              <div class="controls">
                <select class="span1">
                  <option>   </option>
                  <option>Dr.</option>
                  <option>Mrs.</option>
                  <option>Mr.</option>
                  <option>Ms.</option>
                  <option>Miss</option>
                </select>
              </div>
            </div>
            <div class="control-group">
                  <label class="control-label">First Name</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-xlarge" id="fname" name="fname" placeholder="First Name">
                </div>
              </div>
            </div>
            <div class="control-group ">
                  <label class="control-label">Last Name</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-xlarge" id="lname" name="lname" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="control-group">
                <label class="control-label">Suffix</label>
              <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-mini" id="suffix" name="suffix" placeholder="Suffix">
                </div>
              </div>
            </div>
            <div class="control-group ">
                  <label class="control-label">Institution</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-home"></i></span>
                  <input type="text" class="input-xlarge" id="institution" name="institution" placeholder="Institution">
                </div>
              </div>
            </div>
            <div class="control-group">
                  <label class="control-label">Email</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                  <input type="text" class="input-xlarge" id="email" name="email" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="control-group ">
                  <label class="control-label">User Name</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-xlarge" id="uname" name="uname" placeholder="Create a Username">
                </div>
              </div>
            </div>
                    <label>Time Zone</label>
                    <select name="DropDownTimezone" id="DropDownTimezone" class="input-xlarge">
                      <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
                      <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
                      <option value="-10.0">(GMT -10:00) Hawaii</option>
                      <option value="-9.0">(GMT -9:00) Alaska</option>
                      <option selected="selected" value="-8.0">(GMT -8:00) Pacific Time (US & Canada)</option> <!-- selected -->
                      <option value="-7.0">(GMT -7:00) Mountain Time (US & Canada)</option>
                      <option value="-6.0">(GMT -6:00) Central Time (US & Canada), Mexico City</option>
                      <option value="-5.0">(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima</option>
                      <option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                      <option value="-3.5">(GMT -3:30) Newfoundland</option>
                      <option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                      <option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
                      <option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
                      <option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                      <option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
                      <option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
                      <option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                      <option value="3.5">(GMT +3:30) Tehran</option>
                      <option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                      <option value="4.5">(GMT +4:30) Kabul</option>
                      <option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                      <option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                      <option value="5.75">(GMT +5:45) Kathmandu</option>
                      <option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                      <option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                      <option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                      <option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                      <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
                      <option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                      <option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                      <option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                  </select>
                    <div>
                      <button class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="profile">
              <form id="tab2">
                  <label>New Password</label>
                  <input type="password" class="input-xlarge">
                  <div>
                      <button class="btn btn-primary">Update</button>
                  </div>
              </form>
              </div>
          </div>  
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>   
              </div>      
        </div> <!-- end modal body -->
       </div><!-- end modal profile -->
      </div> 

      <!-- Modal Sort Filter -->
      <div id="myModalfilter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            
            <h4>Filter By:</h4>  
        </div>
        <div class="modal-body">
          <div class="row-fluid">
            <ul class="nav nav-pills pagination-centered">
                <li class="active">
                  <a href="#name" data-toggle="pill">Name</a>
                </li>
                <li><a href="#isotope" data-toggle="pill">Isotope</a></li>
            </ul>
          </div>
          <div class="row-fluid">
            <div class="tab-content">
              <div class="tab-pane active" id="name">
                  <form>
                    <div class="control-group">
                        <label class="control-label">Name</label>
                    <div class="controls">
                        <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span>
                        <input type="text" class="input-xlarge" id="name-filter" name="name-filter" placeholder="Enter Name to Filter">
                      </div>
                    </div>
                  </div>
                      <div class="controls controls-row">
                        <select>
                          <option>Filter Options</option>
                          <option>Show Only</option>
                          <option>Show All Except</option>
                        </select>
                      </div>
                  <button type="submit" class="btn btn-medium">Apply Filter</button>
                  </form>
              </div>

              <div class="tab-pane" id="isotope">
                  <form>
                    <div class="control-group">
                        <label class="control-label">Isotope</label>
                    <div class="controls">
                        <div class="input-prepend">
                      <span class="add-on"><i class="icon-pencil"></i></span>
                        <input type="text" class="input-xlarge" id="name-filter" name="name-filter" placeholder="Enter Isotope to Filter">
                      </div>
                    </div>
                  </div>
                      <div class="controls controls-row">
                        <select>
                          <option>Filter Options</option>
                          <option>Show Only</option>
                          <option>Show All Except</option>
                        </select>
                      </div>
                  <button type="submit" class="btn btn-medium">Apply Filter</button>
                  </form>
              </div>

              
              </div>          
            </div>
        </div>

      </div> <!-- end sort filter modal -->


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
    <script type="text/javascript" src="js/scripts.js"></script>
    




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

    // $('a[data-toggle="tab"]').click(function(e) {
    //   console.log($(e.target).attr('href'));

    //   if ($(e.target).attr('href') == '#set-two') {
    //     console.log("recognizing set two");

    //     $.get("../models/load_datasets.php", { whoseSets: "yourSets" }, function(msg) {
    //       rowArray = $.parseJSON(msg);
    //       console.log(rowArray);
    //       $('#your-uploads-list').empty();
    //       for (var p=0; p<rowArray.length; p++) {
    //         var thisRow = rowArray[p];
    //         var set_id = thisRow['SET_ID'];
    //         $('#your-uploads-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="" href="#"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
    //        }
    //     });


    //   } else if ($(e.target).attr('href') == '#set-one') {
    //     console.log("recognizing set one");
    //    $.get("../models/load_datasets.php", { whoseSets: "allPublicSets" }, function(msg) {
    //       rowArray = $.parseJSON(msg);
    //       console.log(rowArray);
    //       $('#public-sets-list').empty();
    //       for (var p=0; p<rowArray.length; p++) {
    //         var thisRow = rowArray[p];
    //         var set_id = thisRow['SET_ID'];
    //         $('#public-sets-list').append('<li><a href="#" data-toggle="collapse" data-target="#set-options-id' + (set_id) + '"><span id="dataset' + (set_id) + '" class="dataSetTitle">DATASET: ' + (set_id) + '</span></a></li><ul id="set-options-id' + (set_id) + '" class="collapse"><li class="btn-group"><a class="" href="#"><i class="icon-eye-open"></i></a><a class="" href="#"><i class="icon-folder-close"></i></a><a class="" href="#"><i class="icon-download-alt"></i></a><a class="" href="#"><i class="icon-star-empty"></i></a></li></ul>').show(500);
    //       }
    //     });
    //   }

    // });

  </script>





    

  </body>
</html>