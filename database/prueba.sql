-- 1. Tabla de Roles (Del Esquema 1: Escalable y profesional)
CREATE TABLE t_roles (
    id_rol INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(255)
);

-- 2. Tabla de Usuarios (Del Esquema 2: Práctica y directa)
-- Fusiona los datos personales y de acceso en un solo lugar.
CREATE TABLE t_usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    id_rol INT NOT NULL, -- Llave foránea hacia la tabla roles
    nombres VARCHAR(60) NOT NULL,
    paterno VARCHAR(30) NOT NULL,
    materno VARCHAR(30) NOT NULL,
    telefono VARCHAR(15),
    correo VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- Aumentado a 255 para soportar encriptación (Hashes)
    ubicacion VARCHAR(300),
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_usuario_rol 
        FOREIGN KEY (id_rol) 
        REFERENCES t_roles(id_rol)
);

-- 3. Tabla de Dispositivos (Del Esquema 2: Intacta, solo conectada al nuevo usuario)
CREATE TABLE t_dispositivos (
    id_dispositivo INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    tipo_equipo ENUM('PC', 'Laptop', 'Celular', 'Monitor') NOT NULL,
    caracteristicas VARCHAR(300) NOT NULL,
    estado ENUM('Nuevo', 'Usado', 'Viejo') NOT NULL,
    CONSTRAINT fk_dispositivo_usuario 
        FOREIGN KEY (id_usuario) 
        REFERENCES t_usuarios(id_usuario)
);

-- 4. Tabla de Reportes (Del Esquema 2: El corazón del Help Desk)
CREATE TABLE t_reportes (
    id_reporte INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_dispositivo INT NOT NULL,
    problema VARCHAR(500) NOT NULL,
    estado ENUM('Sin atender', 'En proceso', 'Atendiendo', 'Solucionado') DEFAULT 'Sin atender',
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_reporte_usuario 
        FOREIGN KEY (id_usuario) 
        REFERENCES t_usuarios(id_usuario),
    CONSTRAINT fk_reporte_dispositivo 
        FOREIGN KEY (id_dispositivo) 
        REFERENCES t_dispositivos(id_dispositivo)
);