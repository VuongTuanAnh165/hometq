<?php require_once(__DIR__ . '/layout/header.php'); ?>

<?php
//Phần Sang làm

/*
    include './library/database.php';

    spl_autoload_register(function ($class) {
        include_once "class/" . $class . ".php";
    });
    $home = new home();
    */

//Phần Tuấn Anh làm
require_once(__DIR__ . '/autoload/autoload.php');

//Nhóm dịch vụ
$sql_service_group = "SELECT * FROM service_group WHERE service_gr_active=1";
$service_group = $db->fetchdata($sql_service_group);

//Nhóm dịch vụ rand()
$sql_service_group_rand = "SELECT * FROM service_group WHERE service_gr_active=1 ORDER BY RAND() LIMIT 4";
$service_group_rand = $db->fetchdata($sql_service_group_rand);

//dịch vụ
$sql_service = "SELECT * FROM service WHERE service_active=1";
$service = $db->fetchdata($sql_service);

//Công ty
$sql_company = "SELECT * FROM company WHERE company_active=1";
$company = $db->fetchcheck($sql_company);

//Dự án rand()
$sql_project_rand = "SELECT * FROM project WHERE project_active=1 ORDER BY RAND() LIMIT 4";
$project_rand = $db->fetchdata($sql_project_rand);

//bài viết 
$sql_post = "SELECT * FROM post,post_type WHERE post.post_type_id=post_type.post_type_id AND post_active=1";
$post = $db->fetchdata($sql_post);

//chính sách
$sql_policies = "SELECT * FROM policies WHERE policies_active=1";
$policies = $db->fetchdata($sql_policies);
?>

<!-- page title -->
<div class="page-title-home1">
    <div class="container-fluid">
        <div class="row">
            <div class="inner-title-home1">
                <!-- /.page-title -->
                <div class="flat-slider clearfix">
                    <div class="rev_slider_wrapper fullwidthbanner-container">
                        <div id="rev-slider2" class="rev_slider fullwidthabanner">
                            <ul>
                                <!-- Slide 1 -->
                                <?php foreach ($service as $item) : ?>
                                    <li data-transition="random">
                                        <!-- Main Image -->
                                        <!-- Layers -->
                                        <div class="tp-caption tp-resizeme text-one" data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-274','-50','-50','-50']" data-fontsize="['16','0','0','0']" data-lineheight="['20','0','0','0']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                            <h3 class="sub-title">DỊCH VỤ</h3>
                                        </div>

                                        <div class="tp-caption tp-resizeme text-two" data-x="['left','left','left','center']" data-hoffset="['-2','-2','5','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-130','-165',10','-15']" data-fontsize="['60','70','50','60']" data-lineheight="['70','80','64','48']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                            <div class="title-box">
                                                <h2 class="title-slider text-pri2-color"><?php echo $item['service_name'] ?></h2>
                                            </div>
                                        </div>

                                        <div class="tp-caption btn-text btn-linear hv-linear-gradient" data-x="['left','left','left','center']" data-hoffset="['-3','-3','5','0']" data-y="['middle','middle','middle','middle']" data-voffset="['48','40','180','300']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                            <div class="button-box">
                                                <div class="button res-btn-slider">
                                                    <a href="#" class="btn btn-left">Liên hệ</a>
                                                </div>
                                                <div class="button">
                                                    <a href="#" class="btn">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-caption tp-resizeme image-slider text-right " data-x="['right','right','right','right']" data-hoffset="['-29','-29','-150','-29']" data-y="['center','center','center','center']" data-voffset="['-88','-88','60','-88']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:0;z:[100%];rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:[100%];y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="900" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                            <?php echo "<img class='img-slide wow jackInTheBox' data-wow-delay='2500ms' data-wow-duration='3s' src='./pages_img/service/photo/" . $item['service_image'] . "' alt='' style='margin-top:-5%'>" ?>
                                        </div>
                                    </li>
                                    <!-- /End Slide 1 -->
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- flat-slider -->
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

