# Sistema de Gestión de Clientes y Proyectos

Proyecto desarrollado como Trabajo Final para el curso Backend Developer Web.

## Descripción

Aplicación web desarrollada en PHP utilizando Programación Orientada a Objetos (POO), patrón MVC y PDO para la gestión de clientes y proyectos empresariales.

El sistema permite administrar clientes, registrar proyectos asociados, generar reportes PDF y controlar el acceso mediante autenticación segura.

## Características

* Autenticación de usuarios
* Gestión de clientes (CRUD)
* Gestión de proyectos (CRUD)
* Relación Cliente - Proyecto
* Reportes PDF
* Arquitectura MVC
* Migraciones automáticas
* Seeder para usuario administrador
* Uso de PDO y consultas preparadas

## Tecnologías Utilizadas

* PHP 8
* MySQL
* PDO
* Bootstrap 5
* Composer
* FPDF
* HTML5
* CSS3
* JavaScript

## Instalación

### 1. Clonar el repositorio

git clone URL_DEL_REPOSITORIO

### 2. Instalar dependencias

composer install

### 3. Crear la base de datos

CREATE DATABASE gestion_proyectos;

### 4. Configurar variables de entorno

Copiar:

.env.example

como:

.env

y configurar los datos de conexión.

### 5. Ejecutar migraciones

php database/migrate.php

### 6. Ejecutar seeders

php database/seed.php

## Usuario Inicial

Correo:
[admin@empresa.com]

Contraseña:
admin123

## Arquitectura

app/
controllers/
models/
config/

views/

database/
migrations/
seeders/

public/

reports/

