-- TABLA de LISTADO DE LEYES
CREATE TABLE tbl_cat_grupos (
    id_catalogo INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
) ENGINE=INNODB;

CREATE TABLE tbl_lista_leyes (
    id_leyes INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Grupo VARCHAR(255) NOT NULL,
    FOREIGN KEY (fk_Grupos_Leyes) REFERENCES  tbl_cat_grupos(id)
) ENGINE=INNODB;
 