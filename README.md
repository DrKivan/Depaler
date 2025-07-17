# Sistema de Alquiler de Espacios - Laravel

Este proyecto ha sido desarrollado con Laravel y tiene como finalidad **gestionar el alquiler de espacios entre propietarios y huéspedes**. A través del sistema, los usuarios pueden registrarse como **propietarios** (para publicar propiedades) o **huéspedes** (para buscar y alquilar propiedades).

## 📘 Caso de Estudio

El proyecto simula una plataforma donde:
- **Propietarios** publican espacios (habitaciones, departamentos, casas, etc.) con detalles como ubicación, precio, disponibilidad y fotos.
- **Huéspedes** pueden explorar las propiedades publicadas, realizar reservas y gestionar sus alquileres.
- El sistema contempla roles, autenticación, validación, moderación de contenido y más.

## ⚙️ Tecnologías utilizadas

- **Framework:** Laravel
- **Base de datos:** MySQL
- **ORM:** Eloquent
- **Rutas, Controladores, Migrations, Seeders, Factories, Middlewares**

## 🗄️ Base de Datos y Seeders

Se ha diseñado una **estructura de base de datos adecuada** para representar:
- Usuarios con roles (`huésped`, `propietario`, `moderador`)
- Propiedades (con imágenes, disponibilidad y ubicación)
- Reservas y relaciones entre huéspedes y propiedades
- Denuncias y validación de contenido por moderadores

También se han creado:
- **Factories** para poblar automáticamente datos de prueba realistas.
- **Seeders** para insertar usuarios, propiedades y reservas iniciales.
- Todo conectado a la base de datos mediante `.env` con migraciones ejecutadas con éxito.

## 🚀 Cómo ejecutar el proyecto

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/tu-repo.git
   cd tu-repo
