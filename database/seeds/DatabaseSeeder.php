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
      $this->call(Admin::class);
      $this->call(AdminPages::class);

      
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
