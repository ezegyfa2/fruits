<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function welcome() {
        return DynamicTemplateMethods::getTranslatedTemplateDynamicPage(
            'fruits_welcome',
            'Welcome',
            DynamicTemplateMethods::getTemplateLayoutParams(), 
            [
                'welcome',
            ],
            [ 
                'welcome',
            ]
        );
    }

    public function products() {
        return DynamicTemplateMethods::getTranslatedTemplateDynamicPage(
            'fruits_products',
            'Products', 
            DynamicTemplateMethods::getTemplateLayoutParams(), 
            [
                'products',
            ],
            [ 
                'products'
            ]
        );
    }
}
