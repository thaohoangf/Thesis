<?php
use Phalcon\Debug\Dump;

class FormsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $form = Forms::find()->toArray();
            echo (new \Phalcon\Debug\Dump())->variables($form);
        $this->view->form = $form;
    }


    public function detailAction($id)
    {
        $user_id = 1;
        $form_id = $id;
        $user_infor = Users::findFirst($user_id);
        $user_form = UserForm::findFirst(
            "user_id = '" .$user_id. "' AND form_id ='".$form_id."'"
        );

        $form_infor = explode(',',$user_form->other);
        $final_infor = array();
        foreach($form_infor as $infor){
            echo (new Dump())->variables($infor);
            $temp = explode('/',$infor);
            $final_infor[$temp[0]] = $temp[1];
        }
        echo (new Dump())->variables($final_infor);
        $this->view->form_infor = $final_infor;
        $this->view->infor = $user_infor;
        $this->view->pick("forms/detail/$id"."form");
    }

    public function completeAction()
    {
        $user_id = 1;
        $form_id = $_POST['id'];
        $user_infor = Users::findFirst($user_id);
        array_shift($_POST);
        array_pop($_POST);
        echo (new Dump())->variables($_POST);
        $form_infor = array();

        foreach($_POST as $key => $value){
            $temp = $key.'/'.$value;
          array_push($form_infor,$temp);
        }
        $form_final = implode(',',$form_infor);


        $user_form = UserForm::findFirst(
            "user_id = '" .$user_id. "' AND form_id ='".$form_id."'"
        );

        if($user_form == false){
            $form_user = new UserForm();
            $form_user->save(array(
               'user_id' => $user_id,
                'form_id' => $form_id,
                'other' => $form_final
            ));
        }
        else{
            $user_form->save(array(
                'other' => $form_final
            ));
        }

        $this->view->form_infor = $_POST;
        $this->view->infor = $user_infor;
        $this->view->pick("forms/detail/$form_id");
    }
    
    public function addFormAction()
    {
    }
}

