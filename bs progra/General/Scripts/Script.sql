CREATE TABLE pedido (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100),
    plato VARCHAR(100),
    cantidad INT,
    precio DOUBLE
);

CREATE TABLE plato (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

INSERT INTO plato (nombre, precio) VALUES
('Pollo a la Brasa', 17.00),
('Lomo Saltado', 15.00),
('Arroz Chaufa', 16.00),
('Ceviche', 18.00),
('Ají de Gallina', 14.00),
('Tallarines Verdes', 14.00),
('Seco de Res', 20.00),
('Papa a la Huancaína', 12.00),
('Arroz con Pollo', 14.00),
('Sopa Criolla', 13.00);


