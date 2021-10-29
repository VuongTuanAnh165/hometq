<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-footer wow fadeInDown">
                    <div class="top-footer-left">
                        <div class="logo-footer">
                            <a href="<?php echo base_url()?>index.php"><img
                                    src="<?php echo base_img('company') ?>photo/<?php echo $company['company_logo']?>"
                                    alt="images" width="150px" height="60px"></a>
                        </div>
                    </div>
                    <div class="top-footer-right">
                        <div class="footer-contact-info">
                            <div class="footer-info-item">
                                <div class="location">
                                    <div class="icon-location"></div>
                                    <div class="content-location">
                                        <div class="heading-16px-rubik"><?php echo $company['company_address'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info-item">
                                <div class="phone-call">
                                    <div class="icon-phone-call"></div>
                                    <div class="content-phone-call">
                                        <div class="heading-16px-rubik"><a
                                                href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info-items">
                                <div class="email">
                                    <div class="icon-email"></div>
                                    <div class="content-email">
                                        <div class="heading-16px-rubik"><a
                                                href="mailto:<?php echo $company['company_email'] ?>"><?php echo $company['company_email'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-footer wow fadeInUp">
                    <div class="footer-item">
                        <div class="widgets-about padding-top-listfooter">
                            <p class="heading-jost-20px">
                                Về chúng tôi
                            </p>
                            <p class="text-decs">
                                Công ty Cổ Phần Phát Triển Đô Thị Xanh T&amp;Q
                            </p>
                            <p><b>~ Chuyên nghiệp ~</b></p>
                            <p><b>~ Sáng tạo ~</b></p>
                            <p><b>~ Màu xanh ~</b></p>
                            <p><b>~ Hiệu quả ~</b></p>
                        </div>
                    </div>
                    <div style="width: 20%;" class="footer-item">
                        <div class="widgets-menu-1 padding-top-listfooter">
                            <p class="heading-jost-20px">
                                Menu
                            </p>
                            <ul class="list-menu-1 text-decs link-style4">
                                <li><a href="<?php echo base_url()?>index.php">Trang chủ</a> </li>
                                <li><a href="<?php echo base_url()?>pages/service_group/index.php">Dịch vụ</a> </li>
                                <li><a href="<?php echo base_url()?>pages/project/index.php">Dự án</a> </li>
                                <li><a href="<?php echo base_url()?>pages/post_type/index.php">Tin tức</a> </li>
                                <li><a href="<?php echo base_url()?>pages/user_tb/index.php">Liên hệ</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-item" style="width:45%;">
                        <div class="widgets-menu-2">
                            <p class="heading-jost-20px">
                                Chính sách
                            </p>
                            <ul class="list-menu-2 text-decs link-style4">
                                <?php foreach ($policies as $item) : ?>
                                <li><a class="heading-menu2"
                                        href="#"><?php echo $item['policies_title'] ?></a> </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-item">
                        <div class="widgets-about padding-top-listfooter">
                            <p class="heading-jost-20px">
                                Bản đồ
                            </p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3108.92751944692!2d105.7975575103029!3d21.034693068973965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab40a938cc61%3A0xc85d3ac4f97150af!2zNjkgRMawxqFuZyBRdeG6o25nIEjDoG0sIFF1YW4gSG9hLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1635145148955!5m2!1svi!2s"
                                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright link-style4">
                        <p class="copyright-text">
                            Copyright 2021 by Công ty Cổ Phần Phát Triển Đô Thị Xanh T&amp;Q
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<!-- btn go top -->
<div class="button-go-top">
    <a href="#" title="" class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!--====== Start Call-zalo ======-->
<div class="global-thread-create-ctas swap-positions">
    <a href="https://zalo.me/0862048266 " title="0862048266 " target="" rel="nofollow">
        <div class="zalo"></div>
    </a>
</div>
<!--====== End Call-zalo ======-->

<div class="global-thread-create-cta swap-position">
    <div class="coccoc-alo-ph-circle-fill animate__animated  animate__pulse" style="background-color: #65c86b">&nbsp;
    </div>
    <a id="hotline-cta" href="tel:0862048266 " rel="nofollow" class="hotline-cta-swap">
        <div class="coccoc-alo-ph-img-circle animate__animated animate__tada"
            style="background-color: #65c86b; transform: scaleX(-1)">
            <div class="phone"></div>
        </div>
    </a>
</div>

<!-- / btn go top -->
</div>
<!-- /.boxed -->

<!-- Javascript -->
<script type="text/javascript" src="<?php echo base_url() ?>javascript/jquery.min.js"></script>
<script src="<?php echo base_url() ?>owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/jquery-validate.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/countto.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/main.js"></script>
<!-- /javascript -->

<!-- slider -->
<script src="<?php echo base_url() ?>rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url() ?>rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url() ?>javascript/rev-slider.js"></script>

<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js"></script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js">
</script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js"></script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js">
</script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js">
</script>
<script src="<?php echo base_url() ?>rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>


<!-- Javascript -->
<script type="text/javascript" src="<?php echo base_url() ?>javascript/gmap3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>javascript/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>


</body>

</html>