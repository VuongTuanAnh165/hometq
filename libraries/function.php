<?php
//debug
function _debug($data)
{
    echo '<pre style="background: #000; color: #fff; width:100%; overflow: auto">';
    echo '<div>Your IP: ' . $_SERVER["REMOTE_ADDR"] . '</div>';

    $debug_backtrace = debug_backtrace();
    $debug = array_shift($debug_backtrace);

    echo '<div>File: ' . $debug["file"] . '</div>';
    echo '<div>Line: ' . $debug["line"] . '</div>';

    if (is_array($data) || is_object($data)) {
        print_r($data);
    } else {
        var_dump($data);
    }
    echo '</pre>';
}

//get input
function getInput($string)
{
    return isset($_GET[$string]) ? $_GET[$string] : '';
}


//post input
function postInput($string)
{
    return isset($_POST[$string]) ? $_POST[$string] : '';
}

function base_url()
{
    return $url = "http://hometq.com/";
}
function base_img($link)
{
    return $url = "http://hometq.com/pages_img/" . $link . "/";
}
/*function base_url()
    {
        return $url = "http://laptopvta.xyz/";
    }*/

function modules($url)
{
    return base_url() . "admin/modules/" . $url;
}

if (!function_exists('redirectAdmin')) {
    function redirectAdmin($url = "")
    {
        header("location: " . base_url() . "pages/{$url}");
        exit();
    }
}

if (!function_exists('redirectFontend')) {
    function redirectFontend($url = "")
    {
        header("location: " . base_url() . "{$url}");
        exit();
    }
}
function formatDate($date)
{
    return date('F j, Y, g:i a', strtotime($date));
}
//Hàm đổi từ số INT sang tiền VND
function currency_format($number)
{
    if (!empty($number)) {
        return number_format($number, 0, ',', '.');
    }
}
function toSlug($str)
{
    // Chuyển hết sang chữ thường
    $str = strtolower($str);

    // xóa dấu
    //$str = json_encode($str); // chuyển chuỗi sang unicode tổ hợp
    /*$str=preg_replace('/[\u0300-\u036f]/', '',$str); // xóa các ký tự dấu sau khi tách tổ hợp
        
        // Thay ký tự đĐ
        $str = preg_replace('/[đĐ]/', 'd',$str);
        
        // Xóa ký tự đặc biệt
        $str = preg_replace('/[^0-9a-z-\s]/', '',$str);
        
        // Xóa khoảng trắng thay bằng ký tự -
        $str = preg_replace('/\s+/','-',$str);
        
        // Xóa ký tự - liên tiếp
        $str = preg_replace('/-+/', '-',$str);
        
        // xóa phần dư - ở đầu & cuối
        $str = preg_replace('/^-+|-+$/', '',$str);
        
        // return
        return $str;*/

    $unicode = array(

        'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

        'd' => 'đ',

        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

        'i' => 'í|ì|ỉ|ĩ|ị',

        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',

        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

        'D' => 'Đ',

        'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

        'I' => 'Í|Ì|Ỉ|Ĩ|Ị',

        'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

        'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

    );

    foreach ($unicode as $nonUnicode => $uni) {

        $str = preg_replace("/($uni)/i", $nonUnicode, $str);
    }
    $str = trim($str);
    $str = str_replace(' ', '-', $str);
    $str = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $str);
    return $str;
}
