CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(60) NOT NULL,
    paterno VARCHAR(30) NOT NULL,
    materno VARCHAR(30) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL,
    ubicacion VARCHAR(300) NOT NULL,
    rol ENUM('Administrador', 'Usuario', 'Técnico') DEFAULT 'Usuario'
);

CREATE TABLE dispositivos (
    id_dispositivos INT AUTO_INCREMENT PRIMARY KEY,
    tipo_equipo ENUM('PC', 'Laptop', 'Celular', 'Monitor') NOT NULL,
    caracteristicas VARCHAR(300) NOT NULL,
    estado ENUM('Nuevo', 'Usado', 'Viejo') NOT NULL,
    id_usuario INT,
    CONSTRAINT fk_dispositivo_usuario 
        FOREIGN KEY (id_usuario) 
        REFERENCES usuarios(id_usuario)
);

CREATE TABLE reportes (
    id_reporte INT AUTO_INCREMENT PRIMARY KEY,
    problema VARCHAR(500) NOT NULL,
    estado ENUM('En proceso', 'Sin atender', 'Atendiendo', 'Solucionada') DEFAULT 'Sin atender',
    fecha_creacion DATETIME DEFAULT NOW(),
    id_usuario INT,
    id_dispositivo INT,
    CONSTRAINT fk_reporte_usuario 
        FOREIGN KEY (id_usuario) 
        REFERENCES usuarios(id_usuario),
    CONSTRAINT fk_reporte_dispositivo 
        FOREIGN KEY (id_dispositivo) 
        REFERENCES dispositivos(id_dispositivos)
);