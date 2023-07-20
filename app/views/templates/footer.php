<!-- Footer Section Start -->
        <footer class="footer--section">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pd--30-0 bg--color-2">
                <div class="container">
                    <div class="row AdjustRow">
                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Tentang Website</h2>

                                    <i class="icon fa fa-exclamation"></i>
                                </div>

                                <!-- About Widget Start -->
                                <div class="about--widget">
                                    <div class="content">
                                        <p>Website portal berita ini dibangun menggunakan bahasa pemrograman PHP dan menerapkan metode MVC (Model-View-Controller). Desainnya responsif, sehingga tampilan dapat menyesuaikan dengan perangkat yang digunakan. Selain itu, website ini dilengkapi dengan fitur-fitur menarik dan intuitif untuk memberikan pengalaman pengguna yang optimal.</p>
                                    </div>
                                    <br>
                                    <ul class="nav">
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <a href="mailto:mahdialakbar@gmail.com">mahdialakbar@gmail.com</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a href="tel:+62 882-9731-5157">+62 882-9731-5157</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- About Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Berita Teknologi</h2>

                                    <i class="icon fa fa-expand"></i>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <?php foreach ($data['teknologi'] as $row): ?>
                                            <li><a href="<?= BASEURL . "/berita/" . $row['url_berita'] ?>" class="fa-angle-right"><?= $row['judul_berita'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Berita Ekonomi</h2>

                                    <i class="icon fa fa-bullhorn"></i>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <?php foreach ($data['ekonomi'] as $row): ?>
                                            <li><a href="<?= BASEURL . "/berita/" . $row['url_berita'] ?>" class="fa-angle-right"><?= $row['judul_berita'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Berita Politik</h2>

                                    <i class="icon fa fa-user-o"></i>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <?php foreach ($data['politik'] as $row): ?>
                                            <li><a href="<?= BASEURL . "/berita/" . $row['url_berita'] ?>" class="fa-angle-right"><?= $row['judul_berita'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright bg--color-3">
                <div class="social--bg bg--color-1"></div>

                <div class="container">
                    <p class="text float--left">&copy; 2023 <a href="#">Portal Berita</a>. All Rights Reserved.</p>

                    <ul class="nav social float--right">
                        
                    </ul>

                    <ul class="nav links float--right">
                        <li><a href="<?= BASEURL ?>">Home</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery-3.2.1.min.js"></script>

    <!-- ==== Bootstrap Framework ==== -->
    <script src="<?= BASEURL ?>/assets/js/bootstrap.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery.sticky.min.js"></script>

    <!-- ==== HoverIntent Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery.hoverIntent.min.js"></script>

    <!-- ==== Marquee Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery.marquee.min.js"></script>

    <!-- ==== Validation Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery.validate.min.js"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/isotope.min.js"></script>

    <!-- ==== Resize Sensor Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/resizesensor.min.js"></script>

    <!-- ==== Sticky Sidebar Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/theia-sticky-sidebar.min.js"></script>

    <!-- ==== Zoom Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery.zoom.min.js"></script>

    <!-- ==== Bar Rating Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery.barrating.min.js"></script>

    <!-- ==== Countdown Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/jquery.countdown.min.js"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="<?= BASEURL ?>/assets/js/retina.min.js"></script>

    <!-- ==== Google Map API ==== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="<?= BASEURL ?>/assets/js/main.js"></script>

</body>
</html>