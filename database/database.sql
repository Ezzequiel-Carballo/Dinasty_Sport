CREATE DATABASE DinastySport;
USE DinastySport;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
name            varchar(100) not null,
surname         varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
rol             char(20),
image           varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;


CREATE TABLE categorias(
id              int(255) auto_increment not null,
name            varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDb;

CREATE TABLE marcas(
id              int(255) auto_increment not null,
name            varchar(100) not null,
ruta            varchar(100),
image           varchar(255),

CONSTRAINT pk_marcas PRIMARY KEY(id) 
)ENGINE=InnoDb;

CREATE TABLE colores(
id              int(255) auto_increment not null,
name            varchar(100) not null,

CONSTRAINT pk_colores PRIMARY KEY(id) 
)ENGINE=InnoDb;

CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
marca_id        int(255) not null,
name            varchar(100) not null,
categoria       varchar(100) not null,
marca           varchar(100) not null,
genero          varchar(100) not null,
description     text,
color           varchar(100) not null,
precio          float(100,2) not null,
stock           int(255) not null,
oferta          float(100,2) not null,
fecha           date not null,
image_logo      varchar(255),
image           varchar(255),
image_path      varchar(255),
image_post      varchar(255),

CONSTRAINT pk_productos PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id),
CONSTRAINT fk_producto_marca FOREIGN KEY(marca_id) REFERENCES marcas(id)

)ENGINE=InnoDb;


CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
provincia       varchar(100) not null,
localidad       varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;




