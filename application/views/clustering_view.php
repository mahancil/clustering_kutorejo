<?php $this->load->view('header'); ?>
<?php echo $map['js']; ?>
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
					<li class="colorlib-active"><a href="">Clustering</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/tambah_penyakit_cnt">Input Penyakit</a></li>

					
					
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
								<h1 class="mb-4"><span>Analisa Clustering</span></h1>
									<div class="col-md-12">
							            <div class="p-5 contact-form">
							              <div class="row">
							              	
										<div class="col-md-12">
											<h3> Peta Cluster </h3>
												
                                 		<body>
                                 			<?php echo $map['html']; ?>
                                
                              </body>
                              <h5>Keterangan:</h5>
                              			<div class="col-md-12">

                              				<div class="row">
                              			<img src="<?php echo base_url()?>/../assets/images/legend.png" style="height:auto; width:5%;" alt="">
                              		</div>
                              		</div>
                          
                              
										</div>
										<div class="col-md-12">
										</div>
										<!-- <div class="col-md-12">
											<h3> Daftar Desa </h3>
												<table border="1" class="table table-striped">
                                 		<body>
                                <tr>
                                    <th>Desa</th><th>Cluster</th>
                              
                                </tr>
                                <?php for($i=0;$i<count($kota);$i++) { ?>    
                                <tr>
                                  <td><?php echo $kota[$i]->desa ?></td>
                                  <td><?php if($centroid_tampil[$i]['min']==0){echo 'C1';} else if($centroid_tampil[$i]['min']==1){echo 'C2';} else if($centroid_tampil[$i]['min']==2){echo 'C3';} ?></td>                 
                                </tr>
                            <?php } ?>
                              </body>
                          </table>
                               -->
										</div>
							            </div>

								
	           		 
	           		 <!-- <div class="col-md-12">
							            <div class="p-5 contact-form">
							              <div class="row">
							              	
										<div class="col-md-6">
											<h3> Titik Pusat Terakhir </h3>
												<table border="1" class="table table-striped">
                                 		<body>
                                <tr>
                                    <th>Clustering</th><th>Desa</th><th>Gizi Buruk</th><th>Gizi Kurang</th><th><?php echo $this->session->userdata('penyakit1'); ?></th><th><?php echo $this->session->userdata('penyakit2'); ?></th><th><?php echo $this->session->userdata('penyakit3'); ?></th><th>Angka Kematian</th>
                              
                                </tr>
                                 
                                <tr>
                                  <td>C1</td>
                                  <td>Kepuhpandak</td>
                                  <td><?php echo $centroid1[0] ?></td><td><?php echo $centroid1[1] ?></td><td><?php echo $centroid1[2] ?></td><td><?php echo $centroid1[3] ?></td><td><?php echo $centroid1[4] ?></td><td><?php echo $centroid1[5] ?></td>                 
                                </tr>
                                <tr>
                                  <td>C2</td>
                                  <td>Gedangan</td>
                                  <td><?php echo $centroid2[0] ?></td><td><?php echo $centroid2[1] ?></td><td><?php echo $centroid2[2] ?></td><td><?php echo $centroid2[3] ?></td><td><?php echo $centroid2[4] ?></td><td><?php echo $centroid2[5] ?></td>               
                                </tr>
                                <tr>
                                  <td>C3</td>
                                  <td>Singowangi</td>
                                  <td><?php echo $centroid3[0] ?></td><td><?php echo $centroid3[1] ?></td><td><?php echo $centroid3[2] ?></td><td><?php echo $centroid3[3] ?></td><td><?php echo $centroid3[4] ?></td><td><?php echo $centroid3[5] ?></td>                 
                                </tr>
                            
                              </body>
                          </table>
                              
										</div>
							            </div>
							        </div>

								
	           		 </div> -->
	           		 <div class="col-md-12">
							              <div class="row">
							              	
										<div class="col-md-12">
											
												<table border="1" class="table table-striped">
													<h3> Analisa Hasil Clustering </h3>

                                 		<body>
                                <tr>
                                    <th>Clustering</th><th>Gizi Buruk</th><th>Gizi Kurang</th><th>Tingkat Kematian</th>
                                    <?php for($i = 1 ; $i<=$jumlah_penyakit; $i++){

                                    	echo '<th>'.$this->session->userdata('penyakit'.$i.'');'</th>';

                                    } ?>
                              
                                </tr>
                                   
                                <tr>
                                  <td>C1</td><td><?php if($centroid1[0]<$centroid2[0] && $centroid1[0]<$centroid3[0]){echo 'Rendah';} else if($centroid1[0]>$centroid2[0] && $centroid1[0]<$centroid3[0] || $centroid1[0]<$centroid2[0] && $centroid1[0]>$centroid3[0]){echo 'Sedang';} else if($centroid1[0]>$centroid2[0] && $centroid1[0]>$centroid3[0]){echo 'Tinggi';} ?></td>
                                  <td><?php if($centroid1[1]<$centroid2[1] && $centroid1[1]<$centroid3[1]){echo 'Rendah';} else if($centroid1[1]>$centroid2[1] && $centroid1[1]<$centroid3[1] || $centroid1[1]<$centroid2[1] && $centroid1[1]>$centroid3[1]){echo 'Sedang';} else if($centroid1[1]>$centroid2[1] && $centroid1[1]>$centroid3[1]){echo 'Tinggi';} ?></td>
                                  <td><?php if($centroid1[2]<$centroid2[2] && $centroid1[2]<$centroid3[2]){echo 'Rendah';} else if($centroid1[2]>$centroid2[2] && $centroid1[2]<$centroid3[2] || $centroid1[2]<$centroid2[2] && $centroid1[2]>$centroid3[2]){echo 'Sedang';} else if($centroid1[2]>$centroid2[2] && $centroid1[2]>$centroid3[2]){echo 'Tinggi';} ?></td>
                                  <?php for($i = 1 ; $i<=$jumlah_penyakit; $i++){
                                  echo '<td>'; if($centroid1[$i+2]<$centroid2[$i+2] && $centroid1[$i+2]<$centroid3[$i+2]){echo 'Rendah';} else if($centroid1[$i+2]>$centroid2[$i+2] && $centroid1[$i+2]<$centroid3[$i+2] || $centroid1[$i+2]<$centroid2[$i+2] && $centroid1[$i+2]>$centroid3[$i+2]){echo 'Sedang';} else if($centroid1[$i+2]>$centroid2[$i+2] && $centroid1[$i+2]>$centroid3[$i+2]){echo 'Tinggi';} echo '</td>';
                                  }?>         
                                </tr>
                            	
                                <tr>
                                  <td>C2</td><td><?php if($centroid2[0]<$centroid1[0] && $centroid2[0]<$centroid3[0]){echo 'Rendah';} else if($centroid2[0]>$centroid1[0] && $centroid2[0]<$centroid3[0] || $centroid2[0]<$centroid1[0] && $centroid2[0]>$centroid3[0]){echo 'Sedang';} else if($centroid2[0]>$centroid1[0] && $centroid2[0]>$centroid3[0]){echo 'Tinggi';} ?></td>
                                  <td><?php if($centroid2[1]<$centroid1[1] && $centroid2[1]<$centroid3[1]){echo 'Rendah';} else if($centroid2[1]>$centroid1[1] && $centroid2[1]<$centroid3[1] || $centroid2[1]<$centroid1[1] && $centroid2[1]>$centroid3[1]){echo 'Sedang';} else if($centroid2[1]>$centroid1[1] && $centroid2[1]>$centroid3[1]){echo 'Tinggi';} ?></td>
                                  <td><?php if($centroid2[2]<$centroid1[2] && $centroid2[2]<$centroid3[2]){echo 'Rendah';} else if($centroid2[2]>$centroid1[2] && $centroid2[2]<$centroid3[2] || $centroid2[2]<$centroid1[2] && $centroid2[2]>$centroid3[2]){echo 'Sedang';} else if($centroid2[2]>$centroid1[2] && $centroid2[2]>$centroid3[2]){echo 'Tinggi';} ?></td>
                                  <?php for($i = 1 ; $i<=$jumlah_penyakit; $i++){
                                  echo '<td>'; if($centroid2[3]<$centroid1[3] && $centroid2[3]<$centroid3[3]){echo 'Rendah';} else if($centroid2[3]>$centroid1[3] && $centroid2[3]<$centroid3[3] || $centroid2[3]<$centroid1[3] && $centroid2[3]>$centroid3[3]){echo 'Sedang';} else if($centroid2[3]>$centroid1[3] && $centroid2[3]>$centroid3[3]){echo 'Tinggi';} echo '</td>' ;   
                                  }?>      
                                </tr>
                                <tr>
                                  <td>C3</td><td><?php if($centroid3[0]<$centroid1[0] && $centroid3[0]<$centroid2[0]){echo 'Rendah';} else if($centroid3[0]>$centroid2[0] && $centroid3[0]<$centroid1[0] || $centroid3[0]<$centroid2[0] && $centroid3[0]>$centroid1[0]){echo 'Sedang';} else if($centroid3[0]>$centroid1[0] && $centroid3[0]>$centroid2[0]){echo 'Tinggi';} ?></td>
                                  <td><?php if($centroid3[1]<$centroid1[1] && $centroid3[1]<$centroid2[1]){echo 'Rendah';} else if($centroid3[1]>$centroid2[1] && $centroid3[1]<$centroid1[1] || $centroid3[1]<$centroid2[1] && $centroid3[1]>$centroid1[1]){echo 'Sedang';} else if($centroid3[1]>$centroid1[1] && $centroid3[1]>$centroid2[1]){echo 'Tinggi';} ?></td>
                                  <td><?php if($centroid3[2]<$centroid1[2] && $centroid3[2]<$centroid2[2]){echo 'Rendah';} else if($centroid3[2]>$centroid2[2] && $centroid3[2]<$centroid1[2] || $centroid3[2]<$centroid2[2] && $centroid3[2]>$centroid1[2]){echo 'Sedang';} else if($centroid3[2]>$centroid1[2] && $centroid3[2]>$centroid2[2]){echo 'Tinggi';} ?></td>
                                  <?php for($i = 1 ; $i<=$jumlah_penyakit; $i++){
                                  echo '<td>'; if($centroid3[3]<$centroid1[3] && $centroid3[3]<$centroid2[3]){echo 'Rendah';} else if($centroid3[3]>$centroid2[3] && $centroid3[3]<$centroid1[3] || $centroid3[3]<$centroid2[3] && $centroid3[3]>$centroid1[3]){echo 'Sedang';} else if($centroid3[3]>$centroid1[3] && $centroid3[3]>$centroid2[3]){echo 'Tinggi';} echo '</td>';  
                                  }?>           
                                </tr>
                            
                              </body>
                              </table>
										</div>
							            </div>
							            </div>
							        </div>
								
	           		 </div>
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