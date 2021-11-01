<?php
    require_once ( __DIR__ . '/../../layout/header.php');
?>
<?php
    require_once ( __DIR__ . '/../../autoload/autoload.php');
    $sql="SELECT * FROM pages_img,pages_img_gr WHERE pages_img.pages_img_gr_id=pages_img_gr.pages_img_gr_id";
    $pages_img = $db->fetchdata($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách hình ảnh <a href="./add.php" class="btn btn-success">Thêm mới</a></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách hình ảnh</li>
                    </ol>
                </div>
            </div>
            <div class="clearfix">

            </div>
            <?php require_once "../notification.php"; ?>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bảng danh sách hình ảnh</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead> 
                                    <tr>
                                        <th>STT</th>
                                        <th>Hình ảnh</th>
                                        <th>Folder</th>
                                        <th>Link ảnh</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt = 1; foreach ($pages_img as $item) : ?>
                                        <tr>
                                            <td><?php echo $stt?></td>
                                            <td><img width="100px" src="<?php echo base_img($item['pages_img_gr_name'])?>photo/<?php echo $item['pages_img_name']?>" ></td>
                                            <th><?php echo $item['pages_img_gr_name']." (".$item['pages_img_gr_description'].")" ?></th>
                                            <th><?php echo $item['pages_img_link'] ?></th>
                                            <td>
                                                <a class="btn btn-xs btn-danger" href='delete.php?id=<?php echo $item["pages_img_id"] ?>'><i class="fa fa-times"></i>Xóa</a>
                                            </td>
                                        </tr>
                                    <?php $stt++; endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Hình ảnh</th>
                                        <th>Folder</th>
                                        <th>Link ảnh</th>
                                        <th>Hành động</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<?php
    require_once ( __DIR__ . '/../../layout/footer.php');
?>