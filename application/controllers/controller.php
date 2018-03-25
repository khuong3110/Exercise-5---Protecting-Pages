<?php

class Controller {

   	public $load;
		public $data = array();
		protected $access;

	function __construct($view, $method = null, $parameters = null){

				$this->load = new Load();
				new Model();
				$newUser = new User();

				if($this->access == 1 && !$newUser->isAdmin()){
						$_SESSION['redirect'] = $view;
						header("Location: " . BASE_URL . 'login/');
				} else{
						if($method){
								$this->runTask($method, $parameters);
						}else{
								$this->defaultTask();
						}

						$this->load->view($view.'.php', $this->data);
				}
	}

	public function runTask($method, $parameters = null){

		if($method && method_exists($this, $method)) {
					if(!is_array($parameters)){
						$parameters = array();
					}
          call_user_func_array(array($this, $method), $parameters);
     	}
	}

	public function defaultTask(){

	}

	public function set($key, $value){
		$this->data[$key] = $value;
	}

}
