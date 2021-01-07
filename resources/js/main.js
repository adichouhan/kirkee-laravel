// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Home from './Home'
import router from './router'
import BootstrapVue from 'bootstrap-vue'
import i18n from './i18n'


const lang = localStorage.getItem('lang') || 'en'

Vue.config.productionTip = false
/* eslint-disable no-new */
new Vue({
  i18n,
  el: '#app',
  router,
  components: {
    Home
  },
  template: '<Home/>'
})
