<div class="msg" style="display:none;">
	<?php echo @$this->session->flashdata('msg'); ?>
</div>
<div class="row">
	<div class="col-md-3">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" alt="User profile picture">

				<h3 class="profile-username text-center"><?php echo $this->session->userdata('first_name')?> <?php echo $this->session->userdata('last_name'); ?></h3>
			
				<ul class="list-group list-group-unbordered">
					<li class="list-group-item" style="text-align:center">
						<b>Username</b><br><a><?php echo $this->session->userdata('username')?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>NIM</b><br><a><?php echo $this->session->userdata('nim')?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Email</b><br><a><?php echo $this->session->userdata('email')?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Phone</b><br><a><?php echo $this->session->userdata('phone')?></a>
					</li>
				</ul>
			</div>
		</div>
		</div>




        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-fw fa-user"></i>About Me</a></li>
              <li><a href="#resume" data-toggle="tab"><i class="fa fa-fw fa-file"></i>Resume</a></li>
              <li><a href="#contact" data-toggle="tab"><i class="fa fa-fw fa-envelope"></i>Contact</a></li>
            </ul>

            
            <div class="tab-content">
            	<!-- tampilan tab aboutme -->
              <div class="active tab-pane" id="about">                         
                <!-- <div class="box-header">                                     
            </div> -->
            <div class="box-body">
              
              <strong><i class="fa fa-briefcase margin-r-5"></i> Job Description : </strong>

              <p>
               <br> <?php echo $this->session->userdata('jobdesc')?> B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Find Me at :</strong>

              <p class="text-muted">
              <br><a class="btn btn-social-icon btn-facebook" target='_blank' href=""><i class="fa fa-facebook"></i></a>                     
              <a class="btn btn-social-icon btn-github" target='_blank' href="https://github.com/SandyWahyuPrasetyo"><i class="fa fa-github"></i></a>             
              <a class="btn btn-social-icon btn-instagram" target='_blank' href=""><i class="fa fa-instagram"></i></a>
              <a class="btn btn-social-icon btn-linkedin" target='_blank' href=""><i class="fa fa-linkedin"></i></a>            
              <a class="btn btn-social-icon btn-twitter" target='_blank' href=""><i class="fa fa-twitter"></i></a>
              <a class="btn btn-social-icon btn-google" target='_blank' href=""><i class="fa fa-envelope"></i></a>



              </p>

              <hr>
              
             
                      
            </div>



                           
              </div>

              <!-- tampilan tab resume -->
              <div class="tab-pane" id="resume">
                <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Asal Sekolah</strong>

              <p>
                <br><?php echo $this->session->userdata('asalsekolah')?>
              </p>
            
              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>
              
            	</div>               
              </div>
              <!-- /.tab-pane -->

              <!-- tampilan tab contact -->
              <div class="tab-pane" id="contact">
                <div class="box-body">                          
              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p>
                <br><?php echo $this->session->userdata('alamat')?>
              </p>              

              <hr>

              <strong><i class="fa fa-phone margin-r-5"></i> Mobile Number</strong>

              <p><br><?php echo $this->session->userdata('phone')?></p>
              </div>   
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

        <div class="col-md-9">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Kelompok 4</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">4 Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="<?php echo base_url(); ?>assets/img/sandywahyup.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Sandy Wahyu Prasetyo</a>
                      <span class="users-list-date">41514010090</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url(); ?>assets/img/no_image.png" alt="User Image">
                      <a class="users-list-name" href="#">Ariefana Ria Riszky</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url(); ?>assets/img/no_image.png" alt="User Image">
                      <a class="users-list-name" href="#">Eko Putra</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url(); ?>assets/img/no_image.png" alt="User Image">
                      <a class="users-list-name" href="#">Hafiz Mohamadsyah Putra</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->

	</div>
</div>
