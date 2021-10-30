<?php /*session_destroy();*/
    $open = "pages_img";
    require_once(__DIR__ . '/../../autoload/autoload.php');

    $id = intval(getInput('id'));
    $sql="SELECT * FROM pages_img,pages_img_gr WhERE pages_img.pages_img_gr_id=pages_img_gr.pages_img_gr_id AND  pages_img_id=$id";
    $pages_img = $db->fetchcheck($sql);

    if(empty($pages_img))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin($open);
    }
    else
    {
        $sql1="DELETE FROM pages_img WHERE pages_img_id=$id";
        $id_delete = $db->delete($sql1);
        if($id_delete > 0 && unlink("C://xampp/htdocs/hometq/pages_img/".$pages_img['pages_img_gr_name']."/photo/".$pages_img['pages_img_name']))
        {
            $_SESSION['success'] = " Xóa thành công ";
            redirectAdmin($open);
        }
        else
        {
            $_SESSION['error'] = " Không có dữ liệu ";
        }
    }
?>