
let app = angular.module('app',['ngRoute']);
    app.controller("Ctrl",function($scope,$http,$routeParams,$interval){
      $interval(getter,1000);
      function getter(){
            $http.get('https://theparkingspace.000webhostapp.com/retrieve.php')
                .success(function(response){
                $scope.details = response;
            });
          }
          });
