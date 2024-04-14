<?php

class Printss
{
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDoctorsById($id)
    {
        $this->db->query('SELECT * FROM Doctors WHERE BNo IN(' . implode(',', $id) . ')');
        $this->db->execute();
        $result = $this->db->resultSet();
        return $result;
    }
}
