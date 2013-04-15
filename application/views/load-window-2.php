        
<<<<<<< HEAD

=======
    <div class="load-window-2" style="display:none;">
>>>>>>> lots of work in load-into-viewport, when you click an eye icon from the right menu it loads the corresponding dataset into the viewport... in window-1 if it's empty, otherwise in window-2... still need to create popup or something if both are full asking user to select one to remove... also you can now click the x button on a loaded set and it closes the set... graphs will also load with their set info once we get the scripts working

        <div class="file-title"><h3 id="file-title-2">Data Set </h3></div>
           
            <div id="graph-window-2" class="filldata2 graph span6">

              <!--   load graph here -->

            </div>
            <div id="set-info-2" class="info span6">           <!-- set info display -->

              <div id="display-info" class="info-display span12">
                <section class="info-content span11 offset1">
                    <ul class="set-info span6">
                      <li>Name: <span class="filldata2 info-data-name"></span></li>
                      <li>Material: <span class="filldata2 info-data-material"></span></li>
                      <li>Date Uploaded: <span class="filldata2 info-data-date"></span></li>
                      <li>Institution: <span class="filldata2 info-data-institution"></span></li>
                      <li>Calibration: <span class="filldata2 info-data-calibration"></span></li>
                      <li>Isotope: <span class="filldata2 info-data-isotope"></span></li>
                      <li>Molecular Formula: <span class="filldata2 info-data-formula"></span></li>
                      
                    </ul>
                    <ul class="set-info span6">
                      <li class="show-description"><a href="#" data-toggle="collapse" data-target="#info-data-description-2"><i class="icon-plus"></i>Show Description</a></li>
                      <li class="show-notes"><a href="#" data-toggle="collapse" data-target="#info-data-notes-2"><i class="icon-plus"></i>Show Notes</a></li>
                                 <!--  change to icon-minus and 'hide notes, etc' -->
                      
                    </ul>
                    
                      <div class="span11 offset1 description collapse" id="info-data-description-2">

                        <p><span class="sectiontitle">Description:  </span><span class="filldata2 description-content">This is the description uploaded by the person who added this dataset. We should have a button to show and hide this description.  This is the description uploaded by the person who added this dataset. We should have a button to show and hide this description.</span></p>
                      </div>

                      <div class="span11 offset1 notes collapse" id="info-data-notes-2">
                       <p><span class="sectiontitle">Notes:  </span> <span class="filldata2 notes-content">DATE - These are the notes added by the user. We should have a button to show and hide these notes.  These are the notes added by the user. We should have a button to show and hide these notes.  These are the notes added by the user. We should have a button to show and hide these notes.</span></p>

                      </div>
                    
                </section>
              </div>

              <div id="set-tools-2" class="set_tools span12">
                  <ul class="row-one-tools pull-right">
                    <li><a href="#myModalnotepad" role="button" class="" data-toggle="modal" data-dynamic="true"><i class="icon-pencil"></i></a></li>
                    <li><a href="#"><i class="icon-star-empty"></i></a></li>
                    <li><a href="#"><i class="icon-save"></i></a></li>                    
                    <li><a href="#"><i class="icon-download-alt"></i></a></li>
                    <li><a class="remove-loaded-set" id="remove-loaded-set-2" href="#"><i class="icon-remove"></i></a></li>
                   
                  </ul>

              </div>  <!-- end tools -->

            </div>  <!--  end set info display -->

          </div>  <!--  end load-window-2 -->



          <!-- empty set formatting -->
          <div class="set-2-empty span12" style="display:none;">
            <section class="load-another span12">
              <div id="add-another-btns" class="btn-toolbar pagination-centered">
                <div class="">
                  <label>Add Another Set</label>
                  
                </div>
              </div>
            </section>
          </div>  
          <!-- end set two empty -->

