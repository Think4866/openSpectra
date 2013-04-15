<<<<<<< HEAD
            <div class="span12">
=======
            <div class="start-screen span12">
>>>>>>> lots of work in load-into-viewport, when you click an eye icon from the right menu it loads the corresponding dataset into the viewport... in window-1 if it's empty, otherwise in window-2... still need to create popup or something if both are full asking user to select one to remove... also you can now click the x button on a loaded set and it closes the set... graphs will also load with their set info once we get the scripts working
              <section class="span12">
                <div class="welcome-screen">

                	<h1>Hello, <?php echo $CC_USER_NAME; ?></h1>
                		<p class="intro-message span9">Welcome to your workspace. Utilize the options contained in the sidebars to your left and right to manage your data sets. Once two sets are loaded, utilize the lower toolbar to compare them.</p>
                		<p>To begin viewing and comparing data:</p>
                		<ul class="welcome-options span9">
                			<li><i class="icon-arrow-left"></i>upload a data set</li>
                			<p>OR</p>
                			<li>choose from the available sets in the browsing sidebar<i class="icon-arrow-right"></i></li>
                		</ul>  

                		<!-- <p class="no-show-again">do not show welcome screen again</p> -->              	  

                </div>
              </section>
            </div>  <!-- end start screen -->