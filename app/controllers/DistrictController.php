<?php

class DistrictController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $province_id = $_GET['province'];
        $province = Province::findFirst($province_id);
        $district = $province->district->toArray();
        $this->view->district = $district;
        $this->view->province = $province;
    }

    public function addAction()
    {
        if($this->request->isPost()){
            echo (new \Phalcon\Debug\Dump())->variable($this->request->getPost());
            echo (new \Phalcon\Debug\Dump())->variable($_GET);
            $this->view->disable();
        }
        $this->view->province = $_GET['province'];
    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }
}

