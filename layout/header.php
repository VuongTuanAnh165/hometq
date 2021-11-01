<?php
require_once(__DIR__ . '/../autoload/autoload.php');

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

//Dự án
$sql_project = "SELECT * FROM project WHERE project_active=1 ORDER BY RAND() LIMIT 4";
$project = $db->fetchdata($sql_project);

//Dự án rand()
$sql_project_rand = "SELECT * FROM project WHERE project_active=1 ORDER BY RAND() LIMIT 4";
$project_rand = $db->fetchdata($sql_project_rand);

//bài viết 
$sql_post = "SELECT * FROM post,post_type WHERE post.post_type_id=post_type.post_type_id AND post_active=1";
$post = $db->fetchdata($sql_post);

//chính sách
$sql_policies = "SELECT * FROM policies WHERE policies_active=1";
$policies = $db->fetchdata($sql_policies);;

//Nhóm tin tức
$sql_post_type = "SELECT * FROM post_type WHERE post_type_active=1";
$post_type = $db->fetchdata($sql_post_type);;
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Vườn đẹp An Nhiên</title>

    <meta name="author" content="themesflat.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>stylesheet/bootstrap.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>stylesheet/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>stylesheet/responsive.css">

    <!-- icoomon font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>stylesheet/icomoon.css">

    <!-- slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>stylesheet/slider.css">

    <!-- Favicon and touch icons  -->
    <link href="<?php echo base_img('company') ?>photo/<?php echo $company['company_logo'] ?>" rel="apple-touch-icon-precomposed">
    <link href="<?php echo base_img('company') ?>photo/<?php echo $company['company_logo'] ?>" rel="apple-touch-icon-precomposed">
    <link href="<?php echo base_img('company') ?>photo/<?php echo $company['company_logo'] ?>" rel="shortcut icon">

    <!-- anime -->
    <link rel="stylesheet" href="<?php echo base_url() ?>stylesheet/animate.css">

</head>


<body>
    <div class="boxed blog">
        <!-- Preloader -->
        

        <!-- header -->
        <header id="header" class="header header-style2 bg-color">
            <div class="container-fluid">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-2">
                            <div class="inner-header">
                                <div class="logo-header">
                                    <a href="<?php echo base_url() ?>index.php" title="">
                                        <img src="<?php echo base_img('company') ?>photo/<?php echo $company['company_logo'] ?>" alt="images" style="width: 90%;">
                                    </a>
                                </div>
                                <!-- /#logo -->
                                <div class="btn-menu">
                                    <span></span>
                                </div>
                                <!-- //mobile menu button -->
                            </div>

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-8">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li>
                                            <a href="<?php echo base_url() ?>index.php" title="">Trang chủ</a>
                                        </li>
                                        <li class=" menu-item-has-children">
                                            <a href="<?php echo base_url() ?>pages/service_group/index.php" title="">Dịch vụ</a>
                                            <ul class="sub-menu">
                                                <?php foreach ($service_group as $item) : ?>
                                                    <li><a href="<?php echo base_url() ?>pages/service/index.php?id=<?php echo $item['service_gr_id'] ?>" title=""><?php echo $item['service_gr_name'] ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="<?php echo base_url() ?>pages/project/index.php" title="">Dự án</a>
                                            <ul class="sub-menu">
                                                <?php foreach ($project as $item) : ?>
                                                    <li><a href="<?php echo base_url() ?>pages/project/project_details.php?id=<?php echo $item['project_id'] ?>" title=""><?php echo $item['project_name'] ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>pages/garden/index.php" title="">Vườn đẹp An Nhiên</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="<?php echo base_url() ?>/pages/post_type/index.php" title="">Tin tức xanh</a>
                                            <ul class="sub-menu">
                                                <?php foreach ($post_type as $item) : ?>
                                                    <li><a href="<?php echo base_url() ?>pages/post/index.php?id=<?php echo $item['post_type_id'] ?>" title=""><?php echo $item['post_type_title'] ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>pages/user_tb/index.php" title="">Liên hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="site-header-right">
                                <div class="header-inner">
                                    <div class="search flat-show-search">
                                        <div class="show-search">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                        <div class="top-search widgets-input">
                                            <form action="<?php echo base_url()?>pages/post/index.php" id="searchform-all" class="header-search search-form" method="POST">
                                                <div class="input-group">
                                                    <input name="post_title" type="search" id="s" class="search-field" placeholder="Tìm kiếm" aria-label="Search" />
                                                    <button class="search-submit" type="submit" title="Search"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- header right -->
                        </div>
                    </div>
                    <!-- /.header-wrap -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </header>
        <!-- /header -->