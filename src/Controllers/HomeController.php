<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class HomeController
{
    public function index(): void
    {
        $page = 'home';
        $title = 'Home Page';
        $content = 'Home Page';
        $data = ['Lera', 'Sofiia','Oleksiy', 'Diana','Oleg'];

        $view = new Viewer([
            'page'=> $page,
            'title' => $title,
            'content' => $content,
            'data' => $data
        ]);

        echo $view->render();

    }
}
