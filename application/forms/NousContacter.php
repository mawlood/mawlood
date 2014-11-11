<?php

class Application_Form_NousContacter extends Zend_Form
{

    public function init()
    {
		$this->setMethod('post');
		
		// ajout des elements du formulaire
		
		// add field name 
		$this->addElement('text', 'name', array(
			'label' => 'Your name',
			'required' => true,
			'filters' => array('StringTrim'),
			'validators' => array(
			)
		
		));
		
		// Un bouton d'envoi
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Sign Guestbook',
        ));
    }


}

