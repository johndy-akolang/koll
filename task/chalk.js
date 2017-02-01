'use strict';

var chalk = require('chalk');

var red = chalk.red;
var success = chalk.green;
var yellow = chalk.yellow;

module.exports.error = function(message) {
  console.log(red(message));
}

module.exports.info = function(message) {
  console.log(yellow(message));
}

module.exports.success = function(message) {
  console.log(red(message));
}
