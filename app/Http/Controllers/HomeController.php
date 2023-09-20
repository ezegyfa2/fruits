<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Illuminate\Support\Facades\App;
use stdClass;

class HomeController extends Controller
{
    public function welcome() {
        $templateParams = new stdClass;
        $templateParams->current_language = strtoupper(App::currentLocale());
        $templateParams->current_url = "";
        return DynamicTemplateMethods::getTemplateDynamicPage(
            'fruits_welcome', 
            $templateParams, 
            [
                'layout',
                'welcome',
            ],
            [ 
                'fontawesome/css/fontawesome.min', 
                'fontawesome/css/brands.min',
                'fontawesome/css/solid.min' 
            ]
        );
    }

    public function products() {
        $templateParams = new stdClass;
        $templateParams->current_language = strtoupper(App::currentLocale());
        $templateParams->current_url = "/products";
        return DynamicTemplateMethods::getTemplateDynamicPage(
            'fruits_products', 
            $templateParams, 
            [
                'layout',
                'products',
            ],
            [ 
                'fontawesome/css/fontawesome.min', 
                'fontawesome/css/brands.min',
                'fontawesome/css/solid.min' 
            ]
        );
    }
}
    }
}
