  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/front/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <!--<div class="col-md-8">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                      <form action="<?php //echo base_url().'front/message';?>" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-6">
							<div class="col-md-12 mb-3">
							  <div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							</div>
							<div class="col-md-12 mb-3">
							  <div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div>
							</div>
							<div class="col-md-12 mb-3">
								<div class="form-group">
								  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								  <div class="validation"></div>
								</div>
							</div>
                        </div>
                        <div class="col-md-6">
							<div class="col-md-12 mb-3">
							  <div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							  </div>
							</div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>-->
                <div class="col-md-12">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      <?php echo $config->description ?>
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> <?php echo $config->address ?></li>
                      <li><span class="ion-ios-telephone"></span> <?php echo $config->phone ?></li>
                      <li><span class="ion-email"></span> <?php echo $config->email ?></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="<?php echo $config->link_fb ?>"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="<?php echo $config->link_ig ?>"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href="<?php echo $config->link_li ?>"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                      <li><a href="<?php echo $config->link_github ?>"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="copyright-box">
						<p class="copyright">&copy; Copyright <strong>Akhirwan Novendi</strong>. All Rights Reserved</p>
						<div class="credits">2019</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</section>
  <!--/ Section Contact-footer End /-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>assets/front/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/popper/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/counterup/jquery.counterup.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>assets/front/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url(); ?>assets/front/js/main.js"></script>

</body>
</html>
