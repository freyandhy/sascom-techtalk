<?php

namespace Sascom\Controllers;

class PageController extends Controller
{
    public function index($req, $res) {
        return $this->view->render($res, 'index.twig');
    }
}