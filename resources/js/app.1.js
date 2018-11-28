// 
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


    var skills = new Typed('.element', {
      stringsElement: '#skills',
      shuffle: true,
      typeSpeed: 100,
      // backSpeed: 0,
      backDelay: 4000,
      smartBackspace: false,
      onStringTyped: function(){
        self.stop();
        goals.start();
      },
 
      loop: true,
    });
    
    var goals = new Typed('.element2', {
      stringsElement: '#goals',
      shuffle: true,
      typeSpeed: 100,
      // backSpeed: 80,
      backDelay: 3000,
      smartBackspace: false,
      startDelay: 1000,
      // fadeOut: true,
      
      onStringTyped: function(){
        self.stop();
        skills.start();
      },
    

      loop: true,
    });
    goals.stop();
    
    // displayInterval = setInterval(function() {
    //   skills.reset();
    //   goals.reset();
    //   goals.stop();
    // },5000)

   




    // function1();
      // var typed = new Typed('.element', {
      //   stringsElement: '#skills',
      //   loop: true,
      //   typeSpeed: 100,
      //   backSpeed: 100,
      //   shuffle: true,
      //   // fadeOut: true,
      //   showCursor: true,
      //   onStringTyped: function(){
      //      new Typed('.element1', {
      //       stringsElement: '#goals',
      //         typeSpeed: 90, // typing speed
      //         backDelay: 750, // pause before backspacing
      //         loop: false,
      //         startDelay: 500,
      //         shuffle: true,
      //          // loop on or off (true or false)
      //         // loopCount: false, // number of loops, false = infinite
      //         // callback: function(){ } // call function after typing is done
      //         // callback: function1(),
      //     });
      //   },
      // });

    // setTimeout(function() {
    //   var typed2 = new Typed('.element2', {
    //     stringsElement: '#goals',
    //     loop: true,
    //     typeSpeed: 100,
    //     backSpeed: 100,
    //     startDelay: 500,
    //     fadeOut: true,
    //     showCursor: false,
       
    //   });
    // },2000);

    // function1();
  //   setTimeout(function(){
  //     var typed = new Typed('.element', {
  //       stringsElement: '#skills',
  //       backDelay: 750,
  //       typeSpeed: 90,
  //       loop: true,
  //       shuffle: true,
  //       callback: function() {}
  //     });
  //   },0);

  //   setTimeout(function(){
  //     // $(".element1").css("display", "inherit");
  //     // $(".element1").typed({
  //       var typed2 = new Typed('.element1', {
  //       stringsElement: '#goals',
  //         typeSpeed: 90, // typing speed
  //         backDelay: 750, // pause before backspacing
  //         loop: true, // loop on or off (true or false)
  //         // loopCount: false, // number of loops, false = infinite
  //         callback: function(){ } // call function after typing is done
  //     });
  // }, 3000);


    // window.Typed = require('typed.js');
    // var typed = new Typed('.element', {
    //     stringsElement: '#typed-strings',
    //     typeSpeed: 90,
    //     startDelay: 500, 
    //     smartBackspace: false,
    //     shuffle: true,
    //     backDelay: 2500,
    //     showCursor: true,
    //     cursorChar: "<",
    //     loop: true
    //   });

}catch (e){};

// function function1() 
// {
//   var typed = new Typed('.element', {
//     stringsElement: '#skills',
//     backDelay: 750,
//     typeSpeed: 90,
//     loop: false,
//     shuffle: true,
//   });
  
  
// }

// function function2()
// {
//   // alert('function2');
//   var typed2 = new Typed('.element2', {
//     stringsElement: '#goals',
//       typeSpeed: 90, // typing speed
//       backDelay: 750, // pause before backspacing
//       loop: false,
//       startDelay: 500,
//       shuffle: true,
//        // loop on or off (true or false)
//       // loopCount: false, // number of loops, false = infinite
//       // callback: function(){ } // call function after typing is done
//       // callback: function1(),
//   });
// }