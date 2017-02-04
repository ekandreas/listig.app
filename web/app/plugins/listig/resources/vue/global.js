/**
 * Listig, vue global initiator
 */

window.Vue = require('vue');
window.axios = require('axios');

window.ListigEditList = require('./../../resources/vue/components/edit-list.vue');
window.ListigTopMenu = require('./../../resources/vue/components/top-menu.vue');
window.ListigMainPage = require('./../../resources/vue/pages/main-page.vue');

Vue.component('edit-list', window.ListigEditList);
Vue.component('main-page', window.ListigMainPage);
Vue.component('top-menu', window.ListigTopMenu);
