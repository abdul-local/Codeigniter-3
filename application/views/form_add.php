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
          <div class="col-md-8">
              <!-- menggunakan multipart untuk mngembalikan text form dengan atribut entype -->
              <!-- gunakan fungsi validation_errors untuk mengecek eror yang terjadi -->
              <div class="alert alert-warning">
              <?php echo validation_errors() ?>
              </div>
              <?php echo form_open_multipart(); ?>
    <!-- <form action="" method="POST"> -->
     <div class="form-group">
    <label > Judul</label>
    <?php echo form_input('title', set_value('title'), 'class="form-control" '); ?>
    </div>
    <!-- <input type="text" name='judul' class="form-control"><br> -->
    <div class="form-group">
    <label >Url</label>
    <?php echo form_input('url', set_value('url') , 'class="form-control"')?>
    </div>
    <!-- <input type="text" name="url" class="form-control"><br> -->
    <div class="form-group">
    <label for="">Content</label>
    <?php echo form_textarea('content',set_value('content') ,'class="form-control"') ?>
    </div>
    <!-- <textarea name="content" id="" cols="30" rows="10"></textarea><br> -->
    <div class="form-group">
    <label >Upload</label>
    <?php echo form_upload('cover', set_value('cover') , 'class="form-control"')?>
    </div>
   
    <button type='submit'class="btn btn-primary">Simpan artikel</button>
    </form>
       </div>
    </div>
</div>
    <?php $this->load->view('partials/footer');