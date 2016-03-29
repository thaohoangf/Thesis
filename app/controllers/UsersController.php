<?php

use \Phalcon\Debug\Dump;
class UsersController extends \Phalcon\Mvc\Controller
{

    private function dump($var)
    {
        $dump = new Dump();
        return $dump->variables($var);
    }

    private function _registerSession($user)
    {
        $this->session->set("userName", $user->name);
        $this->session->set("userId", $user->id);
    }

    public function indexAction()
    {
    }


    public function profileAction($id)
    {
        $user = Users::findFirstById($id);
        $ward = Ward::findFirstById($user->ward_code);
        $wardInfor = $ward->type .' '. $ward->name;
        $district = $ward->district->type .' '. $ward->district->name;
        $province = $ward->district->province->type .' '. $ward->district->province->name;

        $this->view->ward = $wardInfor;
        $this->view->district = $district;
        $this->view->province = $province;
        $this->view->infor = $user;
    }

    public function addAction()
    {
        $user = new Users();
        $arr = $this->request->getPost();
        $role_id = ['role_id' => 0];
        $arr = array_merge($arr,$role_id);
        $success = $user->save($arr,
            array(
                'id','name','password','fullname','date_of_birth','code','class','phone','email','role_id'
            )
        );

        if($success){
            $this->_registerSession($user);
            $this->response->redirect('home');
            $this->view->user = $user;
        }
        else {
            echo "Sorry, the following problems were generated: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

    }

    public function editAction($id)
    {
        if(isset($_POST['edit'])){
            $user = Users::findFirst($id);
            $information = $this->request->getPost();
            echo $this->dump($information);
            $user->save($information,array(
               'fullname','birthday','gender','province_code','district_code','ward_code','email','phone','major_code','identity_code','ethnic_code'
            ));
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
            $this->view->disable();
        }
        else{
            $user = Users::findFirstById($id);
            $wards = Ward::find() ;
            $provinces = Province::find();
            $districts = District::find();
            $ethnics = Ethnic::find();
            $majors = Major::find();

            $this->view->majors = $majors;
            $this->view->ethnics = $ethnics;
            $this->view->provinces = $provinces;
            $this->view->districts = $districts;
            $this->view->wards = $wards;
            $this->view->infor = $user;
        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        return $this->response->redirect('');
    }
}

