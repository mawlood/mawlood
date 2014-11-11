<?php

class NousContacterController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $request = $this->getRequest();
        if($request->isXmlHttpRequest()) {
            $this->_helper->layout->disableLayout();
        }

		$form = new Application_Form_NousContacter();
		$this->view->form = $form;
    }


}

