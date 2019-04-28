<?php require 'connect_db.php'; ?>
<?php if (isset($_POST['email_submit'])){
	             if(!empty($_POST['email'])){
	            $email = $_POST['email'];
          	    $query = "INSERT INTO `newsletter`(`email`) VALUES ('$email')";
	            if (mysqli_query($con,$query)){
	           /* echo "<script>
				$(function(){
					$('#myModal').modal();
				});
					
				</script>";*/
					echo "<meta http-equiv='refresh' content='0'>";	
	            }}
          }
		   ?>

	<!--Subscription-->
	<section>
		<div id="lgx-subscription" class="lgx-subscription">
			<div class="lgx-inner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="lgx-heading">
								<h2 class="heading-title">نشرتُنا</h2>
								<h4 class="heading-subtitle">لا تفوت التحديثات</h4>
							</div>
						</div>
					</div>
					<!--//.ROW-->
					<!--email confirmation code-->

					<div class="row">
						<div class="col-sm-12">
							<div class="lgx-subscriber-area">
								<h4 class="title"> لا تفوّت أي تحديثات للدورات التدريبية الجديدة وجميع العروض المدهشة التي نقدمها لك
								</h4>
								<div class="lgx-subscriber">
									<form method="post">
										<div class="form-group" id="form">
											<input type="email" name="email" placeholder="Ex: info@upskills-academy.com" class="form-control lgx-input-form form-control" />
										</div>
										<div class="form-group">
											<button type="submit" name="email_submit" class="lgx-btn">تأكيد</button>
										</div>
									</form>
								</div>
								<!--//.SUBSCRIBE-->
							</div>
						</div>
					</div>
					<!--//.ROW-->
				</div>
				<!-- //.CONTAINER -->
			</div>
			<!-- //.INNER -->
		</div>
	</section>
	<!--modal eamil confirmation-->
	<div id="myModal" class="modal fade" style="display: none;">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body text-center">
					<h4>Great!</h4>
					<p>Thank you for subscriping .</p>
					<button class="btn btn-success" data-dismiss="modal"><span>OK</span> <i class="material-icons"></i></button>
				</div>
			</div>
		</div>
	</div>
	<!--Subscription END-->
<!--FOOTER-->
<footer>
	<div id="lgx-footer" class="lgx-footer">
		<div class="lgx-getintouch-area">
		
			<div class="lgx-getintouch-inner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3 class="lgx-getintouch">
								<span> (079)5 693 900</span> إذا كان لديك أيّ إستفسار يُرجى الإتصال على 
								<a class="lgx-btn lgx-btn-contact rippler rippler-default" href="contact.php">تواصل معنا</a>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="lgx-footer-middle">
			<!--lgx-footer-middle-white-->
			<div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 footer">
						<div class="lgx-footer-single">
							<a class="logo" href="index.php"><img src="images/other/Logo3.png" alt="Logo"></a>
							<address>
								المدينة الرياضية , شارع الشهيد , عمان - الأردن

							</address>
							<ul class="list-unstyled lgx-address-info">
								<li>(079)5 693 900 <i class="fa fa-phone"></i></li>
								<li>info@upskills-academy.com <i class="fa fa-envelope"></i></li>
							</ul>
						</div>
					</div>
					
							<?php $query  = "SELECT * FROM category limit 5";
								  $res    = mysqli_query($con,$query);
                                                                  if (!empty ($res)){
                                                                  echo '<div class="col-xs-12 col-sm-6 col-md-3 footer">
						                    <div class="lgx-footer-single">
                                                                        <h2 class="title"> أشهر الفئات </h2>
                                                                        <ul class="list-unstyled">';
                                                                   while($carSet = mysqli_fetch_assoc ($res)){
								  echo 	"<li><a href='courses.php'>{$carSet['cat_name_ar']}</a></li>";

								  }
                                                                  echo "</ul>
                                                                        </div>
                                                                        </div>";
                                                                  }
							?>
								<!--<li><a href="#">Advance Oracle</a></li>
								<li><a href="#">Basic PHP</a></li>
								<li><a href="#">Electronics</a></li>
								<li><a href="#">Java Resources</a></li>
								<li><a href="#">Courses Education</a></li>-->
							
					<div class="col-xs-12 col-sm-6 col-md-3 footer">
						<div class="lgx-footer-single">
							<h2 class="title">أكاديمية تطوير المهارات للإستشارات التعليمية </h2>
							<ul class="list-unstyled">
								<li><a href="about.php">عنّا</a></li>
								<li><a href="courses.php">الدورات</a></li>
								<li><a href="events.php">الاحداث</a></li>
								<li><a href="gallery.php">معرض الصور</a></li>
								<li><a href="contact.php">تواصل معنا</a></li>
							</ul>
						</div>
					</div>
					
					
					<!--<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="lgx-footer-single">
							<h2 class="title">Instagram Feed</h2>
							<div id="instafeed">
							</div>
						</div>
					</div>-->
				</div>
				<div class="lgx-footer-bottom">
				<ul class=" list-inline lgx-social-footer">
						<!--<li><a href=""><i class="fa fa-twitter"></i></a></li>-->
						<li><a href="https://web.facebook.com/upskills1/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
<!--
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
-->
						<li><a href="https://www.linkedin.com/in/upskills-academy-b67743154/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<!--						<li><a href=""><i class="fa fa-instagram"></i></a></li>-->
<!--						<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>-->
						<li><a href="https://www.youtube.com/channel/UCIeGyNQeeS-Etd_bwRXEZ5A/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
					</ul>
					<div class="lgx-copyright">
						<!--<ul class="list-inline">
							<li><a href="#">About</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>-->
						<p>© 2019 | جميع الحقوق محفوظة | <a href=""> <b>UpSkillas Academy</b></a></p>
					</div>
					
				</div>

			</div>
			<!-- //.CONTAINER -->
		</div>
		<!-- //.footer Middle -->
	</div>
</footer>
<!--FOOTER END-->


<!-- Preloader -->
	<div class="preloader"></div>
<!-- preloader END-->


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<!-- ajax for preloader-->
<script src="./assets/js/ajax.js"></script>
<!-- ajax for preloader-->
<script>
	$(window).load(function (){
		$('.preloader').fadeOut('slow');
	});
</script>

<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="./assets/libs/bootstrap/js/bootstrap.min.js"></script>


<script src="./assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="./assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>-->

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="./assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="./assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="./assets/libs/owlcarousel/owl.carousel.min.js"></script>


<!-- COUNTDOWN   -->
<script src="./assets/libs/countdown.js"></script>

<!-- Counter JS -->
<script src="./assets/libs/waypoints.min.js"></script>
<script src="./assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- PORTFOLIO FILTER   -->
<script src="./assets/libs/isotope/isotope.pkgd.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="./assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="./assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="./assets/libs/typed/typed.min.js"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="./assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="./assets/js/custom.script.js"></script>

<!--<div class="lgx-switcher-loader"></div>-->
<!-- For Demo Purpose Only// Remove From Live -->
<script src="./switcher/js/switcherd41d.js?"></script>
<!-- For Demo Purpose Only //Remove From Live-->



</body>

<!-- Mirrored from themearth.com/demo/html/educationplus/view/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 10:28:37 GMT -->

</html>

</html>

</html>

</html>
