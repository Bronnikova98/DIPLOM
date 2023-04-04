<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return 'Страница новостей';
    }

    public function show()
    {
        return 'Страница отдельной новости';
    }
}
