<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
    require_once(__DIR__ . '/../../autoload/autoload.php'); 

    //Nhóm dịch vụ
    $sql_service_group="SELECT * FROM service_group WHERE service_gr_active=1";
    $service_group = $db->fetchdata($sql_service_group);
?>

<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(<?php echo base_img('service_group')?>photo/<?php echo $service_group[0]['service_gr_img'] ?>);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Nhóm dịch vụ
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span class="page-title-content-inner">Nhóm dịch vụ</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->
<!-- our-profolio -->
<section class="flat-case-study">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
            </div>
            <?php foreach($service_group as $item): ?>
                <div class="col-md-4">
                    <div class="list-box-profolio wow fadeInDown">
                        <div class="image-profolio bd-radius-8-image">
                            <img src="<?php echo base_img('service_group')?>photo/<?php echo $item['service_gr_img'] ?>" alt="images">
                            <div class="profolio-show active">
                                <div class="profolio-info">
                                    <div class="info">
                                        <a href="../service/index.php?id=<?php echo $item['service_gr_id'] ?>">
                                            <h3 class="section-heading-jost-size20">
                                                <?php echo $item['service_gr_name'] ?>
                                            </h3>
                                        </a>
                                        <p class="desc-box"><?php echo $item['service_gr_description'] ?></p>
                                    </div>
                                    <div class="button-next">
                                        <a class="profolio-btn" href="../service/index.php?id=<?php echo $item['service_gr_id'] ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                </div>
            <? endforeach ?>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="145" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</section>
<!-- /our profolio -->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>