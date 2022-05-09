<?php


namespace App\Helpers;
use App\CategoryProduct;

class Helper
{
    public static function getListCategory()
    {
    	return CategoryProduct::get();
    }
}