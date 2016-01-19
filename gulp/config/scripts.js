/**
 * Override the Default
 * Core Scripts
 * Config
 *
 */
var webpack = require('webpack');
module.exports = {
  options: {
    webpack: {
      defaults: {
        externals: {
          jquery: 'window.jQuery'
        }
      }
    }
  }
};
