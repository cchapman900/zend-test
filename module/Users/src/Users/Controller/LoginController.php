<?php
namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Users\Form\LoginForm;

class LoginController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new LoginForm();
        $viewModel = new ViewModel(array('form' => $form));
        return $viewModel;
    }
    public function confirmAction()
    {
        $viewModel = new ViewModel();
        return $viewModel;
    }
}