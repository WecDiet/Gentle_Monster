<?php
class View
{

	public $_moduleName;
	public $_controllerName;
	public $_actionName;
	public $_templatePath;
	public $_title;
	public $_metaHTTP;
	public $_metaName;
	public $_cssFiles;
	public $_jsFiles;
	public $_dirImg;
	public $_fileView;

	public function __construct($moduleName, $controllerName, $actionName)
	{
		$this->_moduleName = $moduleName;
		$this->_controllerName = $controllerName;
		$this->_actionName = $actionName;
	}

	public function render($fileInclude, $loadFull = true)
	{
		$path = APPLICATION_PATH . 'module' . DS . $this->_moduleName . DS . 'views' . DS . $fileInclude . '.php';
		if (file_exists($path)) {
			if ($loadFull == true) {
				$this->_fileView = $fileInclude;
				require_once $this->_templatePath;
			} else {
				require_once $path;
			}
		} else {
			echo "ERROR RENDER";
		}
	}

	// Thiết lập đường dẫn đến template
	public function setTemplatePath($path)
	{
		$this->_templatePath = $path;
	}

	// CREATE CSS - JS
	public function createLink($path, $files, $type = 'css')
	{
		$xhtml = '';
		if (!empty($files)) {
			$path = TEMPLATE_URL . $path . DS;
			foreach ($files as $file) {
				if ($type == 'css') {
					$xhtml .= '<link rel="stylesheet" type="text/css" href="' . $path . $file . '"/>';
				} else if ($type == 'js') {
					$xhtml .= '<script type="text/javascript" src="' . $path . $file . '" defer></script>';
				}
			}
		}
		return $xhtml;
	}


	// CREATE META (NAME - HTTP)
	public function createMeta($arrMeta, $typeMeta = 'name')
	{
		$xhtml = '';
		if (!empty($arrMeta)) {
			foreach ($arrMeta as $meta) {
				$temp = explode('|', $meta);
				$xhtml .= '<meta ' . $typeMeta . '="' . $temp[0] . '" content="' . $temp[1] . '" />';
			}
		}
		return $xhtml;
	}

	// CREATE TITLE
	public function createTitle($value)
	{
		$titleName = $this->_controllerName;
		if ($titleName == 'index') {
			return '<title>' . $value . '</title>';
		} else {
			$titleName = ucfirst($titleName);
			return '<title>' . $titleName . ' | ' . $value . '</title>';
		}
	}

			// SET TITLE
			public function setTitle($value)
			{
				$titleName = $this->_controllerName;
				if ($titleName == 'index') {
					$this->_title = '<title>' . $value . '</title>';
				} else {
					$titleName = ucfirst($titleName);
					$this->_title = '<title>' . $titleName . ' | ' . $value . '</title>';
				}
			}
	// SET CSS
	public function appendCSS($arrayCSS)
	{
		if (!empty($arrayCSS)) {
			foreach ($arrayCSS as $css) {
				$file = APPLICATION_URL . $this->_moduleName . DS . 'views' . DS . $css;
				$this->_cssFiles .= '<link rel="stylesheet" type="text/css" href="' . $file . '"/>';
			}
		}
	}

	// SET JS
	public function appendJS($arrayJS)
	{
		if (!empty($arrayJS)) {
			foreach ($arrayJS as $js) {
				$file = APPLICATION_URL . $this->_moduleName . DS . 'views' . DS . $js;
				$this->_jsFiles .= '<script type="text/javascript" src="' . $file . '"></script>';
			}
		}
	}
}
