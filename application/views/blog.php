<?php $this->load->view('partials/header');  ?>
<!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url();?>asset/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Selamat Datang</h1>
            <span class="subheading">Tempat belajar Coding </span>
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
      <?php echo $this->session->flashdata('pesan'); ?><br>
        <input type="text" name="cari">
        <button type="submit" class="">Cari</button>
        </form>
       <?php foreach($blog as $key=>$blog):?>
        <div class="post-preview">
            <a href="<?php echo site_url('blog/detail/'.$blog['url']);?>">
              <h2 class="post-title">
                <?php echo $blog['title'];?>
               </h2>
             </a>
            <p class="post-meta">Posted on <?php echo $blog['date'];?>
            <?php if(isset($_SESSION['username'])): ?>
                <a href="<?php echo site_url('blog/edit/'.$blog['id']);?>"> Edit</a>
                <a href="<?php echo site_url('blog/delete/'.$blog['id']);?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"> Delete</a>
            <?php else:?>
            </p>
            <?php endif; ?>             
            <p><?php echo $blog['content'];?></p>
        </div>
        <hr>
            
        <?php endforeach; ?>
        <?php  echo $this->pagination->create_links(); ?>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts ?</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
<?php $this->load->view('partials/footer');  ?>