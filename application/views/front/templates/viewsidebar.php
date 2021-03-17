          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Search</h5>
            <div class="sidebar-content">
              <?php echo form_open(base_url().'search'); ?>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Recent Post</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
			  <?php
				$article = $this->db->query("select * from article,category,user where status='publish' and author=uid and category=cat_id order by id desc limit 3")->result();
				foreach($article as $a){
			  ?>
                <li>
                  <a href="<?php echo base_url().$a->slug; ?>"><?php echo $a->title; ?></a>
                </li>
				<?php } ?>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Halaman</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
			    <?php 
				  $hal = $this->M_data->get_data('pages')->result();
				  foreach($hal as $h){
			    ?>
                <li>
                  <a href="<?php echo base_url().'pages/'.$h->page_slug; ?>"><?php echo $h->page_title; ?></a>
                </li>
				<?php } ?>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Kategori</h5>
            <div class="sidebar-content">
              <ul>
			    <?php 
				  $cat = $this->M_data->get_data('category')->result();
				  foreach($cat as $c){
			    ?>
                <li>
                  <a href="<?php echo base_url().'category/'.$c->cat_slug; ?>"><?php echo $c->cat_name; ?></a>
                </li>
				<?php } ?>
              </ul>
            </div>
          </div>