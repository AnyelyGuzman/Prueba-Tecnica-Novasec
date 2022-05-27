<?php
namespace App\Models;

class DisponibilidadModel
{
    private $db;

    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getRoomType()
    {
        $query = $this->db->query("SELECT id, name FROM rooms_type");
        return $query->getResultArray();
    }

    public function disponibilidadByDate($dateStart, $dateEnd, $roomType)
    {
        $sql = "
            SELECT
                room_type_id, rt.name, nof - count(*) available_rooms
            FROM reservation r
            INNER JOIN rooms_type rt ON r.room_type_id=rt.id
            where startdate=? AND enddate=? AND r.room_type_id=?
            GROUP BY r.room_type_id;
        ";
        $query = $this->db->query($sql, [$dateStart, $dateEnd, $roomType]);
        return $query->getRow();
    }

    public function getUsers()
    {
        $query = $this->db->query("SELECT id, CONCAT(firstname, ' ', lastname) fullName FROM user");
        return $query->getResultArray();
    }
}