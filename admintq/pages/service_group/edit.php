<?php
$open = "service_group";
require_once(__DIR__ . '/../../autoload/autoload.php');

$id = intval(getInput('id'));
$sql = "SELECT * FROM service_group WhERE service_gr_id=$id";
$service_group = $db->fetchcheck($sql);
if (empty($service_group)) {
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin($open);
}

$sql1 = "SELECT * FROM website_config";
$website_config = $db->fetchdata($sql1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES['service_gr_img']['name'];
    $file_size = $_FILES['service_gr_img']['size'];
    $file_tmp = $_FILES['service_gr_img']['tmp_name'];
    $file_type = $_FILES['service_gr_img']['type'];
    $file_parts = explode('.', $_FILES['service_gr_img']['name']);
    $file_ext = strtolower(end($file_parts));
    $expensions = array("jpeg", "jpg", "png");

    $service_gr_img = $_FILES['service_gr_img']['name'];
    $target = "../../../pages_img/service_group/photo/" . basename($service_gr_img);
    $data =
        [
            "service_gr_name" => postInput('service_gr_name'),
            "service_gr_description" => postInput('service_gr_description'),
            "web_id" => postInput('web_id'),
            "service_gr_img" => $service_gr_img
        ];

    if (postInput('service_gr_name') == '') {
        echo "<script>alert('Mời bạn nhập đầy đủ tên dịch vụ');</script>";
    } else {
        if (in_array($file_ext, $expensions) === false) {
            echo "<script>alert('Chỉ hỗ trợ upload file JPEG hoặc PNG.');</script>";
        } else {
            if ($file_size > 2097152) {
                echo "<script>alert('Kích thước file không được lớn hơn 2MB.');</script>";
            } else {
                if ($post['service_gr_name'] != $data['service_gr_name']) {
                    $id_update = $db->update("service_group", $data, array("service_gr_id" => $id));
                    if ($id_update > 0 && move_uploaded_file($_FILES['service_gr_img']['tmp_name'], $target)) {
                        $_SESSION['success'] = " Cập nhật thành công ";
                        redirectAdmin($open);
                    } else {
                        $_SESSION['error'] = " Dữ liệu không thay đổi ";
                        redirectAdmin($open);
                    }
                } else {
                    $id_update = $db->update("service_group", $data, array("service_gr_id" => $id));
                    if ($id_update > 0 && move_uploaded_file($_FILES['service_gr_img']['tmp_name'], $target)) {
                        $_SESSION['success'] = " Cập nhật thành công ";
                        redirectAdmin($open);
                    } else {
                        $_SESSION['error'] = " Dữ liệu không thay đổi ";
                        redirectAdmin($open);
                    }
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
                    <h1>Thay đổi dịch vụ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="./index.php">Danh sách dịch vụ</a></li>
                        <li class="breadcrumb-item active">Sửa</li>
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
                    <form class="form-horizontal" action="" method="POST">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Website</label>
                            <div class="col-sm-8">
                                <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="web_id">
                                    <?php foreach ($website_config as $item) : ?>
                                        <option <?php if ($item['web_id'] == $service_group['web_id']) echo 'selected' ?> value="<?php echo $item['web_id'] ?>"><?php echo $item['web_name'] ?></option>
                                    <? endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Tên nhóm dịch vụ</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên nhóm dịch vụ" name='service_gr_name' value="<?php echo $service_group['service_gr_name'] ?>">
                                <?php if (isset($error['service_gr_name'])) :  ?>
                                    <p class="text-danger"></p> <?php echo $error['service_gr_name'] ?>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh nền</label>
                            <div class="col-sm-8">
                                <input type="file" class='form-control-file' id="exampleFormControlFile1" name='service_gr_img' onchange="preview_thumbail1(this);">
                                <img id="anh1" src="<?php echo base_img('service_group')?>photo/<?php echo $service['service_gr_img'] ?>" alt="your image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Mô tả</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name='service_gr_description'>
                                    <?php echo $service_group['service_gr_description'] ?>
                                </textarea>
                                <?php if (isset($error['service_gr_description'])) :  ?>
                                    <p class="text-danger"></p> <?php echo $error['service_gr_description'] ?>
                                <?php endif; ?>
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