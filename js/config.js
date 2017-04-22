
(function(){
    
    angular.module('app',['ngRoute'])
    
    .controller("Ctrl",function($scope,$http,$routeParams){

            $http.get('retrieve.php')
                .success(function(response){
                $scope.details = response;
                    console.log(response); 
                
            });

    })
   
    
})();