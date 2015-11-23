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
                    <form class="bs-example form-horizontal" id="inside_form" onsubmit="return validate();" action="action.php" method="post">

                        <div class="form-group">
                            <div class="col-lg-12 col-xs-8">
                                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="*Name(required)">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-8">
                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="*Email(required)">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-lg-12 col-xs-8">
                                <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Telephone">

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-lg-12 col-xs-8">
                                <textarea class="form-control" rows="3" id="inputMessage" name="inputMessage" placeholder="Info"></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 col-xs-4 col-lg-offset-3">

                                <button type="submit" class="btn btn-primary">Submit</button> 
                            </div>
                        </div>

                    </form>
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