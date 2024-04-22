<?php

namespace Iplague\Project;

use Latte;

class Viewer
{
    private array $data = [];
    public function __construct(array $data=[]){
        $this->data = [...$data];
    }
    public function render(): void
    {
        $latte = new Latte\Engine;
       // extract($this->data);
        //ob_start();
       // include('../views/index.latte');
       // return ob_get_clean();
        $latte->setTempDirectory(__DIR__.'/../views/cache');
        //
        $params = $this->data;
        $latte->render(__DIR__.'/../views/index.latte', $params);
    }
}