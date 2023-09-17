<?php
$routes = [
  '/'         => ['MainController', 'home'],
  'contacts'  => ['MainController', 'contacts'],
   
  'loremIpsum' => ['MainController', 'loremIpsum'], // Добавлен маршрут для страницы "Lorem Ipsum"

  'send-mail' => ['MainController', 'sendMail'],
  'categories'=> ['CategoryController', 'index'],
  'categories/create' => ['CategoryController', 'create'],
  'categories/save' => ['CategoryController', 'save'],
  'categories/edit/(\d+)' => ['CategoryController', 'edit'],
  'categories/update/(\d+)' => ['CategoryController', 'update'],

];