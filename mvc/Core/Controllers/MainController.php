<?php

namespace Core\Controllers;

use Core\View;
use Lib\Message;

class MainController extends Controller
{
  public function home(): void
  {
    $title = 'Main Page';  // for 01.09 DZ like this
    $content = 'Some text';

    View::render('home', compact('title', 'content'));
  }



public function loremIpsum(): void
{
    $title = 'Lorem Ipsum';
    $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

    View::render('loremIpsum', compact('title', 'content'));
}



  public function contacts(): void
  {
    View::render('contacts');
  }

  public function sendMail(): void
  {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(!$name || !$phone || !$message){
      Message::set('Invalid', 'danger');
      self::redirect('/contacts');
    }

    // отправляем письмо
    Message::set('Thank');
    self::redirect('/contacts');
  }
}
