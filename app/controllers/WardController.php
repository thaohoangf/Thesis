<?php

class WardController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if($this->request->isPost()){
            $ward = Ward::find('districtid = '.$_POST['district'])->toArray();
            $this->view->ward = $ward;
//            echo (new \Phalcon\Debug\Dump())->variables($ward);
//            $this->view->disable();
        }
            $province = Province::find();
            $district = District::find();
            $this->view->province = $province;
            $this->view->district = $district;
    }

    public function addAction()
    {

    }

    public function editAction()
    {

    }

    public function deleteAction($ward_id)
    {
        $ward = Ward::findFirst($ward_id);
        $ward->delete();
        $this->response->redirect('');
    }
}

