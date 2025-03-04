import en from './assets/lang/en'
import zh from './assets/lang/zh'
import ar from './assets/lang/ar'
import Vue from 'vue'

import VueI18n from 'vue-i18n'
Vue.use(VueI18n)


export  default  new VueI18n(
    {
        locale:localStorage.getItem('lang') || 'en',
        messages:{
            en:en,
            zh:zh,
            ar:ar
        }

    }
)