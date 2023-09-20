<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Ezegyfa\LaravelHelperMethods\Language\LanguageMethods;
use Illuminate\Support\Facades\App;
use stdClass;

class HomeController extends Controller
{
    public function welcome() {
        return DynamicTemplateMethods::getTemplateDynamicPage(
            'fruits_welcome', 
            $this->getTemplateParams(), 
            [
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
        return DynamicTemplateMethods::getTemplateDynamicPage(
            'fruits_products', 
            $this->getTemplateParams(), 
            [
                'products',
            ],
            [ 
                'fontawesome/css/fontawesome.min', 
                'fontawesome/css/brands.min',
                'fontawesome/css/solid.min' 
            ]
        );
    }

    protected function getTemplateParams() {
        $templateParams = new stdClass;
        $templateParams->current_language = strtoupper(App::currentLocale());
        $templateParams->languages = LanguageMethods::getTranslationUrlObjects();
        $templateParams->current_url = "";
        return $templateParams;
    }
}
