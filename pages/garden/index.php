<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
$id = intval(getInput('id'));
//Vườn garden
$sql_garden = "SELECT * FROM garden WHERE  garden_active=1";
$garden = $db->fetchdata($sql_garden);

?>


<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(https://sanvuondinhviet.com/wp-content/uploads/2019/08/mau-san-vuon-dep-nha-biet-thu-3-1.jpg);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Vườn đẹp An Nhiên
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span class="page-title-content-inner">Vườn đẹp An Nhiên</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

<!-- main content -->
<!-- main content -->
<section class="flat-case-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-heading-jost-size46 fw-500 text-pri2-color center mg-bottom-50 ">Blog Vườn đẹp</h3>
            </div>
            <div class="col-md-12">
                <?php foreach($garden as $item): ?>
                    <div style="margin: 2% 0%;" class="col-md-6">
                        <?php echo $item['garden_content'] ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- /.main-content -->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>