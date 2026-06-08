<?php

namespace App\Models;

use App\Config\Database;
use PDO;

class Cliente
{
    private PDO $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function all()
    {
        $stmt = $this->db->query(
            "SELECT * FROM clientes ORDER BY id DESC"
        );

        return $stmt->fetchAll();
    }

    public function find(int $id)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM clientes WHERE id = ?"
        );

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        string $nombre,
        string $email,
        string $telefono
    )
    {
        $stmt = $this->db->prepare(
            "INSERT INTO clientes
            (nombre,email,telefono)
            VALUES(?,?,?)"
        );

        return $stmt->execute([
            $nombre,
            $email,
            $telefono
        ]);
    }

    public function update(
        int $id,
        string $nombre,
        string $email,
        string $telefono
    )
    {
        $stmt = $this->db->prepare(
            "UPDATE clientes
            SET nombre=?,
                email=?,
                telefono=?
            WHERE id=?"
        );

        return $stmt->execute([
            $nombre,
            $email,
            $telefono,
            $id
        ]);
    }

    public function delete(int $id)
    {
        $stmt = $this->db->prepare(
            "DELETE FROM clientes
            WHERE id=?"
        );

        return $stmt->execute([$id]);
    }

    public function getForSelect()
    {
        $stmt = $this->db->query(
            "SELECT id,nombre
            FROM clientes
            ORDER BY nombre ASC"
        );

        return $stmt->fetchAll();
    }
}