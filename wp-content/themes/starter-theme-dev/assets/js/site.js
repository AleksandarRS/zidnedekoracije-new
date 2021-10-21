'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const toggle = require('./site/toggle');
const slick = require('./site/slick');
const example = require('./site/example');

jQuery( function(){

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