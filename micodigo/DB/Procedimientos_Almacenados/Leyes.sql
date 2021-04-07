-- PROEDIMIENTO ALMACENADO PARA ALTA DE LEYES
delimiter $$
CREATE PROCEDURE ps_Alta_ley (in vNombre VARCHAR(100), in vGrupo VARCHAR(100))
	BEGIN
		INSERT INTO tbl_lista_leyes (Nombre, Grupo)
		VALUES (vNombre , vGrupo);
	end$$
delimiter $$
	call ps_Alta_ley ('ley 4', 'grupo 4');
    



-- PROEDIMIENTO ALMACENADO PARA ACTUALIZAR DE LEYES
delimiter $$
CREATE PROCEDURE ps_Actualizar_ley (IN vid_leyes int, vNombre VARCHAR(100), in vGrupo VARCHAR(100))
	BEGIN
		UPDATE	tbl_lista_leyes
        SET 
        Nombre	= vNombre,
        Grupo	= vGrupo
        WHERE
        id_leyes = pid_leyes;
	end$$
delimiter $$
drop procedure ps_Actualizar_ley;
	call ps_Actualizar_ley (4, 'ley 5', 'grupo 5');    
    



-- PROEDIMIENTO ALMACENADO PARA BAJA DE LEYES
delimiter $$
CREATE PROCEDURE ps_Eliminar_ley (IN vid_leyes int)
	BEGIN
		DELETE 
        FROM
			tbl_lista_leyes
        WHERE
        id_leyes = vid_leyes;
	end$$
delimiter $$
	call ps_Eliminar_ley (4);   


-- PROEDIMIENTO ALMACENADO PARA BUSQUEDA DE LEYES por ID
delimiter $$
    CREATE PROCEDURE ps_Buscar_leyes()
		BEGIN
			SELECT * FROM tbl_lista_leyes;
		end$$
delimiter $$
drop procedure ps_Buscar_ley_id;
	call ps_Buscar_ley_id();

ps_Buscar_ley
    

