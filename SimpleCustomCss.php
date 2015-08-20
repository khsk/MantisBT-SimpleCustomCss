<?php

class SimpleCustomCssPlugin extends MantisPlugin
{
    public function register()
    {
        $this->name = 'Simple Custom CSS';
        $this->description = 'add custom CSS';
        $this->page = '';
        $this->version = '1.0';
        $this->requires = array(
            'MantisCore' => '1.2.0',
        );

        $this->author = 'khsk';
        $this->contact = 'eatparalytic@gmail.com';
        $this->url = 'https://github.com/khsk/SimpleCustomCss';
    }

    public function hooks()
    {
        return array(
            'EVENT_LAYOUT_RESOURCES' => 'addCss',
        );
    }

    public function addCss()
    {
        echo '<link rel="stylesheet" type="text/css" href="', plugin_file( 'css/custom.css' ), '"/>';
    }
}