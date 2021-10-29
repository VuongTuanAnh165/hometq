<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
$id = intval(getInput('id'));
//dự án theo project
$sql_project = "SELECT * FROM project WHERE  project_id=$id";
$project = $db->fetchcheck($sql_project);

?>


<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(<?php echo base_img('project')?>photo/<?php echo $project['project_img'] ?>);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Chi tiết dự án<br><?php echo $project['project_name'] ?>
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span class="page-title-content-inner"><a href="./index.php">Dịch vụ</a></span><span class="page-title-content-inner">Chi tiết dịch vụ</span>
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
                <h3 class="section-heading-jost-size46 fw-500 text-pri2-color center mg-bottom-50 "><?php echo $project['project_name'] ?></h3>
            </div>
            <div style="text-align: center;" class="col-md-12">
                <?php echo $project['project_content'] ?>
            </div>
        </div>
    </div>
</section>
<!-- /.main-content -->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>