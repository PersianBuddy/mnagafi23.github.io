/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

//hoverable dropdown button
$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    $(this).addClass("open");
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    $(this).removeClass("open");
});

//change english numbers into persian 
// $(document).ready(function() {
//     $('#motherboard-componets').persiaNumber('ar');
// });