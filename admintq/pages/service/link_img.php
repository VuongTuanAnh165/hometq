<?php
$open="garden";
require_once(__DIR__ . '/../../autoload/autoload.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pages_img_name=$_FILES['pages_img_name']['name'];
    $sql="SELECT * FROM pages_img,pages_img_gr WHERE pages_img.pages_img_gr_id=pages_img_gr.pages_img_gr_id AND pages_img.pages_img_name='$pages_img_name'";
    $pages_img=$db->fetchcheck($sql);
    $_SESSION['link_img']=$pages_img['pages_img_link'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>