<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
if(isset($_SESSION[getInput('name')]))
{
    $id = intval($_SESSION[getInput('name')]);
    unset($_SESSION[getInput('name')]);
}
//dịch vụ theo service_gr_id
$sql_service = "SELECT * FROM service WHERE service_gr_id=$id AND service_active=1";
$service = $db->fetchdata($sql_service);

//nhóm dịch vụ
$sql_service_group = "SELECT * FROM service_group WHERE service_gr_active=1";
$service_group = $db->fetchdata($sql_service_group);

//nhóm dịch vụ theo post_type_id
$sql_service_group_id = "SELECT * FROM service_group WHERE service_gr_id=$id";
$service_group_id = $db->fetchcheck($sql_service_group_id);

//bài viết mới
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 5";
$post_new = $db->fetchdata($sql_post_new);
?>

<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(<?php echo base_img('service')?>photo/<?php echo $service[0]['service_image']?>);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Dịch vụ<br><?php echo $service_group_id['service_gr_name']?>
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span><a class="page-title-content-inner" href="<?php echo base_url() ?>pages/service_group/index.php">Nhóm dịch vụ</a></span><span class="page-title-content-inner">Dịch vụ</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

<!-- main content -->
<section class="flat-blog-standard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="0" data-smobile="0"></div>
            </div>
            <div class="col-md-8">
                <div class="post-wrap">
                    <?php foreach($service as $item): ?>
                        <article class="article-1">
                            <div class="image-box">
                                <div class="image">
                                    <img src="<?php echo base_img('service')?>photo/<?php echo $item['service_image'] ?>" alt="image">
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="content-art">
                                    <a href="service_details.php?name=<?php $_SESSION[toSlug($item['service_name'])]= $item['service_id']; echo toSlug($item['service_name'])?>" class="section-heading-jost-size28">
                                        <?php echo $item['service_name']?>
                                    </a>
                                    <p class="desc-content-box text-decs">
                                        <?php echo $item['service_description'] ?>
                                    </p>
                                    <div class="link-style2">
                                        <a href="service_details.php?name=<?php $_SESSION[toSlug($item['service_name'])]= $item['service_id']; echo toSlug($item['service_name'])?>" class="read-more">
                                            Xem thêm<i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach ?>
                </div>
                <!-- /.post-wrap -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                <div class="side-bar">
                    <div class="widgets-category">
                        <h3 class="widgets-side-bar-title">
                            Nhóm dịch vụ
                        </h3>
                        <ul class="list-category">
                            <?php foreach($service_group as $item): ?>
                                <li><a href="<?php echo base_url() ?>pages/service/index.php?id=<?php echo $item['service_gr_id'] ?>"><?php echo $item['service_gr_name']?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="widget widget_lastest">
                        <h2 class="widgets-side-bar-title"><span>Tin tức mới</span></h2>
                        <ul class="lastest-posts data-effect clearfix">
                            <?php foreach($post_new as $item): ?>
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="<?php echo base_img('post')?>photo/<?php echo $item['post_image1']?>" alt="Image">
                                    </div>
                                    <div class="text">
                                        <h3><a href="<?php echo base_url()?>pages/post/post_details.php?id=<?php echo $item['post_id']?>" class="title-thumb"><?php echo $item['post_title']?></a></h3>
                                        <a href="#" class="date"><?php echo $item['post_datetime_update']?></a>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
    </div> <!-- /.container -->
</section><!-- /flat-blog -->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>