<?php
class Admin_models
{
    private $db;
    private $table1 = 'users';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM {$this->table1}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->setResults();
    }
}
