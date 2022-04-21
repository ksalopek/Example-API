var app = angular.module('myApi', []);
app.controller('apiController', function($scope) {
$scope.results = [];

//initializtion to populate datatable
$scope.init = function (){
    var url = "ranchorelaxoallennas.synology.me";

    $.ajax({url: url,
        data: 'page_action' : 'getAll',
        success: function(response) {
            $scope.results = response.data.data;
        }});
}

//save new record
    $scope.create = function(){
        $.ajax({url: url,
            data: 'page_action' : 'create',
            success: function(response) {

        }});
//update the current row
    $scope.update = function(){
        $.ajax({url: url,
            data: 'page_action' : 'update',
            success: function(response) {

        }});
}

//delete the current row
        $scope.delete = function(){
            $.ajax({url: url,
                data: 'page_action' : 'delete',
                success: function(response) {

            }});
        }
});