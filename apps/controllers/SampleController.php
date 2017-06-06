<?php

namespace KTRApp\Apps\Controllers;

use Phalcon\Mvc\Controller;

class SampleController extends Controller
{
    public function index()
    {
    }

    public function show($id)
    {
        $this->response->setContent($id);
        return $this->response;
    }

    public function create()
    {
        $this->response->setContent('post');
        return $this->response;
    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}