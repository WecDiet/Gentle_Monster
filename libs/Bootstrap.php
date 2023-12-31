<?php
class Bootstrap
{

	private $_params;
	private $_controllerObject;

	public function init()
	{
		$this->setParam();

		$controllerName	= ucfirst($this->_params['controller']) . 'Controller';
		$filePath	= APPLICATION_PATH .'module' . DS . $this->_params['module'] . DS . 'controllers' . DS . $controllerName . '.php';

		if (file_exists($filePath)) {
			$this->loadExistingController($filePath, $controllerName);
			$this->callMethod();
		}else{
			$this->errorBack();
		}
	}


	// SET PARAMS
	public function setParam()
	{
		$this->_params 	= array_merge($_GET, $_POST);
		$this->_params['module'] 		= isset($this->_params['module']) ? $this->_params['module'] : DEFAULT_MODULE;
		$this->_params['controller'] 	= isset($this->_params['controller']) ? $this->_params['controller'] : DEFAULT_CONTROLLER;
		$this->_params['action'] 		= isset($this->_params['action']) ? $this->_params['action'] : DEFAULT_ACTION;
	}

	// LOAD EXISTING CONTROLLER
	private function loadExistingController($filePath, $controllerName)
	{
		require_once $filePath;
		$this->_controllerObject = new $controllerName($this->_params);
	}

	// CALL METHODE
	private function callMethod()
	{
		$actionName = $this->_params['action'] . 'Action';
		if (method_exists($this->_controllerObject, $actionName) == true) {
			$this->_controllerObject->$actionName();
		} else {
			$this->errorBack();
		}
	}

	public function errorBack()
	{
		$actionName = DEFAULT_ERROR_ACTION . 'Action';
		$controllerName	= ucfirst(DEFAULT_ERROR_CONTROLLER) . 'Controller';
		$pathError = APPLICATION_PATH . 'module'. DS . DEFAULT_ERROR_MODULE . DS . 'controllers' . DS . $controllerName.'.php';
		if(file_exists($pathError)){
			require_once $pathError;
			$this->_controllerObject = new ErrorController();
			$this->_controllerObject->setView(DEFAULT_ERROR_MODULE, DEFAULT_ERROR_CONTROLLER, DEFAULT_ERROR_ACTION);
			@$this->_controllerObject->$actionName();
		}
		
	}
}
