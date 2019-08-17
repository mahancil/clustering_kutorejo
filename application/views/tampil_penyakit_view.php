<?php $this->load->view('header'); ?>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html"><span class="img" style="background-image: url(<?php echo base_url()?>/../assets/images/dinkes.png);"></span>PUSKESMAS KUTOREJO </a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="<?php echo base_url(); ?>index.php/dashboard_cnt">Dasboard</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/upload_cnt">Upload Data</a></li>
					<li><a href="">Tampil Data</a></li>
					<li><a href="">Clustering</a></li>
					<li class="colorlib-active"><a href="<?php echo base_url(); ?>index.php/tambah_penyakit_cnt">Input Penyakit</a></li>
					
					
				</ul>
			</nav>

			
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section-no-padding">
				<div class="hero-wrap">
					<div class="overlay"></div>
					<div class="d-flex">
						<!-- <div class="author-image text img p-md-5" style="background-image: url(images/author.jpg);">
							
						</div> -->
						<div class="author-info text col-md-12">
							<div class="desc">
								<h1 class="mb-4"><span>Daftar Penyakit</span></h1>
									<a href="<?php echo base_url(); ?>index.php/tambah_penyakit_cnt/create"><button class="btn btn-primary py-3 px-5">Tambah</button></a>
									<div class="col-md-12">
							            <!-- <div class="bg-light p-5 contact-form"> -->
							            	<div class="form-group">
							              </div>
							               <table border="1" class="table table-striped">
                                 <body>
                                <tr>
                                    <th>Penyakit</th><th>Action</th>
                              
                                </tr>
                                <?php foreach ($penyakit as $key) { ?>
    
                                <tr>
                                  <td><?php echo $key->nama_penyakit ?></td>
                                  <td align="center"><?php echo "<a href='".base_url()."index.php/tambah_penyakit_cnt/update/".$key->id_penyakit."'><button class='btn btn-info'>Edit</button></a>"?><?php echo "<a href='".base_url()."index.php/tambah_penyakit_cnt/delete/".$key->id_penyakit."'><button class='btn btn-danger'>Delete</button></a>"?></td>                
                                </tr>
                              </body>
                              <?php } ?>

                            </table>
								
	            <!-- </div> -->
						</div>
					</div>
				</div>
			</section>
			
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


   </body>
<?php $this->load->view('footer'); ?>