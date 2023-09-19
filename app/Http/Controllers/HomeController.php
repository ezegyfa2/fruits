<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use stdClass;

class HomeController extends Controller
{
    public function home() {
        $templateParams = new stdClass;
        $templateParams->language = "HU";
        $templateParams->current_url = "/home";
        return DynamicTemplateMethods::getTemplateDynamicPage(
            'fruits_welcome', 
            $templateParams, 
            [
                'layout',
                'welcome',
            ]
        );
    }

    public function products() {
        $templateParams = new stdClass;
        $templateParams->language = "HU";
        $templateParams->current_url = "/products";
        return DynamicTemplateMethods::getTemplateDynamicPage(
            'fruits_products', 
            $templateParams, 
            [
                'layout',
                'products',
            ]
        );
    }
}
