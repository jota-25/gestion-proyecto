<?php

return "

CREATE TABLE IF NOT EXISTS clientes (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL,

    email VARCHAR(150),

    telefono VARCHAR(20),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)

";