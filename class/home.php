<?php
$filepath = realpath(dirname(__FILE__));
include($filepath . '/../library/session.php');
include_once($filepath . '/../library/database.php');
?>

<?php
/**
 * 
 */
class home
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function show_services_group()
    {
        $query = "SELECT service_gr_name FROM service_group LIMIT 5 ";
		$result = $this->db->select($query);
		return $result;
    }

    public function show_product_group()
    {
        $query = "SELECT product_gr_name FROM product_group LIMIT 5 ";
		$result = $this->db->select($query);
		return $result;
    }
}
?>