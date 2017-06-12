<?php

namespace KTRApp\Apps\Controllers;

use KTRLib\AbstractController;

class NotfoundController extends AbstractController
{
    public function index()
    {
        $this->response->setStatusCode('404')->sendHeaders();

        return ['message' => ($this->request->getQuery())['_url'] . ' is not found.'];

    }
}