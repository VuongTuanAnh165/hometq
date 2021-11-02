<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
    require_once(__DIR__ . '/../../autoload/autoload.php'); 

    //Nhóm bài viết 
    $sql_post_type="SELECT * FROM post_type WHERE post_type_active=1";
    $post_type = $db->fetchdata($sql_post_type);
?>

<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div style="background-image: url(./photo/box-flowers-green-garden-background.jpg);" class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        Nhóm tin tức
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="<?php echo base_url() ?>index.php">Trang chủ</a></span><span class="page-title-content-inner">Nhóm tin tức</span>
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
            <?php foreach($post_type as $item): ?>
                <div class="col-md-4">
                    <div class="list-box-profolio wow fadeInDown">
                        <div class="image-profolio bd-radius-8-image">
                            <img src="<?php echo base_img('post_type')?>photo/<?php echo $item['post_type_img'] ?>" alt="images">
                            <div class="profolio-show active">
                                <div class="profolio-info">
                                    <div style="width: 75%; overflow:hidden" class="info">
                                        <a href="../post/index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])]= $item['post_type_id']; echo toSlug($item['post_type_title'])?>">
                                            <h3 class="section-heading-jost-size20">
                                                <?php echo $item['post_type_title'] ?>
                                            </h3>
                                        </a>
                                        <p class="desc-box"><?php echo $item['post_type_description'] ?></p>
                                    </div>
                                    <div style="width: 15%;" class="button-next">
                                        <a class="profolio-btn" href="../post/index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])]= $item['post_type_id']; echo toSlug($item['post_type_title'])?>"></a>
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