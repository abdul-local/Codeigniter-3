    <?php $this->load->view('partials/header'); ?>

    <header class="masthead" style="background-image: url('<?php echo base_url();?>asset/img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Tambah Artikel</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
      <div class="row justify-content-center">
          <div class="com-8-md">
    <form action="" method="POST">
    <label > Judul</label><br>
    <input type="text" name='judul' class="form-control"><br>
    <label >Url</label><br>
    <input type="text" name="url" class="form-control"><br>
    <label for="">Content</label><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <button type='submit'class="btn btn-primary">Simpan artikel</button>
    </form>
       </div>
    </div>
</div>
    <?php $this->load->view('partials/footer');