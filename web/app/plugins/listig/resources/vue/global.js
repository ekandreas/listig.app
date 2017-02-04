/**
 * Listig, vue global initiator
 */

window.Vue = require('vue');
window.axios = require('axios');

window.ListigPostPreview = require('./../../resources/vue/components/post-preview.vue');
window.ListigPostEdit = require('./../../resources/vue/components/post-edit.vue');
window.ListigPostSearch = require('./../../resources/vue/components/post-search.vue');
window.ListigListings = require('./../../resources/vue/components/listings.vue');

window.ListigEditList = require('./../../resources/vue/components/edit-list.vue');
window.ListigTopMenu = require('./../../resources/vue/components/top-menu.vue');
window.ListigMainPage = require('./../../resources/vue/pages/main-page.vue');

Vue.component('listings', window.ListigListings);
Vue.component('post-search', window.ListigPostSearch);
Vue.component('post-edit', window.ListigPostEdit);
Vue.component('post-preview', window.ListigPostPreview);
Vue.component('edit-list', window.ListigEditList);
Vue.component('main-page', window.ListigMainPage);
Vue.component('top-menu', window.ListigTopMenu);
