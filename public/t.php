<!DOCTYPE  html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
    <body ng-app="app">
    
        <form ng-submit="submit()" ng-controller="ctrl">
        
            <input type="text"  name="firstname" ng-required ng-model="firstname"></input>
            <input type="text" name="lastname" ng-required ng-model="lastname"></input>
            <input type ="submit">

</form>

<script>
    var app=angular.module("app",[]);
    app.controller("ctrl",["$scope","$http",function($scope,$http){
        $scope.name="dkkdkd";
        $scope.submit=function(){
            $http({
                 method:"post",
                 data:$.param({firstname:$scope.firstname,lastname:$scope.lastname}),
                 url:"second.php",
        
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }

            }).then(function(data){
                $scope.data=data;
                console.log($scope.data);
            });
        }
    }]);
    </script>
        </body>

</html>