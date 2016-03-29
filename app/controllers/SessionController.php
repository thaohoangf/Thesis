<?php

class SessionController extends \Phalcon\Mvc\Controller
{
    private function _registerSession($user)
    {
        $this->session->set(
            'auth',
            array(
                'id' => $user->id,
                'name' => $user->name,
            )
        );
    }
    
    public function indexAction(){}

    public function startAction()
    {
        if($this->request->isPost()){
            $username = $this->request->getPost('name');
            $password = $this->request->getPost('password');

            $user = Users::findFirst(
                array(
                    "name = :username: AND password = :password:",
                    "bind" => array(
                        'username' => $username,
                        'password' => $password
                    )
                )
            );

            if($user != false){
                $this->_registerSession($user);
                return $this->response->redirect('home');
            }

            $this->flash->error('Wrong email/password');
        }

        return $this->dispatcher->forward(
            array(
                'controller' => 'session',
                'action' => 'index'
            )
        );
    }

    public function signupAction()
    {
        if($this->request->isPost()){
            $user = new Users();

        }
    }
}

