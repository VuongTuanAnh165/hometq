<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
if (isset($_SESSION[getInput('name')])) {
    $id = intval($_SESSION[getInput('name')]);
    unset($_SESSION[getInput('name')]);
    //tin tức theo post_type_id
    $sql_post = "SELECT * FROM post WHERE post_type_id=$id";
    $post = $db->fetchdata($sql_post);
    //nhóm tin tức theo post_type_id
    $sql_post_type_id = "SELECT * FROM post_type WHERE post_type_id=$id";
    $post_type_id = $db->fetchcheck($sql_post_type_id);
}

//nhóm tin tức
$sql_post_type = "SELECT * FROM post_type WHERE post_type_active=1";
$post_type = $db->fetchdata($sql_post_type);

//bài viết mới
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 10";
$post_new = $db->fetchdata($sql_post_new);
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_title = $_POST['post_title'];
    if ($post_title != '') {
        $sql_post = "SELECT * FROM post WHERE post_title LIKE '%$post_title%' AND post_active=1";
        $post = $db->fetchdata($sql_post);
    } else {
        if (isset($_SESSION[getInput('name')])) {
            $id = intval($_SESSION[getInput('name')]);
            unset($_SESSION[getInput('name')]);
        }
        $sql_post = "SELECT * FROM post WHERE post_type_id=$id";
        $post = $db->fetchdata($sql_post);
    }
}
?>

<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(<?php echo base_img('post') ?>photo/<?php echo $post['post_image1']?>);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Tin tức<br>
                        <?php
                        if (isset($post_title)) {
                            echo " Liên quan đến '" . $post_title . "'";
                        } else {
                            echo $post_type_id['post_type_title'];
                        }
                        ?>
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span><a class="page-title-content-inner" href="<?php echo base_url() ?>pages/post_type/index.php">Nhóm tin tức</a></span><span class="page-title-content-inner">Tin tức</span>
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
                    <?php foreach ($post as $item) : ?>
                        <article class="article-1">
                            <div class="image-box">
                                <div class="image">
                                    <img src="<?php echo base_img('post') ?>photo/<?php echo $item['post_image1'] ?>" alt="image">
                                </div>
                                <div class="date-image">
                                    <p><?php echo $item['post_datetime_update'] ?></p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="content-art">
                                    <a href="post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                    echo toSlug($item['post_title']) ?>" class="section-heading-jost-size28">
                                        <?php echo $item['post_title'] ?>
                                    </a>
                                    <p class="desc-content-box text-decs">
                                        <?php echo $item['post_description'] ?>
                                    </p>
                                    <div class="link-style2">
                                        <a href="post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                        echo toSlug($item['post_title']) ?>" class="read-more">
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
                            Nhóm tin tức
                        </h3>
                        <ul class="list-category">
                            <?php foreach ($post_type as $item) : ?>
                                <li><a href="<?php echo base_url() ?>pages/post/index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])] = $item['post_type_id'];
                                                                                                echo toSlug($item['post_type_title']) ?>"><?php echo $item['post_type_title'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="widget widget_lastest">
                        <h2 class="widgets-side-bar-title"><span>Tin tức mới</span></h2>
                        <ul class="lastest-posts data-effect clearfix">
                            <?php foreach ($post_new as $item) : ?>
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="<?php echo base_img('post') ?>photo/<?php echo $item['post_image1'] ?>" alt="Image">
                                    </div>
                                    <div class="text">
                                        <h3><a href="post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                            echo toSlug($item['post_title']) ?>" class="title-thumb"><?php echo $item['post_title'] ?></a></h3>
                                        <a href="#" class="date"><?php echo $item['post_datetime_update'] ?></a>
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