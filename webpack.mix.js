const mix = require('laravel-mix')
const path = require('path')
const fs = require('fs')
const { size } = require('lodash')
require('laravel-mix-compress')
require('helper-vue-components/AssetCompiler.js')

const version = '1.1'

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
        chunkFilename: 'js/' + version + '/[name].bundle.js',
        publicPath: '/',
    }
}

mix.webpackConfig(currentWebpackConfig)

if (!fs.existsSync('public/js/' + version)) {
    fs.mkdirSync('public/js/' + version)
}
mix.js('resources/js/basicPackages.js', 'public/js/' + version).vue()
mix.js('resources/js/welcome.js', 'public/js/' + version).vue()
mix.js('resources/js/products.js', 'public/js/' + version).vue()
if (!fs.existsSync('public/css/' + version)) {
    fs.mkdirSync('public/css/' + version)
}
mix.sass('resources/sass/welcome.scss', 'public/css/' + version)
mix.sass('resources/sass/products.scss', 'public/css/' + version)
/*mix.copy(
    path.join('node_modules', 'fruits-vue-components', 'src', 'Welcome', 'CompiledTemplate.json'), 
    path.join('app', 'Templates', 'Welcome.json')
)
mix.copy(
    path.join('node_modules', 'fruits-vue-components', 'src', 'Products', 'CompiledTemplate.json'), 
    path.join('app', 'Templates', 'Products.json')
)*/

//compileAssets(mix, 'fruits-vue-components', [ 'Products' ], version)
//compileAssets(mix, 'fruits-vue-components', [ 'Welcome' ], version)
//replaceComponentRegistrations('./node_modules/helper-vue-components/src')

//headerBackgroundImageGenerator.generate()
//articleImageGenerator.generate()
//latestWorkImageGenerator.generate()
//replaceImageCache('app/Http/ImageCache.php')
