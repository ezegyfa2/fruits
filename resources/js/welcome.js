require('helper-vue-components/BasicVue')
require('fruits-vue-components/Welcome').default.install(window.Vue)

const app = new Vue({
    el: '#app',
})
