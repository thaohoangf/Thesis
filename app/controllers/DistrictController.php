<?php

class DistrictController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if(isset($_GET['province'])) {
            $province_id = $_GET['province'];
            $province = Province::findFirst($province_id);
            $district = $province->district->toArray();
            $this->view->district = $district;
            $this->view->province = $province;
        }

        else{
            $province = Province::find()->toArray();
            $this->view->province = $province;
            $this->view->pick('district/chooseProvince');
        }
    }

    public function addAction()
    {
        if($this->request->isPost()){
            echo (new \Phalcon\Debug\Dump())->variable($this->request->getPost());
            $province_id = $_GET['province'];
            $info = ['name' => $_POST['name'], 'type' => $_POST['type'], 'provinceid' => $_POST['province_id']];
            $district = new District();

            $result = $district->create($info,['id','name','type','provinceid']);
            echo (new \Phalcon\Debug\Dump())->variables($result);
            if($result == false) {
                foreach($district->getMessages() as $message){
                    echo $message;
                }
            }
            $this->response->redirect('district?province='.$province_id);
        }
        $this->view->province = $_GET['province'];
    }

    public function editAction($district_id)
    {
        $district = District::findFirst($district_id);
        if($this->request->isPost()){
            $district->save($_POST,['name','type']);
            $this->response->redirect('district?province='.$_POST['province_id']);
        }
        $this->view->district = $district;
    }

    public function searchAction()
    {
        $value = $_GET['district'];
        $province_id = $_GET['province_id'];
        $info = District::find("name LIKE '%$value%' AND provinceid = '$province_id'")->toArray();

        echo (new \Phalcon\Debug\Dump())->variables($info);
        $this->view->district = $info;
//        $this->view->disable();
    }

    public function deleteAction($district_id)
    {
        $district = District::findFirst($district_id);
        $district->delete();
        $this->response->redirect('district?province='.$_GET['province']);
    }
}