<!-- features -->
<section class="flat-features">
    <div class="container-fluid">
        <div class="row">
            <div class=" item-four-column">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <span class="tf-icon icon-hand-gloves"></span>
                        <div class="content-features">
                            <a href="service-details.html">
                                <h3 class="section-heading-rubik-size20">
                                    Chuyên nghiệp
                                </h3>
                            </a>
                            <p class="section-desc">
                                Thi công các công trình cảnh quan sân vườn
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" item-four-column">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <span class="tf-icon icon-fruit-box"></span>
                        <div class="content-features">
                            <a href="service-details.html">
                                <h3 class="section-heading-rubik-size20">
                                    Sáng tạo
                                </h3>
                            </a>
                            <p class="section-desc">
                                Bảo trì, chăm sóc các cây xanh, tiểu cảnh ở các công trình
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" item-four-column">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <span class="tf-icon icon-seed"></span>
                        <div class="content-features">
                            <a href="service-details.html">
                                <h3 class="section-heading-rubik-size20">
                                    Màu xanh
                                </h3>
                            </a>
                            <p class="section-desc">
                                Cung cấp các giống cây xanh, thu mua những giống cây tốt
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" item-four-column">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <span class="tf-icon icon-seed"></span>
                        <div class="content-features">
                            <a href="service-details.html">
                                <h3 class="section-heading-rubik-size20">
                                    Hiệu quả
                                </h3>
                            </a>
                            <p class="section-desc">
                                Cung cấp các giống cây xanh, thu mua những giống cây tốt
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /features -->

<!-- about -->
<section class="flat-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="60" data-smobile="60">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-post center bd-radius-50-image">
                    <img class="main-post-about" src="images/home/the-girl-in-the-glasses.jpg" alt="images">
                    <!-- <img class="circel-inside" src="images/home/circle-about.png" alt="images"> -->
                    <div class="about-count-box themesflat-counter">
                        <div class="box">
                            <div class="inner-about-count-box">
                                
                                <span class="number-count number" data-speed="1500" data-to="<?php $date = getdate() ;echo ($date['year']-2009) ?>" data-inviewport="yes"><?php $date = getdate() ;echo ($date['year']-2009) ?></span>
                                <div class="caption-number-count">
                                    Năm kinh nghiệm
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-content-title wow fadeInUp">
                        <div class="section-subtitle">GIỚI THIỆU</div>
                        <div class="section-title"><?php echo $company['company_name'] ?></div>
                        <div class="section-desc"><?php echo $company['company_description'] ?></div>
                    </div>
                    <div class="button hover-up">
                        <a href="contact.html" class="btn2">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /about -->

<!-- Our services -->
<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="section-subtitle">DỊCH VỤ</h4>
                    <h2 class="section-title">DỊCH VỤ TẠI CÔNG TY CHÚNG TÔI</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="67" data-mobile="60" data-smobile="60">
                </div>
            </div>

            <?php foreach ($service_group_rand as $item) : ?>
                <div class="item-four-column">
                    <div class="our-services-box hover-up-style2 mg-bottom30 wow fadeInDown">
                        <div class="our-services-overlay"></div>
                        <span class="tf-icon icon-size icon-icon-farming-layer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>
                        <div class="content-features">
                            <a href="<?php echo base_url() ?>pages/service/index.php?id=<?php echo $item['service_gr_id']?>">
                                <h3 class="section-heading-jost-size22">
                                    <?php echo $item['service_gr_name'] ?></h3>
                            </a>
                            <p class="section-desc">
                                <?php echo $item['service_gr_description'] ?>
                            </p>
                            <div class="link2 link-style2">
                                <a href="<?php echo base_url() ?>pages/service/index.php?id=<?php echo $item['service_gr_id']?>" class="read-more">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- / Our service -->

<!-- our-profolio -->
<section class="flat-profolio">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="section-subtitle wow fadeInUp">Dự án</h4>
                    <h2 class="section-title wow fadeInUp">Từng dự án <br>đều được chú trọng cao</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="60" data-smobile="60">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($project_rand as $item) : ?>
                <div class="item-four-column">
                    <div class="list-box-profolio wow fadeInUp">
                        <div class="image-profolio bd-radius-8-image">
                            <img src="<?php echo base_img('project') ?>photo/<?php echo $item['project_img'] ?>" alt="images">
                            <div class="profolio-show">
                                <div class="profolio-info">
                                    <div class="info">
                                        <a href="<?php echo base_url()?>pages/project/project_details.php?id=<?php echo $item['project_id']?>">
                                            <h3 class="section-heading-jost-size20">
                                                <?php echo $item['project_status'] ?></h3>
                                        </a>
                                        <p class="desc-box"><?php echo $item['project_name'] ?></p>
                                    </div>
                                    <div class="button-next">
                                        <a class="profolio-btn" href="<?php echo base_url()?>pages/project/project_details.php?id=<?php echo $item['project_id']?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</section>
