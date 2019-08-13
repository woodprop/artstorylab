<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller {
    public static function sendEmail(Request $request) {
        $data = $request->all();

        if (isset($data['short_form'])) {
            $str = "Заказ через мини-форму: {$data['email']}";
        }
        else {
            $userInterests = str_replace('undefined', ' ', $data['user_interests']);
            $userBudget = "от {$data['user_money_min']} до {$data['user_money_max']}т.р.";

            $str = "Информация о заказе:
                Имя: {$data['user_name']}\n
                Email: {$data['user_email']}\n
                Телефон: {$data['user_tel']}\n
                Тип заказа: {$userInterests}\n
                Бюджет: {$userBudget}\n
                Желаемый срок: {$data['user_date']}\n
                Откуда узнали: {$data['user_about']}\n
                ";
        }

        if ($str) {
            Mail::raw($str, function ($message) {
                $message->to('woodprop@yandex.ru')->subject('ARTSTORYLAB | Новый заказ');
            });
        }
    }
}
