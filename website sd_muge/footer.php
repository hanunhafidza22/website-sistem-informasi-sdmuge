<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Tentang Kami</h3>
                    </div>
                    <p>
                        <?= $info['tentang']; ?>
                    </p>
                    <div class="footer-right">
                        <ul class="footer-links-soi">
                            <li>
                                <a href="https://web.facebook.com/sdmuhammadiyahbojonggede?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/sdmuhbojonggede/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@sdmuhammadiyahbojonggede2620" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Kontak</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:<?= $info['email']; ?>"><?= $info['email']; ?></a></li>
                        <li><a href="<?= $info['website']; ?>"><?= $info['website']; ?></a></li>
                        <li>
                            <?= $info['alamat']; ?>
                        </li>
                        <li><?= $info['nohp']; ?></li>
                    </ul>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Peta Lokasi</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.240637155802!2d106.80170157395608!3d-6.491184563461511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c23b171ffb3d%3A0xf97dc42582170a94!2sSD%20Muhammadiyah%20Bojonggede!5e0!3m2!1sen!2sid!4v1682694864227!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</footer>
<!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-center">
                <p class="footer-company-name">
                    All Rights Reserved. &copy; <?= date('Y'); ?> <a href="#"><?= $sekolah['nama']; ?></a>
                </p>
            </div>
        </div>
    </div>
    <!-- end container -->
</div>