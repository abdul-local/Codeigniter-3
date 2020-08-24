<?php $this->load->view('partials/header');  ?>
<!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url();?>asset/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Camp Abdul</h1>
            <span class="subheading">Rumah Blog belajar web Developer dengan abdul</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <form>
        <input type="text" name="cari">
        <button type="submit" class="btn btn-primary">Cari</button>
        </form>
       <?php foreach($blogs as $key=>$blog):?>
        <div class="post-preview">
            <a href="<?php echo site_url('blog/detail/'.$blog['url']);?>">
              <h2 class="post-title">
                <?php echo $blog['title'];?>
               </h2>
             </a>
            <p class="post-meta">Posted on <?php echo $blog['date'];?>
                <a href="<?php echo site_url('blog/edit/'.$blog['id']);?>"> Edit</a>
                <a href="<?php echo site_url('blog/delete/'.$blog['id']);?>"> 
                    Delete
                </a>
            </p>              
            <p><?php echo $blog['content'];?></p>
        </div>
        <hr>
        <?php endforeach; ?>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts ?</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
<?php $this->load->view('partials/footer');  ?>