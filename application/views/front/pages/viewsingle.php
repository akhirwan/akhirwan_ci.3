  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(assets/front/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <?php foreach($blog as $a){ ?>
		  <h2 class="intro-title mb-4"><?php echo $a->title ?></h2>
		  <?php } ?>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?php echo base_url().'blog';?>">Blog</a>
            </li>
            <li class="breadcrumb-item active">Artikel</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
		
		  <?php if(count($article) == 0){ ?>
			  <center>
			    <h3 class="mt-5"> Artikel Tidak Ditemukan. </h3>
			  </center>
		  <?php } ?>
		  <?php foreach($article as $a){ ?>
          <div class="post-box">
            <div class="post-thumb">
			<?php if($a->cover != ""){ ?>
              <img src="<?php echo base_url();?>images/articles/<?php echo $a->cover ?>" class="img-fluid" alt="<?php echo $a->title ?>">
			<?php } ?>
            </div>
            <div class="post-meta">
              <h1 class="article-title"><?php echo $a->title ?></h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#"><?php echo $a->name ?></a>
                </li>
                <li>
                  <span class="ion-pricetag"></span>
                  <a href="#"><?php echo $a->cat_name ?></a>
                </li>
              </ul>
            </div>
            <div class="article-content">
              <?php echo $a->content ?>
            </div>
          </div>
          <?php } ?>         
        </div>
        <div class="col-md-4">
		  <?php $this->load->view('front/templates/viewsidebar');?>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->