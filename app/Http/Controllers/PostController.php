<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function hello() {
        return "Привет, лучшая группа!";
    }

    public function hello2($name) {
        return "Привет, $name";
    }

    public function hello3($id) {
        $hi = [
            1 => "Добрый день!",
            2 => "Добрый вечер!",
            3 => "Доброй ночи!",
            4 => "Доброе утро!"
        ];
        return $hi[$id];
    }

    public function info($id) {
        $users = [
            1 => "Томск",
            2 => "Астана",
            3 => "Самара",
            4 => "Санкт-Петербург",
            5 => "Москва"
        ];
        return $users[$id];
    }

    public function hello5($name) {
        $users = [
            'Дмитрий' => 'Питер',
            'Алексей' => 'Асино',
            'Елизавета' => 'Москва'
        ];

        if ( isset($users[$name]) ) {
            return $users[$name];
        }
        else {
            return "Такого пользователя нет!";
        }
    }

    public function hello6() {
        return view('post.hello');
    }

    public function hello7($name) {
        return view('post.hello7', ['name' => $name, 'title' => 'Заголовок']);
    }
}
