<?php
class Controller{
	
	// View Object
	protected $_view;
	
	// Model Object
	protected $_model;
	
	// Template object
	protected $_templateObj;
	
	// Params (GET - POST)
	protected $_arrParam;
	
	public function __construct($arrParams){
		$this->setModel($arrParams['module'], $arrParams['controller']);
		$this->setTemplate($this);
		$this->setView($arrParams['module'],$arrParams['controller'],$arrParams['action']);
		$this->setParams($arrParams);
	}
	
	// SET MODEL
	public function setModel($moduleName, $modelName){
		$modelName = ucfirst($modelName) . 'Model';
		$path = APPLICATION_PATH.'module'. DS. $moduleName . DS . 'models' .  DS . $modelName . '.php';
		if(file_exists($path)){
			require_once $path;
			$this->_model	= new $modelName();
		}
	}
	
	// GET MODEL
	public function getModel(){
		return $this->_model;
	}
	
	// SET VIEW
	public function setView($moduleName,$controllerName, $actionName){
		$this->_view = new View($moduleName, $controllerName, $actionName);
	}
	
	// GET VIEW
	public function getView(){
		return $this->_view;
	}
	
	// SET TEMPLATE
	public function setTemplate(){
		$this->_templateObj = new Template($this);	
	}
	
	// GET TEMPLATE
	public function getTemplate(){
		return $this->_templateObj;
	}
	
	// GET PARAMS
	public function setParams($arrParam){
		$this->_arrParam= $arrParam;
	}
	
	// GET PARAMS
	public function getParams($arrParam){
		$this->_arrParam= $arrParam;
	}
	public function redirect($module ='admin',$controller = 'index', $action = 'index'){
		header("location: index.php?module=$module&controller=$controller&action=$action");
		exit();
	}
}