'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const equalheight = require('./site/equalheight');
const accordion = require('./site/accordion');
const toggle = require('./site/toggle');
const tabs = require('./site/tabs');
const slick = require('./site/slick');
const smoothscroll = require('./site/smoothscroll');
const featherlight = require('./site/featherlight');
const backtotop = require('./site/backtotop');
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
   * Initialize tabs module
   */
    tabs.init();

  /**
   * Initialize slick module
   */
   slick.init();

   /**
   * Initialize accordion module
   */
    accordion.init();
  
  /**
   * Initialize toggle module
   */
   toggle.init();

  /**
   * Initialize smoothscroll module
   */
   smoothscroll.init();
   
  /**
   * Initialize featherlight module
   */
   featherlight.init();

  /**
  * Initialize backtotop module
  */
   backtotop.init();

  /**
   * Initialize sample module
   */
  example.init();

});