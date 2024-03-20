<?php
class Branches_Model extends CI_Model
{
    protected $db; // Veritabanı bağlantısı için özellik

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true); // CodeIgniter veritabanı bağlantısını elde et
    }

    public function insert($data = array())
    {
        return $this->db->insert("branches", $data);
    }

    public function getAll($order = "id ASC")
    {
        return $this->db->get("branches")->result();
    }
}
?>
