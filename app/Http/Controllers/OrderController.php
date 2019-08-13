<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\PortfolioProject;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller {
    public static function sendEmail(Request $request) {
        $data = $request->all();
        $str = implode('    ', $data);



        Mail::raw($str, function ($message) {
            $message->to('woodprop@yandex.ru')->subject('ARTSTORYLAB | Новый заказ');
        });
    }
}
