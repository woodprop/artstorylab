<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\PortfolioProject;

class PortfolioController extends BaseController
{
    public function index() {
        $projects = PortfolioProject::all();
//        dump($project);
//        foreach ($project as $p) {
//            echo $p->title;
//        }
        return view('portfolio', ['projects' => $projects]);
    }
}
