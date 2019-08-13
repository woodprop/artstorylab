<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\PortfolioProject;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends BaseController
{
    public function index() {
        $projects = PortfolioProject::all();
        return view('portfolio', ['projects' => $projects]);
    }

    public function project($template) {
        $project = PortfolioProject::where('template', $template)->first();
        return view("portfolio.{$project->template}");
    }

}
