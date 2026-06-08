<?php

namespace App\Models;

use App\Config\Database;
use PDO;

class Proyecto
{
    private PDO $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function all()
    {
        $sql = "
        SELECT
            p.*,
            c.nombre AS cliente_nombre
        FROM proyectos p
        INNER JOIN clientes c
            ON c.id = p.cliente_id
        ORDER BY p.id DESC
        ";

        $stmt = $this->db->query($sql);

        return $stmt->fetchAll();
    }

    public function find(int $id)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM proyectos
             WHERE id=?"
        );

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        $cliente_id,
        $nombre,
        $descripcion,
        $fecha_inicio,
        $fecha_fin,
        $estado
    )
    {
        $stmt = $this->db->prepare(
        "INSERT INTO proyectos
        (
            cliente_id,
            nombre,
            descripcion,
            fecha_inicio,
            fecha_fin,
            estado
        )
        VALUES(?,?,?,?,?,?)"
        );

        return $stmt->execute([
            $cliente_id,
            $nombre,
            $descripcion,
            $fecha_inicio,
            $fecha_fin,
            $estado
        ]);
    }

    public function update(
        $id,
        $cliente_id,
        $nombre,
        $descripcion,
        $fecha_inicio,
        $fecha_fin,
        $estado
    )
    {
        $stmt = $this->db->prepare(
        "
        UPDATE proyectos
        SET
            cliente_id=?,
            nombre=?,
            descripcion=?,
            fecha_inicio=?,
            fecha_fin=?,
            estado=?
        WHERE id=?
        "
        );

        return $stmt->execute([
            $cliente_id,
            $nombre,
            $descripcion,
            $fecha_inicio,
            $fecha_fin,
            $estado,
            $id
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare(
            "DELETE FROM proyectos
             WHERE id=?"
        );

        return $stmt->execute([$id]);
    }
}