<?php

class ProvinceController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $province = Province::find()->toArray();
        $this->view->province = $province;
    }

    public function addAction()
    {
       if(isset($_POST['add'])){
           $province = new Province();
           $infor = ['name' => $_POST['name'], 'type' => $_POST['type']];
           $result = $province->create($infor,['id','name','type']);
           if($result == false) {
               foreach($province->getMessages() as $message){
                   echo $message;
               }
           }
           $this->response->redirect('province');
       }
    }

    public function editAction($id)
    {
        $province = Province::findFirst($id);
        $this->view->province = $province;
        if(isset($_POST['edit'])){
            $info = ['name' => $_POST['name'], 'type' => $_POST['type']];
            $province->update($info,['name','type']);
            $this->response->redirect('province');
        }
    }

    public function deleteAction($id)
    {
        $province = Province::findFirst($id);
        $province->delete();
        $this->response->redirect('province');
    }

    public function searchAction()
    {
        $name = $_GET['province'];
        $result = Province::find("name LIKE '%$name%' ")->toArray();
        $this->view->province = $result;
    }
}

