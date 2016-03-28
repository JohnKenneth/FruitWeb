    
		
		<style type="text/css">
		blockquote
		{
		    clear: both;
		    font-style: italic;
		    margin-left: 10px;
		    margin-right: 10px;
		    padding: 10px 10px 0 50px;
		    position: relative;
		    quotes: none;
		    background: url(https://dl.dropbox.com/u/96099766/RotatingTestimonial/open-quote.png) 0 0 no-repeat;
		    border: 0px;
		    font-size: 120%;
		    line-height: 200%;
		}
		</style>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <!-- ================================================== -->
	<!-- container -->
	<script type="text/javascript">
         $(document).ready(function () {  
			var slider = $('#myCarousel').bxSlider({
					arrows: true,
					pager:false,
					adaptiveHeight:false,
					slideMargin: 0,
					wrapperClass: 'bx-wrapper2',
					swipeThreshold: 1,
					autoHover: true,
					onSlideAfter:function(){
						$("#myCarousel div").css('left','0px');
					}
				}); 
					
			if(!isIE() || !isMobile()){
				$("#myCarousel div").drags();
				$("#myCarousel").on("swiperight",function(event){
					slider.goToPrevSlide();
				});  
				$("#myCarousel").on("swipeleft",function(event){
					slider.goToNextSlide();
				});
			}              
         });
    </script>
    <!-- Wrapper for slides -->
	<div class="mainCarousel">
		<div id="myCarousel" class="slider slick-slider" style="height: 100%;">
		  <div class="item">
			<div class="banner1" ></div>
		  </div>

		  <div class="item">
			<div class="banner2" ></div>
		  </div>
		</div>
	</div>
<!--	<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
<!--    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
<!--    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/banner1.png" alt="Chania">
      </div>

      <div class="item">
        <img src="images/front2.jpg" alt="Chania">
      </div>
    </div>

    <!-- Left and right controls -->
<!--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
<!--	<div class="carousel slide">
		<!-- Jssor Slider Begin -->
		<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
		<!-- ================================================== -->
<!--		<div id="slider" class="carousel">
			<!-- Loading Screen -->
<!--			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="position: absolute; display: block; background: #fff url(images/loading.gif) no-repeat center; top: 0px; left: 0px; width: 100%; height: 100%;">
				</div>
			</div>
			<!-- Slides Container -->
<!--			<div u="slides" class="carousel-inner">
				 <div>
					<img u="image" src2="images/banner1.png" />
				</div>
				<div>
					<img u="image" src2="images/front2.jpg" />
				</div>
			</div>
				
			<!--#region Bullet Navigator Skin Begin -->
			<!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
<!--			<style>
				/* jssor slider bullet navigator skin 21 css */
				/*
				.jssorb21 div					 (normal)
				.jssorb21 div:hover		 (normal mouseover)
				.jssorb21 .av					 (active)
				.jssorb21 .av:hover		 (active mouseover)
				.jssorb21 .dn					 (mousedown)
				*/
				.jssorb21 {
					position: absolute;
					bottom: 5%; 
				}
				.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
					position: absolute;
					/* size of bullet elment */
					width: 25px;
					height: 25px;
					text-align: center;
					line-height: 25px;
					color: white;
					font-size: 15px;
					background: url(images/b21.png) no-repeat;
					overflow: hidden;
					cursor: pointer;
				}
				.jssorb21 div { background-position: -5px -5px; }
				.jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
				.jssorb21 .av { background-position: -65px -5px; }
				.jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
				
				 @media all and (max-width: 768px ){
					.jssorb21{
						bottom: 5%;
					}
				}
			</style>
			<!-- bullet navigator container -->
<!--			<div u="navigator" class="jssorb21" style="right: 6px;">
				<!-- bullet navigator item prototype -->
<!--				<div u="prototype"></div>
			</div>
			<!--#endregion Bullet Navigator Skin End -->
				
			<!--#region Arrow Navigator Skin Begin -->
			<!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
<!--			<style>
				/* jssor slider arrow navigator skin 21 css */
				/*
				.jssora21l									(normal)
				.jssora21r									(normal)
				.jssora21l:hover						(normal mouseover)
				.jssora21r:hover						(normal mouseover)
				.jssora21l.jssora21ldn			(mousedown)
				.jssora21r.jssora21rdn			(mousedown)
				*/
				.jssora21l, .jssora21r {
					display: block;
					position: absolute;
					/* size of arrow element */
					width: 55px;
					height: 55px;
					cursor: pointer;
					background: url(images/a11.png) center center no-repeat;
					overflow: hidden;
				}
				.jssora21l { background-position: -3px -33px; }
				.jssora21r { background-position: -63px -33px; }
				.jssora21l:hover { background-position: -123px -33px; }
				.jssora21r:hover { background-position: -183px -33px; }
				.jssora21l.jssora21ldn { background-position: -243px -33px; }
				.jssora21r.jssora21rdn { background-position: -303px -33px; }
			</style>
			<!-- Arrow Left -->
