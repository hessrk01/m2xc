
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

/**
 * Particles
 */

particlesJS.load('particles-js', 'js/particles.json', function() {
    console.log('particles.js loaded - callback');
  });

/**
 * Typed
 */

try {
    window.Typed = require('typed.js');
    var typed = new Typed('.element', {
        strings: ['<font color="black">Business.</font>', '<font color="black">Goals.</font>', '<font color="black">Potential.</font>', '<font color="black">Ideas.</font>'],
        typeSpeed: 90,
        startDelay: 500, 
        smartBackspace: false,
        shuffle: true,
        backDelay: 2500,
        showCursor: true,
        cursorChar: "<--",
        loop: true
      });

}catch (e){};

