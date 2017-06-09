<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        echo "index";
        $this->base();
        $this->comm();

        return view('index');
    }
}
