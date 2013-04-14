      <!-- Modal Upload -->
      <div id="myModalupload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">        
        <div class="modal-body my-modal-body">
          <button class="btn my-close-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
          <form id="uploadDataset" class="form-horizontal" method="post" action="../models/upload_datasets.php" enctype="multipart/form-data">
            <h5 class="form-signin-heading">Upload Data</h5>
            <span class="smalltext">Items with an asterisk (*) are required.</span>
            <div class="control-group">
                  <label class="control-label">* Username</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-xlarge" id="fname" name="fname" value="<?php echo $USER_USERNAME; ?>" />
                </div>
              </div>
            </div>

            <div class="control-group ">
              <div id="control-group-material"></div>
                  <label class="control-label">* Compound / Material</label>
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
                  <label class="control-label">Isotope Status</label>
                <div class="controls">
                  <label class="radio">
                    <input type="radio" name="isotope" value="1" checked/>
                    Normal Isotope
                  </label>
                  <label class="radio">
                    <input type="radio" name="isotope" value="0"/>
                    Non-normal Isotope
                  </label>
                  <label class="radio">
                    <input type="radio" name="isotope" value="na"/>
                    N/A
                  </label>
                </div>
              </div>

              <div class="control-group ">
                  <label class="control-label">Keep this data private?</label>
                <div class="controls">
                  <label class="checkbox">
                    <input type="checkbox" id="public" name="public" value="0"/>
                    <span class="small-text">(sets are public by default and can be made private or public at any time)</span>
                  </label>
                </div>
              </div>

            <div class="control-group ">
                  <label class="control-label">* Date Collected</label>
              <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-calendar"></i></span>
                    <input type="text"  id="date_collected" class="input-medium" name="date_collected" value="<?php echo date("m/d/Y"); ?>" />
                  </div>
              </div>
            </div>

            <div class="control-group ">
                  <label class="control-label">Add a description</label>
              <div class="controls">
                  <div class="description-form">
                      <textarea rows="3" name="description"></textarea>
                    
                  </div>
              </div>
            </div>

            <div class="fileuploaderrors"></div>

            <div class="fileupload fileupload-new buttoninline" data-provides="fileupload">
              <span class="btn btn-large btn-file buttoninline"><span class="fileupload-new">Upload Data Set</span><span class="fileupload-exists">Change</span><input type="file" name="origfile_url"/></span>
              <span class="fileupload-preview" id="datasetfilename"></span>
              <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>

            <div class="fileupload fileupload-new buttoninline" data-provides="fileupload">
              <span class="btn btn-large btn-file buttoninline"><span class="fileupload-new">Upload Calibration Data</span><span class="fileupload-exists">Change</span><input type="file" name="origcalib_url"/></span>
              <span class="fileupload-preview" id="calibfilename"></span>
              <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>

            <div class="control-group buttonclear">
               <span class="small-text">The following filetypes are currently supported: .ADT, .DAT, .MCS, .WS5, .XML</span><br /><br />
              <span class="small-text">It is highly recommended to upload a Calibration Set along with your data.  If you do not upload a Calibration Set, your data will be marked as "Not Calibrated".</span>
            </div>


            <div class="upload_submit buttonclear">
                <hr /> 
                <button id="upload-submit" type="submit" class="btn btn-file buttonclear">Submit</button>
            </div>

          </form>
        </div>
      </div>

      <!-- Modal Upload Confirm -->
      <div id="myModaluploadConfirm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button class="btn my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Upload successful!</h3>
        </div>
        <div class="modal-body">
          <span class="smalltext">Your new dataset will be displayed under "Your Uploads".</span>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">OK</button>
        </div>
      </div>


      <!-- Modal Notepad -->
      <div id="myModalnotepad" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button class="btn my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Notepad</h3>
        </div>
        <div class="modal-body">
          <div class="control-group">
                  <label class="control-label">Username</label>
              <div class="controls">
                  <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" class="input-large" id="fname" name="fname" value="<?php echo $USER_USERNAME; ?>" />
                </div>
              </div>
          </div>
          <div class="control-group ">
                  <label class="control-label">Date</label>
              <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-calendar"></i></span>
                    <input type="text"  id="dp1" class="input-medium" name="date_collected" value="<?php echo date("m/d/Y"); ?>" />
                  </div>
              </div>
            </div>
          <textarea class="notepad-textarea span5" placeholder="Enter notes here" rows="7"></textarea>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary">Save Notes</button>
        </div>
      </div>

      <!-- Modal Notebook -->
      <div id="myModalnotebook" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header notebook-header">
          <button class="btn my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
          <span><?php echo $USER_USERNAME; ?></span>&nbsp;|&nbsp;<span>Date of Note</span>&nbsp;|&nbsp;<span>Data Set ID?</span>
        </div>
        <div class="modal-body">
          <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor.
          Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
          <div class="btn-group">         
            <a class="" href="#" title="view"><i class="icon-eye-open"></i>View Data Set</a>
            <a class="" href="#" title="trash"><i class="icon-trash"></i>Delete Note</a>
          </div>
        </div>
        <div class="modal-footer">
          

        </div>
      </div>



      <!-- Modal Profile -->
      <div id="myModalprofile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button class="btn my-close-btn" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Your User Profile</h3>
        </div>
        <div class="modal-body">
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
                      <button class="btn btn-large">Update</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="profile">
              <form id="tab2">
                  <label>New Password</label>
                  <input type="password" class="input-xlarge">
                  <div>
                      <button class="btn btn-large">Update</button>
                  </div>
              </form>
              </div>
              
        </div> <!-- end modal body -->
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>   
        </div>      
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
            <ul class="nav nav-pills">
              <li><a href="#material" data-toggle="pill">Material</a></li>
                <li>
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
                      <br />
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
                      <br />
                  <button type="submit" class="btn btn-medium">Apply Filter</button>
                  </form>
              </div>

               <div class="tab-pane" id="material">
                  <form>
                    <div class="control-group">
                        <label class="control-label">Material</label>
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
                      <br />
                  <button type="submit" class="btn btn-medium">Apply Filter</button>
                  </form>
              </div>
              
              </div>          
            </div>
        </div>

      </div> <!-- end sort filter modal -->