<!-- /our profolio -->

<!-- About 2nd -->
<section class="flat-about-2nd">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="content-left">
                        <div class="tag-logo">
                            <img src="<?php echo base_img('company') ?>photo/<?php echo $company['company_logo']?>" alt="images">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-right link-style3">
                    <h4 class="section-subtitle white wow fadeInUp">Khả năng của chúng tôi</h4>
                    <h3 class="section-title white wow fadeInUp">Đưa ra những giải pháp cho vấn đề của bạn</h3>
                    <p class="section-desc white wow fadeInUp">Công Ty Cổ Phần Và Phát Triển Đô Thị T&Q có đội ngũ nhân viên có kỹ thuật, tay nghề chăm sóc cây chuyên nghiệp. Chúng tôi sẽ đáp ứng mọi nhu cầu của quý Khách hàng. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About 2nd -->

<!-- Work process -->
<section class="flat-work-process">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="90" data-mobile="60" data-smobile="60">
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="section-subtitle wow fadeInUp">Tiến trình công việc</h4>
                    <h2 class="section-title wow fadeInUp">Từng bước công việc <br>được lên kế hoạch tỉ mỉ chú đáo</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="60" data-smobile="60">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="features-box wow fadeInUp">
                    <div class="icon-wp-box">
                        <span class="tf-icon-wp icon-farming"></span>
                        <div class="icon-box link-style3">
                            <span class="section-heading-jost-size20 icon">01</span>
                        </div>
                    </div>
                    <div class="content-features">
                        <h3 class="section-heading-jost-size20 text-pri2-color">
                            Lên kế hoạch thực hiện
                        </h3>
                        <p class="section-desc">
                            Đưa ra từng bước cụ thể nhằm chủ động trong việc thực hiện dự án sau này.
                        </p>
                    </div>
                </div>
                <div class="features-box wow fadeInUp">
                    <div class="icon-wp-box">
                        <span class="tf-icon-wp icon-seed"></span>
                        <div class="icon-box link-style3">
                            <span class="section-heading-jost-size20 icon">03</span>
                        </div>
                    </div>
                    <div class="content-features cf-3">
                        <h3 class="section-heading-jost-size20 text-pri2-color">
                            Thực hiện công việc
                        </h3>
                        <p class="section-desc">
                            Từng bước trong công việc sẽ được chú tâm thực hiện nhằm hoàn thành dự án tốt nhất
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="features-box wow fadeInUp">
                    <div class="icon-wp-box size-icon">
                        <span class="tf-icon-wp2 icon-seeding1"></span>
                        <div class="icon-box2 link-style3">
                            <span class="section-heading-jost-size20 icon">02</span>
                        </div>
                    </div>
                    <div class="content-features cf-2 text-pri2-color">
                        <h3 class="section-heading-jost-size20">
                            Phân bổ công việc
                        </h3>
                        <p class="section-desc">
                            Các công việc cụ thể được phân chia cho các bộ phận nghiệp vụ khác nhau.
                        </p>
                    </div>
                </div>
                <div class="features-box wow fadeInUp">
                    <div class="icon-wp-box size-icon2">
                        <span class="tf-icon-wp4 icon-greenhouse1"></span>
                        <div class="icon-box3 link-style3">
                            <span class="section-heading-jost-size20 icon">04</span>
                        </div>
                    </div>
                    <div class="content-features cf-4">
                        <h3 class="section-heading-jost-size20 text-pri2-color">
                            Hoàn thành dự án
                        </h3>
                        <p class="section-desc">
                            Đảm bảo dự án hoàn thiện tốt và đúng tiến độ.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Work process -->

