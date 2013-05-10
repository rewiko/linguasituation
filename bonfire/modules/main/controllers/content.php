<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class content extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Main.Content.View');
		$this->lang->load('main');
		
		Template::set_block('sub_nav', 'content/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		Template::set('toolbar_title', 'Manage main');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a main object.
	*/
	public function create()
	{
		$this->auth->restrict('Main.Content.Create');

		Assets::add_module_js('main', 'main.js');

		Template::set('toolbar_title', lang('main_create') . ' main');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of main data.
	*/
	public function edit()
	{
		$this->auth->restrict('Main.Content.Edit');

		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('main_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/main');
		}

		Assets::add_module_js('main', 'main.js');

		Template::set('toolbar_title', lang('main_edit') . ' main');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: delete()

		Allows deleting of main data.
	*/
	public function delete()
	{
		$this->auth->restrict('Main.Content.Delete');

		$id = $this->uri->segment(5);

		if (!empty($id))
		{

		}

		redirect(SITE_AREA .'/content/main');
	}

	//--------------------------------------------------------------------




}