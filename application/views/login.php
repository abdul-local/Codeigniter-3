<?php $this->load->view('partials/header');  ?>
<!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url();?>asset/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Login</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
      <?php echo $this->session->flashdata('pesan'); ?>
        <?php echo form_open(); ?>
        <div class="form-group">
            <label>Username</label>
            <?php echo form_input('username',set_value('username'), 'class="form-control"'); ?>
            <!-- <input type="text" name="nama" class="form-control"> -->
        </div>
        <div class="form-group">
            <label>Password</label>
            <?php echo form_input('password',set_value('password'), 'class="form-control"'); ?>
            <!-- <input type="password" name="pwd" class="form-control"> -->
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
     </form>
      </div>
        </div>
            </div>


<?php $this->load->view('partials/footer');  ?>





