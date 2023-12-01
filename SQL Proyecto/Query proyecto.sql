-- Crear la base de datos de Tecnidomicilios
CREATE DATABASE Tecnidomicilios;

-- Usar la base de datos creada
USE Tecnidomicilios;

-- Tabla para almacenar información sobre técnicos de servicio
CREATE TABLE `tecnicos` (
  `id_tecnico` int not null auto_increment, -- Identificador único del técnico
  `nombres` varchar(50) not null, -- Nombres del técnico
  `apellidos` varchar(50) not null, -- Apellidos del técnico
  `compania` varchar(50) not null default "Independiente", -- Nombre de la compañía del técnico, por defecto Independiente
  `direccion` varchar(100), -- Dirección del técnico (puede ser nulo)
  `telefono` varchar(11) not null unique, -- Número de teléfono del técnico con restricción de valor único
  `email` varchar(100) not null unique, -- Correo electrónico del técnico con restricción de valor único
  `contrasenia` varchar(255) not null, -- Contraseña del técnico
  `fotografia` varchar(255), -- URL de la fotografía del técnico
  `experiencia` int check (experiencia >= 0), -- Años de experiencia laboral del técnico (con restricción CHECK)
  `habilidades` varchar(500), -- Enumeración de habilidades o especialidades del técnico
  PRIMARY KEY (`id_tecnico`) -- Clave primaria
);

-- Tabla para almacenar información sobre clientes
CREATE TABLE `clientes` (
  `id_cliente` int not null auto_increment, -- Identificador único del cliente
  `nombre` varchar(250) not null, -- Nombre completo del cliente
  `telefono` varchar(11) not null, -- Número de teléfono del cliente
  `direccion` varchar(100) not null, -- Dirección del cliente
  `email` varchar(100) not null unique, -- Correo electrónico del cliente con restricción de valor único
  `contrasenia` varchar(255) not null, -- Contraseña del cliente
  `fecha_registro` date not null, -- Fecha del registro en la aplicación
  PRIMARY KEY (`id_cliente`) -- Clave primaria
);

-- Tabla para almacenar categorías de servicios con sus subcategorías
CREATE TABLE `categoria_servicio` (
  `id_categoria` int not null auto_increment, -- Identificador único de la categoría
  `nombre_categoria` varchar(100) not null, -- Nombre de la categoría
  `descripcion` varchar(500), -- Descripción de la categoría (puede ser nulo)
  `icono` varchar(255), -- URL o referencia al ícono o imagen de la categoría
  `id_categoria_padre` int, -- ID de la categoría superior (nulo para categorías principales y el número corresponde a la categoría padre (el mismo de id_categoria))
  PRIMARY KEY (`id_categoria`), -- Clave primaria
  FOREIGN KEY (`id_categoria_padre`) REFERENCES `categoria_servicio`(`id_categoria`) -- Clave foránea para la categoría superior
);

-- Tabla para almacenar información sobre servicios ofrecidos
CREATE TABLE `servicio` (
  `id_servicio` int not null auto_increment, -- Identificador único del servicio
  `nombre_servicio` varchar(250) not null, -- Nombre del servicio
  `descripcion` varchar(500) not null, -- Descripción del servicio
  `valor` float not null, -- Costo del servicio
  `id_cliente` int not null, -- ID del cliente que ofrece el servicio
  `id_categoria` int not null, -- ID de la categoría a la que pertenece el servicio
  `estado` varchar(25), -- Estado del servicio (por ejemplo, completado, pendiente, cancelado, etc.)
  FOREIGN KEY (`id_cliente`) REFERENCES `clientes`(`id_cliente`), -- Clave foránea para el cliente
  FOREIGN KEY (`id_categoria`) REFERENCES `categoria_servicio`(`id_categoria`), -- Clave foránea para la categoría
  PRIMARY KEY (`id_servicio`) -- Clave primaria
);



-- Tabla para almacenar solicitudes de servicio
CREATE TABLE `solicitud_servicio` (
  `id_solicitud` int not null auto_increment, -- Identificador único de la solicitud
  `id_cliente` int not null, -- ID del cliente que solicita el servicio
  `id_servicio` int not null, -- ID del servicio solicitado
  `id_tecnico` int not null, -- ID del técnico asignado a la solicitud
  `fecha` date not null, -- Fecha de la solicitud
  `estado_solicitud` varchar(25), -- Estado de la solicitud
  PRIMARY KEY (`id_solicitud`), -- Clave primaria
  FOREIGN KEY (`id_cliente`) REFERENCES `clientes`(`id_cliente`), -- Clave foránea para el cliente
  FOREIGN KEY (`id_servicio`) REFERENCES `servicio`(`id_servicio`), -- Clave foránea para el servicio
  FOREIGN KEY (`id_tecnico`) REFERENCES `tecnicos`(`id_tecnico`) -- Clave foránea para el técnico
);

-- Tabla para almacenar historial de servicios
CREATE TABLE `historial_servicios` (
  `id_historial` int not null auto_increment, -- Identificador único del registro en el historial
  `id_cliente` int not null, -- ID del cliente al que pertenece el historial
  `id_servicio` int not null, -- ID del servicio solicitado o utilizado
  `fecha_solicitud` date not null, -- Fecha en que se solicitó o utilizó el servicio
  `estado` varchar(25), -- Estado del servicio (por ejemplo, completado, pendiente, cancelado, etc.)
  PRIMARY KEY (`id_historial`), -- Clave primaria
  FOREIGN KEY (`id_cliente`) REFERENCES `clientes`(`id_cliente`), -- Clave foránea para el cliente
  FOREIGN KEY (`id_servicio`) REFERENCES `servicio`(`id_servicio`) -- Clave foránea para el servicio
);

-- Tabla para almacenar comentarios sobre servicios
CREATE TABLE `comentarios` (
  `id_comentario` int not null auto_increment, -- Identificador único del comentario
  `id_servicio` int not null, -- ID del servicio al que se refiere el comentario
  `id_cliente` int not null, -- ID del cliente que escribió el comentario
  `contenido` text not null, -- Contenido del comentario
  `calificacion` int not null, -- Calificación del servicio
  `fecha_publicacion` datetime not null, -- Fecha de publicación del comentario
  PRIMARY KEY (`id_comentario`), -- Clave primaria
  FOREIGN KEY (`id_servicio`) REFERENCES `servicio`(`id_servicio`), -- Clave foránea para el servicio
  FOREIGN KEY (`id_cliente`) REFERENCES `clientes`(`id_cliente`) -- Clave foránea para el cliente
);


-- Índices para mejorar el rendimiento en las búsquedas--

-- Índice en la columna 'estado' de la tabla 'servicio'
CREATE INDEX idx_estado ON `servicio`(`estado`);
-- Índice en la columna 'email' de la tabla 'tecnicos' 
CREATE INDEX idx_email_tecnicos ON `tecnicos`(`email`);
-- Índice en la columna 'email' de la tabla 'clientes' 
CREATE INDEX idx_email_clientes ON `clientes`(`email`);
-- Índice en la columna 'estado_solicitud' de la tabla 'solicitud_servicio' 
CREATE INDEX idx_estado_solicitud ON `solicitud_servicio`(`estado_solicitud`);
-- Índice en la columna 'estado' de la tabla 'historial_servicios' 
CREATE INDEX idx_estado_historial ON `historial_servicios`(`estado`);
