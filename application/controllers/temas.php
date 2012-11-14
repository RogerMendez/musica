<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Temas extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('temas_model');
		}

		public function index()
		{
			$dato['consulta'] = $this->temas_model->devorver_temas();
			$this->load->view("reproductor", $dato);
		}
		function new_tema($error='')
		{
			$dato['error']=$error;
			$this->load->view('temas/newform_tema',$dato);
		}
		function save_tema()
		{
			$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
			$this->form_validation->set_rules('artista', 'Artista', 'trim|required');
			$this->form_validation->set_rules('genero', 'Genero', 'trim|required');
			//$this->form_validation->set_rules('musica', 'Tema', 'trim|required');

			$this->form_validation->set_message('required', "El Campo %s es Requerido");
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->new_tema();
			}
			else
			{
				
				$config['upload_path'] = './mp3/';
				$config['allowed_types'] = 'mp3';
				//$config['remove_spaces'] = TRUE;
				//$config['overwrite'] = TRUE;
				$config['max_size'] = '10240000000';
	            
				$this->load->library('upload', $config); 
				if ( ! $this->upload->do_upload('musica'))
				{
					$error = $this->upload->display_errors();
					//$this->new_image($error);
					//redirect('/slide/new_image/', 'refresh');
					$this->new_tema($error);
				}
				else
				{
					$data = $this->upload->data();
					$ubi = $data['file_name'];
					$nombre = $this->input->post('nombre');
					$artista = $this->input->post('artista');
					$genero = $this->input->post('genero');
										
					$insert = $this->temas_model->new_tema($nombre,$artista,$genero,$ubi);
					if($insert)
					{
						redirect('/temas/', 'refresh');
					}
					else
					{
						$this->new_tema();
					}
				}
				//}
				/*else{
					$this->new_tema('no se puede guardar');
				}*/
			}
		}

	}
?>