<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $pages = [
        'Главная' => 'admin',
        'Все Записи' => 'adminPosts',
        'Добавить Запись' => 'add',
        'Регистрация' => 'registration',
        'Выход' => 'logout'
      ];
      foreach ($pages as $name => $route) {
        App\Admin::make([
          'name' => $name,
          'routeName' => $route
        ])->save();
      }

      App\User::make([
        'name'=>env('ADMIN_NAME'),
        'email'=>env('ADMIN_EMAIL'),
        'password'=>bcrypt(env('ADMIN_PASSWORD','secret'))
      ])->save();

      $pages = [
        'Главная' => 'home',
        'Все Записи' => 'posts',
        'О нас' => 'aboutUs',
        'Галлерея' => 'gallery',
        'Мероприятия' => 'actions',
        'Присоединиться' => 'join',
        'Обрантая связь' => 'feedback',
        'Пожертвовать' => 'donate',
      ];
      foreach ($pages as $name => $route) {
        App\Page::make([
          'name' => $name,
          'routeName' => $route
        ])->save();
      }



      App\home_page::make([
        'name' => 'Name main page',
        'head' => 'Head main page',
        'text' => 'some text here.some text here.some text here.some text here.some text here.some text here.some text here.some text here.some text here.',
        'img' => 'https://cdn.pixabay.com/photo/2017/02/19/15/28/italy-2080072_960_720.jpg',
      ])->save();
    }
}
