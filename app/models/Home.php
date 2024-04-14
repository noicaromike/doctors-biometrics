<?php

class Home
{
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTotalRecords()
    {
        $this->db->query('SELECT count(*) AS total FROM Doctors');
        $this->db->execute();
        $row = $this->db->single();
        return $row->total;
    }


    public function getAllDoctors($currentPage, $recordsPerPage)
    {
        $offset = ($currentPage - 1) * $recordsPerPage;

        $this->db->query('SELECT * FROM Doctors ORDER BY BNo DESC LIMIT :pages,:rows');
        $this->db->bind(':pages', $offset);
        $this->db->bind(':rows', $recordsPerPage);
        $this->db->execute();
        $result = $this->db->resultSet();
        return $result;
    }
}
