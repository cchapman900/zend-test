<?php
namespace Users\Form;

use Zend\Form\Form;

class LoginForm extends Form 
{
    public function __construct($name = null) 
    {
        parent::__construct('Login');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype', 'multipart/form-data');

        $this->add(array(
           'name' => 'email',
            'attributes' => array(
                'type' => 'email',
            ),
            'options' => array(
                'label' => 'Email',
            ),
            'attributes' => array(
                'required' => 'required'
            ),
            'filters' => array(
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array(
                    'name' => 'EmailAddress',
                    'options' => array(
                        'messages' => array(
                            \Zend\Validator\EmailAddress::INVALID_FORMAT => 'Email address format  is invalid'
                        )
                    )
                )
            )
        ));

        $this->add(array(
           'name' => 'password',
            'options' => array(
                'label' => 'Password',
            ),
            'attributes' => array(
                'type' => 'password',
                'required' => 'required'
            ),
            'filters' => array(
                array('name' => 'StringTrim'),
            ),
        ));

        $this->add(array(
           'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'submit'
            ),
            'options' => array(
                'label' => ' ',
            ),
        ));
    }
}
?>