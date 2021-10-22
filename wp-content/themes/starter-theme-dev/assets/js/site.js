'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const equalheight = require('./site/equalheight');
const toggle = require('./site/toggle');
const slick = require('./site/slick');
const example = require('./site/example');

jQuery( function(){

   /**
   * Initialize equalheight module
   */
    equalheight.init();

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize slick module
   */
   slick.init();
  
  /**
   * Initialize toggle module
   */
   toggle.init();

  

  /**
   * Initialize sample module
   */
  example.init();

});