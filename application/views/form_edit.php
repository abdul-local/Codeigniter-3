<?php $this->load->view('partials/header');?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url(); ?>asset/img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
          <h1>Edit Artikel</h1>
            <span class="subheading">Silahkan edit tulisan Artikel anda</span>
          </div>
        </div>
      </div>
    </div>
  </header>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-8-md">
<form method="POST">
    
        <label>Judul</label><br>
        <input type="text" name="title" class="form-control" value="<?php echo $blog['title'];?>"><br>
        <label>Url</label><br>
        <input type="text" name="url" class="form-control"  value="<?php echo $blog['url'];?>"><br>
        <label>Konten</label><br>
        <textarea name="content" id="" cols="30" rows="10"><?php echo $blog['content'];?></textarea><br>
    <button type="submit" class="btn btn-primary">Edit Artikel</button>
</form>
</div>
</div>
</div>
<?php $this->load->view('partials/footer');?>