<?php

namespace KTRApp\Apps\Controllers;

use KTRLib\AbstractController;

class SampleController extends AbstractController
{
    public function index()
    {
    }

    public function show()
    {
        $param = $this->getParams();
        return ['return' => $param];
    }

    public function create()
    {
        $param = $this->getParams();
        return ['return' => $param];
    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}