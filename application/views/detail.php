<?php $this->load->view('partials/header'); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url(); ?>asset/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $blog['title']; ?></h1>
            <span class="meta">Posted on <?php echo $blog['date']; ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo $blog['content']; ?>
       </div>      
      </div>
    </div>
  </article>

  <hr>
<?php $this->load->view('partials/footer'); ?>
