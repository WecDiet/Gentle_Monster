<?php
class SunglassesController extends Controller{

    public function __construct($arrParams)
    {
        parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
        $this->_templateObj->loadTemplate();
    }

    public function indexAction()
    {
        $this->_view->setTitle('Gentle Monster');
        // $this->_view->_title = "agabgagb";
        $this->_view->render('sunglasses/index');
    }
}