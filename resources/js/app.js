window.Vue = require('vue')

window.Vue.config.productionTip = false
window.Vue.config.devtools = true

import App from './App.vue'
import router from './router'
import store from './store'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)
Vue.axios.defaults.baseURL = 'http://localhost:8888/api'

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
