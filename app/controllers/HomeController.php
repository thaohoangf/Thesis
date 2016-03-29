<?php
use \Phalcon\Debug\Dump;
class HomeController extends \Phalcon\Mvc\Controller
{

    private function dump($var)
    {
        $dump = new Dump();
        return $dump->variables($var);
    }

    public function indexAction()
    {
//        $this->session->start();
//        if(isset($_SESSION['userName'])) {
            $information = $this->session->get('auth');
//            echo (new Dump())->variables($id);
            $user = Users::findFirstById($information['id']);
            $this->view->user = $user;
//        }
//        else($this->response->redirect(''));
    }

}

