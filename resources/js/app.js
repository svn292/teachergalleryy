/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

window.Vue = require('vue').default;
import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue' 

Vue.use(plugin)
window.axios = require('axios');
const el = document.getElementById('app')
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import swal from 'sweetalert';

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin) 
import VueFilterDateFormat from '@vuejs-community/vue-filter-date-format';

Vue.use(VueFilterDateFormat);
Vue.component('pagination', require('laravel-vue-pagination'));
new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
    //    resolveComponent: name => require(`./Pages/${name}`).default,
    resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
    },
  }),
}).$mount(el)
