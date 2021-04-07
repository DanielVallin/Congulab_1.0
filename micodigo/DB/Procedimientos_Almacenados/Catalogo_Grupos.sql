-- PROEDIMIENTO ALMACENADO PARA ALTA DE Grupos
delimiter $$
CREATE PROCEDURE ps_Alta_Grupos (in vNombre VARCHAR(100))
	BEGIN
		INSERT INTO tbl_cat_grupos (Nombre)
		VALUES (vNombre);
	end$$
delimiter $$
	call ps_Alta_Grupos ('ley 4');
    
    
    
    
    
-- PROEDIMIENTO ALMACENADO PARA ACTUALIZAR DE GRUPOS
delimiter $$
CREATE PROCEDURE ps_Actualizar_Grupos (IN vid_catalogo int, vNombre VARCHAR(100))
	BEGIN
		UPDATE	tbl_cat_grupos
        SET 
        Nombre	= vNombre
        WHERE
        id_catalogo = vid_catalogo;
	end$$
delimiter $$
drop procedure ps_Actualizar_Grupos;
	call ps_Actualizar_Grupos (4, 'ley 5');    
    
    
    
    
    
-- PROEDIMIENTO ALMACENADO PARA BAJA DE Grupos
delimiter $$
CREATE PROCEDURE ps_Eliminar_Grupos (IN vid_catalogo int)
	BEGIN
		DELETE 
        FROM
			tbl_cat_grupos
        WHERE
        id_leyes = vid_catalogo;
	end$$
delimiter $$
	call ps_Eliminar_Grupos (4);   
    
    
    
    
    
-- PROEDIMIENTO ALMACENADO PARA BUSQUEDA DE Grupos
drop procedure ps_Buscar_Grupos;
delimiter $$
    CREATE PROCEDURE ps_Buscar_Grupos()
	BEGIN
		SELECT Nombre, Grupo FROM tbl_cat_grupos;
	end$$
delimiter $$
call ps_Buscar_Grupos();   





-- PROEDIMIENTO ALMACENADO PARA BUSQUEDA DE Grupos por ID
drop procedure ps_Buscar_Gruposid;
delimiter $$
    CREATE PROCEDURE ps_Buscar_Gruposid(in vid_catalogo int)
	BEGIN
		SELECT NombreFROM tbl_cat_grupos
        where id_catalogo = vid_catalogo;
	end$$
delimiter $$
call ps_Buscar_Gruposid(1);   

