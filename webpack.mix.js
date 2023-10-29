const mix = require('laravel-mix')
const path = require('path')
const { size } = require('lodash')
require('laravel-mix-compress')
require('helper-vue-components/AssetCompiler.js')

global.currentWebpackConfig = {
    module: {
        rules: [
            {
                test: /\.pug$/,
                loader: 'pug-plain-loader'
            },
            {
                test: /\.scss$/,
                use: [
                    'sass-loader'
                ]
            }
        ]
    },
    output: {
        chunkFilename: 'js/[name].bundle.js',
        publicPath: '/',
    }
}

mix.webpackConfig(currentWebpackConfig)
//mix.js('resources/js/welcome.js', 'public/js').vue()
//mix.sass('resources/sass/welcome.scss', 'public/css/')
/*mix.copy(
    path.join('node_modules', 'dynamic-web-vue-components', 'src', 'Welcome', 'CompiledTemplate.json'), 
    path.join('app', 'Templates', 'Welcome.json')
)*/

//mix.js('resources/js/products.js', 'public/js').vue()
//mix.sass('resources/sass/products.scss', 'public/css/')
compileAssets(mix, 'fruits-vue-components', [ 'Products' ])
//compileAssets(mix, 'fruits-vue-components', [ 'Welcome' ])
//replaceComponentRegistrations('./node_modules/helper-vue-components/src')

//headerBackgroundImageGenerator.generate()
//articleImageGenerator.generate()
//latestWorkImageGenerator.generate()
//replaceImageCache('app/Http/ImageCache.php')
