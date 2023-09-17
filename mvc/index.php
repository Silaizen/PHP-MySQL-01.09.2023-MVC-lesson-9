<?php

use Lib\Route;

spl_autoload_register(function($class){
  $class = str_replace('\\', '/', $class);
  require_once "./$class.php";
});

session_start();


//Route::add('/lorem-ipsum', 'MainController@loremIpsum');


Route::start();