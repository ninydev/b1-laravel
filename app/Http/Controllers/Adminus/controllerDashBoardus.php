<?php

namespace App\Http\Controllers\Adminus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;


class controllerDashBoardus extends Controller
{
    /**
     * Главная страница админки
     * @return [type] [description]
     */
    public function index()
    {
        $dataSet  = array('Title' => 'Работа с базой данных');
        $dataSet['users'] = DB::select ('select * from users ');

        return view('adminus.index', $dataSet);
    }


    /**
     * Страница статистки блога
     * @return [type] [description]
     */
    public function statisticus()
    {
        return view('adminus.statisticus');
    }

}
