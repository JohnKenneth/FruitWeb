<div class="topPadding">
</div>

<div class="container">
    <h2 class="featurette-heading">Contact Us</h2>
    <div class="row featurette">
        <div class="col-md-8">

            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-md-3">
            <img class="featurette-image img-responsive" data-src="holder.js/300x300/auto" alt="Generic placeholder image">
        </div>
    </div>
    <div class="row">	
        
        <div class="col-sm-12" style="z-index:100">
            <div id="imgmap"><!--class="content_text"-->
                <div class="col-sm-6 " id="contact_form">
                   <h3 class="featurette-heading">Message Us</h3>
                    <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
						echo form_open("Contact", $attributes);?>

                        <div class="form-group">
                            <div class="col-lg-12 col-xs-8">
                                <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
								<span class="text-danger"><?php echo form_error('name'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-8">
                                <input class="form-control" name="email" placeholder="Your Email ID" type="text" value="<?php echo set_value('email'); ?>" />
								<span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-lg-12 col-xs-8">
                                <input class="form-control" name="subject" placeholder="Your Subject" type="text" value="<?php echo set_value('subject'); ?>" />
								<span class="text-danger"><?php echo form_error('subject'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-lg-12 col-xs-8">
                                <textarea class="form-control" name="message" rows="4" placeholder="Your Message"><?php echo set_value('message'); ?></textarea>
								<span class="text-danger"><?php echo form_error('message'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 col-xs-4 col-lg-offset-3">

                                <button type="submit" class="btn btn-primary">Submit</button> 
                            </div>
                        </div>

                    <?php echo form_close(); ?>
					<?php echo $this->session->flashdata('msg'); ?>
                </div>
                
                <div class="col-sm-6">
                    <h3 class="featurette-heading">Location</h3>
                    <div id="map"></div>
                    <style>
                       #map {
                         width: 500px;
                         height: 300px;
                       }
                    </style>
                    <script src="https://maps.googleapis.com/maps/api/js"></script>
                    <script>
                       function initialize() {
                         var mapCanvas = document.getElementById('map');
                         var mapOptions = {
                           center: new google.maps.LatLng(44.5403, -78.5463),
                           zoom: 8,
                           mapTypeId: google.maps.MapTypeId.ROADMAP
                         }
                         var map = new google.maps.Map(mapCanvas, mapOptions)
                       }
                       google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
		<script src="js/main.js"></script>