<!-- Contact -->
<section class="flat-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow fadeInUp">
                <div class="contact-left">
                    <h3 class="section-subtitle">Liên hệ với chúng tôi</h3>
                    <h2 class="section-title">Thông tin về công ty.</h2>
                </div>
            </div>
            <div class="col-md-8 wow fadeInUp">
                <div class="contact-right">
                    <form method="POST" class="form-contact-right" id="contactform" action="./pages/user_tb/index.php" accept-charset="utf-8" novalidate="novalidate">
                        <div class="input-row">
                            <div class="input-name">
                                <label for="name" class="heading-features">Tên của bạn</label>
                                <input id="name" name="user_name" class="input-contact" type="text" placeholder="" required>
                            </div>
                            <div class="input-phone">
                                <label for="phone" class="heading-features">Số điện thoại</label>
                                <input id="phone" name="user_number_phone" class="input-contact" type="text" placeholder="" required>
                            </div>

                        </div>
                        <div class="input-row">
                            <div class="input-email">
                                <label id="email" class="heading-features">Email</label>
                                <input type="email" name="user_email" class="input-contact" placeholder="" required>
                            </div>
                            <div class="input-services">
                                <label for="services" class="heading-features">Dịch vụ</label>
                                <select class="input-contact input-select" name="service_gr_id" id="services">
                                    <?php foreach ($service_group as $item) : ?>
                                        <option value="<?php echo $item['service_gr_id'] ?>"><?php echo $item['service_gr_name'] ?></option>
                                    <? endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-address">
                            <label for="user_address" class="heading-features">Địa chỉ</label>
                            <input id="address" name="user_address" class="input-contact" type="text" placeholder="" required>
                        </div>
                        <div class="input-message">
                            <label for="message" class="heading-features">Tin nhắn</label>
                            <textarea name="user_cmt" class="input-contact-message" id="message" placeholder=""></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" class=" btn btn-left">Gửi thông tin</button>
                        </div>
                    </form>
                </div>
                <div class="contact-address wow fadeInLeft link-style3">
                    <div class="address-box box-1">
                        <span class="contact-location address-icon icon-map"></span>
                        <div class="info">
                            <h3 class="section-heading-jost-size20">
                                Địa chỉ</h3>
                            <p class="desc-box"><?php echo $company['company_address'] ?></p>
                        </div>
                    </div>
                    <div class="address-box box-2">
                        <span class="contact-phone address-icon icon-phone"></span>
                        <div class="info">
                            <h3 class="section-heading-jost-size20">
                                Số điện thoại</h3>
                            <p class="desc-box"><a href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a></p>
                        </div>
                    </div>
                    <div class="address-box box-3">
                        <span class="contact-mail address-icon icon-mail"></span>
                        <div class="info">
                            <h3 class="section-heading-jost-size20">
                                Email</h3>
                            <p class="desc-box"><a href="mailto:<?php echo $company['company_email'] ?>"><?php echo $company['company_email'] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contact -->

<!-- blog -->
<section class="flat-blog-home01">
    <div class="container">
        <div class="row">
            <div class="section-title-box">
                <h4 class="section-subtitle  wow fadeInUp">TIN TỨC</h4>
                <h2 class="section-title  wow fadeInUp">Tầm nhìn & Sứ mệnh</h2>
            </div>
            <div class="col-md-12">
                <div class="slide-blog-content">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($post as $item) : ?>
                            <div class="item wow fadeInUp">
                                <div style="background-image:url('./pages/post/photo/<?php echo $item["post_image1"] ?>');" class="blog-item hover-up-style2">
                                    <div class="item-overlay"></div>
                                    <div class="item-box link">
                                        <div class="content-info"><a href="blog.html" class="folder">
                                                <?php echo $item['post_type_title']; ?>
                                            </a></div>
                                        <div class="link-style6">
                                            <div class="content-info margin-top"><a href="<?php echo base_url() ?>pages/post/post_details.php?id=<?php echo $item['post_id']?>" class="user">
                                                    By Admin
                                                </a></div>
                                            <a href="<?php echo base_url() ?>pages/post/post_details.php?id=<?php echo $item['post_id']?>" class="section-heading-jost-size20">
                                                <?php echo $item['post_title']; ?>
                                            </a>
                                        </div>
                                        <hr class="line-blog-item">
                                        <h4 class="sub-title">
                                            <?php echo $item['post_datetime_update']; ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /blog -->
<?php require_once(__DIR__ . '/layout/footer.php'); ?>