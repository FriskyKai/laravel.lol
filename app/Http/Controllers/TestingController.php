<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index() {
        return view('testing.index', [
            'name' => 'Артём',
            'fontSize' => 32,
            'arr' => [
                'Василий', 'Дмитрий', 'Никита', 'Кирилл', 'Денис', 'Алик'
            ],
            'isAuth' => false,
            'students' => [
                [
                    'surname' => 'Евсеев',
                    'name' => 'Дмитрий'
                ],
                [
                    'surname' => 'Ладяев',
                    'name' => 'Никита'
                ],
                [
                    'surname' => 'Шейкина',
                    'name' => 'Елизавета'
                ]
            ],
            'empty' => [],
            'users' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'banned' => true,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'banned' => false,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'banned' => true,
                ],
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'banned' => false,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'banned' => false,
                ],
            ],
            'mas' => [
                'Один', 'Два', 'Три'
            ],
        ]);
    }
}
