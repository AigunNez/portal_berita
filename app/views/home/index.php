<!-- News Ticker Start -->
<div class="news--ticker">
	<div class="container">
		<div class="title">
			<h2>Berita Terbaru</h2>
		</div>

		<div class="news-updates--list" data-marquee="true">
			<ul class="nav">
				<?php foreach ($data['berita_list'] as $row) : ?>
					<li>
						<h3 class="h3"><a href="berita/<?= BASEURL . "/berita/". $row['url_berita'] ?>"><?= $row['judul_berita'] ?></a></h3>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<!-- News Ticker End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
	<div class="container">
		<!-- Main Content Start -->
		<div class="main--content">
			<!-- Post Items Start -->
			<div class="post--items post--items-1 pd--30-0">
				<div class="row gutter--15">
					<div class="col-md-3">
						<div class="row gutter--15">
							<div class="col-md-12 col-xs-6 col-xxs-12">
								<?php 
								foreach ($data['berita_header1'] as $row):	
								?>
									<div class="post--item post--layout-1 post--title-large">
										<div class="post--img">
											<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb">
												<img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 193px;height: 193px;">
											</a>
											<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

											<div class="post--info">
												<ul class="nav meta">
													<li><a href="#"><?= $row['redaksi'] ?></a></li>
													<li><a href="#"><?= $row['tanggal'] ?> 	</a></li>
												</ul>

												<div class="title">
													<h2 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 10); ?></a></h2>
												</div>
											</div>
										</div>
									</div>
								<?php
								endforeach;
								?>
								<!-- Post Item End -->
							</div>

							<div class="col-md-12 col-xs-6 col-xxs-12">
								<?php 
								foreach ($data['berita_header2'] as $row):	
								?>
									<div class="post--item post--layout-1 post--title-large">
										<div class="post--img">
											<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb">
												<img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 193px;height: 193px;">
											</a>
											<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

											<div class="post--info">
												<ul class="nav meta">
													<li><a href="#"><?= $row['redaksi'] ?></a></li>
													<li><a href="#"><?= $row['tanggal'] ?></a></li>
												</ul>

												<div class="title">
													<h2 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 10); ?></a></h2>
												</div>
											</div>
										</div>
									</div>
								<?php
								endforeach;
								?>
								<!-- Post Item End -->
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- Post Item Start -->
						<div class="post--item post--layout-1 post--title-larger">
							<?php foreach ($data['berita_header3'] as $row): ?>
								<div class="post--img">
									<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height:402px; height:402px"></a>
									<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

									<div class="post--info">
										<ul class="nav meta">
											<li><a href="#"><?= $row['redaksi'] ?></a></li>
											<li><a href="#"><?= $row['tanggal'] ?></a></li>
										</ul>

										<div class="title">
											<h2 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 20); ?></a></h2>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
						<!-- Post Item End -->
					</div>

					<div class="col-md-3">
						<div class="row gutter--15">
							<div class="col-md-12 col-xs-6 col-xxs-12">
								<!-- Post Item Start -->
								<div class="post--item post--layout-1 post--title-large">
									
									<?php foreach ($data['berita_header4'] as $row): ?>
										<div class="post--img">
											<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 193px;height: 193px;"></a>
											<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

											<div class="post--info">
												<ul class="nav meta">
													<li><a href="#"><?= $row['redaksi'] ?></a></li>
													<li><a href="#"><?= $row['tanggal'] ?></a></li>
												</ul>

												<div class="title">
													<h2 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 10); ?></a></h2>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
								<!-- Post Item End -->
							</div>

							<div class="col-md-12 col-xs-6 hidden-xxs">
								<!-- Post Item Start -->
								<div class="post--item post--layout-1 post--title-large">
									<?php foreach ($data['berita_header5'] as $row): ?>
										<div class="post--img">
											<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 193px;height: 193px;"></a>
											<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

											<div class="post--info">
												<ul class="nav meta">
													<li><a href="#"><?= $row['redaksi'] ?></a></li>
													<li><a href="#"><?= $row['tanggal'] ?></a></li>
												</ul>

												<div class="title">
													<h2 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 10); ?></a></h2>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
								<!-- Post Item End -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Post Items End -->
		</div>
		<!-- Main Content End -->

		<div class="row">
			<!-- Main Content Start -->
			<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
				<div class="sticky-content-inner">
					<div class="row">
						<!-- World News Start -->
						<div class="col-md-6 ptop--30 pbottom--30">
							<!-- Post Items Title Start -->
							<div class="post--items-title" data-ajax="tab">
								<h2 class="h4">Berita Politik</h2>
							</div>
							<!-- Post Items Title End -->

							<!-- Post Items Start -->
							<div class="post--items post--items-2" data-ajax-content="outer">
								<ul class="nav row gutter--15" data-ajax-content="inner">
									<li class="col-xs-12">
										<!-- Post Item Start -->
										<div class="post--item post--layout-1">
											<div class="post--img">
												<?php foreach ($data['berita_politik_utama'] as $row): ?>
													<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 219px;height: 219px;"></a>
													<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="#"><?= $row['redaksi'] ?></a></li>
															<li><a href="#"><?= $row['tanggal'] ?></a></li>
														</ul>

														<div class="title">
															<h2 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 10); ?></a></h2>
														</div>
													</div>
												<?php endforeach; ?>
											</div>
										</div>
										<!-- Post Item End -->
									</li>
									<li class="col-xs-12">
										<!-- Divider Start -->
										<hr class="divider">
										<!-- Divider End -->
									</li>
									<?php 
									$no_politik = 0;
									foreach ($data['berita_politik'] as $row):
										if ($no_politik == 2){
											?>
											<li class="col-xs-12">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											<?php
										}
										?>
										<li class="col-xs-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 100px;height: 100px;"></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="#"><?= $row['redaksi'] ?></a></li>
															<li><a href="#"><?= $row['tanggal'] ?></a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 8); ?></a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
									<?php 
									$no_politik++;
									endforeach; 
									?>

								<!-- Preloader Start -->
								<div class="preloader bg--color-0--b" data-preloader="1">
									<div class="preloader--inner"></div>
								</div>
								<!-- Preloader End -->
							</div>
							<!-- Post Items End -->
						</div>
						<!-- World News End -->

						<!-- Technology Start -->
						<div class="col-md-6 ptop--30 pbottom--30">
							<!-- Post Items Title Start -->
							<div class="post--items-title" data-ajax="tab">
								<h2 class="h4">Berita Teknologi</h2>

							</div>
							<!-- Post Items Title End -->

							<!-- Post Items Start -->
							<div class="post--items post--items-3" data-ajax-content="outer">
								<ul class="nav" data-ajax-content="inner">
									<?php foreach ($data['berita_teknologi_utama'] as $row): ?>
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 219px;height: 219px;"></a>
													<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="#"><?= $row['redaksi'] ?></a></li>
															<li><a href="#"><?= $row['tanggal'] ?></a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 12); ?></a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
									<?php endforeach; ?>
									<?php foreach ($data['berita_teknologi'] as $row): ?>
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height:70px;height: 70px;"></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="#"><?= $row['redaksi'] ?></a></li>
															<li><a href="#"><?= $row['tanggal'] ?></a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 12); ?></a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
									<?php endforeach; ?>
								</ul>

								<!-- Preloader Start -->
								<div class="preloader bg--color-0--b" data-preloader="1">
									<div class="preloader--inner"></div>
								</div>
								<!-- Preloader End -->
							</div>
							<!-- Post Items End -->
						</div>
						<!-- Technology End -->

						<!-- Ad Start -->
						<div class="col-md-12 ptop--30 pbottom--30">
							<!-- Advertisement Start -->
							<?php foreach($data['iklan']['panjang'] as $row): ?>
								<div class="ad--space">
									<a href="#">
										<img src="<?= BASEURL . '/iklan/' . $row ?>" alt="" class="center-block">
									</a>
								</div>
							<?php endforeach; ?>
							<!-- Advertisement End -->
						</div>
						<!-- Ad End -->

						<!-- Finance Start -->
						<div class="col-md-12 ptop--30 pbottom--30">
							<!-- Post Items Title Start -->
							<div class="post--items-title" data-ajax="tab">
								<h2 class="h4">Berita Ekonomi</h2>

							</div>
							<!-- Post Items Title End -->

							<!-- Post Items Start -->
							<div class="post--items post--items-2" data-ajax-content="outer">
								<ul class="nav row" data-ajax-content="inner">
									<li class="col-md-6">
										<!-- Post Item Start -->
										<?php foreach ($data['berita_ekonomi_utama'] as $row): ?>
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="<?= BASEURL . "/berita/".  $row['url_berita']?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height:250px;"></a>
													<a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="#"><?= $row['redaksi'] ?></a></li>
															<li><a href="#"><?= $row['tanggal'] ?></a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 30); ?></a></h3>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
										<!-- Post Item End -->
									</li>

									<li class="col-md-6">
										<ul class="nav row">
											<li class="col-xs-12 hidden-md hidden-lg">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											
											<?php 
											$no_ekonomi = 0;
											foreach ($data['berita_ekonomi'] as $row):
												if ($no_ekonomi == 2){
													?>
													<li class="col-xs-12">
														<!-- Divider Start -->
														<hr class="divider">
														<!-- Divider End -->
													</li>
													<?php
												}
												?>
												<li class="col-xs-6">
													<!-- Post Item Start -->
													<div class="post--item post--layout-2">
														<div class="post--img">
															<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height: 100px;height: 100px;"></a>

															<div class="post--info">
																<ul class="nav meta">
																	<li><a href="#"><?= $row['redaksi'] ?></a></li>
																	<li><a href="#"><?= $row['tanggal'] ?></a></li>
																</ul>

																<div class="title">
																	<h3 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 8); ?></a></h3>
																</div>
															</div>
														</div>
													</div>
													<!-- Post Item End -->
												</li>
											<?php 
											$no_ekonomi++;
											endforeach; 
											?>
											
										</ul>
									</li>
								</ul>

								<!-- Preloader Start -->
								<div class="preloader bg--color-0--b" data-preloader="1">
									<div class="preloader--inner"></div>
								</div>
								<!-- Preloader End -->
							</div>
							<!-- Post Items End -->
						</div>
						<!-- Finance End -->

                        <!-- Foods and Recipes Start -->
						<div class="col-md-12 ptop--30 pbottom--30">
							<!-- Post Items Title Start -->
							<div class="post--items-title" data-ajax="tab">
								<h2 class="h4">Makanan &amp; Resep</h2>
							</div>
							<!-- Post Items Title End -->

							<!-- Post Items Start -->
							<div class="post--items" data-ajax-content="outer">
								<ul class="nav row gutter--15" data-ajax-content="inner">
									<?php foreach ($data['berita_makanan'] as $row): ?>
										<li class="col-md-4 col-xs-6 col-xxs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="thumb"><img src="gambar_berita/<?= $row['nama_gambar'] ?>" alt="" style="max-height:200px; height:200px;"></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="#"><?= $row['redaksi'] ?></a></li>
															<li><a href="#"><?= $row['tanggal'] ?></a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a href="<?= BASEURL . "/berita/". $row['url_berita'] ?>" class="btn-link"><?= $this->model('Home_model')->batasJudul($row['judul_berita'], 10); ?></a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<!-- Post Items End -->
						</div>
						<!-- Foods and Recipes End -->
					</div>
				</div>
			</div>
			<!-- Main Content End -->

			<!-- Main Sidebar Start -->
			<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
				<div class="sticky-content-inner">
                    <div class="widget"> 
                        <div class="widget--title" data-ajax="tab"> 
                            <h2 class="h4">Berita Populer</h2> 
                            
                        </div>
                        <div class="list--widget list--widget-1" data-ajax-content="outer"> 
                            <div class="post--items post--items-3"> 
                                <ul class="nav" data-ajax-content="inner"> 
                                    <?php foreach($data['berita_terpopuler'] as $row): ?>
                                    <li> 
                                        <div class="post--item post--layout-3"> 
                                            <div class="post--img">                                 
                                                <a href="<?= BASEURL ?>/berita/<?= $row['url_berita'] ?>" class="thumb">
                                                    <img src="<?= BASEURL . '/gambar_berita/' . $row['nama_gambar'] ?>" alt="" data-rjs="2">           
                                                </a> 
                                                <div class="post--info"> 
                                                    <ul class="nav meta"> 
                                                        <li>
                                                            <a href="#"><?= $row['nama_admin'] ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><?= $row['tanggal'] ?></a>
                                                        </li>
                                                    </ul> 
                                                    <div class="title"> 
                                                        <h3 class="h4">
                                                            <a href="<?= BASEURL ?>/berita/<?= $row['url_berita'] ?>" class="btn-link"><?= $row['judul_berita'] ?></a>
                                                        </h3> 
                                                    </div>
                                                </div>
                                            </div>          
                                        </div>      
                                    </li>
                                    <?php endforeach; ?>
                                </ul> 
                                <div class="preloader bg--color-0--b" data-preloader="1"> 
                                    <div class="preloader--inner"></div>
                                </div>
                            </div>
                        </div> 
                    </div>

					<!-- Widget Start -->
					<div class="widget">
						<div class="widget--title">
							<h2 class="h4">Iklan</h2>
							<i class="icon fa fa-bullhorn"></i>
						</div>

						<!-- Ad Widget Start -->
						<?php foreach($data['iklan']['kotak'] as $row): ?>
							<div>
								<a href="#">
									<img src="<?= BASEURL . '/iklan/' . $row ?>" alt="">
								</a>
							</div>
							<br>
						<?php endforeach; ?>
						<!-- Ad Widget End -->
					</div>
					<!-- Widget End -->
				</div>
			</div>
			<!-- Main Sidebar End -->
		</div>
			
		<!-- Advertisement Start -->
		<div class="ad--space pd--30-0">
			<a href="#">
				<img src="img/ads-img/ad-970x90.jpg" alt="" class="center-block">
			</a>
		</div>
		<!-- Advertisement End -->
	</div>
</div>
<!-- Main Content Section End -->

        
