<?php
namespace Core\Models;

use Services\Db;



class Product extends Model
{
    public $id;
    public $name;
    public $price;
    public $category_id;

    public static function  getTable()
    {
        return 'product';
    }
}