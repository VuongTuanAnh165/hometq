<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
if(isset($_SESSION[getInput('name')]))
{
    $id = intval($_SESSION[getInput('name')]);
    unset($_SESSION[getInput('name')]);
}
//bài viết theo post_id
$sql_post = "SELECT * FROM post WHERE  post_id=$id";
$post = $db->fetchcheck($sql_post);

//nhóm tin tức
$sql_post_type = "SELECT * FROM post_type WHERE post_type_active=1";
$post_type = $db->fetchdata($sql_post_type);

//bài viết mới
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 10";
$post_new = $db->fetchdata($sql_post_new);
?>


<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(<?php echo base_img('post') ?>photo/<?php echo $post['post_image1']?>);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Chi tiết tin tức<br><?php echo $post['post_title']?>
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span><a class="page-title-content-inner" href="<?php echo base_url() ?>pages/post_type/index.php">Nhóm tin tức</a></span><span><a class="page-title-content-inner" href="./index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])]= $item['post_type_id']; echo toSlug($item['post_type_title'])?>">Tin tức</a></span><span class="page-title-content-inner">Chi tiết tin tức</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

<!-- main content -->
<!-- main content -->
<section class="flat-blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="166" data-mobile="0" data-smobile="0"></div>
            </div>
            <div class="col-md-8">
                <div class="post-wrap">
                    <div class="content-blog-detail">
                        <div class="image-box">
                            <div class="image">
                                <img src="<?php echo base_img('post')?>photo/<?php echo $post['post_image1'] ?>" alt="image">
                            </div>
                        </div>
                        <div class="content mg-top-15">
                            <span class="content-info"><a href="#" class="user">
                                    BY ADMIN
                                </a><a href="#" class="date">
                                    <?php echo $post['post_datetime_update'] ?>
                                </a></span>
                            <div class="heading-content-box">
                                <a href="#">
                                    <?php echo $post['post_title'] ?>
                                </a>
                            </div>
                            <p class="desc-content-box text-decs">
                                <?php echo $post['ptd_text'] ?>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- /.post-wrap -->

            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                <div class="side-bar">
                    <div class="widgets-search">
                        <h3 class="widgets-side-bar-title">
                            Tìm kiếm
                        </h3>
                        <div class="widgets-input">
                            <form method="get" role="search" class="search-form">
                                <input type="search" class="search-field" placeholder="Tìm kiếm" value="" name="s" title="Search for">
                                <button class="search-submit" type="submit" title="Search"></button>
                            </form>
                        </div>
                    </div>
                    <div class="widgets-category">
                        <h3 class="widgets-side-bar-title">
                            Nhóm tin tức
                        </h3>
                        <ul class="list-category">
                            <?php foreach ($post_type as $item) : ?>
                                <li><a href="<?php echo base_url() ?>pages/post/index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])]= $item['post_type_id']; echo toSlug($item['post_type_title'])?>"><?php echo $item['post_type_title']?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="widget widget_lastest">
                        <h2 class="widgets-side-bar-title"><span>Tin tức mới</span></h2>
                        <ul class="lastest-posts data-effect clearfix">
                            <?php foreach ($post_new as $item) : ?>
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="<?php echo base_img('post')?>photo/<?php echo $item['post_image1'] ?>" alt="Image">
                                    </div>
                                    <div class="text">
                                        <h3><a href="post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])]= $item['post_id']; echo toSlug($item['post_title'])?>" class="title-thumb"><?php echo $item['post_title'] ?></a></h3>
                                        <a href="#" class="date"><?php echo $item['post_datetime_update'] ?></a>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="193" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main-content -->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>