<?php
class Controller {

	public $load;
	public $model;
	
	function __construct($rel_path,$pageMethod = null)
	{
		$this->load = new Load();
		$this->model = new Model($rel_path);
		$this->$pageMethod();
	}

	function template()
	{
		$this->load->view('viewPageTemplate');
		$this->model->closeConnection();
	}
	
	function home()
	{
		$data = $this->model->dbGetMainPageData();
		$this->load->view('viewHomePage', $data);
	}

	function models()
	{
		$data = $this->model->dbGetX3DData();
		$this->load->view('viewModelPage', $data);
	}

	function about()
	{
		$this->load->view('viewAboutPage',"No Data");
	}
	
	function apiReCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbReCreateTables();
		$this->load->view('viewMessage', $data);
	} 	
}
?>    