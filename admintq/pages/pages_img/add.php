<?php
$open = "pages_img";
require_once(__DIR__ . '/../../autoload/autoload.php');
$sql = "SELECT * FROM pages_img_gr";
$pages_img_gr = $db->fetchdata($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pages_img_gr_id = $_POST['pages_img_gr_id'];
    $sqlcheck = "SELECT * FROM pages_img_gr WHERE pages_img_gr_id=$pages_img_gr_id";
    $pages_img_gr = $db->fetchcheck($sqlcheck);
    $file_name = $_FILES['pages_img_name']['name'];
    $file_size = $_FILES['pages_img_name']['size'];
    $file_tmp = $_FILES['pages_img_name']['tmp_name'];
    $file_type = $_FILES['pages_img_name']['type'];
    $file_parts = explode('.', $_FILES['pages_img_name']['name']);
    $file_ext = strtolower(end($file_parts));
    $expensions = array("jpeg", "jpg", "png");
    $pages_img_name = $_FILES['pages_img_name']['name'];
    $target = "../../../pages_img/" . $pages_img_gr["pages_img_gr_name"] . "/photo/" . basename($pages_img_name);
    $data =
        [
            "pages_img_gr_id" => postInput('pages_img_gr_id'),
            "pages_img_name" => postInput('new_file') . "." . postInput('new_end'),
            "pages_img_link" => base_img($pages_img_gr["pages_img_gr_name"]) . "photo/" . postInput('new_file') . "." . postInput('new_end')
        ];
    if (postInput('new_file') == '') {
        echo "<script>alert('Mời bạn nhập đầy đủ tên file mới');</script>";
    } else {
        if (in_array($file_ext, $expensions) === false) {
            echo "<script>alert('Chỉ hỗ trợ upload file JPEG hoặc PNG.');</script>";
        } else {
            if ($file_size > 2097152) {
                echo "<script>alert('Kích thước file không được lớn hơn 2MB.');</script>";
            } else {
                $id_insert = $db->insert("pages_img", $data);
                if ($id_insert > 0 && move_uploaded_file($_FILES['pages_img_name']['tmp_name'], $target) && rename($target, "../../../pages_img/" . $pages_img_gr["pages_img_gr_name"] . "/photo/" . postInput('new_file') . "." . postInput('new_end'))) {
                    $_SESSION['success'] = " Thêm mới thành công ";
                    redirectAdmin($open);
                } else {
                    $_SESSION['error'] = " Thêm mới thất bại ";
                }
            }
        }
    }
}
?>

<?php
require_once(__DIR__ . '/../../layout/header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm mới blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="./index.php">Vườn đẹp An Nhiên</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Folder</label>
                            <div class="col-sm-8">
                                <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="pages_img_gr_id">
                                    <?php foreach ($pages_img_gr as $item) : ?>
                                        <option value="<?php echo $item['pages_img_gr_id'] ?>"><?php echo $item['pages_img_gr_name'] . " (" . $item['pages_img_gr_description'] . ")"; ?></option>
                                    <? endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Hình ảnh</label>
                            <div class="col-sm-8">
                                <input type="file" class='form-control-file' id="exampleFormControlFile1" name='pages_img_name' onchange="preview_thumbail_logo(this);">

                                <img id="logo" src="#" alt="your image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Tên file mới</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên file mới" name='new_file'>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Đuôi file</label>
                            <div class="col-sm-8">
                                <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="new_end">
                                    <option value="jpg">jpg</option>
                                    <option value="png">png</option>
                                    <option value="jpeg">jpeg</option>
                                </select>
                            </div>
                        </div>

                        <div class="from-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                    </form>
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
require_once(__DIR__ . '/../../layout/footer.php');
?>