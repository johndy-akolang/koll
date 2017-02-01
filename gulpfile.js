'use strict';

var gulp    = require('gulp');
var elixir  = require('laravel-elixir');

var chalk   = require('./task/chalk');
var config  = require('./task/config');

elixir(function(mix) {
  var cssApp = config.css.app;
  var cssVendor = config.css.vendor;
  var fontVendor = config.font;
  var jsApp = config.js.app;
  var jsVendor = config.js.vendor;

  if (config.env == "local") {
    mix
      .copy(jsVendor.files.dev, jsVendor.path)
      .copy(cssVendor.files.dev, cssVendor.path)
      .copy(fontVendor.files, fontVendor.path);
  } else if (config.env == "prod") {
    mix
      .scripts(jsVendor.files.prod, jsVendor.path + 'vendor.min.js')
      .scripts(jsApp.files, jsApp.path + 'app.min.js')
      .styles(cssVendor.files.prod, cssVendor.path + 'vendor.min.css')
      .styles(cssApp.files, cssApp.path + 'app.min.css')
      .copy(fontVendor.files, fontVendor.path);
  } else {
    chalk.error('Invalid environment.');
  }

});
