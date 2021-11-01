<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
$id = intval(getInput('id'));
//Vườn policies
$sql_policies = "SELECT * FROM policies WHERE policies_id=$id AND policies_active=1";
$policies_check = $db->fetchcheck($sql_policies);

?>


<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(https://hanoispiritofplace.com/wp-content/uploads/2017/12/hinh-anh-cuon-sach-dep-6.jpg);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Chính sách
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span class="page-title-content-inner">Chính sách</span>
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
                <h3 class="section-heading-jost-size46 fw-500 text-pri2-color center mg-bottom-50 "><?php echo $policies_check['policies_title'] ?></h3>
            </div>
            <div class="fw-500 text-pri2-color mg-bottom-50">
            <?php echo $policies_check['policies_content'] ?>
            </div>
        </div>
    </div>
</section>
<!-- /.main-content -->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>