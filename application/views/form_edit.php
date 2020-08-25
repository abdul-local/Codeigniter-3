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
        <div class="col-md-8">

<!-- <form method="POST"> -->
<!-- memunculkan pesan error mengunakan validation -->
<div class="alert alert-warning">
<?php echo validation_errors() ?>
</div>
<?php echo form_open_multipart();   ?>
        <div class="form-group">
        <label>Judul</label>
        <?php echo form_input('title', set_value('title',$blog['title']), 'class="form-control"') ?>
        </div>
        <div class="form-group">
        <label>Url</label>
        <?php echo form_input('url',set_value('url',$blog['url']), 'class="form-control"') ?>
        </div>
        <div class="form-group">
        <label>Konten</label>
        <?php echo form_textarea('content',set_value('content',$blog['content']), 'class="form-control"') ?>
        </div>
        <div class="form-grpup">
        <label >Cover</label>
        <?php echo form_upload('cover',$blog['cover'],'class="form-control"')  ?>
        </div>
        <br>
    <button type="submit" class="btn btn-primary">Edit Artikel</button>
</form>
</div>
</div>
</div>
<?php $this->load->view('partials/footer');?>