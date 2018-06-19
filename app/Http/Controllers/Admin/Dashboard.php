<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{

    /**
     * Главная страница админки
     * @return Возвращает вьюшку главной страницы админки
     */
    public function pageWelcome()
    {
        return  view('admin.welcome');
    }

}
