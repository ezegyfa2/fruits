require('./bootstrap');

window.Vue = require('vue').default

require('fruits-website-vue-components').default.install(Vue);

const app = new Vue({
    el: '#app',
});
