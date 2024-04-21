<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class ActivitesController extends Controller
{
    public function index()
    {
        return View::make('activites.presentation');
        
    }
}
