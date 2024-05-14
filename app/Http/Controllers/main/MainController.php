<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
	protected $layoutFolder = "pages.main";
    public function index(){
        return view("{$this->layoutFolder}.home");
    }
}