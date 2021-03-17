    <div class="intro intro-single route bg-image" style="background-image: url(assets/front/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <?php foreach($cat as $a){ ?>
		  <h2 class="intro-title mb-4"><?php echo $a->cat_name ?></h2>
		  <?php } ?>
		  <ol class="breadcrumb d-flex justify-content-center">
		    <li class="breadcrumb-item">
			  <a href="<?php echo base_url(); ?>">Home</a>
			</li>
			<li class="breadcrumb-item">
			  <a href="<?php echo base_url('blog'); ?>">Kategori</a>
			</li>
			<li class="breadcrumb-item active">Artikel</li>
		  </ol>
        </div>
      </div>
    </div>
  </div>
<section class="blog-wrapper sect-pt4" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if(count($article) == 0){ ?>
				<center>
					<h3 class="mt-5">Belum Ada Artikel Pada Kategori Ini.</h3>
				</center>
				<?php } ?>
				<?php foreach($article as $a){ ?>
				<div class="post-box">
					<div class="post-thumb">
					<?php if($a->cover != ""){ ?>
						<a href="<?php echo base_url().$a->slug ?>">
						<img src="<?php echo base_url(); ?>images/articles/<?php echo $a->cover ?>" alt="<?php echo $a->title ?>" class="img-fluid">
						</a>
					<?php } ?>
					</div>
					<div class="post-meta">
						<h1 class="article-title"><a href="<?php echo base_url().$a->slug ?>"><?php echo $a->title ?></a></h1>
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
				</div>
				<?php } ?>
				<?php echo $this->pagination->create_links(); ?>
			</div>
			<div class="col-md-4">
				<?php $this->load->view('front/templates/viewsidebar'); ?>
			</div>
		</div>
	</div>
</section>