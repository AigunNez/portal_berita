<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?= BASEURL ?>" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li><a href="<?= BASEURL . '/kategori/' . $data['nama_kategori'] ?>" class="btn-link"><?= $data['nama_kategori'] ?></a></li>
            <li class="active"><span><?= $data['judul_berita'] ?></span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Item Start -->
                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--img">
                            <a href="#" class="thumb"><img src="<?= BASEURL ?>/gambar_berita/<?= $data['nama_gambar'] ?>" alt=""></a>
                        </div>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?= $data['redaksi'] ?></a></li>
                                <li><a href="#"><?= $data['tanggal'] ?></a></li>
                                <li><span><i class="fa fm fa-eye"></i><?= $data['dilihat'] ?></span></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4"><?= $data['judul_berita'] ?> </h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <?= $data['isi_berita'] ?>
                        </div>
                    </div>
                    <!-- Post Item End -->
            
                    <!-- Advertisement Start -->
                    <?php foreach($data['iklan']['panjang'] as $row): ?>
                        <div>
                            <a href="#">
                                <img src="<?= BASEURL . '/iklan/' . $row ?>" alt="" class="center-block">
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!-- Advertisement End -->

                    <!-- Post Social Start -->
                    <div class="post--social pbottom--30">
                        <span class="title"><i class="fa fa-share-alt"></i></span>
                        
                        <!-- Social Widget Start -->
                        <div class="social--widget style--4">
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social Widget End -->
                    </div>
                    <!-- Post Social End -->

                    <!-- Post Related Start -->
                    <div class="post--related ptop--30">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title" data-ajax="tab">
                            <h2 class="h4">Berita Terkait</h2>

                            <div class="nav">
                            </div>
                        </div>
                        <!-- Post Items Title End -->

                        <!-- Post Items Start -->
                        <div class="post--items post--items-2" data-ajax-content="outer">
                            <ul class="nav row" data-ajax-content="inner">
                                <?php foreach($data['berita_terkait'] as $row): ?>

                                    <li class="col-sm-6 pbottom--30">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="#" class="thumb">
                                                    <img src="<?= BASEURL . '/gambar_berita/' . $row['nama_gambar'] ?>" style="max-height:200px; height:200px" alt="">
                                                </a>
                                                <a href="#" class="cat"><?= $row['nama_kategori'] ?></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?= $row['nama_admin'] ?></a></li>
                                                        <li><a href="#"><?= $row['tanggal'] ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link"><?= $row['judul_berita'] ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="post--content">
                                                <p><?= $this->model('Berita_model')->batasDeskripsi($row['isi_berita'], 30) ?></p>
                                            </div>

                                            <div class="post--action">
                                                <a href="#">Lanjut Baca </a>
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
                    <!-- Post Related End -->
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">

                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Berita Populer</h2>
                            <i class="icon fa fa-newspaper-o"></i>
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
                    <!-- Widget End -->

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
                    <!-- Widget End -->
                </div>
            </div>
            <!-- Main Sidebar End -->
        </div>
    </div>
</div>
<!-- Main Content Section End -->