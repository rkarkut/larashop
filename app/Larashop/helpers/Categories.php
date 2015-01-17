<?php

namespace Larashop\helpers;

use Categorize;

class Categories
{
    public static function getCategories()
    {
        $categories = Categorize::getCategoryProvider()->root()->whereType('Product')->get();
        return Categorize::tree($categories);
    }
}