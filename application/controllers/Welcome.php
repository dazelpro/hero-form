<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('daftar-hero');
	}

	public function form()
	{
		$data['role'] = $this->db->query("SELECT * FROM table_role_hero_ml");
		$data['spec'] = $this->db->query("SELECT * FROM table_specially_hero_ml");
		$this->load->view('input-hero',$data);
	}

	public function insert()
	{
		$name  		= $this->input->post('name');
		$avatar  	= $this->input->post('avatar');
		$durability = $this->input->post('durability');
		$offence  	= $this->input->post('offence');
		$ability  	= $this->input->post('ability');
		$dificulty  = $this->input->post('dificulty');

		$xrole[]=$this->input->post('role');
		foreach($xrole as $role){
			$roles = @implode(",", $role);
		}

		$xspec[]=$this->input->post('spec');
		foreach($xspec as $spec){
			$specs = @implode(",", $spec);
		}

		$this->db->query("INSERT INTO table_hero_ml (
					hero_name,
					hero_avatar,
					hero_durability,
					hero_offence,
					hero_ability,
					hero_difficulty,
					hero_role,
					hero_specially) 
				VALUES (
					'$name',
					'$avatar',
					'$durability',
					'$offence',
					'$ability',
					'$dificulty',
					'$roles',
					'$specs')");
		redirect('');
	}
}
