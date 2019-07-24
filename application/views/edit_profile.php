        <?php $this->load->view('inc/header');?>


        <!-- Begin Page Content -->
        <body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Profile</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('HomeController/edit_profile_data');?>" >
                <div class="form-group ">
                
                    <input type="text" name="f_name" class="form-control form-control-user" required placeholder="First Name">
                    <?php echo form_error('f_name'); ?>
                
                </div>
                <div class="form-group ">
                
                    <input type="text" name="l_name" class="form-control form-control-user" required placeholder="Last Name">
                     <?php echo form_error('l_name'); ?>

                
                </div>
               <div class="form-group ">
                
                    <input type="number" name="mobile" class="form-control form-control-user" required placeholder="Mobile ">
                     <?php echo form_error('mobile'); ?>
                
                </div>

                <!-- <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user"  required placeholder="Email Address">
                   <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
              
                    <input type="password" name="password" class="form-control form-control-user"  required placeholder="Password">
                     <?php echo form_error('password'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password"  name="re_password" class="form-control form-control-user" required placeholder="Repeat Password">
                     <?php echo form_error('re_password'); ?>
                  </div> -->
          
                <input type="submit" name="submit" value="Save Changes" class="btn btn-primary btn-user btn-block">
      
              
              
              </form>
        <!-- /.container-fluid -->
        <?php $this->load->view('inc/footer');?>
