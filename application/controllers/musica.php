<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Musica extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('temas_model');
		}


		public function index($error = '')
		{
			$data['error'] = $error;
			$this->load->view('temas/newform_tema', $data);
		}
		function save_tema()
		{
			$this->form_validation->set_rules('nombre', 'NOMBRE TEMA', 'trim|required');
			$this->form_validation->set_rules('artista', 'artista TEMA', 'trim|required');
			$this->form_validation->set_rules('genero', 'genero TEMA', 'trim|required');

			$this->form_validation->set_message('required', "EL CAMPO %s ES REQUERIDO");
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				$config['upload_path'] = './mp3/';
				$config['allowed_types'] = 'mp3';
				$config['max_size'] = '102400000';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('musica'))
				{
					$error = $this->upload->display_errors();
					$this->index($error);
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
						redirect('/temas/','refresh');
					}
					else
					{
						$this->index();
					}
				}
			}
		}

	}
?>