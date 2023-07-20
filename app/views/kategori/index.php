
<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?= BASEURL ?>" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span><?= ucfirst($data['nama_kategori']) ?></span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-2 pd--30-0">
                        <ul class="nav row AdjustRow">
                            <?php
                            $no = 1; 
                            foreach($data['data_kategori'] as $row){
                            ?>
                                <li class="col-md-6 col-sm-12 col-xs-6 col-xss-12">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-2">
                                        <div class="post--img">
                                            <a href="<?= BASEURL . "/berita/" . $row['url_berita'] ?>" class="thumb"><img src="<?= BASEURL . '/gambar_berita/' . $row['nama_gambar'] ?>" alt="" style="max-height:200px; height:200px;"></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#"><?= $row['redaksi'] ?></a></li>
                                                    <li><a href="#"><?= $row['tanggal'] ?></a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="<?= BASEURL . "/berita/" . $row['url_berita'] ?>" class="btn-link"><?= $this->model('Kategori_model')->batasJudul($row['judul_berita'], 12) ?></a></h3>
                                                </div>
                                            </div>

                                            <div class="post--content">
                                                <p><?= $this->model('Kategori_model')->batasDeskripsi($row['isi_berita'], 30) ?></p>
                                            </div>

                                            <div class="post--action">
                                                <a href="news-single-v1.html">Continue Reading...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <?php
                                if ($no == 2){
                                    ?>
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider divider--25">
                                        <!-- Divider End -->
                                    </li>
                                    <?php
                                    $no = 1;
                                } else {
                                    ?>
                                    <li class="col-xs-12 hidden-lg hidden-md hidden-xs shown-xss">
                                        <!-- Divider Start -->
                                        <hr class="divider divider--25">
                                        <!-- Divider End -->
                                    </li>
                                    <?php
                                    $no++;
                                }
                            } 
                            ?>
                        </ul>
                    </div>
                    <!-- Post Items End -->
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Widget Start -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Berita Terpopuler</h2>
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

                        <!-- Widget Start -->
                    
                    </div>
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
    </div>
</div>
<!-- Main Content Section End -->