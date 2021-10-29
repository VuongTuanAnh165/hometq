<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
//Nhóm dịch vụ
$sql_service_group = "SELECT * FROM service_group WHERE service_gr_active=1";
$service_group = $db->fetchdata($sql_service_group);

//Công ty
$sql_company = "SELECT * FROM company WHERE company_active=1";
$company = $db->fetchcheck($sql_company);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data =
        [
            "user_name" => $_POST['user_name'],
            "user_number_phone" => $_POST['user_number_phone'],
            "user_email" => $_POST['user_email'],
            "user_address" => $_POST['user_address'],
            "web_id" => 1,
            "service_gr_id" => $_POST['service_gr_id'],
            "user_cmt" => $_POST['user_cmt']
        ];

    $id_insert = $db->insert("user_tb", $data);
    if ($id_insert > 0) {
        echo '<script>alert("Gửi thành công")</script>';
    } else {
        echo "<script>alert('Gửi thất bại')</script>";
    }
}

?>


<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(https://azmax.vn/wp-content/uploads/2016/10/khach-hang-la-gi-az-crm.jpg);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Liên hệ
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span class="page-title-content-inner">Liên hệ</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

<!-- Contact -->
<section class="flat-contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow fadeInUp">
                <div class="contact-left">
                    <h3 class="section-subtitle mg-bottom-22">Liên hệ với chúng tôi</h3>
                    <h2 class="section-title mg-bottom-15">Thông tin về công ty</h2>
                    <p class="section-desc mg-bottom-60">Chuyên nghiệp - Sáng tạo - Màu xanh - Hiệu quả</p>
                    <div class="address-box mg-bottom30">
                        <div class="contact-location icon-map"></div>
                        <div class="info text-pri2-color">
                            <h3 class="section-heading-jost-size20">
                                Địa chỉ</h3>
                            <p class="desc-box text-pri2-color"><?php echo $company['company_address'] ?></p>
                        </div>
                    </div>
                    <div class="address-box mg-bottom30">
                        <div class="contact-phone icon-phone"></div>
                        <div class="info text-pri2-color">
                            <h3 class="section-heading-jost-size20">
                                Số điện thoại</h3>
                            <p class="desc-box text-pri2-color"><a href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a></p>
                        </div>
                    </div>
                    <div class="address-box">
                        <div class="contact-mail icon-mail"></div>
                        <div class="info text-pri2-color">
                            <h3 class="section-heading-jost-size20">
                                Email</h3>
                            <p class="desc-box text-pri2-color"><a href="mailto:<?php echo $company['company_email'] ?>"><?php echo $company['company_email'] ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
            </div>
            <div class="col-md-7 wow fadeInUp">
                <div class="contact-right">
                    <form method="POST" class="form-contact-right" id="contactform" action="" accept-charset="utf-8" novalidate="novalidate">
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
            </div>
        </div>
    </div>
</section>
<!-- /Contact -->

<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>