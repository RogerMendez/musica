<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Temas_model extends CI_Model {
		function devorver_temas()
		{
			$query = $this->db->get('temas');
			if($query->num_rows() > 0)
			{
				foreach ($query->result() as $fila)
				{
					$data[] = $fila;
				}
				return $data;
			}
			else
			{
				return FALSE;
			}
		}
		function new_tema($nombre,$artista,$genero,$ubi)
		{
			$dato = array(
						'nombre' => $nombre,
						'artista' => $artista,
						'genero' => $genero,
						'ubicacion' => $ubi,
			 );
			return $this->db->insert('temas',$dato);
		}
	}

?>