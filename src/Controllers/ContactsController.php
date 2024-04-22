<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class ContactsController
{
    public function index(): void
    {
        $page = 'contacts';
        $title = 'Contacts page';
        $content = 'Hello! it`s Page';
        $info ='djjghfgsk';
        $view = new сViewer([
            'page'=> $page,
            'title' => $title,
            'content' => $content,
            'info' => $info
        ]);

        $view->render();
    }
}
