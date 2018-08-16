<?php

use Illuminate\Database\Seeder;

class AdminPages extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
