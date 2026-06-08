<?php

return "

CREATE TABLE IF NOT EXISTS proyectos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    cliente_id INT NOT NULL,

    nombre VARCHAR(150) NOT NULL,

    descripcion TEXT,

    fecha_inicio DATE,

    fecha_fin DATE,

    estado ENUM(
        'Pendiente',
        'En Proceso',
        'Finalizado'
    ) DEFAULT 'Pendiente',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (cliente_id)
    REFERENCES clientes(id)
    ON DELETE CASCADE

)

";