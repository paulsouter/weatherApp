
 "use strict";
 
 



var module = angular.module('weatherApp', ['ngResource', 'ngStorage'], function($interpolateProvider) {
    // $interpolateProvider.startSymbol('<%');
    // $interpolateProvider.endSymbol('%>');
});


module.factory('weatherApp', function ($resource) {
    return $resource('/api/weatherData')
    });

module.controller('weatherAppController', function (weatherApp) {
    alert("can't have a negative quantity, currently qunatity is ");
});

    






