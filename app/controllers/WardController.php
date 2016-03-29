<?php

class WardController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
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

