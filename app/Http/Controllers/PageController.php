<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // 1. Главная страница — было: Route::get('/', ...)
    public function home()
    {
        return '<h1>Главная страница</h1>';
    }

    // 2. Статическая страница «О нас» — было: Route::get('/about', ...)
    public function about()
    {
        return 'Страница о нашем проекте';
    }

    // 3. Маршрут с обязательным параметром — было: Route::get('/user/{id}', ...)
    public function show(string $id)
    {
        return 'Страница пользователя №' . $id;
    }

    // 4. Маршрут с необязательным параметром — было: Route::get('/hello/{name?}', ...)
    public function hello(string $name = 'гость')
    {
        return 'Привет, ' . $name . '!';
    }

    // 5. Маршрут с двумя параметрами — было: Route::get('/posts/{post}/comments/{comment}', ...)
    public function comment(string $post, string $comment)
    {
        return "Статья №{$post}, комментарий №{$comment}";
    }

    // 6. Просмотр статьи по ID — было: Route::get('/posts/{id}', ...)
    public function postShow(string $id)
    {
        return 'Просмотр статьи №' . $id;
    }
}
