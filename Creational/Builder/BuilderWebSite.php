<?php

require_once 'Builder.php';
require_once 'IBuilderWebsite.php';

class BuilderWebSite extends Builder implements IBuilderWebSite
{

    public function __construct()
    {
        $this->product = new ProductWebSite();
    }

    public function createTitle():void
    {
        $this->product->parts["title"]= "<title>WebSite</title>";
    }

    public function createHead():void
    {
        $this->product->parts["head"] = "<meta charset=\"UTF-8\"> <meta name=\"viewport\"content=\"width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\"> <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">";
    }

    public function createBody():void
    {
        $this->product->parts["body"] = "<body><h1>WebSite</h1></body>";
    }


    public function getProduct():ProductWebSite
    {
        return $this->product;
    }

}