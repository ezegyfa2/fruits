<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Ezegyfa\LaravelHelperMethods\Language\LanguageMethods;
use Illuminate\Support\Facades\App;
use stdClass;

class HomeController extends Controller
{
    public function welcome() {
        return DynamicTemplateMethods::getTranslatedTemplateDynamicPage(
            'fruits_welcome', 
            'node_modules/fruits-vue-components/src/Welcome/CompiledTemplate.json',
            $this->getTemplateLayoutParams(), 
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
        return DynamicTemplateMethods::getTranslatedTemplateDynamicPage(
            'fruits_products', 
            'node_modules/fruits-vue-components/src/Products/CompiledTemplate.json',
            $this->getTemplateLayoutParams(), 
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

    protected function getTemplateLayoutParams() {
        $templateParams = DynamicTemplateMethods::getTemplateLayoutParams();
        $templateParams->products_url = __('routes.products');
        return $templateParams;
    }
}
