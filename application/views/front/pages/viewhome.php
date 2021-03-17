<div id="home" class="intro route bg-image" style="background-image: url(assets/front/img/akhirwan.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
		<div class="table-cell">
			<div class="container">
				<!--<p class="display-6 color-d">Hello, world!</p>-->
				<h1 class="intro-title mb-4"><?php echo $config->name ?></h1>
				<p class="intro-subtitle"><span class="text-slider-items">Owner and Developer of akhirwan.my.id,Web Developer,Web Apps Programmer,System Analyst,DBMS Administrator</span><strong class="text-slider"></strong></p>
				<!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
			</div>
		</div>
	</div>
</div>
  <!--/ Intro Skew End /-->
  <?php foreach($about as $a){?>
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              About Me
            </h3>
            <p class="subtitle-a">
              <?php echo $a->page_title ?>
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
			<?php echo $a->page_content ?>
          </div>
        </div>
      </div>
	  
    </div>
  </section>  
  <!--/ Section Services Star /-->
  <?php }?>
  
  <section id="service" class="services-mf route">
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/front/img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-6">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">8</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">36</p>
              <span class="counter-text">CERTIFIED SKILLS</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Experience
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
		<?php foreach($expert as $e){?>
        <div class="col-md-4">
		<a href="<?php echo base_url().$e->slug; ?>" >
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle">
			  <img src="<?php echo base_url(); ?>images/articles/<?php echo $e->cover ?>" class="img-fluid" width="75px" alt="<?php echo $e->cover ?>">
			  </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo (substr($e->title,0,20)); ?></h2>
              <p class="s-description text-center">
                <?php //echo (substr($e->content,0,200)); ?>
              </p>
            </div>
          </div>
		</a>
        </div>
		<?php } ?>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->


  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
		  <?php foreach($port as $e){?>
      <div class="row">
        <div class="col-md-12">
		  <div class="work-box">
            <a href="<?php echo base_url().$e->slug; ?>">
              <div class="work-img">
                <img src="<?php echo base_url(); ?>images/articles/<?php echo $e->cover ?>" alt="" height="50px" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $e->title ?></h2>
                    <div class="w-more">
                      <span class="w-ctegory"></span><span class="w-date"><?php echo (substr($e->content,0,40)); ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
		  <?php }?>
        
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/front/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="<?php echo base_url(); ?>assets/front/img/akhirwan02.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Akhirwan Novendi</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Maju perut pantat mundur
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Blog Star /
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Artikel terbaru dari kami
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
		<?php foreach($blog as $b){?>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="<?php echo base_url().$b->slug; ?>">
			  <?php if($b->cover != ""){ ?>
				<img src="<?php echo base_url(); ?>images/articles/<?php echo $b->cover ?>" alt="" class="img-fluid">
			  <?php } ?>
			  </a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?php echo $b->cat_name; ?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="<?php echo base_url().$b->slug; ?>"><?php echo $b->title?></a></h3>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <span class="author"><?php echo $b->name; ?></span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> <?php echo date('d-M-Y', strtotime($b->update));?>
              </div>
            </div>
          </div>
        </div>
		<?php } ?>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->
