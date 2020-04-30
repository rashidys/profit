<?php


//namespace public_html\classes;


class View
{
    protected $data = [];
    public function assign($name, $value)
    {
        $this->data[$name]=$value;

    }
    public function display($template)
    {
        return   __DIR__. '/../templates/'.$template;
    }
}