<!--			<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
			</span>
			<!-- Arrow Right -->
<!--			<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
			</span>
		</div>
		<!-- Jssor Slider End -->
<!--	</div>-->

	<!-- Page Content -->
	<div class="container">
<!--		<form role="form" class="search">
			<blockquote>
				<div class="form-group">
					<div class="form-group">
						<label for="tfSearch">Search:</label>
						<div class="input-group">
							 <input type="text" class="form-control">
							 <span class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<span class="glyphicon glyphicon-search"></span> <!--Search
								</button>
							 </span>
						</div>
					</div>
				</div>
			</blockquote>
		</form>-->

		<div class="container-fluid">
		
			<div class="jumbotron">
				<h1>Let's make <mark>EAT</mark> right</h1>
				<p>We understand that students' welfare is your topmost priority. There is nothing more importnant but to be able to makke the school, indeed their second home - a home that will help shape who they will be. We believe that partnering with you will help us reach the Youth about our mission and vission on acting well on one's HEALTH - One fruit at a time</p>
			</div>
		</div>
		
		<hr>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 flip-outer">
					<div class=" flip-container" >
						<div class="flipper">
							<div class="front jumbotron">
								<!-- front content -->
								<h2 class="page-header">Who We Are</h2>
								<img class="text-center img-responsive" data-src="holder.js/300x300/auto" alt="Generic placeholder image">
							</div>
							<div class="back jumbotron">
								<!-- back content -->
								<img class="text-center img-responsive" src="images/who_we_are.jpg" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 flip-outer">
					<div class=" flip-container">
						<div class="flipper">
							<div class="front jumbotron">
								<!-- front content -->
								<h2 class="page-header">How We Work</h2>
								<img class="text-center img-responsive" data-src="holder.js/300x300/auto" alt="Generic placeholder image">
							</div>
							<div class="back jumbotron">
								<!-- back content -->
								<img class="text-center img-responsive" src="images/how_we_work.jpg" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 flip-outer">
					<div class=" flip-container">
						<div class="flipper">
							<div class="front jumbotron">
								<!-- front content -->
								<h2 class="page-header">Packages</h2>
								<img class="text-center img-responsive" data-src="holder.js/300x300/auto" alt="Generic placeholder image">
							</div>
							<div class="back jumbotron">
								<!-- back content -->
								<img class="text-center img-responsive" src="images/packages.jpg" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	 
		
		<hr>
		
		<div class="container-fluid">
			<fieldset class="info-border">
				<legend class="info-border"><h1>More Information</h1></legend>
				<div class="row">
					<div class="col-sm-5">
						<!--Testimonials Start-->
						<script type="text/javascript" src="js/lib/jquery.bxslider.min.js"></script>
						<script type="text/javascript">
					         $(document).ready(function () {           
					             $('#fruitInfo').bxSlider({
									 slideMargin: 5,
									 pager:false,
					                 auto:true
					             });             
					         });
					    </script>
						<div class="fruit_info_div">
							<h3 style="font-style:oblique">Check this out..</h3>
							<hr/>
							<ul id="fruitInfo">
								<li>
									<img src="images/fruit1.png">
									<p>
										Apples
									</p>
								</li>
								<li>
									<img src="images/fruit2.png">
									<p>
										Banana
									</p>
								</li>
								<li>
									<img src="images/fruit3.png">
									<p>
										Peaches
									</p>
								</li>
						  	</ul>
						</div>
						<!--Testimonials End-->
					</div>
					<div class="col-sm-7">
					<!--Testimonials Start-->
						<script type="text/javascript">
					         $(document).ready(function () {           
					             $('#testimonials').bxSlider({
					                mode: 'fade',
									controls:false,
					                auto:true
					             });             
					         });
					    </script>
						<div class="testimonials_div">
							<h3 style="font-style:oblique">What our customers are saying..</h3>
							<hr/>
							<ul id="testimonials" class="bxslider">
								<li>
									<blockquote>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
										<h4 class="testimonee">- Srinivas</h4>
						  			</blockquote>
								</li>
								<li>
									<blockquote>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
										<h4 class="testimonee">- Anita</h4> 
						  			</blockquote>
								</li>
								<li>
									<blockquote>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
										<h4 class="testimonee">- David</h4> 
						  			</blockquote>
								</li>
						  	</ul>
							<div class="outside">
								<p><span class="text-success" id="slider-prev"></span>  <span id="slider-next"></span></p>
							</div>
						</div>
						<!--Testimonials End-->
					</div>
					</div>
				</div>
				
				
				
			</fieldset>
		</div>
		
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- Script to Activate the Carousel -->
		<script src="js/main.js"></script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/lib/ie10-viewport-bug-workaround.js"></script>

		<!-- jssor slider scripts-->
		<script src="js/lib/jquery.mobile.custom.min.js"></script>
		